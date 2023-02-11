<?php

class ApiModel extends Model
{


  private $key = null;
  private $client = [];

  // public function getOrder($order_id = null)
  // {
  //   # code...

  //   $order = $this->get_row(
  //     "SELECT `orders`.`order_id`, `orders`.`link`, `orders`.`quantity`,
  //     `services`.`service`, 
  //     `orders`.`start_count`, `orders`.`remains`, `orders`.`charge`,
  //      `api_services`.`currency`, 
  //     `orders`.`status`
  //     FROM `orders` 
  //     INNER JOIN `services` ON `services`.`id` = `orders`.`service_id`
  //     INNER JOIN `api_services` ON `services`.`api` = `api_services`.`api_id`
  //     WHERE `orders`.`order_id` = '$order_id'
  //     ORDER BY `orders`.`order_id` LIMIT 1"
  //   );

  //   return $order ? $order : false;
  // }




  public  function index()
  {
    # code...

    $this->key = $_REQUEST['key'] ?? null;
    $this->client = $this->get_row("SELECT * FROM `clients` WHERE api_key = '$this->key'") ?: [];

    $this->key
      ?: die(json_encode(
        [
          "status" => false,
          'msg' => 'Sử dụng API không hợp lệ.',
        ]
      ));

    $this->client
      ?: die(json_encode(
        [
          "status" => false,
          'msg' => 'Api key không hợp lệ.',
        ]
      ));

    $action = $_REQUEST['action'] ?? null;


    switch ($action) {

      case 'add':
      case 'create':

        $service =  check_string($_REQUEST['service'] ?? '') ?: null;
        $service && is_integer(($service == (int) $service)
          ? (int)  $service
          : (float) $service)

          ?: die(json_encode(
            [
              "status" => false,
              "msg" => "ID dịch vụ không hợp lệ.",
            ]
          ));


        $link =  check_string($_REQUEST['link'] ?? '') ?: null;
        $link
          ?: die(json_encode(
            [
              "status" => false,
              "msg" => "Link không hợp lệ.",
            ]
          ));

        $quantity =  check_string($_REQUEST['quantity'] ?? '') ?: null;
        $quantity > 0 && is_integer(($quantity == (int) $quantity)
          ? (int)  $quantity
          : (float) $quantity)

          ?: die(json_encode(
            [
              "status" => false,
              "msg" => "Số lượng không hợp lệ.",
            ]
          ));


        $this->get_row(
          "SELECT * FROM `services` WHERE `services`.`id` = '" . $service . "' LIMIT 1"
        ) ?: die(json_encode(
          [
            "status" => false,
            "msg" => "Dịch vụ không tồn tại.",
          ]
        ));



        $this->create(
          $this->key,
          $service,
          $link,
          $quantity
        );

        break;


        // case 'cancel':

        //   if (!isset($_REQUEST['order']) || empty(check_string($_REQUEST['order']))) {
        //     die(json_encode(["Error" => "Invalid order ID."]));
        //   }

        //   $apiService = $this->getOrder($_REQUEST['order']);

        //   if (!$apiService) {
        //     die(json_encode(["Error" => "Invalid order ID."]));
        //   }


        //   switch ($apiService['api_type']) {
        //     case 'wiq':
        //       $data_cancel = [
        //         'key' => $apiService['api_key'],
        //         'action' => 'cancel',
        //         'order' => check_string($_REQUEST['order'])
        //       ];

        //       $response = curl_url($apiService['api_url'], $data_cancel);

        //       if ($response['cancel'] != 'ok') {
        //         die(json_encode(["Error" => "Invalid order ID."]));
        //       }
        //       die(json_encode(["order_id" => $_REQUEST['order'], 'cancel' => 'ok']));
        //       break;

        //     default:
        //       die(json_encode(["Error" => "No cancel order ID."]));
        //   }
        //   break;

      case 'status':
        $order =  check_string($_REQUEST['order'] ?? '')
          ?: null;
        $order ?: die(json_encode(
          [
            "status" => false,
            "msg" => "ID đơn hàng không hợp lệ.",
          ]
        ));

        $this->status($order);

        break;

      case 'services':

        die(json_encode(
          $this->get_list(
            "SELECT `services`.`id` as 'ID', `services`.`service`, `services`.`name`, `services`.`rate`,
              `services`.`min`, `services`.`max`, `services`.`refill`,
               `services`.`cancel`,`services`.`dripfeed`, `api_services`.`currency` 
               FROM `services` INNER JOIN `api_services` on `api_services`.`api_id` = `services`.`api`"
          ) ?? ['']
        ));

        break;

      case 'balance':

        die(json_encode(
          [
            "balance" => $this->client['balance'] * 1 ?? 0,
            "currency" => "VND"
          ]
        ));
        break;

      default:
        die(json_encode(
          [
            "status" => false,
            "message" => "Invalid action.",
          ]
        ));
    }
  }



  public function status($orders)
  {
    # code...

    $ids = explode(',', $orders);
    $response = [];
    $orders = $this->get_list(
      "SELECT  `orders`.`order_id` as ID,
        `orders`.`service_id` AS Service,
        `orders`.`charge`,
        `orders`.`link`,
        `orders`.`quantity`,
        `orders`.`start_count`,
        `orders`.`remains`,
        `orders`.`status`
        FROM `orders` 
        ORDER BY `orders`.`order_id` DESC"
    );
    foreach ($ids as $id) {
      foreach ($orders as $order) {
        if ($id == $order['ID']) {
          $response[$id] = $order;
        } else {
          $response[$id] = ["error" => "ID đơn hàng không tồn tại."];
        }
      }
    }

    echo json_encode($response);
  }



  public function create($key, $service, $link, $quantity)
  {
    # code...

    $apiService = $this->getServiceApi($service);
    $api_type = $apiService['api_type'];
    $rate = $apiService['rate'];
    $min = $apiService['min'];
    $max = $apiService['max'];
    $api_key =  $apiService['api_key'];
    $api_url =  $apiService['api_url'];
    $id_service = $apiService['id'];
    $client_id = $this->client['client_id'];

    $api_key &&  $api_url
      ?: die(json_encode(
        [
          'status' => false,
          'msg' => 'Hệ thống đang gặp sự cố.',
        ]
      ));

    $data_order = [
      'key' => $api_key,
      'action' => 'create',
      'service' => $apiService['service'],
      'link' => $link,
      'quantity' => $quantity,
    ];


    $charge = $rate  *  $quantity;

    $charge <= $this->client['balance'] * 1
      ?:
      die(json_encode(
        [
          'staus' => false,
          "msg" => 'Số dư không đủ.'
        ]
      ));


    if ($min >  $quantity || $quantity > $max) {
      die(json_encode(
        [
          'status' => false,
          "msg" => 'Số lượng nhỏ hoặc lớn hơn mặc định.'
        ]
      ));
    }


    switch ($api_type) {

      case 'wiq':
        $response = curl_url($api_url, $data_order);
        if (array_key_exists('order', $response)) {
          $this->createOder(
            $response['order'],
            $key,
            $client_id,
            $id_service,
            $link,
            $quantity,
            $charge
          );
        } else {
          die(json_encode(
            [
              'status' => false,
              'msg' => 'Hệ thống đang gặp sự cố.',
            ]
          ));
        }

        break;

      case 'ongtrum':
        $data_order['action'] = 'add';
        $response = curl_url($api_url, $data_order);
        if (
          array_key_exists('order', $response)
          || ($response['status'] ?? null) == 'success'
        ) {

          $this->createOder(
            $response['order'],
            $key,
            $client_id,
            $id_service,
            $link,
            $quantity,
            $charge
          );
        } else {
          die(json_encode(
            [
              'status' => false,
              'msg' => 'Hệ thống đang gặp sự cố.',
            ]
          ));
        }


        break;

      default:
        die(json_encode(
          [
            'status' => false,
            'msg' => 'Hệ thống đang gặp sự cố.',
          ]
        ));
    }
  }


  public function createOder($id, $key, $client_id, $service_id, $link, $quantity, $charge)
  {
    # code...
    $this->subBalance(
      'clients',
      'balance',
      $charge,
      "api_key = '" . $key . "'"
    );

    $order = $this->insert('orders', [
      'orderID' => $id,
      'client_id' => $client_id,
      'service_id' => $service_id,
      'link' => $link,
      'quantity' => $quantity,
      'charge' => $charge,
    ]);


    ($order) ?
      die(json_encode(
        [
          'status' => true,
          'msg' => 'Tạo đơn hàng thành công.',
        ]
      ))
      :
      die(json_encode(
        [
          'status' => false,
          'msg' => 'Hệ thống đang gặp sự cố.',
        ]
      ));
  }

  public  function getServiceApi($service)
  {
    # code...
    return $this->get_row(
      "SELECT `api_services`.`api_type`,`api_services`.`currency`, 
      `api_services`.`api_url`, `api_services`.`api_key`, `services`.`rate`,
      `services`.`min`,`services`.`max`, `services`.`id`, `services`.`service`
      FROM `services` 
      INNER JOIN `api_services` ON `api_services`.`api_id` = `services`.`api`
      WHERE `services`.`id` = '$service' LIMIT 1"
    );
  }
}

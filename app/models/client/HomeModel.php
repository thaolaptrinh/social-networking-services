<?php

use App\Core\Model;

class HomeModel extends Model
{

  public $data = [];

  function __construct()
  {
    # code...

    $this->data['user_data'] = ($_SESSION['user_data'] ?? null) ? $this->get_row(
      "SELECT 
        `clients`.`client_id` as 'user_id',
        `clients`.`email` as 'user_email',
        `clients`.`username` as 'user_username',
        `clients`.`balance` as 'user_balance',
        `clients`.`api_key` as 'user_api_key'
         FROM `clients` WHERE `clients`.`username` = '" . $_SESSION['user_data']['user_username'] . "' LIMIT 1
        "
    ) : '';

    if (isset($_SESSION['user_data']) && !$this->get_row(
      "SELECT 
        `clients`.`client_id` as 'user_id',
        `clients`.`email` as 'user_email',
        `clients`.`username` as 'user_username',
        `clients`.`balance` as 'user_balance',
        `clients`.`api_key` as 'user_api_key'
         FROM `clients` WHERE `clients`.`username` = '" . $_SESSION['user_data']['user_username'] . "' LIMIT 1
        "
    )) {
      unset($_SESSION['user_data']);
    }

    $this->data['payment_methods'] = $this->get_list("SELECT * FROM `payment_methods`
      WHERE `payment_methods`.`method_status` = 1
    ");


    $this->data['site'] = $this->get_row("SELECT * FROM `settings` LIMIT 1");




    if (isset($_SESSION['user_data']) && !empty($_SESSION['user_data'])) {
      $this->data['nav_user']  = [
        [
          'name' => 'Cài đặt',
          'icon' => 'fas fa-cogs',
          'path' => 'settings'
        ],

        [
          'name' => 'Nâng cấp tài khoản',
          'icon' => 'fas fa-percent',
          'path' => 'upgrade'
        ],
        [
          'name' => 'API',
          'icon' => 'fas fa-code',
          'path' => 'api_docs'
        ],
        [
          'name' => 'Đăng xuất',
          'icon' => 'fas fa-sign-out-alt',
          'path' => 'logout'
        ],
      ];
      $this->data['nav']  =
        [
          [
            'name' => 'Tạo đơn hàng',
            'icon' => 'fas fa-cart-plus',
            'path' => 'order'
          ],
          [
            'name' => 'Danh sách đơn hàng',
            'icon' => 'fas fa-list',
            'path' => 'orders'

          ],
          [
            'name' => 'Dịch vụ',
            'icon' => 'far fa-gem',
            'path' => 'services'
          ],

          [
            'name' => $this->data['user_data']['user_balance'] ?? null,
            'icon' => 'fas fa-database',
            'path' => 'balance'
          ],

        ];
    } else {
      $this->data['nav'] = [
        [
          'name' => 'Home',
          'icon' => 'fab fa-instagram',
          'path' => ''
        ],
        [
          'name' => 'Đăng nhập / Đăng ký',
          'icon' => 'fas fa-sign-in',
          'path' => 'login'

        ],
        [
          'name' => 'Dịch vụ',
          'icon' => 'far fa-gem',
          'path' => 'services'
        ],

        [
          'name' => 'Ưu đãi',
          'icon' => 'far fa-percent',
          'path' => 'upgrade'
        ],

      ];
      $this->data['nav_user'] = null;
    }
  }


  function index()
  {
    # code...

    $this->data = [
      'total_client' => $this->num_rows("SELECT * FROM `clients` "),
      'total_running_order' => $this->num_rows("SELECT * FROM `orders` WHERE `orders`.`status`
       IN ('Pending','In progress','Processing')
      "),
      'total_done_order' => $this->num_rows("SELECT * FROM `orders` WHERE `orders`.`status`
       IN ('Partial','Completed')
       "),

      'services' =>  $this->get_list(
        "SELECT `services`.`name`, `services`.`rate` FROM `services` 
        INNER JOIN `api_services`  ON `api_services`.`api_id` = `services`.`api`
        INNER JOIN `categories`  ON `categories`.`category_id` = `services`.`category`
        WHERE `services`.`status` = 'on' AND `api_services`.`api_status` = 'on' AND `categories`.`category_status` = 'on'  ORDER BY `services`.`id`
        "
      ),
      'total_service' => $this->num_rows(
        "SELECT `services`.`name`, `services`.`rate` FROM `services` 
        INNER JOIN `api_services`  ON `api_services`.`api_id` = `services`.`api`
        INNER JOIN `categories`  ON `categories`.`category_id` = `services`.`category`
        WHERE `services`.`status` = 'on' AND `api_services`.`api_status` = 'on' AND `categories`.`category_status` = 'on'  ORDER BY `services`.`id`
        "
      ),
    ];
  }

  function services()
  {
    # code...
    $categories = $this->get_list("SELECT * FROM `categories`  WHERE `categories`.`category_status` = 'on'");

    $this->data['services'] = [];

    foreach ($categories as $ca) {


      // $list =  $this->get_list(
      //   "SELECT `services`.`id`, `services`.`rate`,
      // `services`.`min`,`services`.`max`,`services`.`desc`
      //  FROM `services` 
      //   INNER JOIN `api_services`  ON `api_services`.`api_id` = `services`.`api`
      //   INNER JOIN `categories`  ON `categories`.`category_id` = `services`.`category`
      //   WHERE `services`.`status` = 'on' 
      //   AND `api_services`.`api_status` = 'on'
      //   AND `categories`.`category_status` = 'on'
      //   AND `services`.`category` = '" . $ca['category_id'] . "'
      // "
      // );

      // if ($list) {
      //   $this->data['services'][$ca['category_name']] = $list;
      // }

      $this->data['services'][$ca['category_name']] =
        $this->get_list(
          "SELECT `services`.`id`, `services`.`rate`,
        `services`.`min`,`services`.`max`,`services`.`desc`
         FROM `services` 
          INNER JOIN `api_services`  ON `api_services`.`api_id` = `services`.`api`
          INNER JOIN `categories`  ON `categories`.`category_id` = `services`.`category`
          WHERE `services`.`status` = 'on' 
          AND `api_services`.`api_status` = 'on'
          AND `categories`.`category_status` = 'on'
          AND `services`.`category` = '" . $ca['category_id'] . "'
        "
        );
    }
  }

  function upgrade($var = null)
  {
    # code...

  }

  function order()
  {
    # code...

    $this->data = [
      'categories' => $this->get_list("SELECT `categories`.`category_id` AS 'id',`categories`.`category_name` as 'name'
      FROM `categories`  WHERE `categories`.`category_status` = 'on'
     "),
    ];

    $this->create_invoice();
  }


  function createInvoiceCode()
  {
    $invoice = generate_string(2, 5);
    $row = $this->get_row("SELECT * FROM `payments` WHERE `payments`.`payment_status` = '$invoice'");
    if ($row) {
      $this->createInvoiceCode();
    } else {
      return $invoice;
    }
  }
  function create_invoice()
  {
    # code...
    if (isset($_POST['create_invoice']) && $_POST['create_invoice']) {

      $code_invoice = $this->createInvoiceCode();

      if ($this->get_row("SELECT * FROM `payment_methods` 
      WHERE `payment_methods`.`method_status` = 1 
      AND   `payment_methods`.`method_id` = '" . $_POST['type'] . "'
      ")) {

        $data_insert = [
          'client_id' => $_SESSION['user_data']['user_id'],
          'payment_code' => $code_invoice,
          'payment_method' => $_POST['type'],
          'payment_amount' => check_string($_POST['amount']),
        ];

        $create_invoice =  $this->insert('payments', $data_insert);

        if ($create_invoice) {

          header('location:' . BASE_URL('payment?action=invoice&code=') .  $code_invoice);
        }
      }
    }
  }

  function balance()
  {
    # code...

    $this->data = [
      'payments' => $this->get_list(
        "SELECT `payments`.`payment_amount`, `payment_methods`.`method_name`,
        DATE_FORMAT( `payments`.`payment_create`,'%d/%m/%Y %H:%i:%m') as 'payment_create'
          FROM `payments`
          INNER JOIN `payment_methods` ON `payment_methods`.`method_id` = `payments`.`payment_method`
           WHERE  `payments`.`client_id` = '" . $_SESSION['user_data']['user_id'] . "'
          AND `payments`.`payment_status` in ('Success')
          ORDER BY  `payments`.`payment_id` DESC
      "
      ),

      'total_payments' => $this->get_row(
        "SELECT SUM( `payments`.`payment_amount`) AS 'total'
          FROM `payments`
           WHERE  `payments`.`client_id` = '" . $_SESSION['user_data']['user_id'] . "'
            AND `payments`.`payment_status` in ('Success')
      "
      )['total'] ?? 0
    ];





    $this->create_invoice();
  }

  function balance_history()
  {
    # code...

    $this->data['payments'] = $this->get_list(
      "SELECT  
            `payments`.`payment_amount`,
            `payment_methods`.`method_name`,
            `payments`.`payment_status`,
             DATE_FORMAT( `payments`.`payment_create`,'%d-%m-%Y %H:%i:%s') as 'payment_create'
              FROM `payments`
              INNER JOIN `payment_methods` ON `payment_methods`.`method_id` = `payments`.`payment_method`
              WHERE   `payments`.`client_id` = '" . $_SESSION['user_data']['user_id'] . "'"
    );


    if (isset($_GET['method'])) {
      $this->data['payments'] = $this->get_list(
        "SELECT  
              `payments`.`payment_amount`,
              `payment_methods`.`method_name`,
              `payments`.`payment_status`,
               DATE_FORMAT( `payments`.`payment_create`,'%d-%m-%Y %H:%i:%s') as 'payment_create'
                FROM `payments`
                INNER JOIN `payment_methods` ON `payment_methods`.`method_id` = `payments`.`payment_method`
                WHERE  `payments`.`payment_method` = '" . $_GET['method'] . "'
                AND `payments`.`client_id` = '" . $_SESSION['user_data']['user_id'] . "'"

      );
    }

    if (isset($_GET['status'])) {

      $this->data['payments'] = $this->get_list(
        "SELECT  
              `payments`.`payment_amount`,
              `payment_methods`.`method_name`,
              `payments`.`payment_status`,
               DATE_FORMAT( `payments`.`payment_create`,'%d-%m-%Y %H:%i:%s') as 'payment_create'
                FROM `payments`
                INNER JOIN `payment_methods` ON `payment_methods`.`method_id` = `payments`.`payment_method`
                WHERE `payments`.`payment_status` = '" . $_GET['status'] . "'
                AND `payments`.`client_id` = '" . $_SESSION['user_data']['user_id'] . "'"
      );
    }
  }
}

<?php



class RequestsModel extends Model
{
  public $data = [];

  function createApiKey($data)
  {
    $api_key = md5($data . random_int(9999, 2324332));
    $row = $this->num_rows("SELECT * FROM clients WHERE api_key = '$api_key' ");
    if ($row) {
      $this->createApiKey($data);
    } else {
      return $api_key;
    }
  }

  public function index()
  {
    # code...
    switch (isset($_POST['action']) ? $_POST['action'] : false) {

      case 'register':

        $data_post = [
          'email' => isset($_POST['email'])
            && !empty(check_string($_POST['email']))
            ? $_POST['email']
            : '',
          'username' => isset($_POST['username'])
            && !empty(check_string($_POST['username']))
            ? $_POST['username']
            : '',
          'password' => isset($_POST['password'])
            && !empty(check_string($_POST['password']))
            ? $_POST['password']
            : '',
          're_password' => isset($_POST['re_password'])
            && !empty(check_string($_POST['re_password']))
            ?
            $_POST['re_password']
            : '',
          'g-recaptcha-response' => isset($_POST['g-recaptcha-response'])
            && !empty(check_string($_POST['g-recaptcha-response']))
            ?
            $_POST['g-recaptcha-response']
            : '',
        ];

        $data_post['email'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập email!'
        ]));


        $data_post['username'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập tài khoản!'
        ]));

        $data_post['password'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập mật khẩu!'
        ]));

        $data_post['re_password'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập lại mật khẩu!'
        ]));


        $data_post['g-recaptcha-response'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng xác thức CAPTCHA!'
        ]));


        check_email($data_post['email']) ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập email hợp lệ!'
        ]));


        !($this->get_row("SELECT * FROM `clients` WHERE email = '" . $data_post['email'] . "' LIMIT 1"))
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Tài khoản email đã tồn tại trên hệ thống!'
          ]));

        !($this->get_row("SELECT * FROM `clients` WHERE username = '" . $data_post['username'] . "' LIMIT 1"))
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Tài khoản đã tồn tại trên hệ thống!'
          ]));


        strlen($data_post['username']) >= 6 ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập tên tài khoản từ 6 ký tự!'
        ]));


        strlen($data_post['password']) >= 8 ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập mật khẩu từ 8 ký tự!'
        ]));


        $data_post['password'] == $data_post['re_password'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập mật khẩu trùng khớp!'
        ]));

        $data_post['password'] != $data_post['username'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Không nhập mật khẩu giống với tài khoản!'
        ]));

        $is_create = $this->insert('clients', [
          'email' => $data_post['email'],
          'username' => $data_post['username'],
          'password' => type_pass($data_post['password']),
          'api_key' => $this->createApiKey($data_post['email'])
        ]);

        $is_create ?
          die(json_encode([
            'status' => true,
            'msg' => 'Đăng ký tài khoản thành công!'
          ]))
          : die(json_encode([
            'status' => false,
            'msg' => 'Hệ thống đang bị lỗi!'
          ]));

        break;


      case 'login':

        $data_post = [
          'username' => isset($_POST['username']) && !empty(check_string($_POST['username'])) ? $_POST['username'] : '',
          'password' => isset($_POST['password']) && !empty(check_string($_POST['password'])) ? $_POST['password'] : '',
          'g-recaptcha-response' => isset($_POST['g-recaptcha-response'])
            && !empty(check_string($_POST['g-recaptcha-response']))
            ?
            $_POST['g-recaptcha-response']
            : '',
        ];

        $data_post['username'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập tài khoản!'
        ]));

        $data_post['password'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập mật khẩu!'
        ]));

        $data_post['g-recaptcha-response'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng xác thức CAPTCHA!'
        ]));


        ($this->get_row("SELECT * FROM `clients` WHERE username = '" . $data_post['username'] . "' LIMIT 1"))
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Tài khoản không tồn tại trên hệ thống!'
          ]));


        ($this->get_row(
          "SELECT * FROM `clients` WHERE username = '" . $data_post['username'] . "'
          AND password = '" . type_pass($data_post['password']) . "' LIMIT 1"
        ))
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Mật khẩu không đúng!'
          ]));



        $_SESSION['user_data'] = $this->get_row(
          "SELECT `clients`.`client_id` as 'user_id',
            `clients`.`email` as 'user_email',
            `clients`.`username` as 'user_username'
             FROM `clients` WHERE `clients`.`username` = '" . $data_post['username'] . "' LIMIT 1
            "
        );

        die(json_encode([
          'status' => true,
          'data' => json_encode($data_post),
          'msg' => 'Đăng nhập thành công!'
        ]));


        break;


      case 'restore':


        $data_post = [
          'email' => isset($_POST['email'])
            && !empty(check_string($_POST['email']))
            ? $_POST['email']
            : '',
          'g-recaptcha-response' => isset($_POST['g-recaptcha-response'])
            && !empty(check_string($_POST['g-recaptcha-response']))
            ?
            $_POST['g-recaptcha-response']
            : '',
        ];

        $data_post['email'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng nhập email!'
        ]));

        $data_post['g-recaptcha-response'] ?: die(json_encode([
          'status' => false,
          'msg' => 'Vui lòng xác thức CAPTCHA!'
        ]));


        ($this->get_row("SELECT * FROM `clients` WHERE email = '" . $data_post['email'] . "' LIMIT 1"))
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Tài khoản không tồn tại trên hệ thống!'
          ]));



        $new_password = generate_string();

        $is_send  =  $this->send_mail(
          $data_post['email'],
          'Khôi phục mật khẩu tài khoản',
          ' Mật khẩu tài khoản của bạn đã được đặt lại <br/>
          Mật khẩu tạm thời mới của bạn: <b>' . $new_password  . '</b><br/>
          <b>CHÚ Ý! Sau khi đăng nhập thành công, nhớ đổi mật khẩu mới</b>
        '
        );


        ($is_send)
          ? $this->update(
            "clients",
            ['password' => type_pass($new_password)],
            "email = '" . $data_post['email'] . "'"
          ) and die(json_encode([
            'status' => true,
            'msg' => 'Gửi yêu cầu thay đổi mật khẩu thành công <br/> Vui lòng kiểm tra hộp thư!'
          ]))
          :  die(json_encode([
            'status' => false,
            'msg' => 'Hệ thống đang gặp vấn đề!'
          ]));

        break;


      case 'generate-new-api':

        $new_api_key = $this->createApiKey($_SESSION['user_data']['user_username']);

        if ($new_api_key) {
          $this->update("clients", ['api_key' => $new_api_key], "username = '" . $_SESSION['user_data']['user_username'] . "'");

          die(json_encode([
            'data' => $new_api_key,
          ]));
        }
        break;

      case 'update-password':

        $data_post = [

          'current-password' => isset($_POST['current-password'])
            && !empty(check_string($_POST['current-password']))
            ? $_POST['current-password']
            : '',
          'new-password' => isset($_POST['new-password'])
            && !empty(check_string($_POST['new-password']))
            ? $_POST['new-password']
            : '',
          'repeat-new-password' => isset($_POST['repeat-new-password'])
            && !empty(check_string($_POST['repeat-new-password']))
            ?
            $_POST['repeat-new-password']
            : '',

        ];



        $data_post['current-password']
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Vui lòng nhập mật khẩu hiện tại!'
          ]));


        $data_post['new-password']
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Vui lòng nhập mật khẩu mới!'
          ]));

        $data_post['repeat-new-password']
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Vui lòng nhập lại mật khẩu mới!'
          ]));




        ($this->get_row("SELECT * FROM `clients`
          WHERE username = '" . $_SESSION['user_data']['user_username'] . "'
          AND password = '" . type_pass($data_post['current-password']) . "'
          LIMIT 1"))
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Mật khẩu hiện tại không đúng!'
          ]));



        strlen($data_post['new-password']) >= 8
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Vui lòng nhập mật khẩu mới từ 8 ký tự!'
          ]));


        $data_post['new-password'] ===  $data_post['repeat-new-password']
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Vui lòng nhập mật khẩu mới trùng khớp!'
          ]));

        $data_post['new-password'] !==  $data_post['current-password']
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Mật khẩu mới không được trùng với mật khẩu hiện tại!'
          ]));

        $data_post['new-password'] !==  $data_post['current-password']
          ?: die(json_encode([
            'status' => false,
            'msg' => 'Mật khẩu mới không được trùng với mật khẩu hiện tại!'
          ]));


        $is_update = $this->update(
          "clients",
          ['password' => type_pass($data_post['new-password'])],
          "username = '" . $_SESSION['user_data']['user_username'] . "'"
        );

        $is_update
          ? die(json_encode([
            'status' => true,
            'msg' => 'Thay đổi mật khẩu thành công!'
          ]))
          : die(json_encode([
            'status' => false,
            'msg' => 'Hệ thống đang bị lỗi!'
          ]));

        break;


      case 'new-order':

        // $data_post = [
        //   'service' => isset($_POST['service'])
        //     && !empty(check_string($_POST['service'])
        //       && is_int(intval($_POST['service'])))
        //     ? $_POST['service']
        //     : null,
        //   'link' => isset($_POST['link'])
        //     && !empty(check_string($_POST['link']))
        //     ? $_POST['link']
        //     : null,
        //   'quantity' => isset($_POST['quantity'])
        //     && !empty(check_string($_POST['quantity'])
        //       && is_int(intval($_POST['quantity'])))
        //     ? $_POST['quantity']
        //     : null,
        // ];


        $response = curl_url(
          BASE_URL('api'),
          [
            'key' => $this->getApiKey(),
            'action' => 'create',
            'service' => $_POST['service'] ?? null,
            'link' => $_POST['link'] ?? null,
            'quantity' => $_POST['quantity'] ?? null
          ]
        );


        die(json_encode($response ?? [
          'status' => false,
          'msg' => 'Hệ thống đang gặp sự cố.',
        ]));


        break;

      case 'get-services':

        $data_post = [
          'category-id' => isset($_POST['category-id'])
            && !empty(check_string($_POST['category-id']))
            ? $_POST['category-id']
            : '',
        ];

        $services =  $this->get_list(
          " SELECT `services`.`id`, `services`.`name`, `services`.`rate`, `categories`.`category_name`  as TYPE
              FROM `services`
              INNER JOIN `api_services` ON `api_services`.`api_id` = `services`.`api`
              INNER JOIN `categories` ON `categories`.`category_id` = `services`.`category`
              AND `api_services`.`api_status` = 'ON'
              WHERE `categories`.`category_status` = 'ON'
              AND `services`.`status` = 'ON' 
              AND `services`.`category` = '" . $data_post["category-id"] . "'
            "
        );


        $data = '';

        foreach ($services as $service) {
          extract($service);
          $icon = preg_match('/follower/', strtolower($TYPE)) ? '👤' : '💖';
          $data .= "<option value={$id}> ID:[{$id}] {$icon} Gói {$id} (Rate {$rate}đ)  </option>";
        }

        die(json_encode(["data" => $data]));

        break;

      case 'get-price':

        $data_post = [
          'service-id' => isset($_POST['service-id'])
            && !empty(check_string($_POST['service-id']))
            ? $_POST['service-id']
            : '',
          'quantity' => isset($_POST['quantity'])
            && !empty(check_string($_POST['quantity']))
            ? $_POST['quantity']
            : '',

        ];

        $service = $this->get_row(
          " SELECT `services`.`rate`  FROM `services` WHERE `services`.`id` = 
          '" . $data_post['service-id'] . "'
          "
        );
        die(json_encode(["data" => [
          'service' => $data_post['service-id'],
          'quantity' => $data_post['quantity'],
          'charge' => $data_post['quantity'] *  ($service['rate'] ?? 0)
        ]]));

        break;

      case 'select-service':
        $data_post = [
          'service-id' => isset($_POST['service-id'])
            && !empty(check_string($_POST['service-id']))
            ? $_POST['service-id']
            : '',
        ];

        $service =  $this->get_row(
          " SELECT `services`.`rate`, `services`.`min` ,
          `services`.`max`,`services`.`desc` 
           FROM `services` WHERE `services`.`id` = '" . $data_post['service-id'] . "' LIMIT 1
          "
        );

        die(json_encode(["data" => $service]));

        break;

      case 'get-user-balance':
        $key = $this->getApiKey();
        $balance = ($this->get_row(
          "SELECT `clients`.`balance` FROM `clients` WHERE  `clients`.`api_key` = '$key'"
        )['balance'] ?? 0) * 1;

        die(json_encode(['balance' => $balance]));

        break;

      default:
        die(json_encode(["Error" => "Invalid action."]));
    }
  }


  public function getApiKey()
  {
    # code...

    try {
      //code...
      $result = $this->get_row(
        "SELECT * FROM `clients` WHERE `clients`.`client_id` = '" . ($_SESSION['user_data']['user_id'] ?? null) . "' 
          AND  `clients`.`username` = '" . ($_SESSION['user_data']['user_username'] ?? null) . "' "
      );
      if (is_array($result) && array_key_exists('api_key', $result)) {
        return $result['api_key'];
      }
      return false;
    } catch (\Throwable $th) {
      //throw $th;
      return false;
    }
  }

  public function getServiceApi($service)
  {
    # code...
    if ($service) {
      $result = $this->get_row(
        "SELECT api_services.api_type,api_services.currency, api_services.api_url, api_services.api_key, services.rate,
        services.min,services.max, services.id
        FROM `services` 
        INNER JOIN api_services ON api_services.api_id = services.api
        WHERE services.service = '$service'"
      );
      return $result;
    }
    return false;
  }
}

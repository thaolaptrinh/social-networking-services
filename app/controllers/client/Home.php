<?php

use App\Core\Controller;

class Home extends Controller
{


  public $model;
  public $data = [];


  function __construct()
  {
    # code...
    $this->model = $this->model('client/HomeModel');
    $status = $this->model->settings('status') ?? null;
    if ($status == 'off') {
      session_destroy();
      $this->render('error/503');
      exit();
    }

    $this->data['type'] = 'home';
    $this->data = array_merge($this->data, $this->model->data);
  }




  // User ~

  function index()
  {
    # code...


    $this->model->index();
    $this->data['content'] = 'client/index';
    $this->data['page_title'] = 'Dịch vụ Instagram | Facebook | Youtube | Tiktok';
    $this->data = array_merge($this->data, $this->model->data);
    $this->render('layouts/home', $this->data);
  }


  function services()
  {
    # code...
    $this->model->services();
    $this->data['content'] = 'client/services';
    $this->data['page_title'] = 'Danh sách dịch vụ';
    $this->data = array_merge($this->data, $this->model->data);
    $this->render('layouts/home', $this->data);
  }

  function upgrade()
  {
    # code...
    $this->model->upgrade();
    $this->data['content'] = 'client/upgrade';
    $this->data['page_title'] = 'Nâng cấp tài khoản';
    $this->data = array_merge($this->data, $this->model->data);
    $this->render('layouts/home', $this->data);
  }



  //auth

  function login()
  {
    # code...
    if (isset($_SESSION['user_data']) && !empty($_SESSION['user_data'])) {
      header('location: ' . __BASE_URL__);
      die();
    }

    $this->data['content'] = 'client/login';
    $this->data['page_title'] = 'Đăng nhập';
    $this->data = array_merge($this->data, $this->model->data);
    $this->render('layouts/home', $this->data);
  }

  function recovery()
  {
    # code...
    // $this->model->recovery();
    $this->data['content'] = 'client/recovery';
    $this->data['page_title'] = 'Khôi phục mật khẩu';
    $this->data = array_merge($this->data, $this->model->data);
    $this->render('layouts/home', $this->data);
  }



  function logout()
  {
    # code...
    session_destroy();
    header('location: ' . __BASE_URL__ . '/login');
  }


  // User login success

  function is_login()
  {
    # code...
    if (!isset($_SESSION['user_data']) || empty($_SESSION['user_data'])) {
      header('location: ' . __BASE_URL__ . '/login');
      die();
    }
  }

  function order()
  {
    # code...

    $this->is_login();
    $this->model->order();
    $this->data['content'] = 'client/order';
    $this->data['page_title'] = 'Tạo đơn hàng';
    $this->data = array_merge($this->data, $this->model->data);
    $this->render('layouts/home', $this->data);
  }



  function orders()
  {
    # code...
    $this->is_login();
    $this->data['content'] = 'client/orders';
    $this->data['page_title'] = 'Danh sách đơn hàng';
    $this->data = array_merge($this->data, $this->model->data);
    $this->render('layouts/home', $this->data);
  }



  function api_docs()
  {
    # code...

    $this->is_login();
    $this->data['content'] = 'client/api_docs';
    $this->data['page_title'] = 'Tài liệu API';
    $this->data = array_merge($this->data, $this->model->data);
    $this->render('layouts/home', $this->data);
  }

  function settings()
  {
    # code...
    $this->is_login();

    $this->data['content'] = 'client/settings';
    $this->data['page_title'] = 'Cài đặt tài khoản';
    $this->data = array_merge($this->data, $this->model->data);
    $this->render('layouts/home', $this->data);
  }


  function balance()
  {
    # code...
    $this->is_login();
    $this->model->balance();
    $this->data['content'] = 'client/balance';
    $this->data['page_title'] = 'Số dư của bạn';
    $this->data = array_merge($this->data, $this->model->data);
    $this->render('layouts/home', $this->data);
  }

  function balance_history()
  {
    # code...
    // $this->is_login();
    // $this->model->balance_history();
    // $this->data['content'] = 'home/balance_history';
    // $this->data['page_title'] = 'Lịch sử nạp tiền';
    // $this->data = array_merge($this->data, $this->model->data);
    // $this->render('layouts/home', $this->data);
  }
}

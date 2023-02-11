<?php

use App\Core\Controller;

class Auth extends Controller
{
  public $data = [];

  public function login()
  {
    # code...
    $login = parent::model('admin/AuthModel');
    $login->login();
    $this->data['content'] = 'admin/login';
    $this->render('layouts/auth/admin', $this->data);
  }
}

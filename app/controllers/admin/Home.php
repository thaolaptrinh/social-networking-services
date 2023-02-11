<?php

use App\Core\Controller;

class Home extends Controller
{

  public $data = [];
  private $model_home;

  public function __construct()
  {
    # code...

  }
  public function index()
  {
    # code...
    $this->data['content'] = 'admin/index';
    $this->render('layouts/admin', $this->data);
  }

  public function settings()
  {
    # code... 
    $this->data['content'] = 'admin/settings';
    $this->render('layouts/admin', $this->data);
  }
}

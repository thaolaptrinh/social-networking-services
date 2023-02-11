<?php

use App\Core\Controller;

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

class Requests extends Controller
{
  public $model;
  public $data = [];
  public function index()
  {
    $this->model = $this->model('RequestsModel');
    $this->model->index();
    $this->data  = array_merge($this->data, $this->model->data);
    $this->render('requests/index', $this->data);
  }
}

<?php

use App\Core\Controller;

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

class Api extends Controller
{
  public function index()
  {
    $model =  $this->model('ApiModel');
    $model->index();
    $this->render('api/index');
  }
}

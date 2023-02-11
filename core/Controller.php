<?php

namespace App\Core;


class Controller
{

  public function model($model)
  {
    # code...
    $pathFile = __DIR_ROOT__ . '/app/models/' . $model . '.php';
    if (file_exists($pathFile)) {
      require_once $pathFile;
      $model = explode('/', $model);
      $model = $model[count($model) - 1];
      if (class_exists($model)) {
        return new $model();
      }
    }
  }
  public function render($view, $data = [])
  {
    # code...
    if (!empty($data)) {
      extract($data);
    }
    $pathFile = __DIR_ROOT__ . '/app/views/' . $view . '.php';
    if ($pathFile) {
      require_once $pathFile;
    }
  }
}

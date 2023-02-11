<?php

namespace App;

use App\Core\Route;

class App
{


  private $__controller, $__action, $__params, $__route;
  public function __construct()
  {
    # code...

    global $routes;
    $this->__route = new Route();
    if (!empty($routes['default_controller'])) {
      $this->__controller = $routes['default_controller'];
    }
    $this->__action = 'index';
    $this->__params = [];
    $this->handleUrl();
  }


  public function getUrl()
  {
    # code...
    return $_SERVER['PATH_INFO'] ?? '/';
  }
  public function handleUrl()
  {
    # code...

    $url = $this->getUrl();
    $url = $this->__route->handleRoute($url);



    $urlArray = array_values(array_filter(explode('/', $url)));
    $urlCheck = '';
    $pathFile = '';
    if (!empty($urlArray)) {
      foreach ($urlArray as $key =>  $value) {
        $urlCheck .=  $value . '/';
        $fileCheck = trim($urlCheck, '/');
        $fileCheckArr = explode('/', $fileCheck);
        $fileCheckArr[count($fileCheckArr) - 1] = ucfirst(strtolower($fileCheckArr[count($fileCheckArr) - 1]));
        $fileCheck = implode('/', $fileCheckArr);
        $pathFile = __DIR_ROOT__ . '/app/controllers/' . $fileCheck . '.php';

        if (!empty($urlArray[$key - 1])) {
          unset($urlArray[$key - 1]);
        }
        if (file_exists($pathFile)) {
          $urlCheck = $fileCheck;
          break;
        }
      }
      $urlArray = array_values($urlArray);
    }



    if (!empty($urlArray[0])) {
      $this->__controller = ucfirst($urlArray[0]);
    } else {
      $this->__controller = ucfirst($this->__controller);
    }


    if (file_exists($pathFile)) {
      require_once $pathFile;
      if (class_exists($this->__controller)) {
        $this->__controller = new $this->__controller();
        unset($urlArray[0]);
      } else {
        $this->loadNotFound();
      }
    } else {
      $this->loadNotFound();
    }

    if (!empty($urlArray[1])) {
      $this->__action = $urlArray[1];
      unset($urlArray[1]);
    }

    $this->__params = array_values($urlArray);

    if (method_exists($this->__controller, $this->__action)) {
      call_user_func_array([$this->__controller, $this->__action], $this->__params);
    } else {
      $this->loadNotFound();
    }
  }

  public function loadNotFound()
  {
    # code...
    header("HTTP/1.1 404 Not Found");
    die();
  }
}

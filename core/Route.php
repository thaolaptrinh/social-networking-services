<?php

namespace App\Core;


class Route
{

  public function handleRoute($url)
  {
    # code...
    global $routes;
    unset($routes['default_controller']);
    $url = trim($url, '/');
    $route = $url;
    if (!empty($routes)) {
      foreach ($routes as $key => $value) {
        if (preg_match('~' . $key . '~is', $url)) {
          $route = preg_replace('~' . $key . '~is', $value, $url);
        }
      }
    }

    return $route;
  }
}

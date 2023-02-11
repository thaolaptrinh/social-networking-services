<?php

function BASE_URL($url)
{
  global $base_url;
  return $base_url . $url;
}




function route($index)
{
  global $route;
  if (isset($route[$index])) {
    return $route[$index];
  } else {
    return false;
  }
}


function route_last()
{
  global $route;
  return end($route);
}



function count_string($data)
{
  return strlen(check_string($data));
}

function myFilter($var)
{
  return ($var == NULL && $var == FALSE && $var == "");
}


function coinShort($num)
{

  if ($num >= 1000) {

    $x = round($num);
    $x_number_format = number_format($x);
    $x_array = explode(',', $x_number_format);
    $x_parts = array('k', 'm', 'b', 't');
    $x_count_parts = count($x_array) - 1;
    $x_display = $x;
    $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? ',' . $x_array[1][0] : '');
    $x_display .= $x_parts[$x_count_parts - 1];

    return $x_display;
  }

  return $num;
}

function error($e)
{
  # code...
  if (file_exists('app/views/error/' .  $e . '.php')) {
    require_once 'app/views/error/' . $e . '.php';
  }
}
function check_email($data)
{
  if (preg_match('/^.+@.+$/', $data, $matches)) {
    return true;
  } else {
    return false;
  }
}

function type_pass($str)
{
  return base64_encode(md5(base64_encode(md5($str))));
}

function check_string($data)
{
  return (trim(htmlspecialchars(addslashes($data))));
}


function get_time()
{
  return date('Y-m-d H:i:s');
}


function get_client_ip()
{
  if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) $ip = getenv("HTTP_CLIENT_IP");
  else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) $ip = getenv("HTTP_X_FORWARDED_FOR");
  else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) $ip = getenv("REMOTE_ADDR");
  else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) $ip = $_SERVER['REMOTE_ADDR'];
  else $ip = "unknown";
  return ($ip);
}


function curl_url($url, $arr = [])
{
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_POSTFIELDS => http_build_query($arr)
  ));


  $resp = curl_exec($curl);
  $result = json_decode($resp, TRUE);
  curl_close($curl);
  return $result;
}


function generate_string($type = 1, $to = 9)
{
  $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  if ($type != 1) {
    $comb = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  }
  $shfl = str_shuffle($comb);
  $pwd = substr($shfl, 0, $to);
  return $pwd;
}



function curl_get($url)
{
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_SSL_VERIFYPEER => false,
  ));

  $resp = curl_exec($curl);
  $result = json_decode($resp, true);
  curl_close($curl);
  return $result;
}

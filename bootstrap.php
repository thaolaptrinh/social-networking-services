<?php

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
ini_set("display_errors", 'On');
error_reporting(E_ALL);
$url_root = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
  ? 'https'
  : 'http') . '://' . $_SERVER['HTTP_HOST'];
$folder =  str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(__DIR__));


define('__DIR_ROOT__', __DIR__);
define('__BASE_URL__', $url_root . $folder);

require_once 'configs/routes.php';
require_once 'configs/function.php';

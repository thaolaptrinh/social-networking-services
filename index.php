<?php

use App\App;
use Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/bootstrap.php';
$dotEnv = Dotenv::createImmutable(__DIR__);
$dotEnv->load();


$app = new App();

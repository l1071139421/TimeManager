<?php
if ( ! defined("BASE_PATH")) {
    define("BASE_PATH", dirname(__DIR__));
}

require(implode('/', array(BASE_PATH, 'vendor', 'autoload.php')));

use Pux\Executor;
use Pux\Mux;

$mux = require(implode('/', array(BASE_PATH, 'route', 'mux.php')));

$route = $mux->dispatch($_SERVER['REQUEST_URI']);
echo Executor::execute($route);

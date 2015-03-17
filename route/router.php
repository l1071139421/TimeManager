<?php
use Pux\Mux;
$mux = new Mux();

//主頁面
$mux->any('/', ["TimeManager\\Controller\\MainController", "index"]);

return $mux;

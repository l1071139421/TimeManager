<?php
namespace TimeManager\Sys;

use TimeManager\Core\App;

class Controller
{
    public static $app = null;

    public static function init()
    {
        self::$app = App::forge();
        self::$app->getTemplate();
        self::$app->getInput();
    }
}

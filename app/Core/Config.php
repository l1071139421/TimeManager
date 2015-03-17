<?php
namespace TimeManager\Core;

class Config
{
    public static $data = null;

    public function __construct($filename = null, $path = null)
    {
        self::$data = array();

        if ( ! $path) {
            $path = dirname(__DIR__).'/Config';
        }

        if ( ! $filename) {
            $filename = 'config.php';
        }

        self::$data = require_once(implode('/', array($path, $filename)));
    }

    public static function forge($filename = null, $path = null)
    {
        return new self($filename, $path);
    }

    public static function getData()
    {
        return self::$data;
    }

    public static function get($name)
    {
        return (isset(self::$data[$name])) ? self::$data[$name] : "";
    }

    public static function set($name, $value)
    {
        self::$data[$name] = $value;
    }

    public function has($name)
    {
        return isset(self::$data[$name]);
    }
}

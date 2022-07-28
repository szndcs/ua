<?php
namespace controllers\RouteController;

class RouteController {

    public static function r($ask, $class)
    {
        $route = (htmlspecialchars($_GET["r"]) === '') ? '/' : htmlspecialchars($_GET["r"]);
        if (isset($ask) and isset($class) and is_array($class) and $ask === $route){
            $run = new $class[0]();
            $run->{$class[1]}();
            exit;
        }
    }
}
<?php

namespace ppeco\router;

use Closure;
use JetBrains\PhpStorm\Language;

class Router {
    public static Closure $output;

    public static function route(#[Language("regex")] string $regex,
                                 callable $router) {
        $regex = str_replace("/", "\\/", $regex);
        if(isset($_SERVER["REQUEST_URI"])&&
                preg_match("/$regex$/", $_SERVER["REQUEST_URI"], $data)){
            (self::$output??function($output) { echo $output; })->call($router($data));
            exit;
        }
    }
}
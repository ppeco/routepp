<?php

namespace ppeco\router;

use JetBrains\PhpStorm\Language;

class Router {
    public static function route(#[Language("regex")] string $regex,
                                 callable $router) {
        if(isset($_SERVER["REQUEST_URI"])&&
                preg_match("$regex$", $_SERVER["REQUEST_URI"], $data)){
            echo $router($data);
            exit;
        }
    }
}
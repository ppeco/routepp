<?php

namespace ppeco\router;

use JetBrains\PhpStorm\Language;

class Router {
    public static function route(#[Language("regex")] string $regex,
                                 callable $router) {
        if(isset($_GET['__route'])&&
                preg_match("$regex$", $_GET['__route'], $data)){
            echo $router($data);
            exit;
        }
    }
}
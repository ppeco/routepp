<?php


use JetBrains\PhpStorm\Language;

class Router {
    public static function route(#[Language("regex")] string $regex,
                                 callable $router) {
        if(isset($_GET['__url'])&&
                preg_match("$regex$", $_GET['url'], $data)){
            $router($data);
        }
    }
}
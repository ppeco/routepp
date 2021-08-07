# RoutePP
```shell
composer require ppeco/routepp
```
Simple library for route pages

## Example
```php
use ppeco\router\Router;

Router::route("/", function() {
    return "Hello, world!";
});

Router::route("/user/(\d+)", function(array ...$data) {
    return "User #$data[1]";
});

Router::route("/simple", function() {
    return "This is simple pages";
});

echo "Page not found";
```



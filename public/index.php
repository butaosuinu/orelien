<?php

require __DIR__ . '/../vendor/autoload.php';

$routes = require __DIR__ . '/../app/routes.php';

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($routes[$request_uri])) {
    $f = $routes[$request_uri];

    [$status, $headers, $body] = f();
    http_response_code($status);
    foreach ($header as $name => $h) {
        header("{$name}: {$h}");
    }
    echo $body;
} else {
    http_response_code(404);
    echo "<h1>404 Not found</h1>";
}

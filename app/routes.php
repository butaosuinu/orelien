<?php
$routes = [];

$routes['/'] = function (): array {
    ob_start();
    include __DIR__ . '/../app/view/index.phtml';
    return [200, ['Content-Type' => 'text/html'], ob_get_clean()];
};

$routes['/phpinfo.php'] = function (): void {
    ob_start();
    phpinfo();
};

return $routes;

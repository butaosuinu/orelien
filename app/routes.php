<?php
$routes = [];
$template = new \Orelien\TemplateFactory(__DIR__ . '/view/');

$routes['/'] = function () use ($template): array {
    return [
        200,
        ['Content-Type' => 'text/html'],
        $template->create('index', ['name' => 'ぶた'])
    ];
};

$routes['/phpinfo.php'] = function (): void {
    ob_start();
    phpinfo();
};

return $routes;

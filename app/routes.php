<?php
$routes = [];

$routes['/'] = function () {
    echo "<!DOCTYPE html>\n";
    echo "<title>test</title>\n";
    echo "<p>" . h('hello new my flamework') . "</p>\n";
    echo "<p>現在は" . h(date('Y年m月d日H時i分s秒')) . "です</p>\n";
    echo "<ul><li><a href='/phpinfo.php'><code>phpinfo()</code></a></ul>\n";
    exit();
};

$routes['/phpinfo.php'] = function () {
    phpinfo();
};

return $routes;

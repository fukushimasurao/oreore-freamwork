<?php
require __DIR__ . '/../vendor/autoload.php';

$routes = require __DIR__ .'/../app/routes.php';

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if(isset($routes[$_SERVER['REQUEST_URI']])){
    $f=$routes[$_SERVER['REQUEST_URI']];
    $f();
}else{
    http_response_code(response_code404);
    echo "<h1>404</h1>";
}


// if($_SERVER['REQUEST_URI'] ==='/phpinfo.php'){
//     phpinfo();
//     exit;
// }
// http_response_code(response_code404);
// echo "<h1>404</h1>";
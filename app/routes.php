<?php

$routes = [];

$routes['/'] = function(){
    ob_start();
   include __DIR__ . '/view/index.phtml';
   return [200, ['Content-Type' => 'test/html'] , ob_get_clean()];

};

$routes['/phpinfo.php'] = function(){
    ob_start();
    phpinfo(); 
};


// $routes['/testtest'] = function(){
//     echo "testtestああｑｗせｄｒｆｔｇ"; 
// };


return $routes;
<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



require_once  '..\vendor\autoload.php';

use Core\Routing\Router;




$router = new Router();

include '../routes/route.php';

try {
    $path = trim($_SERVER["REQUEST_URI"], "/");
    $router->dispatch($path);
} catch (Exception $e) {
    dd($e->getMessage());
}

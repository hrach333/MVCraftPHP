<?php
use App\Core\Router;
use App\Controllers\HomeController;

$router = new Router();
$router->get('/', [HomeController::class, 'index']);
$router->get('/post/{id}', [HomeController::class, 'show']);
return $router;
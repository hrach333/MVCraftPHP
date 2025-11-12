<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//declare(strict_types=1);
//echo $_SERVER['QUERY_STRING'];
$container = require dirname(__DIR__) . '/bootstrap.php';
$router = require dirname(__DIR__) . '/routes/web.php';

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI'], $container);
<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

date_default_timezone_set('UTC');

$app = require __DIR__ . '/config/app.php';
$db  = require __DIR__ . '/config/database.php';

use App\Core\Container;

$container = new Container();
$container->set('config.app', fn() => $app);
$container->set('config.db', fn() => $db);
$container->set(PDO::class, function(Container $c) {
    $db = $c->get('config.db');
    return new PDO($db['dsn'], $db['user'], $db['password'], $db['options']);
});

return $container;
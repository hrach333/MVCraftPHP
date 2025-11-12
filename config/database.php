<?php
return [
    'dsn' => 'mysql:host=127.0.0.1;dbname=mvcrafphp;charset=utf8mb4',
    'user' => 'root',
    'password' => 'mpmegmrx',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
];

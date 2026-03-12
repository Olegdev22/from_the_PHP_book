<?php

$db_config = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'db_name' => 'guestbook',
];

$db_options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // c PHP 8.0
];

$dsn = "mysql:dbname={$db_config['db_name']};host={$db_config['host']};charset=utf8mb4";

$db = new PDO($dsn, $db_config['user'], $db_config['password'], $db_options);
<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . "/incs/db.php";
require_once __DIR__ . "/incs/functions.php";
/** @var PDO $db */
//var_dump($db);
$title = 'Home';
require_once __DIR__ . "/views/index.tpl.php";
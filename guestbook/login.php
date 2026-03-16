<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . "/incs/db.php";
require_once __DIR__ . "/incs/functions.php";

$title = "Login";



require_once __DIR__ . "/views/login.tpl.php";
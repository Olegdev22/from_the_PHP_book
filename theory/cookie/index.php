<?php

//var_dump(time());

setcookie("Test1", "Test 1", path: '/'); // доступность для всего домена, именованая запись c PHP 8
setcookie("Test2", "Test 2", ['path' => '/']); // c PHP 7.3, указывается массивом, набор параметров
setcookie("Test3", "Test 3", path: '/', expires_or_options: time() + 3600); // c существованием на 1 час
setcookie("Test4", "Test 4", ['path' => '/', 'expires' => time() + 3600]); // c PHP 7.3 на 1 час

var_dump($_COOKIE);

if(isset($_GET['do'] ) && $_GET['do'] == 'reset'){
   setcookie("count", '', path: '/', expires_or_options: time() - 3600);
   header("Location: index.php");
   die();
}

if (isset($_COOKIE['count'])) {
   setcookie("count", ++$_COOKIE['count'], path: '/', expires_or_options: time() + 3600);
} else {
   setcookie("count", 1, path: '/', expires_or_options: time() + 3600);
}

//isset($_COOKIE['count']) ? setcookie("count", ++$_COOKIE['count'], path: '/', expires_or_options: time() +
//    3600) : setcookie("count", 1, path: '/', expires_or_options: time() + 3600);

echo "Количество посещений " . ($_COOKIE['count'] ?? 1);

echo "<p><a href='?do=reset'>Reset</a></p>";
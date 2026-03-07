<?php
// Сообщать о каждой PHP-ошибке
//error_reporting(-1);

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "root", 'my_db');

if (!$db) {
   exit('Error connecting to MySQL server.');
}

mysqli_set_charset($db, 'utf8mb4');

$name = "O'Railly";
//$name = mysqli_real_escape_string($db, $name);
//$result = mysqli_query($db, "INSERT INTO users (name, email) VALUES ('{$name}', 'orailly@gmail.com')");

// Подготовим через подготавливаемое выражения
$stmt = mysqli_prepare($db, "INSERT INTO users (name, email) VALUES (?, ?)");
$res = mysqli_stmt_execute($stmt, [$name, 'orailly@gmail.com']);

if (!$res) {
   echo mysqli_error($db);
}
var_dump($res);
// CRUD

// Create: INSERT INTO tbl(field1, field2...) VALUES ('value1', 'value2', ....)
// Read:   SELECT field1, field2, ... FROM tbl WHERE id=2
// Update: UPDATE  tbl SET field1 = 'value1', field2 = 'value2'... WHERE id =2
// Delete: DELETE  FROM tbl WHERE id =2

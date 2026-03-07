<?php
// Read:   SELECT field1, field2, ... FROM tbl WHERE id=2
mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "root", 'my_db');

if (!$db) {
   exit('Error connecting to MySQL server.');
}

mysqli_set_charset($db, 'utf8mb4');

$stmt = mysqli_prepare($db, "SELECT * FROM users ");
if (mysqli_stmt_execute($stmt)) {
   $result = mysqli_stmt_get_result($stmt);
//   var_dump($result);

   // Один из основного способа запроса по выборке
   /*   $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
      dump($data);*/

   // Более гибкий способ выборки используя фу-ю для асоциативного массива
   while ($row = mysqli_fetch_assoc($result)) {
      echo "<p>ID: {$row['id']} | Nmae: {$row['name']} | Email: {$row['email']}</p><hr>";
   }
}

function dump($data): void
{
   echo "<pre>" . print_r($data, true) . "</pre>";
}
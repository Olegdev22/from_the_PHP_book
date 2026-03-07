<?php
/*
if (file_exists("file.txt")){
   echo "OK";
} else {
   echo "ERROR";
}
*/

//copy(__DIR__."/file.txt", __DIR__."/folder/file2.txt");

//rename(__DIR__."/file.txt", __DIR__."/folder/file2.txt");

function pre($data): void
{
   echo "<pre>" . print_r($data, true) . "</pre>";
}

// Чтение файла в массив, если построчные данные
$file = file(__DIR__ . '/folder/file2.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
pre($file);
echo "<br>";

// Чтение контента в строку
$file_string = trim(file_get_contents(__DIR__ . '/folder/file2.txt'));
var_dump($file_string);

echo "<br>";

$content = '';
for ($i = 0; $i <= 10; $i++) {
   $content .= "String {$i}\n}";
}
// Записать в файл
file_put_contents(__DIR__ . '/folder/test.txt', $content, FILE_APPEND);
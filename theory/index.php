<?php
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8';

try {
    $pdo = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
    die('Подключение не удалось' . $e->getMessage());
}

echo "Соединение установленное успешно";
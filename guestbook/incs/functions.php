<?php

function dump(array|object $data): void
{
    echo "<pre>" . print_r($data, true) . "</pre>";
}

// загружаем из массива формы ожидаемые поля
function load(array $fillable, $post = true): array
{
    $load_data = $post ? $_POST : $_GET;
    $data = [];
    foreach ($fillable as $field) {
        if (isset($load_data[$field])) {
            $data[$field] = trim($load_data[$field]);
        } else {
            $data[$field] = '';
        }
    }
    return $data;
}

// ф-я для взятия данных из полей уже заполненных
function h(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); // игнорирует теги и кавычки
}

function old(string $name, $post = true): string
{
    $load_data = $post ? $_POST : $_GET;
    return isset($load_data[$name])? h($load_data[$name]) : '';
}
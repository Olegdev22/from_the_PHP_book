<?php

function dump(array|object $data): void
{
    echo "<pre>" . print_r($data, true) . "</pre>";
}

function redirect(string $url = ''): never
{
    header("location: {$url}");
    die();
}

function get_errors(array $errors): string
{
    $html = '<ul class="list-unstyled">';
    foreach ($errors as $error_group) {
        foreach ($error_group as $error) {
            $html .= "<li>{$error}</li>";
        }
    }
    $html .= '</ul>';
    return $html;
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
    return isset($load_data[$name]) ? h($load_data[$name]) : '';
}

// ф-я для проверки наличия зарегистрированного email
function register(array $data): bool
{
    global $db;
    $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->execute([$data['email']]);
    if ($stmt->fetchColumn()) {
        $_SESSION['errors'] = 'Email already exists';
        return false;
    }

    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    $stmt = $db->prepare("INSERT INTO users (name,email, password) VALUES (:name,:email, :password)");
    $stmt->execute($data);
    $_SESSION['success'] = 'Yuo successfully registered';
    return true;
}

// ф-я авторизации Login
function login(array $data): bool
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$data['email']]);
    if ($row = $stmt->fetch()) {
        if (!password_verify($data['password'], $row['password'])) {
            $_SESSION['errors'] = 'Wrong email or password';
            return false;
        }
    } else {
        $_SESSION['errors'] = 'Wrong email or password';
        return false;
    }

    foreach ($row as $key => $value) {
        if ($key != 'password') {
            $_SESSION['user'][$key] = $value;
        }
    }
    $_SESSION['success'] = 'Yuo successfully logged in';
    return true;
}

function check_auth(): bool
{
    if (isset($_SESSION['user'])) {
        return true;
    }
    return false;
}

function check_admin(): bool
{
    if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 2) {
        return true;
    }
    return false;
}

// сохранение сообщений
function save_message(array $data): bool
{
    global $db;
    if (!check_auth()) {
        $_SESSION['errors'] = 'login required';
        return false;
    }

    $stmt = $db->prepare("INSERT INTO messages (user_id, message ) VALUES (?, ?)");
    $stmt->execute([$_SESSION['user']['id'], $data['message']]);
    $_SESSION['success'] = 'Message added successfully';
    return true;
}

// Вывод сообщений
function get_message(): array
{
    global $db;
    $where = '';
    if (!check_admin()) {
        $where .= "WHERE status = 1";
    }
    $stmt = $db->prepare("SELECT * FROM messages {$where}");
    $stmt->execute();
    return $stmt->fetchAll();
}
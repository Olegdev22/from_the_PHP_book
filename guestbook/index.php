<?php

use Valitron\Validator;

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . "/incs/db.php";
require_once __DIR__ . "/incs/functions.php";
/** @var PDO $db */
//var_dump($db);
$title = 'Home';

if (isset($_POST['send-message'])) {
    $data = load(['message']);
    $v = new Validator($data);
    $v->rules([
        'required' => ['message'],
    ]);

    if ($v->validate()) {
        if (save_message($data)) {
            redirect('index.php');
        }
    } else {
        $_SESSION['errors'] = get_errors($v->errors());
    }
}

require_once __DIR__ . "/views/index.tpl.php";
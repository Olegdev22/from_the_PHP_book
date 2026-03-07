<?php
$username = $_REQUEST['username'];

if (!isset($_GET['username'])){
   echo file_get_contents('hello.html');
   die();
}

if (isset($_GET['substr'])){
echo "Пользователь хочет получать рассылку";
}

if (isset($_GET['email'])){
   echo "Пользователь хочет получать сообщения";
}

// buttons
if (isset($_REQUEST['send'])){
echo 'Пользователь нажал ОК';
}elseif (isset($_REQUEST['delete'])){
   echo 'Пользователь нажал Удалить';
}else die('Пользователь ничего не нажал, пытается запустить сценарий на прямую');

echo $_GET['username'];
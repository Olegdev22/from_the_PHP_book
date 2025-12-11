<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>Выводим текст</h1>";

$a = 10;
$string1 = "Значение переменной: $a";
$string2 = 'Значение переменной: $a';

echo $string1;
echo "<br>";
echo $string2;
echo "<br>";

echo "IP user:" . getenv('REMOTE_ADDR');
echo "<br>";
$browser = getenv('HTTP_USER_AGENT');
if (str_contains($browser, 'OPR')) {
    echo "Браузер: Opera<br>";
} else {
    echo "Другой браузер: $browser<br>";
}
echo "<br>";

//Header("Location: https://www.google.com");
?>
</body>
</html>

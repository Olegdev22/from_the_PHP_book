<?php
// создайте массив от 1 до 10 со специальной ф-й и без

function pre($data): void
{
   echo "<pre>" . print_r($data, true) . "</pre>";
}

$arr_numb = range(1, 10);

pre($arr_numb);
echo "<br>";

$arr_for = [];
for ($i = 1; $i <= 10; $i++) {
   $arr_for[] = $i;
}
pre($arr_for);

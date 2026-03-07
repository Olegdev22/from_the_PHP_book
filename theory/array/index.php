<?php
// list
$os[0] = 'Unix';
$os[1] = 'Linux';
$os[2] = 'Windows 10';
$os[3] = 'Windows 11';
$os[4] = 'macOS';
$os[] = 'Mac';
$os[] = 'Linux Mandriva';

for ($i = 0; $i < count($os); $i++) {
   echo "$os[$i] <br>";
}

// ассоциативный массив
$DB['host'] = 'localhost';
$DB['user'] = 'root';
$DB['pass'] = '';
$DB['db_name'] = 'test';
$DB['port'] = 3306;
$DB['charset'] = 'utf8mb4';
echo "<br>";

foreach ($DB as $key => $value) {
   echo "$key => $value <br>";
}

echo "<p>Слияние массивов:</p>";
$SERVER = array('host' => 'localhost', 'user' => 'root', 'pass' => '');
$DB = array('db_name' => 'test', 'table' => 'example');

$DBINFO = $SERVER + $DB;
foreach ($DBINFO as $key => $value) {
   echo "$key => $value <br>";
}

echo "<p>Объединение двух списков<p>";
$A = array(1, 2, 3, 4);
$A2 = array(5, 6);
//$A3 = $A + $A2;

//var_dump($A3); // если индексы совпадают, то берутся с первого массива
$A3 = array_merge($A, $A2);
var_dump($A3);
print_r($A3);

echo "<p>Сортировка массива<p>";
$A = array(6, 2, 13, 0, 7, 5);
sort($A);
print_r($A);

echo "<p>Пользовательская сортировка </p>";
function cmp($a, $b)
{
   if ($a == $b) {
      return 0;
   }
   return ($a < $b) ? -1 : 1;
}

usort($A, 'cmp');
print_r($A);

echo "<p>Добавление элемента в конец массива (push) удаление последнего элемента в массиве (pop)</p>";
array_push($A, 'Linux', 'Windows 10');
print_r($A);

echo "<p>Получение части массива array_slice()</p>";
$outA = array_slice($A, 0, 3);
print_r($outA);

echo "<hr>";
$a = array();
$b = [];
$c = [1, 2, 3, 3.14, 'hello world', false, true, 4, 5];
var_dump($a, $b, $c);
echo "<hr>";

echo "<pre>" . print_r($c, true) . "</pre>";

$house = ['Иванов', "Петров", 15 => "Сидоров"];
echo "<pre>" . print_r($house, true) . "</pre>";
echo $house[1];
echo "<br>";
var_dump($c[4]);
echo "<br>";

$house[] = "Doe";
echo "<pre>" . print_r($house, true) . "</pre>";
echo "<hr>";

$fruits = ["Яблоко" => 'Apple', 'Banana', 'Orange'];

echo "<pre>" . print_r($fruits, true) . "</pre>";
echo $fruits["Яблоко"];

echo "<hr>";

$products = [
    ['title' => "Apple",
        'price' => 100,
        'qty' => 100,
    ],
    ['title' => "Banana",
        'price' => 200,
        'qty' => 10,
    ],
];
echo "<pre>" . print_r($products, true) . "</pre>";

for ($i = 0; $i < count($products); $i++) {
   $k = $i + 1;
   echo "<h3>Товар №{$k}</h3>";
   echo $products[$i]['title'] . "<br>";
   echo $products[$i]['price'] . "<br>";
   echo $products[$i]['qty'] . "<br>";
}
echo "<hr>";

$products = [
    ['title' => "Noki",
        'price' => 100,
        'qty' => 123,
    ],
    ['title' => "Sony",
        'price' => 200,
        'qty' => 12,
    ],
    ['title' => "LG",
        'price' => 150,
        'qty' => 130,
    ],
];
echo "<pre>" . print_r($products, true) . "</pre>";

for ($i = 0; $i < count($products); $i++) {
   if ($products[$i]['price'] >= 200) {
      continue;
   }
   $k = $i + 1;
   echo "<h3>Товар №{$k}</h3>";
   echo $products[$i]['title'] . "<br>";
   echo $products[$i]['price'] . "<br>";
   echo $products[$i]['qty'] . "<br>";
}
echo "<hr>";

$i = 1;
foreach ($products as $product) {
   if ($product['price'] >= 200) {
      continue;
   }
   echo "<h3>Товарq №{$i}</h3>";
   echo 'Наименование: ' . $product['title'] . "<br>";
   echo 'Цена: ' . $product['price'] . "<br>";
   echo 'Количество: ' . $product['qty'] . "<br>";
   $i++;
}
echo '<hr>';

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// 1. Подсчитать среднее значение
$sum = 0;
foreach ($nums as $num) {
   $sum += $num;
}
$average = $sum / count($nums);
echo "Среднее значение: {$average}<br>";
echo "Сумма массива: {$sum}<hr>";
echo "<br>";

$arr = ["hello", "crazy", "world"];
// 1. Составить из него строку с разделителем пробел
$str = '';
$i = 1;
foreach ($arr as $word) {
   if ($i > 1) {
      $str .= " {$word}";
   } else {
      $str .= $word;
   }
   $i++;
}
var_dump($str);

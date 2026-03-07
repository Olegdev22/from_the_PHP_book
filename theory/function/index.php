<?php
function print_str(): void
{
   echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad delectus deleniti dicta dolor eius eveniet
      facere ipsum iure magnam, magni molestias omnis, quam quibusdam tenetur vel. Adipisci maxime praesentium
      quasi!</p>";
}

$arr = ["hello", "crazy", "world"];
function print_arr($data): void
{
   echo "<pre>";
   print_r($data);
   echo "</pre>";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>

     <?php

     print_str();
     print_str();
     print_str();

     print_arr($arr);
     print_arr([1, 2, 3]);

     function hello($age, $name = 'Guest'): void
     {
        echo "<p>Hello! My name is {$name}. I'm {$age} years old.</p>\n";
     }

     echo "<hr";

     function my_header($tr, $td)
     {
        echo "<h3>Таблица умножения {$tr} x {$td}</h3>";
     }

     function get_mult_table($tr = 9, $td = 9)
     {
        my_header($tr, $td);

        $table = "<table border='1' width='100%'>";
        for ($i = 2; $i <= $tr; $i++) {
           $table .= "<tr>";
           for ($j = 2; $j <= $td; $j++) {
              $table .= "<td>$j * $i = " . $j * $i . "</td>";
           }
           $table .= "</tr>";
        }
        $table .= "</table>";
        
        return $table;
     }


     ?>


    <h2>Hello</h2>

     <?php print_str(); ?>
     <?php hello(20, 'John Doe'); ?>
     <?php echo get_mult_table(5, 7); ?>
  </body>
</html>
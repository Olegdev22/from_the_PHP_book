<?php

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
    ['title' => "Nokia 2",
        'price' => 120,
        'qty' => 23,
    ],
    ['title' => "Sony 2",
        'price' => 220,
        'qty' => 20,
    ],
    ['title' => "LG 2",
        'price' => 160,
        'qty' => 30,
    ],
];

//foreach ($products as $product) {
//   echo '<div class="card">';
//   echo "<h3>Наименование:  {$product['title']}</h3>";
//   echo "<p>Цена:  {$product['price']}</p>";
//   echo "<p>Количество:  {$product['qty']}</p>";
//   echo '</div>';
//}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
  
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        
        <?php foreach ($products as $product) : ?>
          
          <?php require __DIR__ . "/card.php"; ?>
        
        <?php endforeach; ?>
  
  
  
  </body>
</html>




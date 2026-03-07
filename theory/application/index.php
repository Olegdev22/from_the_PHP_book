<?php

const MASSAGE_SEP = '--##--';// разделитель одного сообщения от другого
const MASSAGE_PARTS = '--**--';// разделитель имени от сообщения
function print_arr($data): void
{
  echo "<pre>";
  print_r($data);
  echo "</pre>";
}

if (!empty($_POST)) {
  $massage = $_POST['name'] . MASSAGE_PARTS . $_POST['massage'] . PHP_EOL . MASSAGE_SEP . PHP_EOL;
  file_put_contents(__DIR__ . '/massage.txt', $massage, FILE_APPEND);
  header('Location: index.php'); // запрос странички уже GET способом, сброс странички и заново отрисовка
  die();
}

$file = __DIR__ . '/massage.txt';
if (file_exists($file)) {
  $data = trim(file_get_contents($file));
  $massages = explode(MASSAGE_SEP, $data);
  $massages = array_reverse($massages);
//  print_arr($massages);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container my-3">
      <form action="" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name"
                 placeholder="Your name...">
        </div>
        
        <div class="mb-3">
          <label for="massage" class="form-label">Massage</label>
          <textarea class="form-control" rows="3" id="massage" name="massage"></textarea>
        </div>
        
        <button class="btn btn-primary" type="submit" name="send-form">Submit</button>
      
      </form>
      <hr>
      
      <?php if (!empty($massages)) : ?>
        
        <?php foreach ($massages as $massage): ?>
          
          <?php if ($massage): ?>
            <?php $data = explode(MASSAGE_PARTS, $massage); ?>
            
            <div class="card my-4">
              <div class="card-body">
                <h5 class="card-title"><?= $data[0]; ?></h5>
                <p class="card-text"><?= nl2br(htmlspecialchars($data[1])); ?></p>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>
  </body>
</html>
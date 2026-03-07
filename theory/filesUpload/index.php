<?php

function print_arr($data): void
{
  echo "<pre>";
  print_r($data);
  echo "</pre>";
}

//print_arr($_POST);
//print_arr($_FILES);

/*
 * // для обработки одной загрузки файла
if (isset($_FILES['file']) and $_FILES['file']['error'] == 0) {
   if (move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . "/{$_FILES['file']['name']}")) {
//      echo '<p>Success<p>';
     header('Location: index.php');
     die();
   }
}*/

// для обработки загрузки нескольких файлов сразу
if (isset($_FILES['file'])) {
  for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
    if ($_FILES['file']['error'][$i] == 0) {
      $data = explode(".", $_FILES['file']['name'][$i]);
      $ext = $data[count($data) - 1];
      $file_name = ($i + 1) . '.' . $ext;
      if (move_uploaded_file($_FILES['file']['tmp_name'][$i], __DIR__ . "/{$file_name}")) {
        echo '<p>Success<p>';
//        header('Location: index.php');
//        die();
      }
    }
  }
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
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name"
                 placeholder="Your name...">
        </div>
        
        <div class="mb-3">
          <label for="file" class="form-label">Massage</label>
          <input class="form-control" type="file" id="file" name="file[]" multiple>
        </div>
        
        <button class="btn btn-primary" type="submit" name="send-form">Send</button>
      
      </form>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>
  </body>
</html>

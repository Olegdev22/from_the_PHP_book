<?php
function print_arr($data): void
{
  echo "<pre>";
  print_r($data);
  echo "</pre>";
}

//if (isset($_POST['send-form'])) {
//  print_arr($_POST);
//}

if (!empty($_POST)) {
  print_arr($_POST);
  
  $name = $_POST['name'];
  var_dump($name);
  if (isset($_POST['agree']) and $_POST['agree']) {
    echo 'AGREE';
  } else {
    echo 'NO AGREE';
  }
}

print_arr($_GET);

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
    
    <div class="container">
      <form action="" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name"
                 placeholder="Your name...">
        </div>
        
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email"
                 placeholder="name@example.com">
        </div>
        
        <div class="mb-3">
          <label for="text" class="form-label">Text</label>
          <textarea class="form-control" rows="3" id="text" name="text"></textarea>
        </div>
        
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="agree" name="agree">
          <label class="form-check-label" for="agree">
            Agree
          </label>
        </div>
        
        <select class="form-select my-3" name="language[]" multiple>
          <option value="en">English</option>
          <option value="fr">France</option>
          <option value="de">Germany</option>
        </select>
        
        <button class="btn btn-primary" type="submit" name="send-form">Submit</button>
      
      </form>
      
      <form action="" method="get">
        <div class="mb-3">
          <label for="search" class="form-label"></label>
          <input type="text" class="form-control" id="search" name="search"
                 placeholder="Search...">
        </div>
        
        <button class="btn btn-primary" type="submit" name="search-form">Search</button>
      
      </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>
  </body>
</html>
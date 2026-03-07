<?php
session_start();

$login = 'admin';
$password = '$2y$10$B6g97/bmr.YUAYOeI/nEEO133kPtPW6Hn3q08YpsdDl8d15cxM1VO'; //123

if (!empty($_POST)) {
  if ($_POST['login'] == $login && password_verify($_POST['password'], $password)) {
    $_SESSION['login'] = 1;
    $_SESSION['name'] = $login;
    $_SESSION['message'] = 'Success';
    header("Location: admin.php");
  } else {
    $_SESSION['message'] = 'Error';
    header("Location: index.php");
  }
  die();
}
//var_dump(password_hash($password, PASSWORD_DEFAULT));
//$hash = '$2y$10$B6g97/bmr.YUAYOeI/nEEO133kPtPW6Hn3q08YpsdDl8d15cxM1VO';
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
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <a href="admin.php">Oleg area</a>
          
          <?php
          if (isset($_SESSION['message'])) {
            echo "<p>". $_SESSION['message'] . "</p>\n";
            unset($_SESSION['message']);
          }
          ?>
          
          <form action="" method="post">
            <div class="mb-3">
              <label for="login" class="form-label">Login</label>
              <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Send</button>
          
          </form>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>
  </body>
</html>



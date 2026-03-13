<?php

require_once __DIR__ . "/incs/db.php";
require_once __DIR__ . "/incs/functions.php";

/** @var PDO $db */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $data = load(['name', 'email', 'password']);
  dump($data);
};

?>

<?php require_once __DIR__ . "/views/incs/header.tpl.php"; ?>
  
  <div class="container mt-5">
    <div class="row">
      
      <div class="col-md-6 offset-md-3">
        
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Error!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <form class="mb-2" method="post">
          
          <div class="form-floating mb-3">
            <input class="form-control" type="text" id="name" placeholder="Name" name="name">
            <label for="name">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" type="email" id="email" placeholder="name@example.com" name="email">
            <label for="email">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" type="password" id="password" placeholder="Password" name="password">
            <label for="password">Password</label>
          </div>
          
          <button class="btn btn-primary mt-3" type="submit">Register</button>
        
        </form>
      
      </div>
    
    </div>
  
  </div>

<?php require_once __DIR__ . "/views/incs/footer.tpl.php"; ?>
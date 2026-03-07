<?php
session_start();

if (!isset($_SESSION['login'])) {
  header('Location: index.php');
  die();
}

if (isset( $_GET['do']) and $_GET['do'] == 'logout') {
  unset($_SESSION['login']);
  header('Location: index.php');
  die();
}

?>

<?php
if (isset($_SESSION['message'])) {
  echo "<p>". $_SESSION['message'] . "</p>\n";
  unset($_SESSION['message']);
}
?>

<h1>Hello <?= $_SESSION['name']; ?>!</h1>
<a href="?do=logout">Logout</a>

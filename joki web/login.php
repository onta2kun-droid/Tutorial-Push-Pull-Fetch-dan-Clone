<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="logincss/style.css">
    <title>Login</title>
  </head>
  <body class="body">
    <img src="cssphp2/logo.png" class="logo">
    <form autocomplete="off" action="" method="post" class="form">
      <h2>Login Dulu Bro :(</h2>
      <input type="hidden" id="action" value="login">
      <input class="box" type="text" id="username" value="" placeholder="Username"> <br>
      <input class="box" type="password" id="password" value="" placeholder="Password"> <br>
      <button class="box" type="button" onclick="submitData();">Login</button>
      <a href="register.php">Go To Register</a>
    <?php require 'script.php'; ?>
    </form>
    <br>
  </body>
</html>


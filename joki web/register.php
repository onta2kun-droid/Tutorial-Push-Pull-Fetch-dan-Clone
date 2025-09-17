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
    <link rel="stylesheet" type="text/css" href="cssphp2/register.css">
    <title>Register</title>
  </head>
  <body>
    <img src="cssphp2/logo.png" class="logo">
    <form class="form" autocomplete="off" action="" method="post">
    <h2>Register</h2>
      <input type="hidden" id="action" value="register">
      <input class="box" type="text" id="name" value="" placeholder="Name"> <br>
      <input class="box" type="text" id="username" value="" placeholder="Username"> <br>
      <input class="box" type="password" id="password" value="" placeholder="Password"> <br>
      <button class="box" type="button" onclick="submitData();">Register</button>
      <a href="login.php">Go To Login</a>
    <?php require 'script.php'; ?>
    </form>
    <br>
  </body>
</html>

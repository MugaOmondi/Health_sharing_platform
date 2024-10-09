<?php
session_start();
if(isset($_SESSION['username'])){
  header('location: Homepage.php');
}else {

} ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/master.css">
  <link rel="stylesheet" type="text/css" href="../css/tier3.css">
  </head>
  <body>
    <nav>
      <div class="rat2">
        <h1 style="font-size:30px;">LOGIN</h1>
        <h4>Already a user?</h4>
      </div>
      <div class="cat2">
        <h1><a href="registration.php" style="color:#ffffff; font-weight: 500; font-size:30px; text-decoration:none;">REGISTER</a></h1>
        <h4>New user?</h4>
      </div>
    </nav>
    <div class="jungle">
      <div class="gazelle">
        <form class="registering" action="../logic/login.php" method="post">
          <div class="email">
          <input type="email" name="email_address" placeholder="Email Address">
        </div>
        <div class="passcode">
          <input type="password" name="password" placeholder="password:">
        </div>
        <div class="words">
          <input type="submit" name="login" value="submit">
        </div>
        </form>
        <div class="antelope">
          <!-- A link preconfigured with unique questions -->
          <h4>Reset password</h4>
        </div>
    </div>
    <div class="rhine">
    <div class="lion">
      <h1>STAYING HEALTHY</h1>
      <h4>Optimal
      </h4>
    <h4>Personal Health</h4>
    </div>
    <div class="cub">
      <h4>Powered by Hekima Hub</h4>
    </div>
  </div>
    </div>


    </body>
</html>

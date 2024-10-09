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
  <link rel="stylesheet" type="text/css" href="../css/tier2.css">
  </head>
  <body>
    <nav>
      <div class="rat">
          <h1 style="font-size:30px;">REGISTER</h1>
          <h4>New user?</h4>
      </div>
      <div class="cat">
        <h1><a href="login.php" style="color:#ffffff; font-weight: 500; font-size:30px; text-decoration:none;">LOGIN</a></h1>
        <h4>Already a user?</h4>
      </div>
    </nav>
    <div class="jungle">
      <div class="gazelle">
        <form method="post" action="../logic/Register.php" enctype="multipart/form-data">
          <div class="username">
          <input type="text" name="username" placeholder="Username">
        </div>
          <div class="email">
          <input type="email" name="email_address" placeholder="Email Address">
        </div>
        <div class="passcode">
          <input type="password" name="password_a" placeholder="Input password:">
          <input type="password" name="password_b" placeholder="Confirm password:">
        </div>
        <div class="blowup">
          <select name="title">
            <option value="" selected disabled>Select your Title</option>
            <option value="Learner">Learner</option>
            <option value="Pharmacist">Pharmacist</option>
            <option value="Medical_Professional">Medical Professional</option>
          </select>
          <input type="text" name="fullname" placeholder="fullname">
        </div>
          <div class="imarage">
            <input type="file" name="photo" placeholder="Choose an image">
          </div>
          <div class="words">
          <input type="submit" name="register" value="submit">
        </div>
        </form>
    </div>
      <div class="lion">
        <h1>STAYING</h1><h1> HEALTHY</h1>
        <h4>Optimal Personal Health</h4>
      </div>
  </div>
    </body>
</html>

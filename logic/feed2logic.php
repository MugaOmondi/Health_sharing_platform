<?php
  include('config.php');


  if(!isset($_SESSION['username'])){
    header('location: login.php');
  }else {
    $username=$_SESSION['username'];

    $sqlie="SELECT * FROM users WHERE username=('$username')";
    $effective = mysqli_query($conn, $sqlie);
    $them=mysqli_fetch_assoc($effective);
    $Droid=$them['id'];
  }
    $id =   $Droid;
  //using the ID check user settings and deliver posts to that category;
  //this will require the session variable username

  $sql="SELECT * FROM posts WHERE user_id != ('$id')";
  $result=mysqli_query($conn, $sql);
  $seeders=mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

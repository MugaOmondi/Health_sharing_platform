<?php
include('config.php');
session_start();
if(!isset($_SESSION['username'])){
  header('location: login.php');
}else {
  $username=$_SESSION['username'];

  $sqlie="SELECT * FROM users WHERE username=('$username')";
  $effective = mysqli_query($conn, $sqlie);
  $them=mysqli_fetch_assoc($effective);
  $id=$them['id'];
}


$errors=array();

if(isset($_POST['suggest'])){
  $tip=$_POST['suggests'];
  if(empty($tip)){
    array_push($errors,'This field is required');

  }
  if (count($errors)==0){
    $sql="INSERT INTO suggestions(suggestion, users_id) VALUES('$tip','$id')";
    mysqli_query($conn, $sql);
    header('location: ../Pages/Homepage.php');
  }
}

 ?>

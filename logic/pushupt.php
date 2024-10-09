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

if(isset($_POST['update'])){
  $id = $_POST['id'];
 $keywords= $_POST['keywords'];
 $title =$_POST['title'];
 $category = $_POST['category'];

 $sql="UPDATE tipset SET keywords=('$keywords'), title=('$title'), category=('$category') WHERE id=('$id')";
 mysqli_query($conn, $sql);
}
?>

<?php
include ('config.php');
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
if(isset($_GET['del'])){
  $id=$_GET['del'];
$sql="DELETE FROM posts WHERE id=('$id')";
mysqli_query($conn, $sql);
}
 ?>

<?php
include('config.php');
if(!isset($_SESSION['username'])){
  header('location: login.php');
}else {
  $username=$_SESSION['username'];

  $sqlie="SELECT * FROM users WHERE username=('$username')";
  $effective = mysqli_query($conn, $sqlie);
  $them=mysqli_fetch_assoc($effective);
  $id=$them['id'];
}


$sql="SELECT * FROM suggestions WHERE users_id=('$id')";
$result=mysqli_query($conn,$sql);
$tips=mysqli_fetch_all($result, MYSQLI_ASSOC);


$sql1="SELECT * FROM suggestions WHERE users_id !=('$id')";
$rest=mysqli_query($conn,$sql1);
$pips=mysqli_fetch_all($rest, MYSQLI_ASSOC);
 ?>

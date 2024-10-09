
<?php

if(!isset($_SESSION['username'])){
  header('location: login.php');
}else {
  $username=$_SESSION['username'];

  $sqlie="SELECT * FROM users WHERE username=('$username')";
  $effective = mysqli_query($conn, $sqlie);
  $them=mysqli_fetch_assoc($effective);
  $id=$them['id'];
}
include('config.php');

if(!isset($_GET['page'])){
  $page_number=1;
}else{
  $page_number=$_GET['page'];
}
$limit = 2;
$initial_page=($page_number-1) * $limit;

$sql="SELECT * FROM posts";
$result=mysqli_query($conn, $sql);
$total_rows=mysqli_num_rows($result);
$total_pages=ceil($total_rows/$limit);

$query="SELECT * FROM posts LIMIT $initial_page,$limit";
$res=mysqli_query($conn,$query);





 ?>

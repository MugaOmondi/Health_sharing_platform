<?php
if(!isset($_SESSION['username'])){
  header('location: login.php');
}else {
  $username=$_SESSION['username'];

  $sqlie="SELECT * FROM users WHERE username=('$username')";
  $effective = mysqli_query($conn, $sqlie);
  $them=mysqli_fetch_assoc($effective);
  $Did=$them['id'];
}
  include('config.php');
  $id = $Did;
  //using the ID check user settings and deliver posts to that category;
  //this will require the session variable username
  if(!isset($_GET['page'])){
    $page_number=1;
  }else{
    $page_number=$_GET['page'];
  }
  $limit = 3;
  $initial_page=($page_number-1) * $limit;

  $sql="SELECT * FROM posts WHERE user_id != ('$id')";
  $result=mysqli_query($conn, $sql);
  $total_rows=mysqli_num_rows($result);
  $total_pages=ceil($total_rows/$limit);

  $sql="SELECT * FROM posts WHERE user_id != ('$id') LIMIT $initial_page,$limit";
  $seeds=mysqli_query($conn, $sql);


?>

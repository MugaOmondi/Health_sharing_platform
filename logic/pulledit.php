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
//$id=4;//make this dynamic

if(isset($_POST['update'])){
  $Depid = $id;
  $heading = $_POST['heading'];
  $category=$_POST['category'];
  $description=$_POST['description'];
  $post_body=$_POST['post_body'];
    $keywords=$_POST['keywords'];
    if(empty($heading)){
      array_push($errors,'This field is required');
    }
    if(empty($category)){
      array_push($errors,'This field is required');
    }
    if(empty($description)){
      array_push($errors,'This field is required');
    }
    if(empty($post_body)){
      array_push($errors,'This field is required');
    }
    if(empty($keywords)){
      array_push($errors,'This field is required');
    }
if(count($errors)==0){
  $sql="UPDATE posts SET heading=('$heading'), category=('$category'),description=('$description'),
  post_body=('$post_body'), keywords=('$keywords') WHERE id=('$Depid')";
  mysqli_query($conn, $sql);
}

}

 ?>

<?php
include('config.php');
//if there an existent set in the database echo better go and edit
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

$userid=$id;
$errors=array();
if(isset($_POST['settings'])){
 $keywords= $_POST['keywords'];
 $title =$_POST['title'];
 $category = $_POST['category'];

$query="SELECT * FROM tipset WHERE users_id=('$userid')";
$res=mysqli_query($conn, $query);
$user=mysqli_fetch_assoc($res);

if($user){
  array_push($errors,'Please edit the settings you already have');
}

 //add the condition here
 if(count($errors)==0){
   $sql="INSERT INTO tipset(keywords,title,category,users_id) VALUES('$keywords','$title','$category',$userid)";
   mysqli_query($conn, $sql);
   header('location: ../Pages/Settings.php')
 }
var_dump($errors);
}
?>

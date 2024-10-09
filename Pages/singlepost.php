<?php
include('../logic/config.php');
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

 ?>
<?php

if(isset($_GET['view']))

$id=$_GET['view'];

$sql = "SELECT * FROM posts WHERE id=('$id')";
$posts = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($posts);
 ?>
 <?php require_once('../logic/profile.php');
$peoples = people();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" type="text/css" href="../css/main.css">
   </head>
   <body>
     <div class="main">
       <div class="object">

     <?php $filename = $result['photo'];
     $imageurl="../logic/uploads/".$filename;
     echo "<img src='$imageurl' style='height:150px; width:300px; padding-left:10px;'>";
     ?>
<p><?php echo $result['description']; ?></p>
<p><?php echo $result['category']; ?><p>
  <div class="directions">
    <button><a href="feeds.php">Feeds</a></button>
    <button><a href="homepage.php">Homepage</a></button>
    <button><a href="settings.php">Settings</a></button>
  </div>
</div>
<div class="content">
  <h1><?php echo $result['heading']; ?></h1>
   <p><?php echo $result['keywords']; ?><p>
     <p><?php echo $result['post_body']; ?><p>
     </div>
</div>
<div class="pason">
  <?php $persona = $result['user_id'];?>
 <?php foreach ($peoples as $people) {?>
    <?php if($people['id'] == $persona){ ?>
      <h1><?php echo $people['fullname'];?></h1>
      <?php $felea = $people['photo'];
      $imagerurl="../logic/uploads/".$felea;
      echo "<img src='$imagerurl' style='height:70px; width:70px; border-radius:50px; margin-left:300px;'>";
      ?>
    <?php } ?>
<?php     }?>
</div>
   </body>
 </html>

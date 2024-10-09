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
require_once('../logic/profile.php');
$childs=suggests();

?>
<?php include('../logic/feed2logic.php'); ?>
<?php
include('../logic/config.php');

if(isset($_GET['edit']))
//should add an else to prevent access through the url bar
$id=$_GET['edit'];
//$update = true;
$record = "SELECT * FROM posts where id=('$id') ";
$result = mysqli_query($conn, $record);
$post = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head >
  <meta charset="utf-8">
  <title>Edit Page</title>
    <link rel="stylesheet" type="text/css" href="../css/profile2.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
     <link rel="stylesheet" type="text/css" href="../css/extra.css">
     <link rel="stylesheet" type="text/css" href="../css/refiner.css">
</head>
<body>
  <div class="extapolate">
  <div class="lower">
  <form  action="../logic/pulledit.php" method="post"
  enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" id="head" name="heading" value="<?php echo $post['heading']; ?>">
    <input type="text" id="category" name="category" value="<?php echo $post['category']; ?>">
    <div class="mezanine">
    <textarea id="description" name="description" style="resize: none;"><?php echo $post['description']; ?></textarea>
    </div>
    <div class="mezanine">
    <textarea name="post_body" id="post_body" style="resize: none;" ><?php echo $post['post_body']; ?></textarea>
    </div >
  <!-- update in db with the individuals title -->
  <div class="mezanine1">
    <textarea name="keywords" id="keywordsx" style="resize: none;"><?php echo $post['keywords']; ?></textarea>
    </div >
    <div class="mezanine2">
    <input type="file" name="photo" value="">
    <div class="mezanine3">
    <input type="submit" style="color:#ffffff; font-family:'Jura'" name="update" value="Edit">
  </div>
  </div>
  </form>
    </div>
    <div class="sugget">
    <?php foreach($childs as $child):?>
      <div class="suggests">
      <p><?php echo $child['suggestion']; ?></p>
    </div>
    <?php endforeach ?>
    </div>

</div>
<div class="side">
  <?php foreach ($seeders as $seeder): ?>
    <div class="possers">
        <h1><?php  echo $seeder['heading']; ?></h1>
        <h5><?php echo $seeder['keywords'];?></h5>
        <p><?php  echo $seeder['description']; ?></p>
        <div class="edeta">
          <a href="singlepost.php?view=<?php echo $seeder['id']; ?>">Read More</a>
      </div>
    </div>
    <?php endforeach ?>
</div>
</body>
<html>

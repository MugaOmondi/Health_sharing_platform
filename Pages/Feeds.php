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
$maprofile = profiledetails();
?>
<?php include('../logic/feedslogic.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/feeds.css">
  </head>
  <body>
    <nav>
      <div class="directions">
      <button><a href="homepage.php"  style="color:#ffffff; text-decoration: none;">Homepage</a></button>
      <button><a href="settings.php" style="color:#ffffff; text-decoration: none;">Settings</a></button>
    </div>

    <?php
    $filenom = $maprofile['photo'];
    $imagerUrl = "../logic/uploads/".$filenom;
    echo "<img src='$imagerUrl' style='width:40px; height:40px; border-radius:150px; margin-top:15px; margin-bottom:20px'>";
    ?>
    <div class="logout">
    <h1 id="name"><?php echo $maprofile['fullname']; ?></h1>
    <div class="ogout">
    <a href="logout.php">Logout.php</a>
  </div>
</div>
    </nav>
    <div class="poster">
      <?php while ($row = mysqli_fetch_array($seeds)){ ?>
        <div class="posters">
            <h1><?php  echo $row['heading']; ?></h1>
            <h5><?php echo $row['keywords'];?></h5>
            <p><?php  echo $row['description']; ?></p>
            <div class="edet">
              <a href="singlepost.php?view=<?php echo $row['id']; ?>">Read More</a>
            </div>
          </div>
          <hr>
    <?php  } ?>
<br>
    <div class="page">
          <?php

          for($page_number=1;$page_number<=$total_pages;$page_number++){ ?>
    <div class="pagers">
          <?php  echo '<a href="feeds.php?page='.$page_number.'">'.$page_number.'</a>'; ?>
      </div>
        <?php  }
          ?>
    </div>
  </div>


<div class="sugget">
<?php foreach($childs as $child):?>
  <div class="suggests">
  <p><?php echo $child['suggestion']; ?></p>
</div>
<?php endforeach ?>
</div>
  </body>
</html>

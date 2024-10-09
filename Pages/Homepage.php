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
<?php include('../logic/pagination.php'); ?>
<?php include('../logic/suggestions.php'); ?>
<?php require_once('../logic/profile.php');

$maprofile = profiledetails();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome: Muuguzi</title>
    <link rel="stylesheet" type="text/css" href="../css/homepage.css">
    <link rel="stylesheet" type="text/css" href="../css/homepage2.css">
      <link rel="stylesheet" type="text/css" href="../css/navbar.css">
      <link rel="stylesheet" type="text/css" href="../css/refiner2.css">
  </head>
  <body>
    <nav>
      <div class="pagename">
        <h1>STAYING HEALTHY</h1>
        <h4>Optimal personal heahlth</h4>
        </div>

        <form class="search" action="" method="post">

          <input type="search" name="search_keyword" placeholder="Please input a topic">
          <input type="submit" id="sub" style="color:#ffffff; font-family:Jura;" name="search" value="search">
        </form>

        <!--image and name from database-->
        <h3><?php echo $maprofile['fullname']; ?></h3>
        <?php
        $filenom = $maprofile['photo'];
        $imagerUrl = "../logic/uploads/".$filenom;
        echo "<img src='$imagerUrl' style='width:40px; height:40px; border-radius:150px; padding-top:5px; '>";
        ?>
        <div class="directions">
        <button ><a href="settings.php" style="color:#ffffff; font-family:Jura;">Settings</a></button>
        <button ><a href="feeds.php" style="color:#ffffff; font-family:Jura;">Feeds</a></button>
      </div>
      </nav>
      <br>
      <br>
      <div class="leftie">
        <?php while ($row = mysqli_fetch_array($res)){ ?>
          <div class="details">
            <?php
            $fileName = $row['photo'];
            $imageUrl = "../logic/uploads/".$fileName;
            echo "<img src='$imageUrl' style='width:300px; height:150px'>";
            ?>
              <h2><?php  echo $row['heading']; ?></h2>
            </div>
            <div class="description">
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
      <?php  echo '<a href="Homepage.php?page='.$page_number.'">'.$page_number.'</a>'; ?>
  </div>
    <?php  }
      ?>
</div>
    </div>

        <br>
        <div class="rightie">
          <form class="tipper" action="../logic/tips.php" method="post">

            <textarea name="suggests" id="reefer" placeholder="Make a suggestion:" style="resize:none;"> </textarea>
              <div class="pour">
            <input type="submit" id="tippin" style="color:#ffffff; font-family:Jura; " name="suggest" value="Submit">
          </div>
          </form>
          <div class="personal">
          <?php foreach ($tips as $tip): ?>
            <p><?php echo $tip['suggestion'];?></p>
          <?php endforeach ?>
        </div>
          <div class="yell">
            <h4>
              SUGGESTIONS TIPS & TRICKS</h4>
              <div class="personalc">
              <?php foreach ($pips as $pip): ?>
                <p><?php echo $pip['suggestion'];?></p>
              <?php endforeach ?>
            </div>

            </div>
          </div>
  </body>
</html>

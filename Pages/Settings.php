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
<?php require_once('../logic/profile.php');
$personals = personalpost();
$individuals = personaltips();
$maprofile = profiledetails();
$tipser = prefsettings();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Muuguzi: Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/settings.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
      <link rel="stylesheet" type="text/css" href="../css/profile2.css">
        <link rel="stylesheet" type="text/css" href="../css/refiner.css">
      <link rel="stylesheet" type="text/css" href="../css/navbar.css">
  </head>
  <body>
    <nav>
      <div class="pagename">
    <h1>STAYING HEALTHY</h1>
    <h4>Optimal Personal Health</h4>
    </div>
    <div class="directions2">
    <button type="button"  name="button"><a href="homepage.php"  style="color:#ffffff; text-decoration: none; font-family:Jura;">Homepage</a></button>
    <button type="button"  name="button"><a href="feeds.php" style="color:#ffffff; text-decoration: none; font-family:Jura;">Feeds</a></button>
  </div>
    </nav>
    <br>
    <div class="leftie">
      <div class="dets">
      <div class="echoed">
        <?php
        $filenom = $maprofile['photo'];
        $imagerUrl = "../logic/uploads/".$filenom;
        echo "<img src='$imagerUrl' style='width:100px; height:100px; border-radius:150px; '>";
        ?>
      </div>
      <div class="name">
        <h1><?php echo $maprofile['username']; ?></h1>
        <?php foreach ($tipser as $tipse): ?>
          <div class="act">
          <div class="act1">
        <h4>Keywords</h4>
        <p><?php echo $tipse['keywords']; ?></p>
      </div>
      <div class="act1">
        <h4>title</h4>
        <p><?php echo $tipse['title']; ?></p>
      </div>
      <div class="act1">
        <h4>Category</h4>
        <p><?php echo $tipse['category']; ?></p>
      </div>
    </div>
    <br>
      <div class="edet">
          <a href="../pages/setedit.php?edit=<?php echo $tipse['id']; ?>">Edit</a>
          <a href="../logic/setdelete.php?del=<?php echo $tipse['id']; ?>">Delete</a>
        </div>
      <?php endforeach ?>
      </div>
      <div class="switch">
          <a href="javascript:;" onmousedown="toggleDiv('mydiv');">Switch</a>
        </div>
    </div>
      <!-- posts  and profile details -->
      <br>


      <div class="personal" id="mydivon" style="display:block;">
        <div class="paragraph1">
        <?php foreach ($personals as $personal): ?>
          <div class="echo">
            <?php
            $fileName = $personal['photo'];
            $imageUrl = "../logic/uploads/".$fileName;
            echo "<img src='$imageUrl' style='width:100px; height:130px; border-radius:10px; '>";
            ?>
          </div>
            <div class="reverb">
              <h2><?php  echo $personal['heading']; ?></h2>


              <p><?php  echo $personal['description']; ?></p>
                <div class="edet">
              <a href="../pages/edit.php?edit=<?php echo $personal['id']; ?>">Edit</a>
                <a href="../logic/delete.php?del=<?php echo $personal['id']; ?>">Delete</a>
                  <a href="singlepost.php?view=<?php echo $personal['id']; ?>">Preview</a>
              </div>
              </div>
      <?php  endforeach ?>

    </div>
      </div>
<div class="ress" id="mydivoff" style="display:none;" >
  <div class="paragraph2">

      <?php foreach ($individuals as $individual): ?>
        <p ><?php echo $individual['suggestion'];?></p>
      <?php endforeach ?>

</div>
</div>
</div>
<script>
function toggleDiv(divid){

  varon = divid + 'on';
  varoff = divid + 'off';

  if(document.getElementById(varon).style.display=='block'){
    document.getElementById(varon).style.display = 'none';
    document.getElementById(varoff).style.display = 'block';
  }
  else{
    document.getElementById(varoff).style.display = 'none';
    document.getElementById(varon).style.display = 'block';
  }
}
</script>

<div class="rightie">
        <h2>SETTINGS</h2>
        <div class="top" id="toppest">
        <form  action="../logic/preference.php" method="post">
          <textarea name="keywords" id="setter" style="resize: none;"></textarea>
          <div class="middle">
          <select name="title">
            <option value="" selected disabled>Select your Title</option>
            <option value="Learner">Learner</option>
            <option value="Pharmacist">Pharmacist</option>
            <option value="Medical_Professional">Medical Professional</option>
          </select>
          <div class="mezanine">
          <input type="text" name="category" placeholder="category">
        </div>
        </div>
        <div class="floor">
          <input type="submit" style="color:#ffffff; font-family:Jura;" name="settings" value="submit">
        </div>
        </form>
      </div>
          <h2>CREATE A POST</h2>
          <div class="lower">
          <form  action="../logic/post.php" method="post"
          enctype="multipart/form-data">
            <input type="text" id="head" name="heading" placeholder="Heading">
            <input type="text" id="category" name="category" placeholder="category">
            <div class="mezanine">
            <textarea id="description" name="description" placeholder="Description" style="resize: none;"></textarea>
          </div>
            <div class="mezanine">
            <textarea name="post_body" id="post_body" style="resize: none;"></textarea>
          </div>
          <!-- update in db with the individuals title -->
            <div class="mezanine1">
              <!--rows="4" cols="40" -->
            <textarea name="keywords" id="keywordsx"></textarea>
          </div >
          <div class="mezanine2">
            <input type="file" name="photo" value="select image">
            <div class="mezanine3">
            <input type="submit" style="color:#ffffff; font-family:Jura;" name="post" value="Post">
          </div>
          </div>
          </form>
        </div>
      </div>


  </body>
</html>

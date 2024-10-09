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
$record = "SELECT * FROM tipset where id=('$id') ";
$result = mysqli_query($conn, $record);
$post = mysqli_fetch_assoc($result);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" type="text/css" href="../css/profile3.css">
     <link rel="stylesheet" type="text/css" href="../css/extra.css">
      <link rel="stylesheet" type="text/css" href="../css/refiner.css">
   </head>
   <body>
     <div class="toper">
       <div class="top">
     <form  action="../logic/pushupt.php" method="post">
       <input type="hidden" name="id" value="<?php echo $id ?>;">

       <textarea name="keywords" id="setter" style="resize: none;"><?php echo $post['keywords']; ?></textarea>
       <div class="middle">
       <select name="title">
         <option value="<?php echo $post['title']; ?>" selected><?php echo $post['title']; ?></option>
         <?php
         $katana =  $post['title'];
         if($katana == 'Learner'){
           echo "<option value='Learner' disabled>Learner</option>";
         } else{
           echo "<option value='Learner'>Learner</option>";
         }
         ?>
         <?php
         $katana =  $post['title'];
         if($katana == 'Pharmacist'){
           echo "<option value='Pharmacist' disabled>Pharmacist</option>";
         } else{
           echo "<option value='Pharmacist'>Pharmacist</option>";
         }
         ?>
         <?php
         $katana =  $post['title'];
         if($katana == 'Medical_Professional'){
           echo "<option value='Medical_Professional' disabled>Medical_Professional</option>";
         } else{
           echo "<option value='Medical_Professional'>Medical_Professional</option>";
         }
         ?>
       </select>
       <div class="mezanine">
       <input type="text" name="category" value="<?php echo $post['keywords']; ?>">

     </div>
     </div>
     <div class="floor">
        <input type="submit" style="color:#ffffff; font-family:'Jura'"  name="update" value="Edit">
        </div>
     </form>
     </div>
     <div class="bottom">
       <div class="sugget1">
       <?php foreach($childs as $child):?>
         <div class="suggests">
         <p><?php echo $child['suggestion']; ?></p>
       </div>
       <?php endforeach ?>
       </div>
     </div>

  </div>

    <div class="side">
      <?php foreach ($seeders as $seeder): ?>
        <div class="posters">
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
 </html>

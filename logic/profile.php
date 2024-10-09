<?php
include('config.php');
if(!isset($_SESSION['username'])){
  header('location: login.php');
}else {
  $username=$_SESSION['username'];

  $sqlie="SELECT * FROM users WHERE username=('$username')";
  $effective = mysqli_query($conn, $sqlie);
  $them=mysqli_fetch_assoc($effective);
  $id=$them['id'];
}

function personalpost(){
  global $conn;
    global $id;
  $sql="SELECT * FROM posts WHERE user_id=('$id')";
  $result=mysqli_query($conn, $sql);
  $personals=mysqli_fetch_all($result,  MYSQLI_ASSOC);

  return $personals;

}
function personaltips(){
  global $conn;

    global $id;
  $sql="SELECT * FROM suggestions WHERE users_id=('$id')";
  $rest=mysqli_query($conn, $sql);
  $individuals=mysqli_fetch_all($rest,  MYSQLI_ASSOC);

  return $individuals;

}
function profiledetails(){
  global $conn;
  global $id;
  $sql="SELECT * FROM users WHERE id=('$id')";
  $answer=mysqli_query($conn, $sql);
  $maprofile=mysqli_fetch_assoc($answer);


  return $maprofile;

}

function prefsettings(){
  global $conn;
  global $id;
  $query="SELECT * FROM tipset WHERE users_id=('$id')";
  $setts=mysqli_query($conn, $query);
  $tipser= mysqli_fetch_all($setts, MYSQLI_ASSOC);

  return $tipser;
}

function suggests(){
  global $conn;

  global $id;

  $sql="SELECT * FROM suggestions WHERE users_id !=('$id')";
  $rest=mysqli_query($conn, $sql);
  $childs=mysqli_fetch_all($rest,  MYSQLI_ASSOC);

  return $childs;

}
function people(){
  global $conn;

  $sql="SELECT * FROM users ";
  $result=mysqli_query($conn, $sql);
  $peoples=mysqli_fetch_all($result,  MYSQLI_ASSOC);

  return $peoples;

}



 ?>

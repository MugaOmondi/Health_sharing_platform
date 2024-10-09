<?php
include('config.php');

$errors=array();
if(isset($_POST['login'])){
  $email_address=$_POST['email_address'];
  $password=$_POST['password'];

  if(empty($email_address)){
    array_push($errors,'This field is required');
  }
if(empty($password)){
    array_push($errors,'This field is required');
  }
  //var_dump($errors);

//$user=mysqli_fetch_assoc($result);
if(count($errors)==0){
  $pass=md5($password);
  $query="SELECT * FROM users WHERE email_address=('$email_address') AND password=('$pass')";
  $result=mysqli_query($conn, $query);

  if(mysqli_num_rows($result)==1){
    $usernom=mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['username'] = $usernom['username'];
    header('location: ../Pages/Homepage.php');
  }
}

}//end of bracet
?>

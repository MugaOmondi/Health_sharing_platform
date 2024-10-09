<?php
include('config.php');

$errors=array();

if(isset($_POST['register'])){
  //declare the variables
  $username = $_POST['username'];
  $email_address=$_POST['email_address'];
  $password_a=$_POST['password_a'];
  $password_b=$_POST['password_b'];
    $title=$_POST['title'];
      $fullname=$_POST['fullname'];

      if(empty($username)){
        array_push($errors,'This field is required');
      }
      if(empty($email_address)){
        array_push($errors,'This field is required');
      }
      if(empty($title)){
        array_push($errors,'This field is required');
      }
      if(empty($fullname)){
        array_push($errors,'This field is required');
      }
    //var_dump($errors);
    if($password_a!=$password_b){
      array_push($errors,'The Passwords do not match');
    }
    $sql="SELECT * FROM users WHERE username = ('$username') OR email_address=('$email_address')";
    $rest=mysqli_query($conn, $sql);
    $answer=mysqli_fetch_assoc($rest);
    if($answer){
      if($answer['username']==$username){
        array_push($errors, 'This user alraedy exists');
      }
      if($answer['email_address']==$email_address){
        array_push($errors,'This email adress is already taken');
      }
    }
//fecth to check if a user exists with the same username or email_address
//$sql select from
if(isset($_FILES) & !empty($_FILES)){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $tmp_name=$_FILES['photo']['tmp_name'];

  $max_size=20000000;
  $extension=substr($name,strpos($name,'.')+1);

  if(isset($name) && !empty($name)){
    if(($extension == "jpg" || $extension == "jpeg") && $type=="image/jpeg"
    && $size<=$max_size){
      $location="uploads/";
      if(move_uploaded_file($tmp_name, $location.$name)){
        $password=md5($password_a);
        $query="INSERT INTO users(username,email_address,title,fullname,password,photo) VALUES('$username','$email_address'
        ,'$title','$fullname','$password','$name')";
        mysqli_query($conn, $query);
        session_start();
        $_SESSION['username'] = $usernom['username'];
        header('location: ../Pages/Homepage.php');
      }else{
        echo "Failed to upload to database";
      }//the sql
    } //checking extension name
    else{
      array_push($errors,'This is not a jpeg image');
    }
  }//checking the name variable
  else{
    array_push($errors, 'Please input an image');
  }
}
    /*if(count($errors)==0){
      $query="INSERT INTO users(username,email_address,title,fullname,password) VALUES('$username','$email_address'
      ,'$title','$fullname','$password_a')";
      mysqli_query($conn, $query);
      echo "Submission Succesful";
    }
    var_dump($errors);*/

}//end of document


 ?>

<?php
include('config.php');
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

$errors=array();
if(isset($_POST['post'])){
  $Depid=$id;
  $heading = $_POST['heading'];
  $category=$_POST['category'];
  $description=$_POST['description'];
  $post_body=$_POST['post_body'];
    $keywords=$_POST['keywords'];
    if(empty($heading)){
      array_push($errors,'This field is required');
    }
    if(empty($category)){
      array_push($errors,'This field is required');
    }
    if(empty($description)){
      array_push($errors,'This field is required');
    }
    if(empty($post_body)){
      array_push($errors,'This field is required');
    }
    //Limiting the word Count

    //(a) trim off the beginning and end spaces trim(variable).
    //(b) get an array of the word count explode(" ", variable).
    //(c) get the wordcount sizeof(variable).
    //(d) check the size.

    // alternatively use str_word_count.

    if(empty($keywords)){
      array_push($errors,'This field is required');
    }

    //var_dump($errors);

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
              $sql="INSERT INTO posts(heading,category,description,keywords,post_body,photo,user_id)
              VALUES('$heading','$category','$description'
              ,'$keywords','$post_body','$name','$Depid')";
              mysqli_query($conn, $sql);
              header('location: ../Pages/Settings.php');
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
      }//end of the file is not empty
      /* else{
      if count of array is zero
        $query="INSERT INTO posts(heading,category,description,keywords,post_body)
        VALUES('$heading','$category','$description'
        ,'$keywords','$post_body')";
        mysqli_query($conn,$query);
      }*/
      var_dump($errors);
}
 ?>

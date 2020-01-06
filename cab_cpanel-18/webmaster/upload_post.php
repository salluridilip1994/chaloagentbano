<?php
include "initialization.php";

check_logged_in();

if(isset($_POST['submit'])) {


  $title=mysqli_real_escape_string($con,$_POST['post_title']);
  $description=mysqli_real_escape_string($con,$_POST['description']);
  $content=mysqli_real_escape_string($con,$_POST['content']);
  $source=mysqli_real_escape_string($con,$_POST['post_source']);


     $userId=$_SESSION['id'];
     $sql = "INSERT INTO `blog`(`post_title`, `post_desc`, `post_content`, `source`, `User-Id`)
             VALUES ('$title','$description','$content','$source','$userId')";

     if(mysqli_query($con,  $sql))
     {
      $_SESSION['post_upl_scs']="upload success";
      header('Location:dashboard_wm.php');
    }
    else
     {
        $_SESSION['error']="upload error";
        header('Location:dashboard_wm.php');
     }
    
}

mysqli_close($con);
?>
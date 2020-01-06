<?php
include "initialization.php";

check_logged_in();
if(isset($_POST['submit'])) {


  $title=mysqli_real_escape_string($con,$_POST['Article_Title']);
  $source=mysqli_real_escape_string($con,$_POST['Article_Source']);
  $disc=mysqli_real_escape_string($con,$_POST['description']);
  $date=$_POST['Article_Date'];

  $filename = mysqli_real_escape_string($con,$_FILES['Article']['name']);
  $filetmpname = $_FILES['Article']['tmp_name'];
  $filesize = $_FILES['Article']['size'];
  $fileerror = $_FILES['Article']['error'];
  $filetype = $_FILES['Article']['type'];

  session_start();

  $fileExt=explode('.',$filename);
  $fileActualExt=strtolower(end($fileExt));

  $allowedExt=array('jpg','jpeg','png','pdf','docx');

  if(in_array($fileActualExt,$allowedExt))
  {
   if ($filesize<50000000) {
     $fileNewname=uniqid('',true).'.'.$fileActualExt;
     $file_dest_path = "./img/Articles/".$fileNewname;
     move_uploaded_file($filetmpname,$file_dest_path);
     
     $userId=$_SESSION['id'];
     $sql = "INSERT INTO `article`(`File_Name`, `Title`,`Description`, `File_Path`, `Source`, `Published_Date`, `Content-type`,`User_Id`)
     VALUES ('$fileNewname','$title','$disc','$file_dest_path','$source','$date','$filetype','$userId')";
      // echo $sql;

     if(mysqli_query($con,  $sql))
     {
     $_SESSION['article_upl_scs']="upload success";
     header('Location:dashboard_wm.php');
     }
     else
     {
        $_SESSION['error']="upload error";
        header('Location:dashboard_wm.php');
     }
     
   }
   else{
    $_SESSION['article_size_er']="Your file is too big";
    header('Location:dashboard_wm.php');
  }
}
else {
  $_SESSION['no_article_type']="You can Not Upload files of this type";
  header('Location:dashboard_wm.php');
}

}
?>
<?php
include "initialization.php";

check_logged_in();

if(isset($_POST['submit'])) {


  $title=mysqli_real_escape_string($con,$_POST['form_Title']);
  $source=mysqli_real_escape_string($con,$_POST['form_Source']);
  $description=mysqli_real_escape_string($con,$_POST['description']);

  $filename = mysqli_real_escape_string($con,$_FILES['form']['name']);
  $filetmpname = $_FILES['form']['tmp_name'];
  $filesize = $_FILES['form']['size'];
  $fileerror = $_FILES['form']['error'];
  $filetype = $_FILES['form']['type'];

  session_start();
  
  $fileExt=explode('.',$filename);
  $fileActualExt=strtolower(end($fileExt));

  $allowedExt=array('pdf','docx');

  if(in_array($fileActualExt,$allowedExt)){
    
   if ($filesize<50000000) {
     $fileNewname=uniqid('',true).'.'.$fileActualExt;
     $file_dest_path = "./img/Forms/".$fileNewname;
     move_uploaded_file($filetmpname,$file_dest_path);
     
     $userId=$_SESSION['id'];
     $sql = "INSERT INTO `forms`( `Name`, `Title`, `Description`, `Path`, `Source`, `Content-type`, `User_id`)
     VALUES ('$fileNewname','$title', '$description','$file_dest_path','$source','$filetype','$userId')";
      // echo $sql;

     if(mysqli_query($con,  $sql))
     {
     $_SESSION['form_upl_scs']="upload success";
     header('Location:dashboard_wm.php');
     }
     else
     {
        $_SESSION['error']="upload error";
        header('Location:dashboard_wm.php');
     }
     
   }
   else{
    $_SESSION['form_size_er']="Your file is too big";
    header('Location:dashboard_wm.php');
  }
}
else {
  $_SESSION['no_form_type']="You can Not Upload files of this type";
  header('Location:dashboard_wm.php');
}
}

mysqli_close($con);
?>
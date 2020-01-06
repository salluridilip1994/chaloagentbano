<?php
include "initialization.php";

check_logged_in();

if(isset($_POST['submit'])) {


  $title=mysqli_real_escape_string($con,$_POST['paper_title']);
  $source=mysqli_real_escape_string($con,$_POST['paper_source']);
  $description=mysqli_real_escape_string($con,$_POST['description']);

  $filename = mysqli_real_escape_string($con,$_FILES['paper']['name']);
  $filetmpname = $_FILES['paper']['tmp_name'];
  $filesize = $_FILES['paper']['size'];
  $fileerror = $_FILES['paper']['error'];
  $filetype = $_FILES['paper']['type'];
  
  $fileExt=explode('.',$filename);
  $fileActualExt=strtolower(end($fileExt));

  $allowedExt=array('pdf');

  if(in_array($fileActualExt,$allowedExt)){
    
   if ($filesize<5000000000) {
     $fileNewname=uniqid('',true).'.'.$fileActualExt;
     $file_dest_path = "./img/mocktest/".$fileNewname;
     move_uploaded_file($filetmpname,$file_dest_path);
     
     $userId=$_SESSION['id'];
     $sql = "INSERT INTO `mock_test`(`File_Name`, `Title`, `Description`, `File_Path`, `Source`, `Content-type`,`User_Id`)
     VALUES ('$fileNewname','$title', '$description','$file_dest_path','$source','$filetype','$userId')";
      // echo $sql;

     if(mysqli_query($con,  $sql))
     {
      $_SESSION['paper_upl_scs']="upload success";
      header('Location:dashboard_wm.php');
    }
    else
     {
        $_SESSION['error']="upload error";
        header('Location:dashboard_wm.php');
     }
    
  }
  else{
    $_SESSION['paper_size_er']="Your file is too big";
    header('Location:dashboard_wm.php');
  }
}
else {
  $_SESSION['no_paper_type']="You can Not Upload files of this type";
  header('Location:dashboard_wm.php');
}
}

mysqli_close($con);
?>
<?php
include "initialization.php";

check_logged_in();

if(isset($_POST['submit'])) {


  $title=mysqli_real_escape_string($con,$_POST['inews_Title']);
  $source=mysqli_real_escape_string($con,$_POST['inews_Source']);
  $disc=mysqli_real_escape_string($con,$_POST['description']);
  $date=$_POST['inews_Date'];

  $filename = mysqli_real_escape_string($con,$_FILES['inews']['name']);
  $filetmpname = $_FILES['inews']['tmp_name'];
  $filesize = $_FILES['inews']['size'];
  $fileerror = $_FILES['inews']['error'];
  $filetype = $_FILES['inews']['type'];


  $fileExt=explode('.',$filename);
  $fileActualExt=strtolower(end($fileExt));

  $allowedExt=array('jpg','jpeg','png','pdf','docx');

  if(in_array($fileActualExt,$allowedExt))
  {
   if ($filesize<500000000) {
     $fileNewname=uniqid('',true).'.'.$fileActualExt;
     $file_dest_path = "img/inews/".$fileNewname;
     move_uploaded_file($filetmpname,$file_dest_path);

     
     
     $userId=$_SESSION['id'];
     $sql = "INSERT INTO `industry_news`(`File_Name`, `Title`,`Description`, `File_Path`, `Source`, `Published_Date`, `Content-type`,`User_Id`)
     VALUES ('$fileNewname','$title','$disc','$file_dest_path','$source','$date','$filetype',$userId )";
    //    echo $sql; die();

     if(mysqli_query($con,  $sql))
     {
       
      $_SESSION['inews_upl_scs']="upload success";
      header('Location:dashboard_wm.php');
       }
       else
     {
        $_SESSION['error']="upload error";
        header('Location:dashboard_wm.php');
     }    
      
    }
    else{
      $_SESSION['inews_size_er']="Your file is too big";
      header('Location:dashboard_wm.php');
    }
  }
  else {
    $_SESSION['no_inews_type']="You can Not Upload files of this type";
    header('Location:dashboard_wm.php');
  }

}
?>
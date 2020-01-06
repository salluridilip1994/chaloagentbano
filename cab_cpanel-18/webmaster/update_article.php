<?php
include "initialization.php";

check_logged_in();


if(isset($_POST['submit'])) {


    $title=mysqli_real_escape_string($con,$_POST['article_title']);
    $source=mysqli_real_escape_string($con,$_POST['article_source']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $published_date=mysqli_real_escape_string($con,$_POST['article_Date']);
    $userId=$_SESSION['id'];
    $article_id=$_GET['Id'];

    $sql="UPDATE `article` SET `Title`='$title', `Description`='$description',`Source`='$source',
    `Published_Date`='$published_date', `User_Id`='$userId'"; 

    $filename = mysqli_real_escape_string($con,$_FILES['article']['name']);
    $filetmpname = $_FILES['article']['tmp_name'];
    $filesize = $_FILES['article']['size'];
    $fileerror = $_FILES['article']['error'];
    $filetype = $_FILES['article']['type'];


    if ($filesize != 0 &&  $fileerror ==0 ){

        $fileExt=explode('.',$filename);
        $fileActualExt=strtolower(end($fileExt));

        $allowedExt=array('jpeg','jpg','png','pdf','docx');

        if(in_array($fileActualExt,$allowedExt)){
            
            if ($filesize<500000) {

                $fileNewname=uniqid('',true).'.'.$fileActualExt;
                $file_dest_path = "./img/Articles/".$fileNewname;
                move_uploaded_file($filetmpname,$file_dest_path);
                
                $sql=$sql. " , `File_Name`='$fileNewname',`File_Path`='$file_dest_path',
                `Content-type`='$filetype' ";
                
            }
        }
    }    
    $sql = $sql." WHERE `File_Id`=$article_id ;";
// print($sql)  ;
//  die();
    if(mysqli_query($con,  $sql))
    {
        $_SESSION['article_upd_scs']="update success";
        
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
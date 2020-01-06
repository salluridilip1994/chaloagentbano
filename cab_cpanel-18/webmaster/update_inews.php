<?php
include "initialization.php";

check_logged_in();

if(isset($_POST['submit'])) {


    $title=mysqli_real_escape_string($con,$_POST['inews_title']);
    $source=mysqli_real_escape_string($con,$_POST['inews_source']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $published_date=mysqli_real_escape_string($con,$_POST['inews_Date']);
    $userId=$_SESSION['id'];
    $paper_id=$_GET['Id'];

    $sql="UPDATE `industry_news` SET `Title`='$title', `Description`='$description',`Source`='$source',
    `Published_Date`='$published_date', `User_Id`='$userId'"; 

    $filename = mysqli_real_escape_string($con,$_FILES['inews']['name']);
    $filetmpname = $_FILES['inews']['tmp_name'];
    $filesize = $_FILES['inews']['size'];
    $fileerror = $_FILES['inews']['error'];
    $filetype = $_FILES['inews']['type'];


    if ($filesize != 0 &&  $fileerror ==0 ){

        $fileExt=explode('.',$filename);
        $fileActualExt=strtolower(end($fileExt));

        $allowedExt=array('docx','pdf','jpeg','jpg','png');

        if(in_array($fileActualExt,$allowedExt))
        {
            
            if ($filesize<500000) {

                $fileNewname=uniqid('',true).'.'.$fileActualExt;
                $file_dest_path = "./img/inews/".$fileNewname;
                move_uploaded_file($filetmpname,$file_dest_path);
                
                $sql=$sql. " , `File_Name`='$fileNewname',`File_Path`='$file_dest_path',
                `Content-type`='$filetype' ";
                
            }
        }
    }    
    $sql = $sql." WHERE `Id`=$paper_id ;";
    if(mysqli_query($con,  $sql))
    {
        $_SESSION['inews_upd_scs']="update success";
        
        header('Location:dashboard_wm.php');
    }
    else
     {
        $_SESSION['error']="update error";
        header('Location:dashboard_wm.php');
     }
}


mysqli_close($con);
?>
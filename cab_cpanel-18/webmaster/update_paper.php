<?php
include "initialization.php";

check_logged_in();

if(isset($_POST['submit'])) {


    $title=mysqli_real_escape_string($con,$_POST['paper_title']);
    $source=mysqli_real_escape_string($con,$_POST['paper_source']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $userId=$_SESSION['id'];
    $paper_id=$_GET['Id'];

    $sql="UPDATE `mock_test` SET `Title`='$title', `Description`='$description',`Source`='$source',
    `User_Id`='$userId'"; 

    $filename = mysqli_real_escape_string($con,$_FILES['paper']['name']);
    $filetmpname = $_FILES['paper']['tmp_name'];
    $filesize = $_FILES['paper']['size'];
    $fileerror = $_FILES['paper']['error'];
    $filetype = $_FILES['paper']['type'];


    if ($filesize != 0 &&  $fileerror ==0 ){

        $fileExt=explode('.',$filename);
        $fileActualExt=strtolower(end($fileExt));

        $allowedExt=array('docx','pdf');

        if(in_array($fileActualExt,$allowedExt)){
            
            if ($filesize<500000) {

                $fileNewname=uniqid('',true).'.'.$fileActualExt;
                $file_dest_path = "./img/mocktest/".$fileNewname;
                move_uploaded_file($filetmpname,$file_dest_path);
                
                $sql=$sql. " , `File_Name`='$fileNewname',`File_Path`='$file_dest_path',
                `Content-type`='$filetype' ";
                
            }
        }
    }    
    $sql = $sql." WHERE `Id`=$paper_id ;";
    if(mysqli_query($con,  $sql))
    {
        $_SESSION['paper_upd_scs']="update success";
        
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
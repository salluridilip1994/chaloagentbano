<?php
include "initialization.php";

check_logged_in();

if(isset($_POST['submit'])) {


    $blog_title=mysqli_real_escape_string($con,$_POST['blog_title']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $content=mysqli_real_escape_string($con,$_POST['content']);
    $source=mysqli_real_escape_string($con,$_POST['paper_source']);
    $userId=$_SESSION['id'];
    $post_id=$_GET['Id'];

    $sql="UPDATE `blog` SET `post_title`='$blog_title',`post_desc`='$description',
                 `post_content`='$content',`source`='$source',`User-Id`='$userId' WHERE `post_id`=$post_id"; 

    if(mysqli_query($con,  $sql))
    {
        $_SESSION['blog_upd_scs']="upload success";
        
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
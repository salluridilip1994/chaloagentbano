<?php
include "initialization.php";

check_logged_in();

if(isset($_POST['submit'])) {


    $question=mysqli_real_escape_string($con,$_POST['question']);
    $answer=mysqli_real_escape_string($con,$_POST['answer']);


    session_start();
    
    $userId=$_SESSION['id'];
    $sql = "INSERT INTO `faqs`(`question`, `answer`, `user_id`)
    VALUES ('$question','$answer','$userId')";
      // echo $sql;

    if(mysqli_query($con,  $sql))
    {
        $_SESSION['faq_upl_scs']="upload success";
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
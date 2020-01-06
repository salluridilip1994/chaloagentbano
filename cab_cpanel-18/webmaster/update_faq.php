<?php
// Initialize the session 
include "initialization.php";

check_logged_in();



if(isset($_POST['submit'])) {


    $question=mysqli_real_escape_string($con,$_POST['question']);
    $answer=mysqli_real_escape_string($con,$_POST['answer']);
    $userId=$_SESSION['id'];
    $faq_id=$_GET['Id'];

    $sql="UPDATE `faqs` SET `question`='$question',`answer`='$answer',`user_id`='$userId'"; 

    
    $sql = $sql." WHERE `Id`=$faq_id ;";
// print($sql)  ;
//  die();
    if(mysqli_query($con,  $sql))
    {
        $_SESSION['faq_upd_scs']="update success";
        
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
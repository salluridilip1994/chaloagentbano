<?php
include "initialization.php";
check_logged_in();
$new_password=$_POST['password'];
$new_password1=password_hash($new_password,PASSWORD_DEFAULT);
session_start();
$userId=$_POST['id'];
$sql="UPDATE `user`
SET `password`='$new_password1'
WHERE id='$userId'";
if(mysqli_query($con,$sql))
{
$_SESSION['cp_scs']="sucess";
}
else{
    $_SESSION['error']="error";
}
header('Location:dashboard_wm.php');
mysqli_close($con);
?>
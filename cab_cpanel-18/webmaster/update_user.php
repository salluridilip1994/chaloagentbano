<?php
include "initialization.php";
check_logged_in();

if(isset($_POST['submit']))
{

  $name=mysqli_real_escape_string($con,$_POST['name']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $userid=mysqli_real_escape_string($con,$_POST['userid']);
  $role=mysqli_real_escape_string($con,$_POST['role']);
  $ph_no=mysqli_real_escape_string($con,$_POST['ph_no']);
  
  $user_id=$_GET['Id'];
  
//   $sql2="SELECT * FROM `user`";
//   $query=mysqli_query($con,$sql2);
//   while ($user_row = mysqli_fetch_array($query))
// 	 {
// 	     if($user_row['id']!=$user_id)
// 	     {
//     		if($user_row['userid']==$userid)
//     		{
//     			$_SESSION['userid_exist']="userid_exist";
//     			header('Location:dashboard_wm.php');
//     			exit;
//     		}
//     		elseif($user_row['username']==$email)
//     		{
//     			$_SESSION['email_exist']="email_exist";
//     			header('Location:dashboard_wm.php');
//     			exit;
//     		}
// 	     }
// }


  $sql="UPDATE `user` SET `name`='$name', `username`='$email',`userid`='$userid',`role`='$role',
  `phone_no`='$ph_no'"; 


  $sql = $sql." WHERE `Id`=$user_id ;";
  if(mysqli_query($con,  $sql))
  {
    $_SESSION['user_upd_scs']="update success";
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
<?php
include "initialization.php";
check_logged_in();
if(isset($_POST['delete'])) {
	
	$post_id=$_GET['Id'];
	$sql="DELETE FROM `blog` WHERE `post_id`=$post_id" ;
	if(mysqli_query($con,  $sql))
	{
		$_SESSION['delete_post_scs']="delete success";
		header('Location:dashboard_wm.php');
	}
	else
     {
        $_SESSION['error']="delete error";
        header('Location:dashboard_wm.php');
     }

}

mysqli_close($con);
?>
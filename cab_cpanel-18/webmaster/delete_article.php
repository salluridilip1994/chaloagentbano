<?php
include "initialization.php";
check_logged_in();
if(isset($_POST['delete'])) {
	$article_id=$_GET['Id'];
	$sql="DELETE FROM `article` WHERE  `File_Id`=$article_id" ;
	if(mysqli_query($con,  $sql))
	{
		$_SESSION['delete_article_scs']="delete success";
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
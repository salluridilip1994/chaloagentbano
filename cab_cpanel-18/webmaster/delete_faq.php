<?php
include "initialization.php";
check_logged_in();
if(isset($_POST['delete'])) {
	
	$faq_id=$_GET['Id'];
	$sql="DELETE FROM `faqs` WHERE  `Id`=$faq_id" ;
	if(mysqli_query($con,  $sql))
	{
		$_SESSION['delete_faq_scs']="delete success";
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
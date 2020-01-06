<?php
include "initialization.php";
check_logged_in();
if (isset($_POST['delete'])) {
	$user_id = $_GET['user_id'];
	$sql = "DELETE FROM `user` WHERE  `id`=$user_id";
	if (mysqli_query($con, $sql)) {
		$_SESSION['delete_user_scs'] = "upload success";
		header('Location:dashboard_wm.php');
	} else {
		$_SESSION['parent_user_deleteerror'] = "Cannot delete a parent user";
		header('Location:dashboard_wm.php');
	}

}
mysqli_close($con);
?>
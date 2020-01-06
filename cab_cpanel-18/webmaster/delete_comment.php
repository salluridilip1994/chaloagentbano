<?php
include "initialization.php";
check_logged_in();
if (isset($_POST['delete'])) {

	$comment_id = $_GET['Id'];
	$sql = "DELETE FROM `post_comments` WHERE `id`=$comment_id";
	if (mysqli_query($con,  $sql)) {
		$_SESSION['delete_comment_scs'] = "delete success";
		header('Location:dashboard_wm.php');
	} else {
		$_SESSION['error'] = "delete error";
		header('Location:dashboard_wm.php');
	}
}

mysqli_close($con);

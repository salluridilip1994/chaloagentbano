<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
include "initialization.php";
check_logged_in();
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	$ph_no = $_POST['ph_no'];
	$role = $_POST['role'];
	$new_password = password_hash($password, PASSWORD_DEFAULT);

	$sql2="SELECT * FROM `user`";
	$query=mysqli_query($con,$sql2);
	while ($user_row = mysqli_fetch_array($query))
	 {
		if($user_row['userid']==$userid)
		{
			$_SESSION['userid_exist']="userid_exist";
			header('Location:dashboard_wm.php');
			exit;
		}
		elseif($user_row['username']==$email)
		{
			$_SESSION['email_exist']="email_exist";
			header('Location:dashboard_wm.php');
			exit;
		}
}
	$sql = "INSERT INTO `user`(`name`,`username`,`userid`, `password`, `role`,`phone_no`)
	VALUES ('$name','$email','$userid','$new_password','$role','$ph_no')";

	try {
		$mail = new PHPMailer();
		$mail->SMTPDebug = 2;
		$mail->isSMTP();
		$mail->port= 587;
		$mail->Host = 'mail.nutantek.com';
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Username = 'webmaster@careeratlic.in';
		$mail->Password = 'hg^85GhUk';
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true,
			),
		);
		$title='Lic '.$role.' Account';
		$mail->setFrom('webmaster@careeratlic.in', $title);
		$mail->AddCC($email);
       $mail->AddCC('letscollaborate@nutantek.com');
		$mail->isHTML(true);
		$sub=$title.' creation';
		$mail->Subject = $sub;
		$mail->Body = "Hello  {$name},please use below mentioned userId to sign-in<br><ul>
		<li>UserId : {$userid}</li>
		<br/></ul><h3>Account created successfully</h3>";
			$qry = mysqli_query($con, $sql);
			$_SESSION['user_added'] = "user added";
			header('Location:dashboard_wm.php');
			$mail->send();
		
	} catch (\Exception $e) {
		echo $e->getMessage();
	}

    try {
		$mail = new PHPMailer();
		$mail->SMTPDebug = 2;
		$mail->isSMTP();
		$mail->port= 587;
		$mail->Host = 'mail.nutantek.com';
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Username = 'webmaster@careeratlic.in';
		$mail->Password = 'hg^85GhUk';
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true,
			),
		);
		$title='Lic '.$role.' Account';
		$mail->setFrom('webmaster@careeratlic.in', $title);
		$mail->addAddress($email);
		$mail->isHTML(true);
		$sub=$title.' creation';
		$mail->Subject = $sub;
		$mail->Body = "Hello  {$name},please use below mentioned password to sign-in<ul>
		<li>Password : {$password}(Do not share your password with anyone)
		<br/></ul><h3>Account created successfully</h3>
		<a href='http://careeratlic.in/webmaster/login.php'>click here to sign-in</a>";
		$mail->send();
	} catch (\Exception $e) {
		echo $e->getMessage();
	}
}
mysqli_close($con);
?>
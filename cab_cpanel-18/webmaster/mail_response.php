<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;  
require 'vendor/autoload.php';
include "initialization.php";

$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$response=mysqli_real_escape_string($con,$_POST['response']);
$ac_id=$_GET['Id'];

$sql5="SELECT * FROM `contact_us` WHERE `Id`=$ac_id" ;
$cont_rows=mysqli_query($con,$sql5);
$row=mysqli_fetch_array($cont_rows);


try {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->port=587;
    $mail->Host = 'mail.nutantek.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPKeepAlive=false;
    $mail->Username = 'webmaster@careeratlic.in';
	$mail->Password = 'hg^85GhUk';
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->setFrom('webmaster@careeratlic.in', 'Career at LIC');
    $mail->AddCC($email);
    $mail->AddCC('letscollaborate@nutantek.com');
    $mail->isHTML(true);
    $mail->Subject = 'Career at LIC ContactUs';
    $mail->Body = "Hello  {$row['name']},<br><br> {$response}<br><br><br>Best Regards,<br>LIC D.O";
    if ($mail->send()) {
        $_SESSION['You are responded']="success";
        header('Location:dashboard_wm.php');
        
    } else {
        $_SESSION['mailerror']="Something went wrong! please try again!!";
        header('Location:dashboard_wm.php');
    }
}
catch (\Exception $e){
 echo $e->getMessage();
}


mysqli_close($con);
?>
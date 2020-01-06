<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;  
require 'vendor/autoload.php';
include "initialization.php";

$ac_id=$_GET['Id'];

$sql5="SELECT * FROM `register` WHERE `Id`=$ac_id" ;
$reg_rows=mysqli_query($con,$sql5);
$row=mysqli_fetch_array($reg_rows);


try {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->port=25;
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
    $mail->setFrom('webmaster@careeratlic.in', 'Career at LIC Aspirant Account');
    $mail->AddCC($row['email']);
    $mail->AddCC('letscollaborate@nutantek.com');
    $mail->isHTML(true);
    $mail->Subject = 'LIC Aspirant account';
    $mail->Body = "Thank you very much for your interest in registering with LIC.The message is to inform you that we have selected a candidate who is a match for the requirments of the position.";
    
    if ($mail->send()) {
        $_SESSION['You are rejected the Aspirant']="success";
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
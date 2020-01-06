<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;  
require 'vendor/autoload.php';
include "initialization.php";

$userid=mysqli_real_escape_string($con,$_POST['userid']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$ac_id=$_GET['Id'];

$sql5="SELECT * FROM `register` WHERE `Id`=$ac_id" ;
$reg_rows=mysqli_query($con,$sql5);
$row=mysqli_fetch_array($reg_rows);


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
    $mail->setFrom('webmaster@careeratlic.in', 'Career at LIC Aspirant Account');
    $mail->AddCC($row['email']);
    $mail->AddCC('letscollaborate@nutantek.com');
    $mail->isHTML(true);
    $mail->Subject = 'LIC Aspirant account creation';
    $mail->Body = "Hello  {$row['name']}, please use below mentioned userId to sign-in<br><ul>
    <li>UserId : {$userid}</li> 
    <br/></ul><h3>Account created successfully</h3>";
    if ($mail->send()) {
        $_SESSION['You are accepted the visitor']="success";
        header('Location:dashboard_wm.php');
        
    } else {
        $_SESSION['mailerror']="Something went wrong! please try again!!";
        header('Location:dashboard_wm.php');
        
    }
}
catch (\Exception $e){
 echo $e->getMessage();
}

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
    $mail->setFrom('webmaster@careeratlic.in', 'Career at LIC Aspirant Account');
    $mail->addAddress($row['email']);
    $mail->isHTML(true);
    $mail->Subject = 'LIC Aspirant account creation';
    $mail->Body = "Hello  {$row['name']}, please use below mentioned password to sign-in<br><ul>
    <li>Password : {$password}(Do not share your password with anyone)</li>
    <br/></ul><h3>Account created successfully</h3>";
    $mail->send();
}
catch (\Exception $e){
 echo $e->getMessage();
}

mysqli_close($con);
?>
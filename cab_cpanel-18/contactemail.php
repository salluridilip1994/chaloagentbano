<?php 
 if(isset($_POST['submit'])){
  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new phpmailer;

   //$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.nutantek.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'customersupport@chaloagentbano.com';                 // SMTP username
$mail->Password = ')+SoZQr}FbHg';               // SMTP password
 $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    ); 
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('customersupport@chaloagentbano.com', 'ChaloAgentbano');
//$mail->addAddress('rks.fundguard@gmail.com');               // Name is optional
 $mail->addReplyTo('no-reply@chaloagentbano.com');
$mail->addCC($_POST['email']);
//$mail->addCC('rks.fundguard@gmail.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'chaloagentbano, welcomes you.';
$mail->Body    = '<h4> Dear '.$_POST['name'].', 
<p>Thank you for contacting us. We have received your details as below:-</p>
 Phone: '.$_POST['phone'].' <br> Email ID: '.$_POST['email'].' <br> Subject: '.$_POST['sub'].' <br> Message: '.$_POST['msg'].'<br>

</h4>';
//$mail->AltBody = 'Thanks for getting in touch. Your message has been received and will be processed as soon as possible.';

if(!$mail->send()) {
    echo "<script>alert('Message could not be sent.')</script>";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
     echo "<script>alert('Your message has been received and will be processed as soon as possible.')</script>";
}

 }
die("<script>location.href='contactus.php'</script>");
?>
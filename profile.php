<?php
$id=$_REQUEST['id'];
$con= mysqli_connect('localhost','root','','registration');

error_reporting(E_ALL^E_NOTICE);
 ?>
  
       
 

       <!DOCTYPE html>
<html>
<head>
<title>new profile</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.0/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.fa {
  padding: 15px;
  font-size: 15px;
 border: solid 1px grey;
  text-align: center;
  text-decoration: none;
  
  background-color: #3498DB;
  border-radius: 50%;
  color: white;
}
body
{
  background-color: rgb(52, 152, 219 ,0.8);
} 







</style>
</head>
<body>

    <?php 
 $count=2;
 $sel_query="Select * from doregistration WHERE id= '".$id."'";
 $result = mysqli_query($con,$sel_query);
$row = mysqli_fetch_assoc($result) ;
$data=$row['Emailid'];
  $Facebooklink=$row['Facebooklink'];
  $Linkedinlink=$row['Linkedinlink'];
  $Twitterlink=$row['Twitterlink'];


   echo "<img src='".$row['Bannerimage']."' width='100%' height='650' />"; ?> 

	<div class="container" style="background-color: rgb(52, 152, 219 ,0.2);">
<div class="container pt-1">
  <div class="card p-5">

	<div class="row">
  

		<div class="col-md-4  ">
			<div class="row">

  
     


<?php  echo "<img src='".$row['Profileimage']."' width='100%' height='250' />"; ?> 
</div>

<h3 class="text-center mt-5"> <?php echo $row["Name"]; ?></h3 >
<h6 class="text-center mt-2"> <?php echo $row["Phonenumber"]; ?></h6>
<h6 class="text-center mt-2"> <?php echo $row["Emailid"]; ?></h6>

<h6 class="text-center"><b><u>City</u></b></h6>
<h6 class="text-center mt-2"> <?php echo $row["City"]; ?>  </h6>
<h6 class="text-center"><b><u>Address</u></b></h6>
<h6 class="text-center mt-2"> <?php echo $row["Address"]; ?> </h6>


<?php $count++;  ?>

<div class="row mt-4 pt-5">
<div class="col-md-2 ml-5 ">
</div>
<div class="col-md-2">
 </div>
 <div class="col-md-2">
 </br></div>
 <div class="col-md-2">
 </br></div>
</div>
		</div>
		<div class="col-md-8 pt-5 pl-5 pr-5" style="background-color:white;">
    <div class="row ">
	.


</div> 
<h3><b>About Us</b></h3>
<h6 class=" mt-2"> <?php echo $row["Aboutus"]; ?> </h6>

<hr>

<div class="row" >

<h4 ><b>We are Social Follow Us</b></h4></div>
  <td></td>
       
<?php   echo '<a href ="'. $Facebooklink.'" class="fa fa-facebook" > </a>';?>
  <?php     echo '<a href ="'. $Linkedinlink.'" class="fa fa-linkedin"></a>';?>
 <?php      echo '<a href ="'. $Twitterlink.'" class="fa fa-twitter"> </a>'; ?>


<hr>
<div class="card p-2">
<h3><b><b>Fell free to contact</b></b> </h3>
<form name="registration"  action="profile.php" method="post">
<input type="text" name="uname" placeholder="name" class="form-control" required />
<input type="email" name="femail" placeholder="email"  class="form-control mt-2" required />
<input type="text" name="fphonenumber" placeholder="phonenumber"  class="form-control mt-2" required />
<textarea rows="2" class="form-control mt-2" name="address"   id="txtarea_consolidation" placeholder="Enter your Address"  required> </textarea>
<button class="btn btn-info" type="submit" id="send" name="submit" value="submit"  >Send</button>
</form>  
</div>
</div>
</div>
</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.0/js/mdb.min.js"></script>
</html>

<?php

// $fetch=mysqli_query($con, "Select Emailid from doregistration WHERE id= '".$id."'");
// $idmail= mysqli_fetch_assoc($fetch);


         if(isset($_POST['submit'])) {
          $name=$_POST['uname'];
          $phonenumber=$_POST['fphonenumber'];
           $email=$_POST['femail'];          
$query=mysqli_query($con, "INSERT INTO login(uname,phonenumber,email)VALUES('$name','$phonenumber','$email')");
  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new phpmailer;

   //$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.nutantek.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'pramod.n@nutantek.com';                 // SMTP username
$mail->Password = 'test123@123';               // SMTP password
 $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    ); 
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('pramod.n@nutantek.com', 'pramod N');
//$mail->addAddress('rks.fundguard@gmail.com');               // Name is optional
 $mail->addReplyTo($data);
$mail->addCC($_POST['femail']);
$mail->addCC($data);

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);    


$mail->Subject = 'chaloagent bano .';
$mail->Body    = '<h4> Dear '.$_POST['uname'].', 
<p>Greetings from  Suresh guptha!</p>
<p>Thank you for contacting us. We have received your details as below:-</p>
 Email ID: '.$_POST['fmail'].' <br> Phone: '.$_POST['fphonenumber'].' 
<p>We will review and revert with our inputs at the earliest.</p>
<p>Do visit our web sites to review the best LIC Plans suitable for you and family members.</p>
';

if(!$mail->send()) {
    echo "<script>alert('Message could not be sent.')</script>";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
     echo "<script>alert('Your message has been received and will be processed as soon as possible.')</script>";
}

die("<script>location.href='chaloagentbano.php'</script>");

}
?>			
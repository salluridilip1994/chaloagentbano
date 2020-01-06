 <!DOCTYPE html>
<html>
<head>
	  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TGWMHSH');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async
src="https://www.googletagmanager.com/gtag/js?id=UA-154808888-1"></script>
<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-154808888-1');
</script>
	<title>ChaloAgentBano</title>
	<meta charset="UTF-8">
<!--   <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="John Doe"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/style.css">
 <script src="https://www.google.com/recaptcha/api.js"></script>
 <style type="text/css">
 	  @media (min-width: 320px) and (max-width: 420px)
{
  .row.m-5.mq9.aos-init.aos-animate {
    margin: 0px!important;
}


}
#carousel-example-1z {
    margin-top: 1px;
}

input.form-control {
    margin-top: 21px;
}
</style>	
</head>

	


</head>
<body style=" background-image:url('img/background.png')">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGWMHSH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

		<?php include_once('include/header.php')?>
<!------------------------------------->

 <?php include_once('include/social.php')?>

<div id="carousel-example-1z" class="carousel slide carousel-fade mb-5" data-ride="carousel">

  <div class="carousel-inner" role="listbox">
   
    <div class="carousel-item active">
      <img class="d-block w-100" style="max-height: 400px" src="../new_images/guide.png"
        alt="First slide" >
    </div>

    
  </div>
 
</div>



	<div class="container mt-4 ">
	<div class="row mb-5">
		<!-- <div class="col-md-4 " style="border-right: solid pink 3px;"> -->
	
						<!-- <h3 ><b><u>Contact Info</u></b></h3>
						<h3>Ram Kumar Sahu</h3>
					<div class="row" style="font-size: 20px;">
							<span style="color: grey">
								<i class="fas fa-map-marker-alt"></i>  
							</span><span class="ml-2">	<b>  2/25 RoopNagar, Delhi-110007</b></span>
							
						</div>
						<div class="row mt-3"  style="font-size: 20px;">
							
							<span style="color: grey">
							<i class="far fa-envelope"></i> 
							</span>	<span class="ml-2"> <b>  fundguard@gmail.com</b></span>	
				</div>
				<div class="row mt-3"  style="font-size: 20px;">
							
				<span style="color: grey">
								<i class="fas fa-phone " ></i>   
							</span>	<span class="ml-2"> <b>  +91 880-220-2259</b></span>			
			</div>
</div> -->
<div class="col-md-8" style="border-right:1px solid; color: #005476; ">
	<h5 class="text-center"><?php  $result; ?></h5>
		<form action="contactemail.php" method="post">
			<h3><b><u>Submit Your Query</u></b></h3>
						<div class="row mt-2">
							<div class="col-md-6">
			
				<input type="text" name="name" class="form-control" pattern="[a-zA-Z]{1,}" required placeholder="Name">
			</div>
			<div class="col-md-6">
				
				<input type="text" name="phone" class="form-control" pattern="[1-9]{1}[0-9]{9}" required placeholder="phone Number">
				
			</div>
		</div>
			
				<div class="row">
							<div class="col-md-6">
			
				<input type="text" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required placeholder="Email" >
			</div>
			<div class="col-md-6">
				
				<input type="text" name="subj" class="form-control"  pattern="[a-zA-Z]{1,}" required placeholder="subject">
			</div>
		</div>

		<div class="row m-0 mt-3">
			<textarea class="form-control" rows="2" placeholder="Message" name="mesage" required placeholder="mesage"></textarea>
		</div>
		<div class="g-recaptcha" data-sitekey="6LchbL0UAAAAABLzmHIDJUWgYuFK66lcUQho_tJd"></div>
		<div class="row mt-3 mr-1">
			<button class="btn btn-warning btn-lg ml-3 m-0"  name="submit" data-toggle="modal" data-target="#centralModalSuccess">Submit</button>

		</div>
</form>
</div>
			
	

<div class="col-md-4">
	<img src="../new_images/agent.jpg" class="w-100 ml-1">
</div>
</div>
</div>

	<!------------------------------------------------------------------>

</body>
<?php
include_once('include/demofooter.php');
?>


      
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>


</html>
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

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ChaloAgentBano</title>
  
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
.icon-bar a {
    display: block;
    text-align: center;
    padding: 0px !important;
    transition: all 0.3s ease;
    color: white;
    font-size: 20px;

}
.icon-bar {
    top: 63%;
    margin-left: 1290px !important;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: 2;
}
 </style>
</head>
<body style=" background-image:url('img/background.png')">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGWMHSH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <?php include_once('include/header.php')?>
  <?php include_once('include/social.php')?>

<!------------------------------------->
<!-- 
<div id="carousel-example-1z" class="carousel slide carousel-fade mb-5" data-ride="carousel">

  <div class="carousel-inner" role="listbox">
   
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/contactbanner.jpg"
        alt="First slide" >
    </div>

    
  </div>
 
</div> -->
<div class="container">
  <div class="row">

<div class="col-md-8 ">
  <h5 class="text-center"><?php  $result; ?></h5>
    <form action="registermail1.php" method="post" id="contact_us">
      <h3><b><u>Register</u></b></h3>
            <div class="row">
              <div class="col-md-6">
        <input type="text" name="name" class="form-control" pattern="^[A-za-z]*((\.|\s)*[A-za-z])*$"  maxlength="30"  required title="Allow Max 30 characters; No numerics are allowed" placeholder="Enter Name">
      </div>
      <div class="col-md-6">
        <input type="text" name="phone" class="form-control" pattern="[1-9]{1}[0-9]{9}" required placeholder="Enter Phone">
        
      </div>
    </div><br/>
      
        <div class="row">
              <div class="col-md-6">
        <input type="text" name="email" class="form-control" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required placeholder="Enter email">
      </div>
      <div class="col-md-6 mt-1">
        <input type="text" name="qualification" class="form-control"  pattern="(^?=.*[a-zA-Z]+(\s ?=.*[a-zA-Z]+) | (?=.* [a-zA-Z]+)(\. ?=.*[a-zA-Z]+))?$" required placeholder="Enter Qualification">
      </div>
    </div>

        <div class="row">
             <div class="col-md-6 mt-2">
        <input type="text" name="occupation" class="form-control"  pattern="^[a-zA-Z]+(\s[a-zA-Z]+)?$"  required placeholder="Enter Occupation">
      </div>  
           <div class="col-md-6 mt-2">
        <input type="text" name="address" class="form-control"  required placeholder="Enter Address">
      </div>
    </div>

        <div class="row">
               <div class="col-md-6 mt-2">
        <input type="text" name="state" class="form-control" pattern="^[a-zA-Z]+(\s[a-zA-Z]+)?$"  required placeholder="Enter State">
      </div>
      <div class="col-md-6 mt-2">
        <input type="text" name="district" class="form-control"   required placeholder="Enter District"  pattern="^[a-zA-Z]+(\s[a-zA-Z]+)?$">
      </div>
    </div>

        <div class="row">
              <div class="col-md-6 mt-2">
        <input type="text" name="pincode" class="form-control" pattern="^[1-9][0-9]{5}$" required placeholder="Enter Pincode">
      </div>
      <!-- <div class="col-md-6 mt-2">
        <input type="text" name="subject" class="form-control"  required placeholder="Enter Subject">
      </div> -->
    </div>

    <div class="row m-0 mt-3 mt-2">
      <textarea class="form-control" rows="2" placeholder="Message" name="msg" id="msg" required></textarea>
    </div><br/>
    <div class="g-recaptcha" data-sitekey="6LekA8MUAAAAAKjRr-D9MXOFwoq1hHoVep-TR0I0"></div>
    <div class="row mt-3 mr-1">
      <button class="btn btn-warning btn-lg ml-5 m-0"  name="submit" type="submit">Submit</button>
    </div>
</form>
<script>  
  
$('#contact_us').on('submit',function (event){
    event.preventDefault();
    var name = $(this).find("input[name='name']").val();
    var ph_no = $(this).find("input[name='phone']").val();
    var email = $(this).find("input[name='email']").val();
    var qualification = $(this).find("input[name='qualification']").val();
    var occupation = $(this).find("input[name='occupation']").val();
    var address = $(this).find("input[name='address']").val();
    var state = $(this).find("input[name='state']").val();
    var district = $(this).find("input[name='district']").val();
    var pincode = $(this).find("input[name='pincode']").val();
    var subject = $(this).find("input[name='subject']").val();
    var msg = $('#msg').val();
    var res_key=grecaptcha.getResponse();
  
  $.ajax(
      {

        type:'post',
        url:'captcha_verify.php',
        data:{res_key:res_key},
        success:function (res) {
            if(res!='Please check the captcha form'){

    $.ajax(
    {
    type:'post',
    url:'registermail1.php',
    data:{
    name:name,
    ph_no:phone,
    email:email,
    qualification:qualification,
    occupation:occupation,
    address:address,
    state:state,
    district:district,
    pincode:pincode,
    subject:subject,
    msg:msg
    },
    beforeSend: function () {

        $("#contact_us")[0].reset();
        grecaptcha.reset(1);
        $('#model_contactus').modal('hide');
        $.dreamAlert({
                        'type'      :   'success',
                        'message'   :   'Query submitted!',
                        'position'  :   'right'
                    });

            },
    success:function(response){
    
    },
    error:function(error){
    alert('Error');
    }
    });

      }
      else
        {
            alert('Please check the captcha form');
            
         }
    }

  });
});
</script>
                     
</div>

<div class="col-md-4 mt-3">
  <img src="new_images/online.jpg" class="w-100">
</div>
      
  </div>
</div>


  <!------------------------------------------------------------------>

</body>
<?php
include_once('include/demofooter.php');
?>

      
<!-- JQuery -->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>

<script>$("form").submit(function(event) {

   var recaptcha = $("#g-recaptcha-response").val();
   if (recaptcha === "") {
      event.preventDefault();
      alert("Please check the recaptcha");
   }
});</script>
</html>
<!DOCTYPE html>
<html lang="en">
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
    <meta charset="UTF-8">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <!--Title--->
    <title>LIC</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
    <!---Custom css--->
    <link rel="stylesheet" href="styles.css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    
    <script src="jquery.dreamalert.js"></script>
    <link href="jquery.dreamalert.css"rel="stylesheet">
    <script src="lic.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <style type="text/css">
        body p
{
  text-align: justify;
}
@media (min-width: 320px) and (max-width: 420px)
{
img.careerbanner {
    max-height: 224px;
    margin-top: 14%;
}
img.cm {
    max-height: 195px!important;
}
img.cmb {
    max-height: 163px!important;
}
}

    </style>

</head>
<body style="">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGWMHSH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php include_once('include/header.php');?>

<!-- Default form register -->
 <?php include_once('include/social.php')?>


<div class="container">
  <div class="row">
  <div class="col-md-6" style="border-right: solid 1px  #ffb84d;">  


<div class="row mt-2">
    <div class="col-md-12">
    <form role="form">
      <h2 style="color: #BA151B;">DO Registartion Page</h2>
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required="first_name" pattern="^[a-zA-Z]+(\s[a-zA-Z]+)?$" name="usern">
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required="last_name" pattern="^[a-zA-Z]+(\s[a-zA-Z]+)?$" name="userl">
          </div>
        </div>
      </div>
      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required="email"  pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email">
      </div>
      <div class="form-group">
        <input type="text" name="mobile Number" id="qly" class="form-control input-lg" placeholder="Mobile Number" tabindex="3" required="Mobile" pattern= "[1-9]{1}[0-9]{9}" name="qly">
      </div>
       <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="add" id="add" class="form-control input-lg" placeholder="Branch" tabindex="3" required="Branch" name="add" >
          </div>
        </div>
     </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
        <input type="text" name="add" id="add" class="form-control input-lg" placeholder="Divison" tabindex="3" required="Divison" name="add" >
<!-- <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5"></label>
  <b><textarea class="form-control" id="text" rows="6" placeholder="Breif Introduction About Yourself" name="text"></textarea></b>
</div> -->
          </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
          <div class="form-group">
        <input type="text" name="add" id="add" class="form-control input-lg" placeholder="City" tabindex="3" required="City" name="add" >
<!-- <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5"></label>
  <b><textarea class="form-control" id="text" rows="6" placeholder="Breif Introduction About Yourself" name="text"></textarea></b>
</div> -->
          </div>
        </div>
     </div>


<div class="g-recaptcha" data-sitekey="6LcvSMEUAAAAANQlTdu--Qytg67aX4QLLuMguao3"></div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-lg" type="submit">Sign in</button>

    <!-- Social register -->
 

   
    <hr>

    <!-- Terms of service -->
    



</form>
<script>  
  
$('#contact_us').on('submit',function (event){
    event.preventDefault();
     var firstname = $(this).find("input[name='usern']").val();
    var lastname = $(this).find("input[name='userl']").val();
    var Mobile = $(this).find("input[name='Mobile']").val();
    var email = $(this).find("input[name='email']").val();
    var qly = $(this).find("input[name='qly']").val();
    var Address = $(this).find("input[name='add']").val();
    var msg = $('#text').val();
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
    url:'contactemail.php',
    data:{
     firstname:usern,
    lastname:userl,
    Mobile:Mobile,
    email:email,
     qly:qly
   Address:add,
    msg:text
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
<!-- Default form register -->

      </div>
    </div>
  </div>

    <div class="col-md-6">
     <img src="new_images/landing-page_2x.png" class="w-100">
    </div>
      </div>
</div>
<?php include_once('include/demofooter.php')?>

 <script>$("form").submit(function(event) {

   var recaptcha = $("#g-recaptcha-response").val();
   if (recaptcha === "") {
      event.preventDefault();
      alert("Please check the recaptcha");
   }
});</script>
    
    <!-- JQuery -->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>
</body>
</html>
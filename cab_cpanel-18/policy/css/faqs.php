<?php
include "./webmaster/initialization.php";

$sql4="SELECT * FROM `faqs` ORDER BY `Id` DESC"  ;
$faq_rows=mysqli_query($con,$sql4);
?>
<!DOCTYPE html>
<html>
<head>
    <title> Lakshay Jallandhra</title>
      <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/common.css">

</head>
<body>
  <?php include_once('header.php')?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9"> <section class="m-5" style="margin-top: 0%!important;">
        <div class="container">
            <h1 class="text-center font-weight-bold p-5 ">Frequently Asked Question's </h1>
            <div class="accordion" id="accordionExample">
                <?php
                $temp=0;
                while($faq_row=mysqli_fetch_array($faq_rows))
                { 
                    ?>
                    <div class="card">
                        <div class="card-header p-2 inline-headers" id="headingOne" style="background-color:white;">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $temp?>"
                                aria-expanded="true" aria-controls="collapseOne"><i class="fas fa-plus-circle"></i> <?php echo $faq_row['question'];?></button>
                            </div>
                            <div id="collapse<?php echo $temp?>" class="collapse" aria-labelledby="headingOne"
                               data-parent="#accordionExample">
                               <div class="card-body">
                                <?php echo $faq_row['answer'];?>
                            </div>
                        </div>
                    </div>
                    <?php ++$temp; } ?>
                </div>
            </div>
        </section>
        <div style="height:100px"></div>
      </div><!-----col-md-9--->
            <div class="col-md-3">
                    <h2 class=" mt-5"><span class="bg1" id="sh1"><b><b>Get in touch for 
</b></b></span><br><span id="sh"> <b><b>Free Financial Planning</b></b></span></h2>
        <div class="row p-4 ai">
          <input type="text" name="fname" class="form-control ah mt-2" placeholder="Enter Name">
          <input type="text" name="fnumber" class="form-control ah mt-2" placeholder="Mobile Number">
          <input type="mail" name="fmail" class="form-control ah mt-2" placeholder="Enter mail ID">
          <button class="btn btn-info fbutton ah"> Send</button>
        </div>
               <h2 class=" mt-5" id="sh1"><span class="bg1"><b>Become an <span style="color: #00529c;border-bottom: solid 2px yellow"><b>LIC</b></span> </b></span><span id="sh"> <b>Agent</b></span></h2>
        <h5 class="mt-5" id="sh1">Step by Step Procedure <br>to Become <span style="color: #00529c;border-bottom: solid 2px yellow"><b>LIC</b></span> Agent</h5>

        <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    <li data-target="#carousel-example-1z" data-slide-to="3"></li>
    <li data-target="#carousel-example-1z" data-slide-to="4"></li>
    <li data-target="#carousel-example-1z" data-slide-to="5"></li>
    <li data-target="#carousel-example-1z" data-slide-to="6"></li>
    <li data-target="#carousel-example-1z" data-slide-to="7"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/steps/step1.png"alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="images/steps/step2.png"alt="Second slide">
    </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="images/steps/step3.png"alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/steps/step4.png"alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/steps/step5.png"alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/steps/step6.png"alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/steps/step7.png"alt="Second slide">
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
        <div class="row">
          

        <ul style="list-style-type: none">
          <li><h3><a href=""><b>Apply Karo Agent Bano</b></a></h3></li>
        </ul>
  </div>
            </div><!---col-md-3-->
        </div>
    </div>
<?php include_once('footer.php')?>
</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
</html>
<?php
include "./webmaster/initialization.php";

$sql4="SELECT * FROM `faqs` ORDER BY `Id` DESC"  ;
$faq_rows=mysqli_query($con,$sql4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
     <style type="text/css">
        body p
{
  text-align: justify;
}

    </style>
</head>
<body>
     <?php include_once('include/social.php')?>
     <?php  include_once('include/header.php');?>
    <section class="m-5" style="">
        <div class="container">
           <b><b><h2 class="text-center" style="background-color:#005476; color: white;">Frequently Asked Question's</h2></b></b>
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
        <?php  include_once('include/demofooter.php');?>
        <!-- JQuery -->
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>
    </body>
    </html>
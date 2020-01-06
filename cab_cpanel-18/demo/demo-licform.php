<?php
include "./webmaster/initialization.php";
$sql4="SELECT * FROM `forms` ORDER BY `Id` DESC"  ;
$form_rows=mysqli_query($con,$sql4);
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
    .modal-content {
    margin-top: 14%;
}
    </style>
    </head>
    <body>
        <div id="header"></div>
        <section class="mt-5" style="margin-top: 8%!important;">
            <div class="container">
                <div class="row">
                    <h1 class="text-center font-weight-bold m-5" style="background-color:#005476; color: white;">Download Forms </h1>
                    <div class="col-md-9">
                        <h4>Online Forms</h4>
                        <?php
                        $x2=0;
                        while($form_row=mysqli_fetch_array($form_rows))
                        { $x2++;
                        ?>
                        <hr>
                        <h4><?php echo $form_row['Title']; ?></h4>
                        <p><?php echo $form_row['Description']; ?></p>
                        
                        <a  data-toggle="modal" data-target="#myModal<?php echo '-f'.$x2; ?>" style="color: blue;">
                        <u>Click here to download Form 
                        <?php
                        $path=$form_row['Path'];
                        $words = explode('/',$path);
                        $last_word = array_pop($words);
                        echo $last_word; 
                        ?>.(PDF Format)</u>
                        <i class="fas fa-file-pdf text-danger "></i></a>
                        <div id="myModal<?php echo '-f'.$x2;?>" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>                                                        </div>
                                    <div class="modal-body">
                                        <embed src="<?php echo "webmaster/".$form_row['Path']; ?>" frameborder="0" width="100%" height="500px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php } ?>
                        
                        
                    </div>

                </div>
            </div>
        </section>
        <div style="height:100px"></div>
        <div class="main-footer"></div>
        <!-- JQuery -->
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>
    </body>
</html>
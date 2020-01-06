<?php
include "initialization.php";
check_logged_in();
$file_id=$_GET['id'];
$sql="SELECT `Title`,`File_Path`,`Source`,`Published_Date` FROM `industry_news` WHERE `Id`=$file_id";
$inews_rows=mysqli_query($con,$sql);
$inews_row=mysqli_fetch_array($inews_rows);
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/js/mdb.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="News_block">
        <div class="greenHeading">
          <div class="row"><?php echo $inews_row['Title']; ?></div>
          
        </div>
        <div class="info">
          <p class="CtntParaimg"><img src="<?php echo $inews_row['File_Path']; ?>" alt="" width="1095px" height="500px"></p>
          
        </div>
        <div class="btmblue">
          <div class="row">
            <div class="col-md-4">Source : <?php echo $inews_row['Source']?></div>
            <div class="col-md-4" ><?php echo date('d-F-Y', strtotime($inews_row['Published_Date']))?></div>
            <div class="col-md-4"><a href="dashboard_wm.php" style="color:white;margin-left: 40%"><i class="fa fa-caret-left" aria-hidden="true"></i><b> back</b></a></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
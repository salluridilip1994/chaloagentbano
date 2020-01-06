<?php
include "./webmaster/initialization.php";

$sql4="SELECT * FROM `blog` ORDER BY `post_id` DESC"  ;
$blog_rows=mysqli_query($con,$sql4);
?>

<!DOCTYPE html>
<html> 
  <head>
    <title>LIC</title>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    
    <script src="jquery.dreamalert.js"></script>
    <link href="jquery.dreamalert.css"rel="stylesheet">        <meta charset="UTF-8">
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
        <script src="lic.js"></script>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
     <style type="text/css">
        body p
{
  text-align: justify;
}
@media (min-width: 320px) and (max-width: 420px)
{
.row.res{
    margin-top: 18%;
}
}

    </style>

  </head>
  <body>
  <div id="header"></div>
    <div class="container" style="font-family: 'PT Serif', serif; margin-top: 8%!important;">
      <br>
      <div class="row res">
        <div class="col-md-8">
          <?php while($blog_row=mysqli_fetch_array($blog_rows))
          {
            $id= $blog_row['post_id'];
            $sql="SELECT * FROM `post_comments` WHERE `post_id`=$id";
            $comm_row=mysqli_query($con,$sql);
            $no_of_comm=mysqli_num_rows($comm_row);
            ?>
          <h4 >
            <a href="viewpost.php?Id=<?php echo $blog_row['post_id'];?>" style="color:rgb(0, 66, 173)">
            <?php echo $blog_row['post_title'];?></a
            >
          </h4>
          <sub>Posted On <?php echo date('d-F-Y', strtotime($blog_row['posted_on']))?> &nbsp &nbsp <?php echo $no_of_comm;?> Comments</sub>
          <hr />
              <p>
                <?php echo $blog_row['post_desc']?>
              </p>
              <a
                href="viewpost.php?Id=<?php echo $blog_row['post_id']?>"
                class=""
                style="color:#003399">Read More >>
              </a>
              <br><br>
          <?php } ?>
        </div>
        <div class="col-md-4">
          <h4>RECENT ARTICLES</h4>
          <hr />
          <ul type="none">
          <?php 
          $blog_rows=mysqli_query($con,$sql4);
          while($blog_row=mysqli_fetch_array($blog_rows))
          { 
            if(date('F-Y', strtotime($blog_row['posted_on']))==date('F-Y'))
            {
          ?>
          <?php ?>
            <li>
              <a href="viewpost.php?Id=<?php echo $blog_row['post_id'];?>" style="color:rgb(0, 66, 173)">
                <h5><?php echo $blog_row['post_title'];?></h5>
                <span style="color:#000;"><?php echo date('d-F-Y', strtotime($blog_row['posted_on']))?></span>
              </a>
            </li>
          <?php } } ?>
          </ul>
        </div>
      </div>
    </div>

<?php include_once('demofooter.php')?>
 
       

    <div style="height:100px"></div>
  <div class="main-footer"></div>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>
    
  </body>
</html>


<?php 

error_reporting(E_ALL^E_NOTICE);
$con= mysqli_connect('localhost','root','','registration');
if (isset($_POST['submit']))

{

$name1=$_FILES['photo']['name'];
$temp1=$_FILES['photo']['tmp_name'];
$store="images/".$name1;

$name=$_FILES['photo1']['name'];
$temp=$_FILES['photo1']['tmp_name'];
$store1="images/".$name;

move_uploaded_file($temp,"images/".$name);
move_uploaded_file($temp1,"images/".$name1);

$Profilename=$_POST['fname'];
  $Phonenumber=$_POST['fnumber'];
  $emailid=$_POST['fmail'];
  $City=$_POST['fcity'];
  $Address=$_POST['faddress'];
  $Aboutus=$_POST['faboutus'];
  $Facebooklink=$_POST['ffacebooklink'];
  $Linkedinlink=$_POST['flinkedinlink'];
  $Twitterlink=$_POST['ftwitterlink'];
  

$insert=mysqli_query($con,"insert into doregistration(Bannerimage,Profileimage,Name,Phonenumber,Emailid,City,Address,Aboutus,Facebooklink,Linkedinlink,Twitterlink)
   values('$store','$store1','$Profilename','$Phonenumber','$emailid','$City','$Address','$Aboutus','$Facebooklink','$Linkedinlink','$Twitterlink')");
}
?>
<div class="container">
   <table class="table" id="mydatatable">
    <thead>
       <tr>
      <th >No</th>
      <th >Image</th>
      <th >Details</th>
      <th >About </th>
      <th >Contact</th>
      <th >View Profile</th>

    </tr>
  </thead>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.9.0/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  </head>
  <body>

     <?php
     $sql="SELECT * FROM doregistration ";

$result = mysqli_query($con, $sql);

  while ($row =mysqli_fetch_array($result))
 {
         $Facebooklink12=$row['Facebooklink'];
     $Linkedinlink=$row['Linkedinlink'];
       $Twitterlink=$row['Twitterlink'];
?>

  
  <tbody>
    <tr >
      <td ><?php   echo $row['id']; ?></td>
<td style="width: 10%;"><?php  echo "<img src='".$row['Profileimage']."' width='175' height='200' />"; ?></td>
      <td style="width: 30%;">
               
          
         
            <div class="row mt-3">
              <div class="col-md-6"><?php   echo $row['Name']; ?> </div>
              <div class="col-md-6"><?php    echo $row['City']; ?></div>
            </div>
             <div class="row mt-3">
              <div class="col-md-6"><?php     echo $row['Phonenumber'];  ?> </div>
              <div class="col-md-6"><?php    echo $row['Emailid'];?></div>
            </div>
         
           </td>
           <td style="width: 40%">
           <?php      echo $row['Aboutus']; ?>
      
        </td>
     
      <td><button class="btn btn-info">Contact</button></td>
       <td><a href="profile.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-warning">View Profile</button></a></td>
    
    <?php
  }
 
?>
    </tr>
  
  
  </tbody>
</table>
 <?php

$con->close();

?>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

 <script type="text/javascript" src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
    $('#mydatatable').DataTable();
} );
    </script>
    <!-- JQuery -->

  </body>
</html>

     
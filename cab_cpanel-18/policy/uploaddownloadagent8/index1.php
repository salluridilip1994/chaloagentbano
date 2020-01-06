<?php
include_once('include/config.php');
if(isset($_POST['submit'])!=""){
$name=$_FILES['photo']['name'];
$c=$_POST['cname'];
$e=$_POST['email'];
$m=$_POST['mobile'];
$l=$_POST['websitelink'];
// $name=preg_replace("/\s+/", "_", $name);
$size=$_FILES['photo']['size'];
$type=$_FILES['photo']['type'];
$temp=$_FILES['photo']['tmp_name'];
$store="upload/".$name;
$store2="upload2/".$name;
$caption1=$_POST['caption'];
$link=$_POST['link'];

// $url="http://architectsengineers.in/";
move_uploaded_file($temp,"upload/".$name);
$query=$conn->query("insert into upload( `name`,`file_path`,`cname`,`mobile`,`email`,`websitelink`)values('$name','$store','$c','$m','$e','$l')");
// $ins="INSERT INTO `upload`(`name`, `file_path`, `cname`, `mobile`, `email`, `websitelink`) VALUES ('$name','$store','$c','$m','$e','$l')";

if($query){
header("location:index1.php");
}
else{
die(mysql_error());
}
}
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Upload and Download Files</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<script type="text/javascript" src="js/jquery.min2.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="css/all.css">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap1.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="css/mdb.min.css" rel="stylesheet">
<!-- <script src="js/jquery.js" type="text/javascript"></script> -->
<script src="js/bootstrap.js" type="text/javascript"></script>

<style>
	input#photo {
    padding-top: 0;
    padding-bottom: 36px;
}

</style>
</head>
<body style="background-color: #F8F9F9">

<div class="row-fluid">
<div class="span12">
<div class="container pt-2">
	<div class="row">
		<div class="col-md-3">
			<img src="" alt="logo" style="max-height: 70px;">
		</div>
		<div class="col-md-7"><h1>Upload  And  Download Files</h1>	</div>
		<div class="col-md-2">   
		 	<a href="logout.php"><button class="btn btn-danger"><i class="fa fa-sign-out-alt"> LOGOUT</i></button></a>
		</div>
	</div>
</div>
</div>
</div>
<hr>
<div class="container">
<form enctype="multipart/form-data"  name="form" method="post" class="mt-5" >
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    	<input type="file" name="photo" id="photo" class="form-control yoyo" step="">
    	<input type="submit" name="submit" id="submit" value="Submit" class="form-control"/>
  </div>
</div>
<input type="text" name="cname" required placeholder="Your Name..">
<input type="text" name="email" required placeholder="Your Email...">
<input type="text" name="mobile" required placeholder="Your Mobile Number...">
<input type="text" name="websitelink" required placeholder="Your Website Link if have">
</div>
</form>
</div>
<div class="container">
<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
<thead>
<tr>
	<th align="center">Files</th>
	<th align="center">Action</th>	
	<th align="center">File Target URL</th>
	<th align="center">Name</th>
	<th align="center">Phone Number</th>
	<th align="center">Email</th>
	<th align="center">Website Link</th>	
</tr>
</thead>
<?php
// $conn= mysqli_connect('localhost','root','','upload');
// $query= "SELECT * FROM `upload` order by id desc ";
// $result= mysqli_query($conn,$query);
// while($row = mysqli_fetch_array($result)) {
// 	echo $row['name'];
// echo "<img src='upload/".$row['name']."' width='175' height='200' />";
include_once('include/config.php');
$query=mysqli_query($conn,"select * from `upload` order by id desc");
$row = mysqli_fetch_array($query);
while($row= mysqli_fetch_array($query)){
$name=$row['name'];
?>
<html>
		<tr>
		<td>
			<a href="" style="margin-left: 25%">
			&nbsp;<?php  echo "<img src='upload/".$row['name']."' width='175' height='200' />";  ?></a>
		</td>
		<td>
		<!-- <button class="alert-success"><a href="download.php?filename=<?php echo $row['name'];?>">Download</a></button>  -->
		<button class="alert-success btn btn-primary p-2"><a style="color: white" href="download.php?filename=<?php echo $row['name'];  ?>">Download</a></button>
		</td>
      

		<td>
			
		 <button class="btn btn-warning p-2" id="mybtn"><i class="fas fa-arrow-alt-circle-right"></i><?php  echo "<a href='" . $row['file_path'] . "'>&nbsp;File Path";?></a></button>&nbsp;&nbsp; 
		</td>
		  <td>
			<?php  echo $row['cname'];  ?></a>
		</td>
		 <td>
			<?php  echo $row['mobile'];  ?></a>
		</td>
		 <td>
			<?php  echo $row['email'];  ?></a>
		</td>
		 <td>
			<?php  echo $row['websitelink'];  ?></a>
		</td>
		</tr>

		</html>
<?php
  }
 ?>
</table>
</div>
</div>
</div>
<div class="container-fluid mt-5 pt-2 pb-2" style="background-color: black;color: silver">
	<div class="row">
	<div class="col-md-6"><h6 class="text-center"><b>All Copyrights reserved @Architectsenginners.in</b></h6></div>
	<div class="col-md-6"><h6 class="text-center"><b>Designed by :<a href="https://nutantek.com" target="_blank">NutanTek Solutions LLP</a></b></h6></div>
	</div>
</div>
</body>
<!-- JQuery -->


<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min2.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min2.js"></script>
<!-- MDB core JavaScript -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script> -->

<script type="text/javascript">
	function Copy() {
  var Url = document.getElementById("field");
  print_r(Url);
  Url.innerHTML = window.location.href;
  console.log(Url.innerHTML)
  Url.select();
  document.execCommand("copy");
}
</script>



</html>

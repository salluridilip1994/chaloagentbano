<!DOCTYPE html>
<html>
<head>
	<title>DO'S Or agent registration page</title>
	<script type="text/javascript">
		function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 2) {
            alert('File size exceeds 2 MB');
           // $(file).val(''); //for clearing with Jquery
        } else {

        }
    }
    function ValidateSize1(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 2) {
            alert('File size exceeds 1 MB');
           // $(file).val(''); //for clearing with Jquery
        } else {

        }
    }
	</script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.9.0/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<img src="" class="w-100 d-block">
<div class="container">
	<h3 id="sh2"><b><b>Registration page</b></b></h3>
		<div class="row pt-5 pb-5">
		
	<div class="col-md-8">
			
					<form style="width: 100%;" action="index.php" method="post" enctype="multipart/form-data" >
			<div class="row">
				<div class="col-md-6">
			<input type="file" onchange="ValidateSize(this)"  name="photo" id="photo">
			<label for="files">Select your Banner</label>
		</div>
		<div class="col-md-6">
			<input type="file" onchange="ValidateSize1(this)"  name="photo1" id="photo1" >
			<label for="files">Profile Picture</label>
			</div>
		</div>
					<input type="text" name="fname" placeholder="Your Name" class="form-control mt-2" pattern="^[A-za-z]*((\.|\s)*[A-za-z])*$"  maxlength="30"  required title="Allow Max 30 characters; No numerics are allowed" required>
				
					<input type="text" name="fnumber" placeholder="Mobile Number" class="form-control mt-2 mt-2" pattern="[1-9]{1}[0-9]{9}" required>
			
			
					<input type="mail" name="fmail" placeholder="Your Email" class="form-control mt-2" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required>
			
					<input type="text" name="fcity" placeholder="Enter your city" class="form-control mt-2" pattern="(^?=.*[a-zA-Z]+(\s ?=.*[a-zA-Z]+) | (?=.* [a-zA-Z]+)(\. ?=.*[a-zA-Z]+))?$" required>
				
			
						<textarea rows="2"  placeholder="Enter your Address" name="faddress"   id="txtarea_consolidation"  required class="form-control mt-2"  > </textarea>
			

					<input type="text" name="faboutus" placeholder="Enter about you" class="form-control mt-2" pattern="(^?=.*[a-zA-Z]+(\s ?=.*[a-zA-Z]+) | (?=.* [a-zA-Z]+)(\. ?=.*[a-zA-Z]+))?$" required>
				
					<input type="text" name="ffacebooklink" placeholder="Enter your facebook link " class="form-control mt-2" pattern="(^?=.*[a-zA-Z]+(\s ?=.*[a-zA-Z]+) | (?=.* [a-zA-Z]+)(\. ?=.*[a-zA-Z]+))?$" required>
			
					<input type="text" name="flinkedinlink" placeholder="Enter your Linkedin link" class="form-control mt-2" pattern="(^?=.*[a-zA-Z]+(\s ?=.*[a-zA-Z]+) | (?=.* [a-zA-Z]+)(\. ?=.*[a-zA-Z]+))?$" required>
			
					<input type="text" name="ftwitterlink" placeholder="Enter your Twitter link" class="form-control mt-2" pattern="(^?=.*[a-zA-Z]+(\s ?=.*[a-zA-Z]+) | (?=.* [a-zA-Z]+)(\. ?=.*[a-zA-Z]+))?$" required>
			
			<button  type="submit" class="btn btn-info" name="submit" >Send </button>
		</form>
	
		</div>
	</div>
</div>

</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.9.0/js/mdb.min.js"></script>
</html>
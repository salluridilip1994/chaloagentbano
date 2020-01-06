<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/login.css">

<?php session_start();?>
<html>
<?php
include_once('include/config.php');?>
  <body id="login">
<div class="container login-container text-center">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login Form</h3>
                    
        <div class="form-group">
            <input type="text" class="form-control" placeholder="UserName*" value="" required  name="user" pattern="^[_A-za-z]*((\.|\s)*[_A-za-z])*$" />
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pswd" placeholder="Password *" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        </div>
      
        <div class="form-group">
            <input type="submit" class="btnSubmit" value="Login" name="submit"/>
        </div>
                        <!-- <div class="form-group">
                            <a href="#" class="btnForgetPwd">Forget Password?</a>
                        </div> -->
                    
                </div>

            </div>
          </form>
        </div>


    <?php 
include_once('include/config.php');
      if(isset($_POST['submit'])){
$uname=$_POST['user'];
$pwd=$_POST['pswd'];
$_SESSION['uname']=$uname;

$sel=mysqli_query($conn,"SELECT * FROM `login` where `user`='$uname' and `pswd`='$pwd'");
$rows=mysqli_num_rows($sel);
if($rows>0){

  ?>
  <script type="text/javascript">window.location.href="index1.php";</script>
  <?php
}
else{
  echo "<script>alert('invalid credentials')</script>";
}

      }

    ?>
 <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
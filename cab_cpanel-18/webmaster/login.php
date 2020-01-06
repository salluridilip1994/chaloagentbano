<?php
include "initialization.php";
stop_to_login();
$username = $password = "";
$username_err = $password_err = "";
if(isset($_POST['submit']))
{
 
    // Check if username is empty
    if(empty(trim($_POST["userid"]))){
        $userid_err = "Please enter userID.";
    } else{
        $userid = trim($_POST["userid"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($userid_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, userid, password FROM user WHERE userid = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_userid);
            
            // Set parameters
            $param_userid = $userid;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $userid, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["userid"] = $userid;                            
                            
                            // Redirect user to welcome page
                            header("location: dashboard_wm.php");
                        } else{
                            // Display an error message if password is not valid

                            $_SESSION["password_error"] = "password error";
                            
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $_SESSION['no_account'] = "No account found with that username.";
                }
            } else{
                $_SESSION['went_wrong']="Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/js/mdb.min.js"></script>
    <style>
       .header ul li
       {
        list-style:none;
        display:inline-block;
    }
</style>

</head>
<body>
    <div style="background-color:#FBC707;height:80px" class="header"><img src="img/logo.png" style="width:120px;height:70px;">
    </div>
    <?php

       $password_error = (isset($_SESSION['password_error'])) ? $_SESSION['password_error'] : '';
          if (!empty($password_error)) {
           echo '<div class="alert alert-success alert-dismissible"">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>The password you entered was not valid</strong>
           </div>';
           unset($_SESSION['password_error']);
         }
         $no_account = (isset($_SESSION['no_account'])) ? $_SESSION['no_account'] : '';
          if (!empty($no_account)) {
           echo '<div class="alert alert-success alert-dismissible"">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>No account found with that username</strong>
           </div>';
           unset($_SESSION['no_account']);
         }
         $went_wrong = (isset($_SESSION['went_wrong'])) ? $_SESSION['went_wrong'] : '';
          if (!empty($went_wrong)) {
           echo '<div class="alert alert-success alert-dismissible"">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>Oops! Something went wrong. Please try again later</strong>
           </div>';
           unset($_SESSION['went_wrong']);
         }

    ?>
    
    <form  action="#" method="post" class="text-center border border-light p-5" style="width: 45%;margin-left: 30%;margin-top: 3%;">

        <p class="h4 mb-4" style="margin-left:-70px;">Sign-in</p>
        
        <!-- Email -->
        <input type="text" name="userid" class="form-control mb-4" placeholder="UserID" >
        
        <!-- Password -->
        <input type="password" name="password" class="form-control mb-4" placeholder="Password" >
        
        
        <!-- Sign in button -->
        <button class="btn btn-block my-4" type="submit" name="submit" style="width: 25%;background-color:#1D4E9E ">Sign in</button>
        
    </form>
    
</body>
</html>
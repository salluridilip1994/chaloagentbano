<?php
session_start();

$hostname = "localhost";
$username = "nutantek_chaloagent";
$password = "chaloagent@12345";
$database = "nutantek_chaloagentbano";
$con = mysqli_connect("$hostname","$username","$password","$database")  or die(mysqli_error());

function check_logged_in()
{
 if(!isset($_SESSION["loggedin"]))
 { 
   header("location: login.php");
 }
 else
 {
   
 }
}
function stop_to_login()
{
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
  {
    header("location:dashboard_wm.php");
  }
}

?>
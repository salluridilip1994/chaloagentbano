<?php
include "initialization.php";
check_logged_in();
if(isset($_POST['delete'])) {
$inews_id=$_GET['Id'];
$sql="DELETE FROM `industry_news` WHERE  `Id`=$inews_id" ;
if(mysqli_query($con,  $sql))
{
$_SESSION['delete_inews_scs']="delete success";
header('Location:dashboard_wm.php');
}
else
{
$_SESSION['error']="delete error";
header('Location:dashboard_wm.php');
}

}
mysqli_close($con);
?>
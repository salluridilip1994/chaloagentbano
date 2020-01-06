<?php
include "initialization.php";
check_logged_in();
if(isset($_POST['delete'])) {
$paper_id=$_GET['Id'];
$sql="DELETE FROM `mock_test` WHERE  `Id`=$paper_id" ;
if(mysqli_query($con,  $sql))
{
$_SESSION['delete_paper_scs']="delete success";
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
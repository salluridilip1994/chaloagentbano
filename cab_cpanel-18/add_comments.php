<?php
include "./webmaster/initialization.php";

if(isset($_POST['submit']))
{
    $comment=htmlentities(mysqli_real_escape_string($con,$_POST['comment']));
    $name=htmlentities(mysqli_real_escape_string($con,$_POST['name']));
    $email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));
    $id=$_GET['Id'];

    $sql="INSERT INTO `post_comments`(`name`, `comment`, `email`, `post_id`)
           VALUES ('$name','$comment','$email','$id')";

    if(mysqli_query($con,$sql))
    {
        echo 'comment added successfully';
        header("location:viewpost.php?Id=$id");
    }
    else
    {
        echo 'Something went wrong';
    }
}

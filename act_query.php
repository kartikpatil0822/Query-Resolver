<?php
require "session.php";
require "templates/header.php";
$lab=$file=$desciption='';

if(isset($_POST['submit'])){
    $lab=$_POST['lab'];
    $desciption=$_POST['description'];

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["file1"]["name"]);
    
}

$query = "INSERT INTO `querydb`(`user_id`,`user_email`, `laborclass`,`image`,`description`) 
        VALUES ('".$_SESSION['id']."','".$_SESSION['email']."','$lab','$target_file','$desciption')";
$result=mysqli_query($con,$query) or $err=mysqli_error($con);

if(!isset($err)){
    if(move_uploaded_file($_FILES["file1"]["tmp_name"], "img/" . $_FILES["file1"]["name"])){
        $_SESSION['flash'] = 'Query Submitted successfully!';
        header('Location: index.php');
        die();
    }
    else{
        $_SESSION['error'] = 'Failed to submit query!';
        header('Location: index.php');
        die();
    }
}
else{
    $_SESSION['error'] = 'Some Error occured!';
    header('Location: index.php');
    die();
}

?>
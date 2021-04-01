<?php
require "session.php";
require "templates/header.php";
$username=$password='';
$flag=true;
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
}

if($flag==true){
    $query = "SELECT * FROM userdb where username = '$username'";
    $result=mysqli_query($con,$query) or $err=mysqli_error($con);
    if(!isset($err)){
        //echo 'Data inserted successfully';
        $dbresult=mysqli_fetch_assoc($result);
        if($dbresult!=NULL){
            if($password == $dbresult['password']){
                $_SESSION['id'] = $dbresult['id'];
                $_SESSION['email'] = $dbresult['email'];
                $_SESSION['username'] = $dbresult['username'];
                $_SESSION['role'] = $dbresult['role'];
                $_SESSION['flash'] = "Login Successful";
                header('Location: index.php');
                die();
                
            }
            else{
                $_SESSION['error'] = "Check your password";
                header('Location: login.php');
                die();
            }
        }
        else{
            $_SESSION['error'] = "User Not Found";
            header('Location: login.php');
            die();
        }
    }
    else{
        $_SESSION['error'] = "Any error occured";
        header('Location: login.php');
        die();
    }
}

?>
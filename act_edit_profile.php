<?php
require "session.php";
require "templates/header.php";
$flag=true;
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    
    if(empty($fname)){
        echo "First Name Compulsory";
        $flag=false;
    }
    elseif(!preg_match("/^[A-Za-z]+$/",$fname)){
        echo "Name must contain only characters";
        $flag=false;
    }
    if(empty($lname)){
        echo "Last Name Compulsory";
        $flag=false;
    }
    elseif(!preg_match("/^[A-Za-z]+$/",$lname)){
        echo "Name must contain only characters";
        $flag=false;
    }
    if(empty($contact)){
        echo "Contact is Compulsory";
        $flag=false;
    }
    elseif(!preg_match("/^[0-9]+$/",$contact)){
        echo "Contact must contain only numbers";
        $flag=false;
    }
    if(empty($email)){
        echo "Email is Compulsory";
        $flag=false;
    }
    if(empty($username)){
        echo "Username is Compulsory";
        $flag=false;
    }
}

if($flag==true){
    $query = "UPDATE `userdb` SET 
    firstname='$fname', lastname='$lname', branch='$branch', year='$year', contact=$contact, email='$email', username='$username'
    WHERE id='".$_SESSION['id']."'";
    $result=mysqli_query($con,$query) or $err=mysqli_error($con);
    if(!isset($err)){
        $_SESSION['flash'] = "Profile Updated";
        header('Location: profile.php');
        die();
    }
    else{
        $_SESSION['error'] = "Profile Updation failed";
        header('Location: profile.php');
        die();
    }
}

?>
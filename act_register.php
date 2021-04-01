<?php
require "session.php";
require "templates/header.php";
$fname=$lname=$prn=$branch=$year=$contact=$email=$address=$username=$password=$cpass='';
$flag=true;
if(isset($_POST['submit'])){
    $fname=ucfirst($_POST['fname']);
    $lname=ucfirst($_POST['lname']);
    $prn=strtolower($_POST['prn']);
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpass=$_POST['re_pass'];
    
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
    
    if($password==$cpass){
        // $password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO `userdb`(`firstname`, `lastname`, `prn`,`branch`, `year`, `contact`, `email`, `username`, `password`) 
        VALUES ('$fname','$lname','$prn','$branch','$year',$contact,'$email','$username','$password')";
        $result=mysqli_query($con,$query) or $err=mysqli_error($con);
    if(!isset($err)){
        $_SESSION['flash'] = 'Registration Successful!';
        header('Location: index.php');
        die();
    }
    else{
        $_SESSION['error'] = 'Email/Mobile number/username already in use';
        header('Location: register.php');
        die();
    }
    }
    else{
        $_SESSION['error'] = 'Both of the password must be same';
        header('Location: register.php');
        die();
    }
    
}

?>
<?php
require "session.php";
require "templates/header.php";

    $query = "SELECT * FROM querydb where id=".$_GET['id']."";
	$result = mysqli_query($con,$query) or $err = mysqli_error($con);
    if(isset($err)){
		$_SESSION['error'] = "Unable to fetch Query!Please try again";
        header('Location: index.php');
        die();
    }

    while($user = mysqli_fetch_assoc($result)){
        if($user['status']=='pending'){
            $query = "UPDATE querydb SET status='accepted' WHERE id = ".$_GET['id']."";
            $result = mysqli_query($con, $query) or $err = mysqli_error($con);
            if (!isset($err)) {
                $_SESSION['flash'] = "Query Resolved";
                header('Location: email/email1.php?id='.$user['user_email'].'');
                die();
            }
        }
        $_SESSION['error'] = "Query already resolved";
        header("Location: list_queries.php");
        die();
    }
	require "templates/footer.php";
?>
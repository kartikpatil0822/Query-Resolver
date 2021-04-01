<?php
$title="Profile";
require "session.php";
require "templates/header.php";
    $query = "SELECT firstname,lastname,branch,year,contact,email,username FROM userdb where username='".$_SESSION['username']."'";
    $result=mysqli_query($con,$query) or $err=mysqli_error($con);
    if(isset($err)){
		$_SESSION['error'] = "Unable to fetch User!Please try again";
        header('Location: index.php');
        die();
    }
    $dbresult=mysqli_fetch_assoc($result);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
</head>

<section id="hero" class="clearfix" style="padding-top: 20px;">
    <div class="Container">
        <h2 style="text-align: center;margin-bottom: 20px;"><strong>Profile</strong></h2>
            <table style="margin-left: 40%;margin-bottom: 20px;">
                <tr>
                    <td><label for="fname"><strong>First name:</strong></label></td>
                    <td><?php echo $dbresult['firstname']?></td>
                </tr>
                <tr>
                    <td><label for="lname"><strong>Last name:</strong></label></td>
                    <td><?php echo $dbresult['lastname']?></td>
                <tr>
                    <td><label for="Branch"><strong>Branch:</strong></label></td>
                    <td><?php echo $dbresult['branch']?></td>
                </tr>
                <tr>
                    <td><label for="Year"><strong>Year:</strong></label></td>
                    <td><?php echo $dbresult['year']?></td>
                </tr>
                <tr>
                    <td><label for="contact"><strong>Contact:</strong></label></td>
                    <td><?php echo $dbresult['contact']?></td>
                </tr>
                <tr>
                    <td><label for="Email"><strong>Email:</strong></label></td>
                    <td><?php echo $dbresult['email']?></td>
                </tr>
                <tr>
                    <td><label for="username"><strong>Username:</strong></label></td>
                    <td><?php echo $dbresult['username']?></td>
                </tr>
                <tr>
                    <td><a href="edit_profile.php"><button style="margin: 0;position: absolute;left: 47%;" type="submit" name="submit">Edit Profile</button></a></td>
                </tr>
                
            </table>
    </div>
</section>

<?php
require "templates/footer.php";
?>
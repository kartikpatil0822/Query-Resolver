<?php
$title="Edit Profile";
require "session.php";
require "templates/header.php";
    $query = "SELECT firstname,lastname,branch,year,contact,email,username FROM userdb where username='".$_SESSION['username']."'";
    $result=mysqli_query($con,$query) or $err=mysqli_error($con);
    $dbresult=mysqli_fetch_assoc($result);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
</head>

<section id="hero" class="clearfix" style="padding-top: 20px;">
    <div class="Container">
        <h2 style="text-align: center;margin-bottom: 20px;"><strong>Edit-Profile</strong></h2>
        <form action="act_edit_profile.php" method="POST">
            <table style="margin-left: 40%;margin-bottom: 20px;">
                <tr>
                    <td><label for="fname"><strong>First name:</strong></label></td>
                    <td><input type="text" id="fname" name="fname" value="<?php echo $dbresult['firstname']?>"></td>
                </tr>
                <tr>
                    <td><label for="lname"><strong>Last name:</strong></label></td>
                    <td><input type="text" id="lname" name="lname" value="<?php echo $dbresult['lastname']?>"></td>
                </tr>
                <tr>
                    <td><label for="Branch"><strong>Branch:</strong></label></td>
                    <td><select id="branch" name="branch" required>
                        <option value="<?php echo $dbresult['branch']?>"><?php echo $dbresult['branch']?></option>
                        <option value="CSE">CSE</option>
                        <option value="ETRX">ETRX</option>
                        <option value="EnTC">EnTC</option>
                        <option value="MECH">MECH</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="ELE">ELE</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="Year"><strong>Year:</strong></label></td>
                    <td><select id="year" name="year" required>
                        <option value="<?php echo $dbresult['year']?>"><?php echo $dbresult['year']?></option>
                        <option value="FY">FY</option>
                        <option value="SY">SY</option>
                        <option value="TY">TY</option>
                        <option value="FINAL YEAR">Final Year</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="contact"><strong>Contact:</strong></label></td>
                    <td><input type="tel" id="contact" name="contact" value="<?php echo $dbresult['contact']?>"></td>
                </tr>
                <tr>
                    <td><label for="Email"><strong>Email:</strong></label></td>
                    <td><input type="email" id="email" name="email" value="<?php echo $dbresult['email']?>"></td>
                </tr>
                <tr>
                    <td><label for="username"><strong>Username:</strong></label></td>
                    <td><input type="text" id="username" name="username" value="<?php echo $dbresult['username']?>"></td>
                </tr>
                <tr>
                    <td><a href="act_edit_profile.php"><button style="margin: 0;position: absolute;left: 47%;" type="submit" name="submit" class="btn btn-primary">Save changes</button></a></td>
                </tr>
            </table> 
        </form>    
    </div>
</section>

<?php
require "templates/footer.php";
?>
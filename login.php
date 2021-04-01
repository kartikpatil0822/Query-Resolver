<?php
$title = "Log In";
require "session.php";
require "templates/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <style>
        form{
            margin-bottom: 20px;
        }
        .container-signup{
            text-align: center;
        }
    </style>
</head>
<body>

<section id="hero" class="clearfix" style="padding-top: 20px;">
    <div class="Container">
        <h2 style="text-align: center;margin-bottom: 20px;">Login FORM</h2>
        <form action="act_login.php" method="POST">
            <table style="margin-left: 40%;margin-bottom: 20px;">
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" value="" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" value="" required></td>
                </tr>
                <tr>
                    <td><button style="margin: 0;position: absolute;left: 47%;" type="submit" name="submit">Login</button></td>
                </tr>
                
            </table>
            <div class="container-signup">
                <p>Not have account? <a href="register.php">Register Here</a>.</p>
            </div>
        </form>
    </div>
</section>

</body>
</html>

<?php
require "templates/footer.php";

?>
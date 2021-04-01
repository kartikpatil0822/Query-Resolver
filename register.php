<?php
$title="Registration";
require "session.php";
require "templates/header.php";

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
        <h2 style="text-align: center;margin-bottom: 20px;">REGISTRATION FORM</h2>
        <form action="act_register.php" method="POST">
            <table style="margin-left: 40%;margin-bottom: 20px;">
                <tr>
                    <td><label for="fname">First name:</label></td>
                    <td><input type="text" id="fname" name="fname" value=""></td>
                </tr>
                <tr>
                    <td><label for="lname">Last name:</label></td>
                    <td><input type="text" id="lname" name="lname" value=""></td>
                </tr>
                <tr>
                    <td><label for="prn">PRN:</label></td>
                    <td><input type="text" id="prn" name="prn" value=""></td>
                </tr>
                <tr>
                    <td><label for="Branch">Branch:</label></td>
                    <td><select id="branch" name="branch" required>
                        <option value="">Select</option>
                        <option value="CSE">CSE</option>
                        <option value="ETRX">ETRX</option>
                        <option value="EnTC">EnTC</option>
                        <option value="MECH">MECH</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="ELE">ELE</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="Year">Year:</label></td>
                    <td><select id="year" name="year" required>
                        <option value="">Select</option>
                        <option value="FY">FY</option>
                        <option value="SY">SY</option>
                        <option value="TY">TY</option>
                        <option value="FINAL YEAR">Final Year</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="contact">Contact:</label></td>
                    <td><input type="tel" id="contact" name="contact" value=""></td>
                </tr>
                <tr>
                    <td><label for="Email">Email:</label></td>
                    <td><input type="email" id="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" value=""></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" value="" required></td>
                </tr>
                <tr>
                    <td><label for="re-pass">Confirm Password:</label></td>
                    <td><input type="password" id="re-pass" name="re_pass" value="" required></td>
                </tr>
                <tr>
                    <td><button style="margin: 0;position: absolute;left: 47%;" type="submit" name="submit">Register</button></td>
                </tr>
                
            </table>
            <div class="container-signup">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
        </form>
    </div>
</section>

</body>
</html>

<?php
require "templates/footer.php";

?>
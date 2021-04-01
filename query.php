<?php
$title="Query";
require "session.php";
require "templates/header.php";

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query</title>
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

<section id="hero" class="clearfix" style="padding-top: 10px">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center" data-aos="fade-up">
            <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
                <form action="act_query.php" method="POST" enctype="multipart/form-data">
                    <table style="margin-left: 20%;margin-bottom: 20px;">
                        <tr>
                            <td><label for="lab">Lab or Classroom:</label></td>
                            <td><input type="text" id="lab" name="lab" value="" placeholder="ex. Lab-06 or CS-02" required></td>
                        </tr>
                        <tr>
                            <td><label for="file">Filename:</label></td> 
                            <!-- <input type="text" name="file1" value=file> -->
                            <td><input type="file" name="file1" id="file"></td> 
                        </tr>
                        <tr>
                            <td><label for="contact">Query Description:</label></td>
                            <td><textarea type="text" name="description" value="" required></textarea></td>
                        </tr>
                        <tr>
                            <td><button style="margin: 0;position: absolute;left: 37%;" type="submit" name="submit">Submit Query</button></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
                <img src="templates/assets/img/intro-img.svg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section><!-- End Hero -->

</body>
</html>

<?php
require "templates/footer.php";

?>
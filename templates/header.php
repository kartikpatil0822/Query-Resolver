<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php isset($title)?print($title):print("Query Resolver"); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons
  <link href="img/favicon-32x32.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="templates/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="templates/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="templates/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="templates/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="templates/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="templates/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">Query-Resolver</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <?php 
          if(!isset($_SESSION['id'])){
            echo '<li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">About</a></li>
                  <li><a class="nav-link scrollto" href="#">Contact</a></li>
                  <li><a class="nav-link scrollto" href="login.php">Login</a></li>';
          }
          else if (isset($_SESSION) && $_SESSION['role']=='user') {
            echo '<li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">About</a></li>
                  <li><a class="nav-link scrollto" href="#">Contact</a></li>
                  <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
                  <li><a class="nav-link scrollto" href="profile.php">@'.$_SESSION['username'].'</a></li>';
          }
          else if (isset($_SESSION['id']) && $_SESSION['role']=='admin'){
            echo '<li><a href="list_queries.php">List Queries</a></li>
                  <li><a href="statistics.php">Statistics</a></li>
                  <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
                  <li><a class="nav-link scrollto" href="profile.php">@'.$_SESSION['username'].'</a></li>';
          }
        ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </header><!-- End Header -->

  <?php 
    if(isset($title)){
  ?><section id="breadcrumbs" class="breadcrumbs">
      <div class="container">  
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><?php isset($title)?print($title):print("Query Resolver"); ?></li>
        </ol>
          <h2><?php isset($title)?print($title):print("Query Resolver"); ?></h2>
      </div>
    </section>
  <?php
      }
      else
      print("</br>");
  ?>
    </section><!-- End Breadcrumbs -->

<?php
if(isset($_SESSION['flash'])){
    echo '<div class="alert alert-success" role="alert">
    '.$_SESSION['flash'].'
  </div>';
  unset($_SESSION['flash']);
}

else if(isset($_SESSION['error'])){
  echo '<div class="alert alert-danger" role="alert">
  '.$_SESSION['error'].'
</div>';
unset($_SESSION['error']);
}
?>

  
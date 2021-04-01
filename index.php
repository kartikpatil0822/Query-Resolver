<?php
$title="Home";
require_once  "session.php";
require_once  "templates/header.php";
//print_r($_SESSION); 
?>

<!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
          <?php
          if(!isset($_SESSION['id'])){
          ?>
          <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
            <h2>Register or Sign In to submit <span>Queries</span></h2>
          <div>
          <?php
              echo '<a href="register.php" class="btn-get-started scrollto">Register</a>
                    <a href="login.php" class="btn-get-started scrollto">Sign In</a>';
          }
          else if(isset($_SESSION['id']) && $_SESSION['role']=='user'){
          ?>
          <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
            <h2>Any Query regarding<br><span>Labs or Classrooms!</span></h2>
          <div>
          <?php
            echo '<a href="query.php" class="btn-get-started scrollto">Add Query</a>
                  <a href="view_user_query.php" class="btn-get-started scrollto">View your Query</a>';
          }
          else if(isset($_SESSION['id']) && $_SESSION['role']=='admin'){
          ?>
          <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
            <h2>Click <span>List Queries</span><br>To view</h2>
          <div>
          <?php
            echo '<a href="list_queries.php" class="btn-get-started scrollto">List Queries</a>
                  <a href="statistics.php" class="btn-get-started scrollto">Statistics</a>';
          }
          ?>
            
          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="templates/assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
          <h2>About</h2>
          <h3>This is Query resolver web-based application designed using PHP.</h3>
          <p>This is a complete application including email facilities.</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Covers HTML and CSS.</li>
            <li><i class="bi bi-check-circle"></i> Covers Data base connectivity.</li>
            <li><i class="bi bi-check-circle"></i> Include the Email Feature using PHP mailer.</li>
          </ul>
        </div>
      </div>

    </section><!-- End About Section -->

<?php
require "templates/footer.php";
?>
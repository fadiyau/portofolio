<?php
    include 'admin/connection/connection.php';
    $query = mysqli_query($koneksi, "SELECT * FROM member");
    $data = mysqli_fetch_assoc(($query));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portofolio - Fadiyah</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/fe/assets/img/favicon.png" rel="icon">
  <link href="asset/fe/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/fe/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/fe/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="asset/fe/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/fe/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="asset/fe/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="asset/fe/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/fe/assets/css/style.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

  <!-- =======================================================
  * Template Name: Ninestars - v2.0.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'inc/nav.php' ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1><?= $data['nama'] ?></h1>
          <p class="font-italic"><?= $data['dsc'] ?></p>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="asset/fe/assets/img/hero-img.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <?php include 'content/about.php' ?>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="resume" class="services section-bg">
        <?php include 'content/resume.php' ?>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <?php include 'content/portofolio.php' ?>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <?php include 'content/contact.php' ?>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <?php include 'inc/footer.php' ?>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/fe/assets/vendor/jquery/jquery.min.js"></script>
  <script src="asset/fe/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/fe/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="asset/fe/assets/vendor/php-email-form/validate.js"></script>
  <script src="asset/fe/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/fe/assets/vendor/venobox/venobox.min.js"></script>
  <script src="asset/fe/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="asset/fe/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/fe/assets/js/main.js"></script>

</body>

</html>
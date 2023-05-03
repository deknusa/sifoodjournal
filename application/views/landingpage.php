<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Food Journal.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('application/assets/img/favicon.png');?>" rel="icon">
  <link href="<?php echo base_url('application/assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/bootstrap/css/bootstrap.min.css');?>">
  <link href="<?php echo base_url('application/assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
  <link href="<?php echo base_url('application/assets/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('application/assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?php echo base_url('application/assets/css/main.css');?>">
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <!-- =======================================================
  * Template Name: Impact
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url();?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Food Journal<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <!-- <li><a href="#contact">Contact</a></li> -->
          <li></li>
          <li><a href="#">Masuk</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- kondisi untuk memuat konten pada laman ini -->
  <?php
    if (isset($landingContent)) {
      echo $landingContent;
    }

    if (isset($landingKonten)) {
      echo $landingKonten;
    }
  ?>



  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('application/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <!-- <script src="assets/vendor/aos/aos.js"></script> -->
  <script src="<?php echo base_url('application/assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
  <script src="<?php echo base_url('application/assets/vendor/purecounter/purecounter_vanilla.js');?>"></script>
  <script src="<?php echo base_url('application/assets/vendor/swiper/swiper-bundle.min.js');?>"></script>
  <script src="<?php echo base_url('application/assets/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
  <script src="<?php echo base_url('application/assets/vendor/php-email-form/validate.js');?>"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('application/assets/js/main.js');?>"></script>

</body>

</html>
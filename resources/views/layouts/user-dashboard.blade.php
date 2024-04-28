<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('vendor/BizLand') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('vendor/BizLand') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/BizLand') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('vendor/BizLand') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('vendor/BizLand') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('vendor/BizLand') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('vendor/BizLand') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('vendor/BizLand') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('vendor/BizLand') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <header id="header">
        <x-user-navbar-dashboard/>
    </header>

    <main id="main">
        {{ $slot }}
    </main>

    <footer id="footer">
        <x-user-footer-dashboard/>
    </footer>



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/BizLand') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('vendor/BizLand') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('vendor/BizLand') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('vendor/BizLand') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('vendor/BizLand') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('vendor/BizLand') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('vendor/BizLand') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('vendor/BizLand') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('vendor/BizLand') }}/assets/js/main.js"></script>

</body>

</html>

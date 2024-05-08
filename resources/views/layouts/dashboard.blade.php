<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title ?? 'Laravel Project' }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('vendor/NiceAdmin') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('vendor/NiceAdmin') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/NiceAdmin') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('vendor/NiceAdmin') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('vendor/NiceAdmin') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('vendor/NiceAdmin') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('vendor/NiceAdmin') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('vendor/NiceAdmin') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('vendor/NiceAdmin') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('vendor/NiceAdmin') }}/assets/css/style.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

        <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <x-navbar-dashboard/>
    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <x-sidebar-dashboard/>
    </aside><!-- End Sidebar-->
        <main id="main" >
            {{ $slot }}
        </main><!-- End #main -->

    <footer  class="footer">
        <x-footer-dashboard/>

    </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/NiceAdmin') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('vendor/NiceAdmin') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('vendor/NiceAdmin') }}/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('vendor/NiceAdmin') }}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('vendor/NiceAdmin') }}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('vendor/NiceAdmin') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('vendor/NiceAdmin') }}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('vendor/NiceAdmin') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('vendor/NiceAdmin') }}/assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content="" name="descriptison">
	  <meta content="" name="keywords">

	  <!-- Favicons -->
	  <link href="{{ url('Appland/assets/img/favicon.png') }}" rel="icon">
	  <link href="{{ url('Appland/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	  <!-- Vendor CSS Files -->
	  <link href="{{ url('Appland/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	  <link href="{{ url('Appland/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
	  <link href="{{ url('Appland/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
	  <link href="{{ url('Appland/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
	  <link href="{{ url('Appland/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
	  <link href="{{ url('Appland/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ url('Appland/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
	
	@yield('content')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('Appland/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('Appland/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('Appland/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('Appland/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('Appland/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('Appland/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ url('Appland/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script type="text/javascript" src="{{ url('Appland/assets/js/main.js') }}"></script>
</body>
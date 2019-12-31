<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eBusiness Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <base href="{{ asset('user') }}/">
    <!-- Favicons -->
    <link href="{{ asset('user/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('user/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="{{ asset('user/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="{{ asset('user/lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/venobox/venobox.css') }}" rel="stylesheet">
    <!-- Nivo Slider Theme -->
    <link href="{{ asset('user/css/nivo-slider-theme.css') }}" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    <!-- Responsive Stylesheet File -->
    <link href="{{ asset('user/css/responsive.css') }}" rel="stylesheet">
    <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <div id="preloader"></div>
    @include('user.layouts.header')
    <!-- header end -->
    @yield('content')
    <!-- End Suscrive Area -->
    @include('user.layouts.footer')
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="{{ asset('user/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('user/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/lib/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('user/lib/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('user/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('user/lib/parallax/parallax.js') }}"></script>
    <script src="{{ asset('user/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('user/lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('user/lib/appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('user/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('user/contactform/contactform.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>

</html>

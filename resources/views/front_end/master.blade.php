<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- theme meta -->
    <meta name="theme-name" content="DGMS" />
    {{-- <meta http-equiv="content-security-policy"
  content="default-src 'self'; script-src 'self';
  connect-src 'self'; img-src 'self';
  style-src 'self' 'unsafe-inline' 'sha256-CwE3Bg0VYQOIdNAkbB/Btdkhul49qZuwgNCMPgNY5zw='' ;" /> --}}

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('front_end/assets') }}/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('front_end/assets') }}/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front_end/assets') }}/images/apple-touch-icon.png">

    <!-- THEME CSS
 ================================================== -->
    <!-- Bootstrap -->
    
    <link rel="stylesheet" href="{{ asset('front_end/assets') }}/plugins/bootstrap/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('front_end/assets') }}/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('front_end/assets') }}/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="{{ asset('front_end/assets') }}/plugins/slick-carousel/slick-theme.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{ asset('front_end/assets') }}/css/style.css">
    <style>
        .dropdown-menu {
            background-color: #395137 !important;

        }

        .dropdown-item {
            color: #F1C44D !important;
        }

        .dropdown-item:hover {
            background-color: #082605 !important;
            color: aliceblue !important;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        /* .container {
           width: 85%;
        } */
    </style>
</head>

<body style="background-color: #18441c;">

    @include('front_end.include.header')

    @yield('content')

    @include('front_end.include.footer')




    <!-- THEME JAVASCRIPT FILES
================================================== -->
    <!-- initialize jQuery Library -->
    <script src="{{ asset('front_end/assets') }}/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('front_end/assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('front_end/assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('front_end/assets') }}/plugins/slick-carousel/slick.min.js"></script>
    <!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script> -->
    <!-- <script src="plugins/google-map/gmap.js"></script> -->
    <!-- main js -->
    <script src="{{ asset('front_end/assets') }}/js/custom.js"></script>
    {{-- <script src="{{ asset('front_end/assets') }}/js/disable.js"></script> --}}
    <script>
        $(document).ready(function() {
            $('.dropdown').hover(function() {
                $(this).addClass('show');
                $(this).find('.dropdown-menu').addClass('show');
            }, function() {
                $(this).removeClass('show');
                $(this).find('.dropdown-menu').removeClass('show');
            });
        });
    </script>

</body>

</html>

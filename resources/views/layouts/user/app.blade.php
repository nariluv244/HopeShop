<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Lembu Pedia Gresik - Halo teman-teman semuanya apa kabar? semoga dalam keadaan sehat selalu. Sedang cari Jual Sapi Qurban Gresik ? selamat anda di website yang tepat.">

    <!-- title -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('user/css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('user/bootstrap/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.css') }} ">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('user/css/animate.css') }}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ asset('user/css/meanmenu.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('user/css/main.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">
    <title>Hope Shop</title>
</head>

<body>

    <!-- header -->
    @include('layouts.user.header')
    <!-- end header -->

    @yield('content')

    <!-- footer -->
    @include('layouts.user.footer')

    <!-- end footer -->

    <!-- jquery -->
    <script src="{{ asset('user/js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('user/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- count down -->
    <script src="{{ asset('user/js/jquery.countdown.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('user/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <!-- waypoints -->
    <script src="{{ asset('user/js/waypoints.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- mean menu -->
    <script src="{{ asset('user/js/jquery.meanmenu.min.js') }}"></script>
    <!-- sticker js -->
    <script src="{{ asset('user/js/sticker.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('user/js/main.js') }}"></script>


</body>

</html>

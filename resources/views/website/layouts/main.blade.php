<!doctype html>
<html class="no-js" lang="fa">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
    @yield('css')

</head>

<body>

    <!-- header-start -->
    @include('website.layouts.header')
    <!-- header-start -->

    <main>

        @yield('content')


    </main>
    <!-- footer-area-start -->
    @include('website.layouts.footer')
    <!-- footer-area-end -->

    <!-- Modal Search -->
    @include('website.layouts.modal')



    <!-- JS here -->
    <script src="{{ asset('/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>

</body>


</html>

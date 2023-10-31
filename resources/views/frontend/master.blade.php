<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Charity | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}front/assets/img/icon/favicon.png">

    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/style.css">
</head>
<body>
<header>
    <div class="header-area">
        <div class="main-header ">
@include('frontend.includes.header-top')
            @include('frontend.includes.header-bottom')
        </div>
    </div>
</header>
@yield('body')
<footer>
    @include('frontend.includes.footer')
</footer>

<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


<script src="{{ asset('/') }}front/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/popper.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/bootstrap.min.js"></script>

<script src="{{ asset('/') }}front/assets/js/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/slick.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/jquery.slicknav.min.js"></script>

<script src="{{ asset('/') }}front/assets/js/wow.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/jquery.magnific-popup.js"></script>
<script src="{{ asset('/') }}front/assets/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/jquery.counterup.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/waypoints.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/barfiller.js"></script>

<script src="{{ asset('/') }}front/assets/js/contact.js"></script>
<script src="{{ asset('/') }}front/assets/js/jquery.form.js"></script>
<script src="{{ asset('/') }}front/assets/js/jquery.validate.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/mail-script.js"></script>
<script src="{{ asset('/') }}front/assets/js/jquery.ajaxchimp.min.js"></script>

<script src="{{ asset('/') }}front/assets/js/plugins.js"></script>
<script src="{{ asset('/') }}front/assets/js/main.js"></script>

</body>
</html>

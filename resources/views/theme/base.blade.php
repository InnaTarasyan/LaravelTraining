<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Neu Profile - Single page website</title>
    <meta name="description" content="">
    <meta name="author" content="WebThemez">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/isotope.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('theme/js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/da-slider.css') }}" />
    <!-- Owl Carousel Assets -->
    <link href="{{ asset('theme/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme/css/styles.css') }}" />
    <!-- Font Awesome -->
    <link href="{{ asset('theme/font/css/font-awesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    @yield('css')
</head>
<body>
@yield('content')
</body>
<footer>
    <div class="container">
        <div class="social text-center">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-flickr"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>

        <div class="clear"></div>
        <!--CLEAR FLOATS-->
    </div>
</footer>
<!--/.page-section-->
<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                Copyright 2014 | All Rights Reserved  -- Template by <a href="http://webThemez.com">WebThemez.com</a>
            </div>
        </div>
        <!-- / .row -->
    </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
<script src="{{ asset('theme/js/modernizr-latest.js') }}"></script>
<script src="{{ asset('theme/js/jquery-1.8.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/js/jquery.isotope.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/js/fancybox/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/js/jquery.nav.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/js/jquery.cslider.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/js/owl-carousel/owl.carousel.js') }}"></script>
@yield('scripts')
</html>
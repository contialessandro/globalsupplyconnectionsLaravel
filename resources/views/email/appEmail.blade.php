<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- From Cosmic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comptible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosmic -Responsive Multipurpose Template</title>
    <link href="frameworks/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="frameworks/hover/hover.min.css" type="text/css" rel="stylesheet">
    <link href="frameworks/hover/hover.css" type="text/css" rel="stylesheet">
    <link href="frameworks/animate/animate.css" type="text/css" rel="stylesheet">
    <link href="frameworks/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="frameworks/font-awesome/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="frameworks/linea/styles.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,600,500,300,700,800,900" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="frameworks/carousal-3d/styles/jquery.carousel-3d.default.css">
    <link href="frameworks/owl/assets/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="frameworks/owl/assets/owl.theme.css" type="text/css" rel="stylesheet">
    <link href="frameworks/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="frameworks/font-awesome-animation/font-awesome-animation.min.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo/ico.ico">
    <link href="css/styles.css" type="text/css" rel="stylesheet" id="switcher-target">
    <link href="css/settings.css" type="text/css" rel="stylesheet">
    <!--<link href="css/alizarin.css" type="text/css" rel="stylesheet">-->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>



        @yield('content')

        @include('email.footerEmail')
    <!-- Scripts
    <script src="{{ asset('js/app.js') }}"></script>-->

        <!-- === START : SCRIPT FILES === -->
        <!--=== jquery included===-->
        <script type="text/javascript" src="frameworks/jquery/jquery.js"></script>
        <script type="text/javascript" src="frameworks/jquery/jquery.min.js"></script>
        <!--=== bootstrap js included===-->
        <script type="text/javascript" src="frameworks/bootstrap/js/bootstrap.js"></script>
        <!--=== wow.js===-->
        <script type="text/javascript" src="frameworks/wow/dist/wow.min.js"></script>
        <!--=== circle progress bar ===-->
        <script type="text/javascript" src="frameworks/jquery-circle-progress/dist/circle-progress.js"></script>
        <!--popup magnifi zoomer-->
        <script src="frameworks/magnific-popup/jquery.magnific-popup.js"></script>
        <!--typed-->
        <script src="frameworks/typed/typed.min.js"></script>
        <!--counter up with waypoint-->
        <script src="frameworks/counter-up/jquery.counterup.js"></script>
        <script src="frameworks/counter-up/jquery.waypoints.min.js"></script>
        <!--scroll up-->
        <script src="frameworks/plugins/jquery.scrollUp.js"></script>
        <script src="frameworks/plugins/jquery.smooth-scroll.js"></script>
        <script src="frameworks/plugins/jquery.easing.js"></script>
        <script src="frameworks/plugins/jquery.countdown.js"></script>
        <script src="frameworks/plugins/jquery.validate.js"></script>
        <script src="frameworks/plugins/jquery.nav.js"></script>
        <!-- 3d carousal-->
        <script src="frameworks/carousal-3d/jquery.resize.js"></script>
        <script src="frameworks/carousal-3d/jquery.waitforimages.js"></script>
        <script src="frameworks/carousal-3d/Modernizr.js"></script>
        <script src="frameworks/carousal-3d/jquery.carousel-3d.js"></script>
        <!-- owl carousel-->
        <script type="text/javascript" src="frameworks/owl/assets/owl.carousel.min.js"></script>
        <!--=== vagas ====-->
        <script type="text/javascript" src="frameworks/vegas/vegas.min.js"></script>
        <script type="text/javascript" src="js/cosmic.js"></script>
</body>
</html>

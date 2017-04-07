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
    <link href="frameworks/vegas/vegas.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="frameworks/carousal-3d/styles/jquery.carousel-3d.default.css">
    <link href="frameworks/owl/assets/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="frameworks/owl/assets/owl.theme.css" type="text/css" rel="stylesheet">
    <link href="frameworks/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="frameworks/font-awesome-animation/font-awesome-animation.min.css" type="text/css" rel="stylesheet">
    
    <link href="css/styles.css" type="text/css" rel="stylesheet" id="switcher-target">

    <link href="css/alizarin.css" type="text/css" rel="stylesheet">
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

        @include('layouts.nav')

        @yield('content')

        @include('layouts.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

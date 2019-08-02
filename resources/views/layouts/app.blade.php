<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href="plugins/datepicker/jquery.datetimepicker.css" rel="stylesheet">

    <!-- Scrip

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->

                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="libs/jquery-1.12.4.min.js"></script>
    <script src="libs/jquery-migrate-1.2.1.js"></script>
    <!-- Bootstrap-->
    <script src="libs/bootstrap/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- Headers scripts-->
    <script src="plugins/headers/slidebar.js"></script>
    <script src="plugins/headers/header.js"></script>
    <!-- Color scheme-->
    <script src="plugins/switcher/js/dmss.js"></script>
    <!-- Select customization & Color scheme-->
    <script src="plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Slider-->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Pop-up window-->
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Mail scripts-->
    <script src="plugins/jqBootstrapValidation.js"></script>

    <!-- Filter and sorting images-->
    <script src="plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="plugins/isotope/imagesLoaded.js"></script>
    <!-- Progress numbers-->
    <script src="plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
    <!-- NoUiSlider-->
    <script src="plugins/noUiSlider/nouislider.min.js"></script>
    <script src="plugins/noUiSlider/wNumb.js"></script>
    <!-- Animations-->
    <script src="plugins/scrollreveal/scrollreveal.min.js"></script>
    <!-- Main slider-->
    <script src="plugins/slider-pro/jquery.sliderPro.min.js"></script>
    <!-- User map-->
    <script src="plugins/datepicker/jquery.datetimepicker.js"></script>




</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title', 'AfriNet | Dashboard')</title>
    <!-- CSS -->
    <link href="/assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="/assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="/assets/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="/assets/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/libs/mediaelement/4.1.3/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="/assets/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/vendors/weather-icons-master/weather-icons.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/vendors/weather-icons-master/weather-icons-wind.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/libs/morris.js/0.5.1/morris.css" rel="stylesheet" type="text/css">
    <link href="/assets/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/libs/jquery-toast-plugin/1.3.1/jquery.toast.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="assets/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="header-light sidebar-dark sidebar-expand">
<div id="wrapper" class="wrapper">
    <!-- HEADER & TOP NAVIGATION -->
    @include('layouts.header')
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        @include('layouts.sidebar')
        <!-- /.site-sidebar -->
    @yield('content')
        <!-- /.main-wrappper -->

    </div>
</div>
<!--/ #wrapper -->
<!-- Scripts -->
<script src="/assets/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/assets/libs/popper.js/1.12.2/umd/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="/assets/libs/mediaelement/4.1.3/mediaelementplayer.min.js"></script>
<script src="/assets/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
<script src="/assets/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
<script src="/assets/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js"></script>
<script src="/assets/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="/assets/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="/assets/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="/assets/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
<script src="/assets/vendors/charts/utils.js"></script>
<script src="/assets/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
<script src="/assets/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<script src="/assets/vendors/charts/excanvas.js"></script>
<script src="/assets/libs/mithril/1.1.1/mithril.js"></script>
<script src="/assets/vendors/theme-widgets/widgets.js"></script>
<script src="/assets/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="/assets/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="/assets/libs/clndr/1.4.7/clndr.min.js"></script>
<script src="/assets/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="/assets/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="/assets/libs/raphael/2.2.7/raphael.min.js"></script>
<script src="/assets/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js"></script>
<script src="/assets/libs/slick-carousel/1.6.0/slick.min.js"></script>

<script src="{{asset("/assets/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js")}}"></script>
<script src="/assets/libs/jquery-toast-plugin/1.3.1/jquery.toast.min.js"></script>

<script src="/assets/js/theme.js"></script>
<script src="/assets/js/custom.js"></script>

<script src="/assets/pages/components.js"></script>
<script src="/assets/pages/Customers.js"></script>
<script src="/assets/pages/User.js"></script>
@yield('scripts')
</body>


</html>

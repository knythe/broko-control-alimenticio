<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | Admin - Broko</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="/v1/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="/v1/css/portal.css">
    @stack('css')
</head>

<body class="app">
    <x-navigation-header></x-navigation-header>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            @yield('content')
        </div><!--//app-content-->
        <x-navigation-footer></x-navigation-footer>
    </div><!--//app-wrapper-->


    <!-- Javascript -->
    <script src="/v1/plugins/popper.min.js"></script>
    <script src="/v1/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="/v1/plugins/chart.js/chart.min.js"></script>
    <script src="/v1/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="/v1/js/app.js"></script>
    @stack('js')
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bandu Foods Admin</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="/adminasset/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="/adminasset/css/portal.css">

</head>

<body class="app">
    @include('admin.includes.header')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                @yield('content')

            </div><!--//container-fluid-->
        </div><!--//app-content-->

        @include('admin.includes.footer')

    </div><!--//app-wrapper-->


    <!-- Javascript -->
    <script src="/adminasset/plugins/popper.min.js"></script>
    <script src="/adminasset/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="/adminasset/plugins/chart.js/chart.min.js"></script>
    <script src="/adminasset/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="/adminasset/js/app.js"></script>

</body>

</html>
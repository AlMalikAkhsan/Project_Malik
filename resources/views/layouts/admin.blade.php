<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('admin/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset ('admin/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset ('admin/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset ('admin/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset ('admin/css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('style')
</head>
<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route ('home')}}" class="brand-logo">
                <img class="item-center" src="{{asset ('admin/images/logo-tk.png')}}" style="width: 140px;">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!-- HEADER -->
        @include('layouts.component-admin.header')
        <!-- SIDERBAR -->
        @include('layouts.component-admin.sidebar');

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
            @yield('content')
               
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Required vendors -->
    <script src="{{asset ('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset ('admin/js/quixnav-init.js')}}"></script>
    <script src="{{asset ('admin/js/custom.min.js')}}"></script>

    <!-- Vectormap -->
    <script src="{{asset ('admin/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset ('admin/vendor/morris/morris.min.js')}}"></script>
    <script src="{{asset ('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset ('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset ('admin/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{asset ('admin/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset ('admin/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset ('admin/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{asset ('admin/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset ('admin/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset ('admin/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset ('admin/js/dashboard/dashboard-1.js')}}"></script>
    @stack('scripts')
</body>
</html>


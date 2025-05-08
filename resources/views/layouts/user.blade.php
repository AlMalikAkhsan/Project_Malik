<!DOCTYPE html>
<html lang="en">
<head>
    <title>OneSchool &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('user/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
    @yield('style')

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    @include('layouts.component-user.header')

    <div class="site-wrap">
    @yield('content')
    </div> <!-- .site-wrap -->

    @include('layouts.component-user.footer')

    <script src="{{asset('user/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('user/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('user/js/jquery-ui.js')}}"></script>
    <script src="{{asset('user/js/popper.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('user/js/aos.js')}}"></script>
    <script src="{{asset('user/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('user/js/main.js')}}"></script>
    
    @stack('scripts')

</body>
</html>

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
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{asset ('admin/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{asset ('admin/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{asset ('admin/images/logo-text.png')}}" alt="">
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
        @include('layouts.component.header')
        <!-- SIDERBAR -->
        @include('layouts.component.sidebar');

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{route('fasilitas.update', $fasilitas->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label>Nama Fasilitas</label>
                                            <input class="form-control" name="nama_fasilitas" type="text" value="{{$fasilitas->nama_fasilitas}}">
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Foto</label>
                                            @if($fasilitas->foto)
                                            <img src="{{Storage::url('gambar/'. $fasilitas->foto)}}" alt="Foto fasilitas" class="img-thumbnail" width="100">
                                            @endif
                                            <input type="file" name="foto" id="" class="form-control @error('poto') is-invalid @enderror" value="{{$fasilitas->foto}}">
                                            @error('foto')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>

                    </div>
                </div>
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

</body>
</html>


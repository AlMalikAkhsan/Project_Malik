@extends('layouts.user')
@section('content')
<!-- Page Title -->
<div class="page-title accent-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Eskul</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{url ('/')}}">Home</a></li>
                <li class="current">Eskul</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="row gy-4 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                @foreach($eskul as $data)
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 400px;">
                    <div class="portfolio-info">
                        <h4>{{$data->nama_eskul}}</h4>
                        <a href="{{asset('user/img/masonry-portfolio/masonry-portfolio-1.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"></a>
                    </div>
                </div><!-- End Portfolio Item -->
                @endforeach
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section><!-- /Portfolio Section -->

@endsection

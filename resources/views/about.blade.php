@extends('layouts.user')
@section('content')

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Lainnya</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{url ('/')}}">Home</a></li>
            <li class="current">Lainnya</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

     

    <!-- Team Section -->
    <section id="team" class="team section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Karyawan</h2>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4 justify-content-center">
        @foreach($karyawan as $data)                   
          <div class="col-lg-3 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 300px;">
              </div>
              <div class="member-info">
                <h4>{{$data->nama}}</h4>
                <b>{{$data->jabatan}}</b>
                <p>{{$data->tugas}}</p>
              </div>
            </div>
          </div><!-- End Team Member -->
         @endforeach
        </div>
      </div>

    </section><!-- /Team Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Eskul</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <div class="row gy-4 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    @foreach($eskul as $data)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
                        <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 350px;">
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
    
    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Prestasi</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 justify-content-center">
                @foreach($prestasi as $data)
                <div class="col-lg-4">
                    <article class="position-relative h-100">

                        <div class="post-img overflow-hidden d-flex justify-content-center">
                            <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 500px;">
                        </div>
                        <div class="post-content d-flex flex-column">
                            <h3 class="post-title">{{$data->nama_prestasi}}</h3>
                            <p>{{$data->tgl_prestasi}}</p>
                            <p>{{$data->tingkat}}</p>
                            <p>{{$data->deskripsi}}</p>
                            <hr>
                        </div>

                    </article>
                </div><!-- End post list item -->
                @endforeach
            </div>
        </div>
    </section><!-- /Blog Posts Section -->

@endsection
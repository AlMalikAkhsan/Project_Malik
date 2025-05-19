@extends('layouts.user')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="{{ asset ('user/img/hero-carousel/hero-carousel-1.jpg')}}" alt="">
          <div class="container">
            <h2>Selamat Datang!!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="{{url ('about')}}" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset ('user/img/hero-carousel/hero-carousel-2.jpg')}}" alt="">
          <div class="container">
            <h2>At vero eos et accusamus</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
            <a href="{{url ('about')}}" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset ('user/img/hero-carousel/hero-carousel-3.jpg')}}" alt="">
          <div class="container">
            <h2>Temporibus autem quibusdam</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
            <a href="{{url ('about')}}" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row position-relative">
        <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="{{ asset ('user/img/about.jpg')}}"></div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                <h2 class="inner-title">Tentang Sekolah</h2>
                <div class="our-story">              
                    <h3>Cerita Kami</h3>
                    <p>TK Assalaam hadir sejak tahun 1957. TK Assalaam merupakan bagian dari Yayasan Assalaam yang fokus pada Pendidikan anak usia dini.</p>
                    <p>
                        Memiliki Staff Pengajar Berkualitas yang merupalan Lulusan PG PAUD & Sarjana yang telah berpengalaman membimbing/ mendidik anak usia dini yang dipilih secara selektif Berintegritas akhlak Berdedikasi tinggi Memiliki kompetensi di bidangnya Orangtua sebagai mitra TK Assalaam melibatkan orang tua dalam program pendidikannya yakni sangat terbuka untuk menjalin komunikasi dua arah baik masukan maupun informasi.
                    </p>
                </div>
            </div>

        </div>
        </div>

    </section><!-- /About Section -->        
    <br>

@endsection
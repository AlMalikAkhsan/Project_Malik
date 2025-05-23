@extends('layouts.user')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
        <div class="">
          <img src="{{ asset ('user/img/hero-carousel/hero-carousel-3.jpg')}}" style="width: 1800px; heigth: 50px;">          
        </div><!-- End Carousel Item -->
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container">

        <div class="row position-relative">
            <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset ('user/img/about.jpg')}}">
            </div>
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                <h2 class="inner-title">Tentang Sekolah</h2>
                <div class="our-story">              
                    <h3>Cerita Kami</h3>
                    <p>Selamat datang di Website TK CONDRODIMUKO. Alhamdulillah Website TK CONDRODIMUKO kini dapat diakses secara mudah di seluruh dunia. Kami menyadari dengan berkembangnya teknologi informasi yang begitu pesat.</p>
                    <p>
                       Diperlukan media informasi yang komunikatif dan mampu memenuhi kebutuhan akan informasi sekolah. Semoga dengan hadirnya website TK CONDRODIMUKO ini mampu memberikan informasi kepada Masyarakat tentang profil sekolah, kurikulum, program sekolah maupun kegiatan-kegiatan sekolah terbaru dengan tanpa mengenal jarak dan waktu. Seluruh dewan guru, Staf dan peserta didik TK CONDRODIMUKO juga dapat memanfaatkan website ini sebagai media komunikasi diluar jam pembelajaran sekolah.
                       Terima kasih atas kunjungannya pada website kami dan semoga bermanfaat Amin. 
                    </p>
                </div>
            </div>
            
            <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset ('user/img/about.jpg')}}">
            </div>
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                <div class="our-story">
                    <h3>Cerita Kami</h3>
                    <p>Selamat datang di Website TK CONDRODIMUKO. Alhamdulillah Website TK CONDRODIMUKO kini dapat diakses secara mudah di seluruh dunia. Kami menyadari dengan berkembangnya teknologi informasi yang begitu pesat.</p>
                    <p>
                        Diperlukan media informasi yang komunikatif dan mampu memenuhi kebutuhan akan informasi sekolah. Semoga dengan hadirnya website TK CONDRODIMUKO ini mampu memberikan informasi kepada Masyarakat tentang profil sekolah, kurikulum, program sekolah maupun kegiatan-kegiatan sekolah terbaru dengan tanpa mengenal jarak dan waktu. Seluruh dewan guru, Staf dan peserta didik TK CONDRODIMUKO juga dapat memanfaatkan website ini sebagai media komunikasi diluar jam pembelajaran sekolah.
                        Terima kasih atas kunjungannya pada website kami dan semoga bermanfaat Amin.
                    </p>
                </div>
            </div>
        </div>
        </div>

    </section><!-- /About Section -->        
    <br>

     <!-- Blog Posts Section -->
     <section id="blog-posts" class="blog-posts section">
         <div class="container">
             <div class="row gy-4 justify-content-center">
                 @foreach($informasi as $data)
                 <div class="col-lg-4">
                     <article class="position-relative h-100">
                         <br>
                         <div class="post-img overflow-hidden d-flex justify-content-center">
                             <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 250px;">
                         </div>
                         <div class="post-content d-flex flex-column">
                             <h3 class="post-title">{{Str::limit($data->judul,50)}}</h3>
                             <p>
                                 {{Str::limit($data->deskripsi,50)}}
                             </p>
                             <hr>
                             <a href="{{route ('detail.informasi', $data->id)}}" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                         </div>
                     </article>
                 </div><!-- End post list item -->
                 @endforeach
             </div>
         </div>
     </section><!-- /Blog Posts Section -->

@endsection
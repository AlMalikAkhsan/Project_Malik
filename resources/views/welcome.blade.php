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

     <!-- Blog Posts Section -->
     <section id="blog-posts" class="blog-posts section">
         <div class="container">
             <div class="row gy-4 justify-content-center">
                 @foreach($informasi as $data)
                 <div class="col-lg-4">
                     <article class="position-relative h-100">

                         <div class="post-img position-relative overflow-hidden">
                             <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 500px;">
                         </div>

                         <div class="post-content d-flex flex-column">

                             <h3 class="post-title">{{$data->judul}}</h3>

                             <p>
                                 {{$data->deskripsi}}
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
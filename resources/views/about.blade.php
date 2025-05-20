@extends('layouts.user')
@section('content')

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Tentang</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{url ('/')}}">Home</a></li>
            <li class="current">Tentang</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

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

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 justify-content-center">
        @foreach($karyawan as $data)                   
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset ('user/img/team/team-1.jpg')}}" class="img-fluid" alt="">                
              </div>
              <div class="member-info">
                <h4>{{$data->nama}}</h4>
                <span>{{$data->jabatan}}</span>
              </div>
            </div>
          </div><!-- End Team Member -->
         @endforeach
        </div>

      </div>

    </section><!-- /Team Section -->
   
@endsection
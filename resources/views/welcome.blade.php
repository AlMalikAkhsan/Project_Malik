@extends('layouts.user')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
        <div class="">
          <img src="{{ asset('user/img/kategori_sekolah_2.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Hero Image">        
        </div><!-- End Carousel Item -->
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <!-- First Row -->
            <div class="row position-relative mb-5">
                <div class="col-lg-6 about-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('user/img/program.jpeg') }}" class="img-fluid rounded" alt="Program 1">
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="inner-title">Tentang Sekolah</h2>
                    <div class="our-story">
                        <h3>KB-TK AL HIKMAH</h3>
                        <p>
                            KBTK Al Hikmah Surabaya menerapkan pembelajaran Kurikulum Merdeka. Dalam proses belajar mengajar, metode pembelajaran yang digunakan yaitu Project Based Learning atau Pembelajaran Berbasis Proyek.
                            Siswa menjadikan media proyek atau eksperimen sebagai media belajar.
                            Siswa melakukan eksplorasi, penilaian, interpretasi, sintesis dan informasi untuk menghasilkan berbagai bentuk hasil belajar.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Second Row -->
            <div class="row position-relative align-items-center">
                <div class="col-lg-6 about-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('user/img/program2.jpeg') }}" class="img-fluid rounded" alt="Program 2">
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="our-story">
                        <h3>VISI</h3>
                        <p>"Membentuk peserta didik menjadi generasi yang memiliki akhlak mulia, teguh, mandiri, komunikatif, kreatif, dan berwawasan global."</p>
                    </div>
                    <div class="our-story mt-3">
                        <h3>MISI</h3>
                        <p>
                            1. Meletakkan pondasi aqidah, ibadah dan akhlak<br>
                            2. Menumbuh kembangkan sikap mental, kekuatan fisik dan ketrampilan motorik sebagai bekal menghadapi tantangan masa depan<br>
                            3. Mendorong tumbuhnya kemandirian anak sejak dini<br>
                            4. Mendorong tumbuhnya kemampuan berkomunikasi<br>
                            5. Menumbuhkan kemampuan berpikir kritis dan kreatif melalui eksplorasi dan budaya literasi dalam konteks STEAM.<br>
                            6. Mengenalkan dan memanfaatkan teknologi informasi untuk belajar budaya global
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
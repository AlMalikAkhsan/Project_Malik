@extends('layouts.user')
@section('content')
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<div class="intro-section" id="home-section">
    <div class="slide-1" style="background-image: url('user/images/sekolahnya.png');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4">
                            <h1 data-aos="fade-up" data-aos-delay="100">Selamat Datang di TK Assalaam</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section courses-title" id="courses-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">Esktrakulikuler</h2>
            </div>
        </div>
    </div>
</div>
<div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="owl-carousel col-12 nonloop-block-14">
            @foreach($eskul as $data)
                <div class="course bg-white h-100 align-self-stretch">
                    <figure class="m-0">
                        <a href=""><img src="{{asset('user/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
                    </figure>
                    <div class="course-inner-text py-4 px-4">
                        <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                        <h3>{{$data->nama_eskul}}</h3>
                        <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                    </div>
                    <div class="d-flex border-top stats">
                        <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                        <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                    </div>
                </div>                
            @endforeach
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-7 text-center">
                <button class="customPrevBtn btn btn-primary m-1">Sebelumnya</button>
                <button class="customNextBtn btn btn-primary m-1">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>

<div class="site-section" id="programs-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">Tentang Sekolah</h2>
                <p>“ Menjadi Lembaga Pendidikan Anak USia Dini Berkualitas Membentuk Anak Sehat, Soleh,Cerdas dan Berakhlak Mulia melalui Layanan PAUD Holstik Integratif yang Unggul di Provinsi Jawa Barat Tahun 2025 . ”</p>
            </div>
        </div>
        <div class="row">
        <div class="row mb-5 align-items-center">
        @foreach($informasi as $data)
            <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset('user/images/undraw_youtube_tutorial.svg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-black mb-4">{{$data->judul}}</h2>
                <p class="mb-4">{{$data->deskripsi}}</p>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</div>

<div class="site-section" id="teachers-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">Karyawan</h2>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam, illum sed veniam!</p>
            </div>
        </div>    
        <div class="row">
        @foreach($karyawan as $data)
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="teacher text-center">
                    <img src="{{asset ('user/images/person_1.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                    <div class="py-2">
                        <h3 class="text-black">{{$data->nama}}</h3>
                        <p class="position">{{$data->tugas}}</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
                    </div>
                </div>
            </div> 
        @endforeach                       
        </div>
        </div>
    </div>
</div>

<div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 text-center testimony">
                <img src="{{asset('user/images/kp.png')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                <h3 class="mb-4">Anna Musdalifah, M.Pd.</h3>
                <blockquote>
                    <p>&ldquo; Menjadi Lembaga Pendidikan Anak USia Dini Berkualitas Membentuk Anak Sehat, Soleh,Cerdas dan Berakhlak Mulia melalui Layanan PAUD Holstik Integratif yang Unggul di Provinsi Jawa Barat Tahun 2025 . &rdquo;</p>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<div class="site-section pb-0">
    <div class="future-blobs">
        <div class="blob_2">
            <img src="{{asset('user/images/blob_2.svg')}}" alt="Image">
        </div>
        <div class="blob_1">
            <img src="{{asset('user/images/blob_1.svg')}}" alt="Image">
        </div>
    </div>
    <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
            <div class="col-lg-7 text-center">
                <h2 class="section-title">Why Choose Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto align-self-start" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 rounded bg-white why-choose-us-box">
                    <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                        <div>
                            <h3 class="m-0">22,931 Yearly Graduates</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                        <div>
                            <h3 class="m-0">150 Universities Worldwide</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                        <div>
                            <h3 class="m-0">Top Professionals in The World</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                        <div>
                            <h3 class="m-0">Expand Your Knowledge</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                        <div>
                            <h3 class="m-0">Best Online Teaching Assistant Courses</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                        <div>
                            <h3 class="m-0">Best Teachers</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 align-self-end" data-aos="fade-left" data-aos-delay="200">
                <img src="{{asset('user/images/kp02.png')}}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
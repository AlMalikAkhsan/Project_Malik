@extends('layouts.user')
@section('content')
    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Team</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Team</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

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
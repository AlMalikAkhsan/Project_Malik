@extends('layouts.user')
@section('content')
    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Informasi</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{url ('/')}}">Home</a></li>
            <li class="current">Informasi</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

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
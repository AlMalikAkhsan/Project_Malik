@extends('layouts.user')
@section('content')
    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Blog</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
          @foreach($informasi as $data)            
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{asset ('user/img/blog/blog-1.jpg')}}" class="img-fluid" alt="">                
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{$data->judul}}</h3>                

                <p>
                  {{$data->deskripsi}}
                </p>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          @endforeach
          </div><!-- End post list item -->          

        </div>
      </div>

    </section><!-- /Blog Posts Section -->
@endsection
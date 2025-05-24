@extends('layouts.user')
@section('content')
@extends('layouts.user')
@section('content')

<!-- Page Title -->
<div class="page-title accent-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Informasi Detail</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{url ('/')}}">Home</a></li>
                <li class="current">Informasi Detail</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section">
                <div class="container">

                    <article class="article">

                        <div class="post-img">
                            <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 900px;">
                        </div>

                        <h2 class="title">{{$data->judul}}</h2>

                        <div class="content">
                            <p>
                                {{$data->deskripsi}}
                            </p>
                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <ul class="cats">
                                <li><a href="{{url ('informasi')}}"><b>Kembali</b></a></li>
                            </ul>
                        </div><!-- End meta bottom -->

                    </article>

                </div>
            </section><!-- /Blog Details Section -->

        </div>
    </div>
</div>
@endsection

@endsection
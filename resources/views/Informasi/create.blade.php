@extends('layouts.admin')
@section('content')
        <div class="content-body-center">
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{route('informasi.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control @error('judul') is-invalid @enderror" name="judul" type="text">
                                            @error('judul')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" ></textarea>
                                            @error('deskripsi')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto</label>
                                            <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror" >
                                            @error('foto')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection        
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
                                    <form action="{{route('informasi.update', $informasi->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control @error('judul') is-invalid @enderror" name="judul" type="text" value="{{$informasi->judul}}">
                                            @error('judul')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{$informasi->deskripsi}}</textarea>
                                            @error('deskripsi')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Foto</label>                                            
                                            @if($informasi->foto)
                                            <img src="{{Storage::url('gambar/'. $informasi->foto)}}" alt="Foto informasi" class="img-thumbnail" width="100">
                                            @endif
                                            <input type="file" name="foto" id="" class="form-control @error('poto') is-invalid @enderror" value="{{$informasi->foto}}" require>
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
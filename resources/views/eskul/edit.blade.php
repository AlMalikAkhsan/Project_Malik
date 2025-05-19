@extends('layouts.admin')
@section('content')
        <div class="content-body-center">
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Eskul</h4>
                    </div>
                    <div class="card-body">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{route('eskul.update', $eskul->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label>Nama Eskul</label>
                                            <input class="form-control @error('nama_eskul') is-invalid @enderror" name="nama_eskul" type="text" value="{{$eskul->nama_eskul}}">
                                        @error('nama_eskul')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Foto</label>
                                            @if($eskul->foto)
                                            <img src="{{Storage::url('gambar/'. $eskul->foto)}}" alt="Foto eskul" class="img-thumbnail" width="100">
                                            @endif
                                            <input type="file" name="foto" id="" class="form-control @error('poto') is-invalid @enderror" value="{{$eskul->foto}}">
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
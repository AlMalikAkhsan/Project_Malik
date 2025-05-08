@extends('layouts.admin')
@section('content')
        <div class="content-body-center">
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">eskul</h4>
                    </div>
                    <div class="card-body">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{ route('eskul.update', $eskul->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nama_eskul">Nama Eskul</label>
                                            <input type="text" class="form-control" name="nama_eskul" value="{{ $eskul->nama_eskul }}" disabled>
                                        </div>                                        
                                        <div class="mb-2">
                                            <label for="">Foto</label><br>
                                            @if($eskul->foto)
                                            <img src="{{asset('storage/gambar/'. $eskul->foto)}}" alt="" style="width: 150px;">
                                            @endif
                                            <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror" value="{{$eskul->foto}}" disabled>
                                            @error('foto')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <a href="{{ route('eskul.index') }}" class="btn btn-primary">Kembali</a>
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
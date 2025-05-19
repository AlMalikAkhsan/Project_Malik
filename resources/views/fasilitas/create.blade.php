@extends('layouts.admin')
@section('content')
        <div class="content-body-center">
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Fasilitas</h4>
                    </div>
                    <div class="card-body">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{route('fasilitas.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Fasilitas</label>
                                            <input class="form-control @error('foto') is-invalid @enderror" name="nama_fasilitas" type="text">
                                         @error('nama_fasilitas')
                                         <div class="invalid-feedback">{{$message}}</div>
                                         @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto</label>
                                            <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror">
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
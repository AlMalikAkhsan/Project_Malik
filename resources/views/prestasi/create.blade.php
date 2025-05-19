@extends('layouts.admin')
@section('content')
<div class="content-body-center">
    <!-- row -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Prestasi</h4>
            </div>
            <div class="card-body">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('prestasi.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Tanggal Prestasi</label>
                                    <input class="form-control @error('tgl_prestasi') is-invalid @enderror" name="tgl_prestasi" type="date">
                                    @error('tgl_prestasi')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama Prestasi</label>
                                    <input class="form-control @error('nama_prestasi') is-invalid @enderror" name="nama_prestasi" type="text">
                                    @error('nama_prestasi')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tingkat</label>
                                    <select class="form-control @error('tingkat') is-invalid @enderror" name="tingkat">
                                        <option value="Sekolah">Sekolah</option>
                                        <option value="Kecamatan">Kecamatan</option>
                                        <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                                        <option value="Provinsi">Provinsi</option>
                                        <option value="Nasional">Nasional</option>
                                    </select>
                                    @error('tingkat')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>  
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                                    @error('deskripsi')
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

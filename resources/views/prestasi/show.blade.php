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
                            <form action="{{ route('prestasi.update', $prestasi->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama_prestasi">Nama Prestasi</label>
                                    <input type="text" class="form-control @error('tingkat') is-invalid @enderror" name="nama_prestasi" value="{{ $prestasi->nama_prestasi }}" disabled>
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
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control @error('tingkat') is-invalid @enderror" disabled>{{$prestasi->deskripsi}}</textarea></div>
                                <br>
                                <a href="{{ route('informasi.index') }}" class="btn btn-primary">Kembali</a>
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

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
                                    <form action="{{route('karyawan.update', $karyawan->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control @error('nama') is-invalid @enderror" name="nama" type="text" value="{{$karyawan->nama}}">
                                             @error('nama')
                                             <div class="invalid-feedback">{{$message}}</div>
                                             @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                            <label>Laki-laki</label>
                                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" type="radio" value="laki-laki" @if($karyawan->jenis_kelamin == "laki-laki") checked @endif >
                                            <label>Perempuan</label>
                                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" type="radio" value="perempuan" @if($karyawan->jenis_kelamin == "perempuan") checked @endif>
                                        </div>
                                        <div class="form-group">
                                            <label>Tugas</label>
                                            <textarea name="tugas" class="form-control @error('tugas') is-invalid @enderror"></textarea>
                                            @error('tugas')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <select class="form-control @error('jabtan') is-invalid @enderror" name="jabatan">
                                                <option value="tata usaha">Tata Usaha</option>
                                                <option value="guru">Guru</option>
                                                <option value="kepala sekolah">Kepala Sekolah</option>
                                                <option value="staf">Staff</option>
                                                <option value="bimbingan konseling">Bimbingan Konseling</option>
                                                <option value="wakil kepala sekolah">Wakil Kepala Sekolah</option>
                                            </select>
                                            @error('jabatan')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Foto</label>
                                            @if($karyawan->foto)
                                            <img src="{{Storage::url('gambar/'. $karyawan->foto)}}" alt="Foto Karyawan" class="img-thumbnail" width="100">
                                            @endif
                                            <input type="file" name="foto" id="" class="form-control @error('poto') is-invalid @enderror" value="{{$karyawan->foto}}">
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
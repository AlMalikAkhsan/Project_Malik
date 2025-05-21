@extends('layouts.admin')
@section('content')    

    <div class="content-body-center">        
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Karyawan</h4>
                        <a href="{{route('karyawan.create')}}" class="btn btn-sm btn-primary" enctype="multipart/form-data">ADD</a>
                    </div>
                    <div class="panel-body">                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tugas</th>
                                        <th>Jabatan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach($karyawan as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->jenis_kelamin}}</td>
                                        <td>{{$data->tugas}}</td>
                                        <td>{{$data->jabatan}}</td>
                                        <td>
                                            <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 100px;">
                                        </td>

                                        <td>
                                            <form action="{{route('karyawan.destroy', $data->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('karyawan.edit', $data->id)}}" class="btn btn-sm btn-success">Ubah</a> |
                                                <a href="{{route('karyawan.show', $data->id)}}" class="btn btn-sm btn-warning">Liat</a> |
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>
            </div>
        </div>  
    </div>          

@endsection
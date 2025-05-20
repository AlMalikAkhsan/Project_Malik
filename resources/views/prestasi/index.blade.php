@extends('layouts.admin')
@section('content')

<div class="content-body-center">
    <!-- row -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Prestasi</h4>
                <a href="{{route('prestasi.create')}}" class="btn btn-sm btn-primary" enctype="multipart/form-data">Tambah</a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Prestasi</th>
                                <th>Nama Prestasi</th>
                                <th>Tingkat</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach($prestasi as $data)

                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->tgl_prestasi}}</td>
                                <td>{{$data->nama_prestasi}}</td>
                                <td>{{$data->tingkat}}</td>
                                <td>{{Str::limit($data->deskripsi,50)}}</td>                                
                                <td>
                                    <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 100px;">
                                </td>
                                <td>
                                    <form action="{{route('prestasi.destroy', $data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('prestasi.edit', $data->id)}}" class="btn btn-sm btn-success">Ubah</a> |
                                        <a href="{{route('prestasi.show', $data->id)}}" class="btn btn-sm btn-warning">Liat</a> |
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


@endsection
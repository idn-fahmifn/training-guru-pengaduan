@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Form Pengaduan
                </div>
                <div class="card-body">
                    <form action="{{route('pengaduan.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-2">
                            <label>Nama Pelapor</label>
                            <input type="text" class="form-control" value="{{Auth::user()->name}}" disabled>
                            <input type="text" class="form-control" name="id_user" value="{{Auth::user()->id}}" hidden>
                        </div>
                        <div class="form-group mt-2">
                            <label>Dokumentasi Pengaduan</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label>Isi Pengaduan</label>
                            <textarea class="form-control" name="isi_pengaduan"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Ajukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Data Laporan Saya
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>Tanggal Laporan</th>
                                <th>Status Laporan</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($pengaduan as $row)
                                <tr>
                                    <td>{{$row->tanggal_pengaduan}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>
                                        <form action="#" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <a href="{{route('pengaduan.show', $row->id)}}"
                                                class="btn btn-info">Detail</a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah {{$row->name}} akan dihapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

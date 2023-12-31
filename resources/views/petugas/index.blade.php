@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Petugas</div>

                <div class="card-body">
                    <div class="row m-1">
                        <div class="col-md-4">
                            <form action="{{route('petugas.store')}}" method="post">
                                @csrf
                                <div class="form-group mt-2">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>NIK</label>
                                    <input type="text" name="nik" maxlength="16" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Telepon</label>
                                    <input type="text" name="telp" maxlength="16" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Password</label>
                                    <input type="password" name="password" maxlength="16" class="form-control">
                                </div>
                                <input type="hidden" name="role" value="petugas">
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-success">Tambah</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Telpon</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $row)
                                        @if($row->role === 'petugas')
                                        <tr>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->username}}</td>
                                            <td>{{$row->telp}}</td>
                                            <td>
                                                <form action="{{route('petugas.destroy', $row->id)}}" method="post">
                                                    @csrf 
                                                    {{method_field('DELETE')}}
                                                    <a href="{{route('petugas.show', $row->id)}}" class="btn btn-info">Detail</a>
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah {{$row->name}} akan dihapus?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

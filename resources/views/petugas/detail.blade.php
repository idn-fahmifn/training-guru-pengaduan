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
                            <form action="{{route('petugas.update', $user->id)}}" method="post">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group mt-2">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Username</label>
                                    <input type="text" name="username" value="{{$user->username}}" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>NIK</label>
                                    <input type="text" name="nik" value="{{$user->nik}}" maxlength="16" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Telepon</label>
                                    <input type="text" name="telp" value="{{$user->telp}}" maxlength="16" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Password</label>
                                    <input type="password" name="password" maxlength="16" class="form-control">
                                </div>
                                <input type="hidden" name="role" value="petugas">
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>:</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>:</td>
                                        <td>{{$user->username}}</td>
                                    </tr>
                                    <tr>
                                        <th>Telepon</th>
                                        <td>:</td>
                                        <td>{{$user->telp}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Induk Kependudukan (NIK)</th>
                                        <td>:</td>
                                        <td>{{$user->nik}}</td>
                                    </tr>
                                    <tr>
                                        <th>Role</th>
                                        <td>:</td>
                                        <td>{{$user->role}}</td>
                                    </tr>
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

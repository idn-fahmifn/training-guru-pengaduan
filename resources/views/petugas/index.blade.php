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
                            <form action="#" method="post">
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
                                    <input type="text" name="password" maxlength="16" class="form-control">
                                </div>
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

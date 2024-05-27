@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Tambah User</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="padding-bottom: 30px ; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <form action="/users" method="POST" style="margin-left: 80px">
                                        @csrf
                                        <div class="card"
                                            style="padding: 20px; margin-top: 15px; margin-bottom: 15px; background-color: rgb(255, 243, 243)">
                                            <div class="form-group">
                                                <label for="nama_instansi">Nama Instansi</label>
                                                <input type="text" class="form-control" name="nama_instansi"
                                                    placeholder="Nama Instansi">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control"name="password"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelectRounded0">Level</label>
                                                <select name="level" class="custom-select rounded-0">
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                </select>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

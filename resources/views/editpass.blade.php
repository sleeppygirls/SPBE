@extends('template.index')

@section('title', 'Home')

@section('content')

    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Edit Password</h1>
                    </div>
                    <div style="padding-left: 5px;padding-right: 5px;min-height: 600px" class="col-12">
                        <form action="/profil/{{ $data->id }}" method="POST">
                            @if ($data->id)
                                @method('PUT')
                            @endif
                            @csrf
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="col-12">
                                        <div class="card card-primary" style="margin-top: 15px">
                                            <div class="card-header">
                                                <h3 class="card-title">Data User</h3>
                                            </div>

                                            <div class="card-body" style="padding-bottom: 0px">
                                                <div class="form-group">
                                                    <label for="name">Nama Instansi</label>
                                                    <input type="text" class="form-control" name="nama_instansi"
                                                        value="{{ Auth::user()->nama_instansi }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Level</label>
                                                    <input type="text" class="form-control" name="level"
                                                        value="{{ Auth::user()->level }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                        value="{{ Auth::user()->username }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        value="{{ Auth::user()->password }}">
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer" style="padding-top: 0px">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

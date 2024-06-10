@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Daftar User</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="margin-bottom: 50px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <div class="body">
                                        <table class="table table-bordered"
                                            style="background-color: rgb(255, 243, 243); margin-top: 30px; margin-left: 40px; margin-right: 25px">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Instansi</th>
                                                    <th style="text-align: center">Username</th>
                                                    <th style="text-align: center">Password</th>
                                                    <th style="text-align: center">Level</th>
                                                    <th style="text-align: center">Bagian</th>
                                                    <th style="text-align: center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (@$data as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->nama_instansi }}</td>
                                                        <td style="text-align: center">{{ $item->username }}</td>
                                                        <td style="text-align: center">{{ $item->pass_view }}</td>
                                                        <td style="text-align: center">{{ $item->level }}</td>
                                                        <td style="width: 120px; text-align: center">
                                                            <div class="row">
                                                                <div class="col-4" style="margin-left: 10px">
                                                                    <a
                                                                        href="users/{{$item->id}}/bagians/create">
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-sm">
                                                                            <i class="fas fa-plus">
                                                                            </i>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-4" style="margin-left: 10px">
                                                                    <a
                                                                        href="users/{{$item->id}}/bagians">
                                                                        <button type="button"
                                                                            class="btn btn-success btn-sm">
                                                                            <i class="fas fa-eye fa-fw">
                                                                            </i>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <form action="/users/{{ $item->id }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm">
                                                                    <i class="far fa-trash-alt"></i></button>
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
            </div>
        </div>
    @endsection

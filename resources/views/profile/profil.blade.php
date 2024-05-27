@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Profil</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="min-height: 570px; margin-bottom: 5px" class="card">
                            <div class="row" style="margin-top: 20px; margin-bottom: 20px">
                                <table class="table" style="margin-left: 40px; margin-right: 40px">
                                    <tbody>
                                        <tr>
                                            <td style="background-color: lightgrey; color: grey">Detail Instansi</td>
                                            <td style="background-color: lightgrey"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; color: grey">Nama Instansi</td>
                                            <td style="color: grey">{{ Auth::user()->nama_instansi }}</td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: lightgrey; color: grey">Datail Pengguna</td>
                                            <td style="background-color: lightgrey"></td>
                                        </tr>
                                        <tr>
                                            <td style="color: grey">Username</td>
                                            <td style="color: grey">{{ Auth::user()->username }}</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" style="padding-top: 45px; color: grey">Password</td>
                                            <td>{{ Auth::user()->pass_view }}</td>
                                        </tr>
                                        <tr>
                                            <td><a href="/profil/{{ Auth::user()->id }}/edit"><button class="btn btn-primary" type="submit">Ubah
                                                    Pasword</button></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: rgb(255, 252, 224); padding-left: 11px" class="m-0 dashboard fw-bold">Daftar Penjelasan
                        </h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="margin-bottom: 50px" class="card">
                            <div class="col-11" style="text-align: right">
                                <button type="button" class="btn"
                                    style="margin-top: 10px;background-color: #ad323a">
                                    <a href="/adm/indikator" style="color: white">
                                        Kembali
                                    </a>
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-11">
                                    <div class="body">
                                        <table class="table table-bordered"
                                            style="background-color: rgb(224, 255, 251); margin-top: 30px; margin-left: 40px; margin-right: 25px">
                                            <thead style="text-align: center">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Penjelasan</th>
                                                    <th style="width: 120px">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (@$penjelasan as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->text }}</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-4" style="margin-left: 10px">
                                                                    <a href="/adm/indikator/{{ $item->id_indikator }}/penjelasan/{{ $item->id }}/edit">
                                                                        <button type="button" class="btn btn-warning btn-sm">
                                                                            <i class="far fa-edit"></i></button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-4" style="margin-left: 10px">
                                                                    <form action="/adm/indikator/{{ $item->id_indikator }}/penjelasan/{{ $item->id }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                                            <i class="far fa-trash-alt"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
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
    </div>

@endsection

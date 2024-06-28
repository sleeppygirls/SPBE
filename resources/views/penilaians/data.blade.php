@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Daftar Tugas Penilaian
                            Mandiri</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="margin-bottom: 50px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <div class="body">
                                        <table class="table table-bordered"
                                            style="background-color: rgb(241, 232, 253); margin-top: 30px; margin-left: 40px; margin-right: 25px">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">No</th>
                                                    <th style="text-align: center">Nama Form</th>
                                                    <th style="text-align: center">Tahap Form</th>
                                                    <th style="text-align: center">Batas Waktu</th>
                                                    <th style="text-align: center">Tahun</th>
                                                    <th style="text-align: center">Status</th>
                                                    <th style="text-align: center">Deskripsi</th>
                                                    <th style="text-align: center">Bagian</th>
                                                    <th style="text-align: center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (@$data as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->tahap }}</td>
                                                        <td style="text-align: center">{{ $item->batas }}</td>
                                                        <td style="text-align: center">{{ $item->tahun }}</td>
                                                        <td>{{ $item->status }}</td>
                                                        <td>{{ $item->desc }}</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    {{$item->qty }}
                                                                </div>
                                                                <div class="col-2">
                                                                    <a href="/task/{{ $item->id }}/copy">
                                                                        <button type="button"
                                                                            class="btn btn-success btn-sm">
                                                                            <i class="far fa-copy"></i></button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-4" style="margin-left: 10px">
                                                                    <a href="/task/{{ $item->id }}/edit">
                                                                        <button type="button"
                                                                            class="btn btn-warning btn-sm">
                                                                            <i class="far fa-edit"></i></button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-4" style="margin-left: 10px">
                                                                    <form action="/task/{{ $item->id }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-danger btn-sm">
                                                                            <i class="far fa-trash-alt"></i></button>
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

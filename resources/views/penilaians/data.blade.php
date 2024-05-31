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
                        <div style="min-height: 1010px; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <div class="body">
                                        <table class="table table-bordered"
                                            style="background-color: rgb(232, 253, 236); margin-top: 30px; margin-left: 40px; margin-right: 25px">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Form</th>
                                                    <th>Tahap Form</th>
                                                    <th>Batas Waktu</th>
                                                    <th>Tahun</th>
                                                    <th>Status</th>
                                                    <th>Deskripsi</th>
                                                    <th>Bagian</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (@$data as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->tahap }}</td>
                                                        <td>{{ $item->batas }}</td>
                                                        <td>{{ $item->tahun }}</td>
                                                        <td>{{ $item->status }}</td>
                                                        <td>{{ $item->bagian->count() }}</td>
                                                        <td>{{ $item->desc }}</td>
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
                                                                    <form action="/task/{{ $item->id }}" method="POST">
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

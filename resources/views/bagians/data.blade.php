@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: rgb(255, 252, 224); padding-left: 11px" class="m-0 dashboard fw-bold">Daftar Bagian Indikator
                        </h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="min-height: 1010px; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <div class="body">
                                        <table class="table table-bordered"
                                            style="background-color: rgb(252, 248, 213); margin-top: 30px; margin-left: 40px; margin-right: 25px">
                                            <thead style="text-align: center">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama Instansi</th>
                                                    <th>Tahun Tugas</th>
                                                    <th>Indikators</th>
                                                    <th style="width: 120px">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (@$bagians as $bagian)
                                                    <tr>
                                                        <td>{{ $bagian->id }}</td>
                                                        <td>{{ $bagian->name }}</td>
                                                        <td>{{ $bagian->task->tahun }}</td>
                                                        <td>
                                                            @isset($bagian->indikators)
                                                                @foreach (json_decode($bagian->indikators, true) as $item)
                                                                    {{ $item }}
                                                                @endforeach
                                                            @endisset
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-4" style="margin-left: 10px">
                                                                    <a href="/bagians/{{ $bagian->id }}/edit">
                                                                        <button type="button" class="btn btn-warning btn-sm">
                                                                            <i class="far fa-edit"></i></button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-4" style="margin-left: 10px">
                                                                    <form action="/bagians/{{ $bagian->id }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger btn-sm">
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

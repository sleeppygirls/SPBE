@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Daftar Indikator</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="margin-bottom: 50px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <div class="body">
                                        <table class="table table-bordered"
                                            style="background-color: rgb(222, 254, 208); margin-top: 30px; margin-left: 40px; margin-right: 25px">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Indikator</th>
                                                    <th style="text-align: center">Bobot(%)</th>
                                                    <th style="text-align: center">Bobot Aspek(%)</th>
                                                    {{-- <th style="text-align: center">Detail Indikator</th> --}}
                                                    <th style="text-align: center">Tambah Penjelasan</th>
                                                    <th style="text-align: center">Lihat Detail</th>
                                                    <th style="text-align: center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (@$indikator as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td style="text-align: center">{{ $item->bobot }}</td>
                                                        <td style="text-align: center">{{ $item->bobot_aspek }}</td>
                                                        {{-- <td style="width: 100px">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <a
                                                                        href="/adm/indikator/{{ $item->id }}/keterangan/create">
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-sm">
                                                                            <i class="fas fa-plus">
                                                                            </i>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-4" style="margin-left: 10px;">
                                                                    <a href="/adm/indikator/{{ $item->id }}/keterangan">
                                                                        <button type="button"
                                                                            class="btn btn-success btn-sm">
                                                                            <i class="fas fa-eye fa-fw">
                                                                            </i>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td> --}}
                                                        <td style="width: 50px; text-align: center">
                                                            <a href="/adm/indikator/{{ $item->id }}/penjelasan/create">
                                                                <button type="button" class="btn btn-primary btn-sm">
                                                                    <i class="fas fa-plus">
                                                                    </i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                        <td style="width: 50px; text-align: center">
                                                            <a href="/adm/indikator/{{ $item->id }}/penjelasan">
                                                                <button type="button" class="btn btn-success btn-sm">
                                                                    <i class="fas fa-eye fa-fw">
                                                                    </i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <a href="/adm/indikator/{{ $item->id }}/edit">
                                                                        <button type="button"
                                                                            class="btn btn-warning btn-sm">
                                                                            <i class="far fa-edit"></i></button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-4"
                                                                    style="margin-left: 15px; margin-right: 15px">
                                                                    <form action="/adm/indikator/{{ $item->id }}"
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
    @endsection

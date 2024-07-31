@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: rgb(255, 252, 224); padding-left: 11px" class="m-0 dashboard fw-bold">Detail
                        </h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="margin-bottom: 50px" class="card">
                            <div class="row">
                                <div class="col-10">
                                    <p style="margin-top: 40px; padding-left: 45px; margin-bottom: 0px; font-weight: bold">
                                        Detail Form
                                    </p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn"
                                        style="margin-top: 35px;background-color: #ad323a">
                                        <a href="/adm/indikator" style="color: white">
                                            Kembali
                                        </a>
                                    </button>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px; margin-bottom: 20px">
                                <table class="table" style="margin-left: 40px; margin-right: 40px; margin-bottom: 0px">
                                    <tbody>
                                        <tr>
                                            <td style="width: 250px; color: grey">ID</td>
                                            <td style="color: grey">{{ $indikator->id }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; color: grey">Indikator</td>
                                            <td style="color: grey">{{ $indikator->name }}</td>
                                        </tr>>
                                        <tr>
                                            <td style="width: 250px; color: grey">Detail Indikator</td>
                                            <td style="color: grey">{{ @$indikator->keterangan->name }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; color: grey">Domain</td>
                                            <td style="color: grey">{{ @$indikator->domainR->domain }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; color: grey">Aspek</td>
                                            <td style="color: grey">{{ @$indikator->aspekR->aspek }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-11">
                                    <table class="table table-bordered"
                                        style="background-color: rgb(224, 255, 251); margin-top: 30px; margin-left: 40px; margin-right: 25px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Penjelasan</th>
                                                <th style="text-align: center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (@$penjelasan as $item)
                                                <tr>
                                                    <td style="width: 40px">{{ $loop->iteration }}</td>
                                                    <td>{{ $item->text }}</td>
                                                    <td style="width: 100px">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <a
                                                                    href="/adm/indikator/{{ $item->id_indikator }}/penjelasan/{{ $item->id }}/edit">
                                                                    <button type="button" class="btn btn-warning btn-sm">
                                                                        <i class="far fa-edit"></i></button>
                                                                </a>
                                                            </div>
                                                            <div class="col-4" style="margin-left: 10px">
                                                                <form
                                                                    action="/adm/indikator/{{ $item->id_indikator }}/penjelasan/{{ $item->id }}"
                                                                    method="POST">
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
@endsection

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
                                                    <th>Domain</th>
                                                    <th>Aspek</th>
                                                    <th style="text-align: center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td style="width: 40px">{{ $no++ }}</td>
                                                        <td>{{ $domain->domain }}</td>
                                                        <td>{{ $aspek->aspek }}</td>
                                                        {{-- @foreach (@$indikator as $item) --}}
                                                            <td style="width: 100px">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <a href="/adm/indikator/{{ $indikator->id }}/domainaspek/edit">
                                                                            <button type="button"
                                                                                class="btn btn-warning btn-sm">
                                                                                <i class="far fa-edit"></i></button>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-4" style="margin-left: 15px">
                                                                        <form action="/adm/indikator/{{ $indikator->id }}/domainaspek/{{$domain->id}}"
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
                                                        {{-- @endforeach --}}
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
        </div>
    @endsection

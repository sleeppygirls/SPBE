@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Daftar Domain</h1>
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
                                                    <th>Domain</th>
                                                    <th style="text-align: center">Bobot(%)</th>
                                                    <th style="text-align: center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (@$domain as $item)
                                                    <tr>
                                                        <td style="width: 40px">{{ $loop->iteration }}</td>
                                                        <td>{{ $item->domain }}</td>
                                                        <td style="width: 110px; text-align: center">{{ $item->bobot_domain }}</td>
                                                        <td style="width: 100px">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <a href="/domain/{{ $item->id }}/edit">
                                                                        <button type="button"
                                                                            class="btn btn-warning btn-sm">
                                                                            <i class="far fa-edit"></i></button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-4" style="margin-left: 15px">
                                                                    <form action="/domain/{{ $item->id }}"
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

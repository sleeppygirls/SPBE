@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Daftar Aspek</h1>
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
                                                    <th>No</th>
                                                    <th>Aspek</th>
                                                    <th style="text-align: center">Bobot(%)</th>
                                                    <th style="text-align: center">Bobot Aspek(%)</th>
                                                    <th style="text-align: center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($aspek as $item)
                                                    <tr>
                                                        <td style="width: 40px">{{ $loop->iteration }}</td>
                                                        <td>{{ $item->aspek }}</td>
                                                        <td style="width: 110px; text-align: center">{{ $item->bobot_a }}</td>
                                                        <td style="width: 110px; text-align: center">{{ $item->bobot_aspeka }}</td>
                                                        <td style="width: 100px">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <a href="/aspek/{{ $item->id }}/edit">
                                                                        <button type="button"
                                                                            class="btn btn-warning btn-sm">
                                                                            <i class="far fa-edit"></i></button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-4" style="margin-left: 15px">
                                                                    <form action="/aspek/{{ $item->id }}"
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

@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Daftar Skor</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="margin-bottom: 50px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <div class="body">
                                        <table class="table table-bordered"
                                            style="background-color: rgb(232, 236, 255); margin-top: 30px; margin-left: 40px; margin-right: 25px">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Instansi</th>
                                                    <th style="text-align: center">Username</th>
                                                    <th style="text-align: center">Skor Index</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (@$user as $i => $item)
                                                    <tr>
                                                        <td style="width: 40px">{{ $i + 1 }}</td>
                                                        <td>{{ $item->nama_instansi }}</td>
                                                        <td style="text-align: center">{{ $item->username }}</td>
                                                        <td style="width: 150px">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    {{ number_format(@$item->nilai ?? 0, 2) }}
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="/adm/users/{{ $item->id }}/task/{{ $task->id }}/skor">
                                                                        <button type="button"
                                                                            class="btn btn-success btn-sm">
                                                                            <i class="fas fa-eye fa-fw">
                                                                            </i>
                                                                        </button>
                                                                    </a>
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

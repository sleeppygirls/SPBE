@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Tugas Penilaian Mandiri
                        </h1>
                    </div>
                </div>
                <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                    <div style="min-height: 500px; margin-bottom: 30px" class="card">
                        <div class="row">
                            <div class="col-11">
                                <select class="form-control" title="Choose Plan" id="tahun"
                                    onchange="window.location = this.options[this.selectedIndex].value"
                                    style="margin-top: 20px; margin-left: 30px; margin-right: 30px">
                                    <option value="{{ url('penilaian') }}" {{ $tahunini == '' ? 'selected' : '' }}>Pilih
                                        Tahun</option>
                                    @foreach ($data as $item)
                                        <option value="{{ url('penilaian?tahun=' . $item->tahun) }}"
                                            {{ $item->tahun == $tahunini ? 'selected' : '' }}>{{ $item->tahun }}
                                        </option>
                                    @endforeach
                                </select>
                                @if (Auth::user()->level == 'admin')
                                    <div class="row">
                                        <div class="col-11">
                                            <button id="user_pilih"
                                                style="margin-top: 25px; background-color: brown; color: white; margin-left: 30px"
                                                type="button" class="btn btn-default" data-toggle="modal"
                                                data-target="#modal-xl">
                                                Pilih User
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-11">
                                    <table id="example2" class="table table-bordered table-hover"
                                        style="width: 890px; margin-left: 37px; margin-top: 10px; margin-right: 30px">
                                        <thead>
                                            <tr>
                                                <th style="width: 5px;padding-right: 0px;padding-left: 5px;">No.
                                                </th>
                                                <th>Tahun</th>
                                                <th>nama Form</th>
                                                <th>Tahap Form</th>
                                                <th>Batas Waktu </th>
                                                <th>Kemajuan</th>
                                                <th>aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                @if ($tahunini == $item->tahun)
                                                    <tr>
                                                        <td
                                                            style="padding-top: 70px; padding-bottom: 70px; padding-right: 45px; background-color:silver">
                                                            1</td>
                                                        <td style="padding-top: 70px; padding-bottom: 70px;">
                                                            {{ $item->tahun }}</td>
                                                        <td style="padding-top: 70px; padding-bottom: 70px;">
                                                            {{ $item->name }}</td>
                                                        <td style="padding-top: 70px; padding-bottom: 70px;">
                                                            {{ $item->tahap }}</td>
                                                        <td style="padding-top: 70px; padding-bottom: 70px;">
                                                            {{ $item->batas }}</td>
                                                        <td style="padding-top: 70px; padding-bottom: 70px;">
                                                        </td>
                                                        <td>
                                                            <div class="d-grid gap-2 col-6 mx-auto"
                                                                style="margin-top: 35px;">
                                                                @if (Auth::user()->level == 'user')
                                                                    @if (Auth::user()->submit == 0)
                                                                        <button class="btn btn-primary" type="button"
                                                                            style="margin-bottom: 10px;"><a
                                                                                href="/task/{{ $item->id }}"
                                                                                style="color: white">Kerjakan</a></button>
                                                                    @endif
                                                                    @if (Auth::user()->submit == 1)
                                                                        <form action="{{ url('lihat/task') }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <input type="hidden" name="id_task"
                                                                                value="{{ $item->id }}">
                                                                            <button class="btn btn-primary"
                                                                                type="submit">Lihat</button>
                                                                        </form>
                                                                    @endif
                                                                @else
                                                                    <form action="{{ url('indikator/task') }}"
                                                                        method="post">
                                                                        @csrf
                                                                        <input type="hidden" id="txtnama_username"
                                                                            name="username">
                                                                        <input type="hidden" id="txtnama_instansi"
                                                                            name="nama_instansi">
                                                                        <input type="hidden" name="id_task"
                                                                            value="{{ $item->id }}">
                                                                        <button class="btn btn-primary"
                                                                            type="submit">Lihat</button>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
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

    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" style="background-color: rgb(255, 195, 195)">
                <div class="modal-header">
                    <h4 class="modal-title">Daftar User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered" style="background-color: white">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama Instansi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (@$user as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->nama_instansi }}</td>
                                    <td><button
                                            onclick="pilih_user('{{ $item->id }}','{{ $item->username }}','{{ $item->nama_instansi }}')"
                                            class="btn btn-primary" type="button">Pilih</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

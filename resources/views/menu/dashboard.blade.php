@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Dashboard</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="min-height: 150px; margin-bottom: 5px" class="card">
                            <p style="text-align: center; margin-top: 15px; font-weight: bold">Informasi Progress Tahapan
                                Evaluasi</p>
                            <div style="margin-left: 20px; margin-right: 30px" class="row">
                                <div class="1">
                                    <i style="margin-left: 30px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">1</i>
                                    <p
                                        style="font-size: 15px; margin-left: 10px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Penilaian <br> Mandiri</p>
                                </div>
                                <hr
                                    style="height: 2px; width: 75px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="3">
                                    <i style="margin-left: 28px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">2</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Penilaian <br> Dokumen</p>
                                </div>
                                <hr
                                    style="height: 2px; width: 75px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="3">
                                    <i style="margin-left: 28px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">3</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Penilaian <br> Interview</p>
                                </div>
                                <hr
                                    style="height: 2px; width: 75px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="3">
                                    <i style="margin-left: 28px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">4</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Penilaian <br> Visitasi</p>
                                </div>
                                <hr
                                    style="height: 2px; width: 75px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="5">
                                    <i style="margin-left: 30px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">5</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Harmonisasi </p>
                                </div>
                                <hr
                                    style="height: 2px; width: 75px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="6">
                                    <i style="margin-left: 10px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">6</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Final </p>
                                </div>
                                <hr
                                    style="height: 2px; width: 75px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="7">
                                    <i style="margin-left: 15px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">7</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Selesai </p>
                                </div>
                            </div>
                            <hr
                                style="margin-top: 10px; margin-left: 20px; margin-right: 20px; background-color: lightgray">
                        </div>
                    </div>
                    <div style="padding-top: 5px;padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="margin-bottom: 50px" class="card">
                            <div class="row">
                                <div class="col-6 nav-item dropdown">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal" style="margin-left: 40px; margin-top: 30px;">
                                        Cari Dokumen
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                {{-- <div class="modal-header">
                                                    {{-- <h5 class="modal-title" id="exampleModalLabel">Cari Dokumen</h5> --}}
                                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                        Cari Dokumen</button> 
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div> --}}
                                                <div class="modal-body">
                                                    @livewire('cari-dokumen')
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="/" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-5">
                                                <select class="form-control" name="tahun"
                                                    style="margin-top: 20px; margin-left: 40px; margin-right: 30px; width: 220px">
                                                    <option {{ $tahunini == '' ? 'selected' : '' }}>
                                                        Pilih Tahun Evaluasi SPBE
                                                    </option>
                                                    @foreach ($data as $item)
                                                        <option {{ $item->tahun == $tahunini ? 'selected' : '' }}>
                                                            {{ $item->tahun }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-5">
                                                <select class="form-control" name="user_id"
                                                    style="margin-top: 20px; margin-left: 90px; margin-right: 30px; width: 500px">
                                                    <option {{ $user_id == '' ? 'selected' : '' }}>
                                                        Pilih User
                                                    </option>
                                                    @foreach ($users as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->nama_instansi == $user_id ? 'selected' : '' }}>
                                                            {{ $item->nama_instansi }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button type="submit" class="btn btn-success"
                                                    style="margin-top: 20px; margin-left: 420px; margin-right: 30px">
                                                    Lihat
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- <div class="row" style="margin-top: 30px; width: 450px">
                                    <div class="col-7 custom-control custom-radio"
                                        style="text-align: right; padding-right: 20px">
                                        <input class="custom-control-input" type="radio" id="customRadio1"
                                            name="customRadio">
                                        <label for="customRadio1" class="custom-control-label">Hasil Penilaian
                                            Mandiri</label>
                                    </div>
                                    <div class="col-5 custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio2"
                                            name="customRadio" checked="">
                                        <label for="customRadio2" class="custom-control-label">
                                            <p>Hasil Penilaian Akhir</p>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="row">
                                <div class="col-11">
                                    <table class="table" style="margin-left: 25px; color:gray; margin-bottom: 0px">
                                        <tbody>
                                            @foreach ($data as $item)
                                                @if ($tahunini == $item->tahun)
                                                    <tr>
                                                        <td style="border-color: white">ID Form</td>
                                                        <td style="border-color: white">F2301</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Form</td>
                                                        <td>Evaluasi SPBE {{ $item->tahun }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tahun</td>
                                                        <td>{{ $item->tahun }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Deskripsi</td>
                                                        <td>Evaluasi SPBE {{ $item->tahun }}</td>
                                                    </tr>
                                        </tbody>
                                    </table>
                                    <hr style="margin-top: 0px; margin-left: 25px; width: 895px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-11">
                                    <h5 style="font-weight: bold;margin-left: 35px;margin-top: 10px">Hasil Evaluasi
                                        SPBE
                                        {{ $item->tahun }}</h5>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="row" style="margin-left: 100px; margin-top: 30px; margin-bottom: -100px">
                                <div class="col-11 margin-left: 100px; margin-top: 10px">
                                    @livewire('cart-dashboard')
                                </div>
                            </div>
                            @if (Auth::user()->level == 'admin')
                                {{-- <div class="row">
                                    <div class="col-11">
                                        <button id="user_pilih"
                                            style="margin-top: 25px; background-color: brown; color: white; margin-left: 30px"
                                            type="button" class="btn btn-default" data-toggle="modal"
                                            data-target="#modal-xl">
                                            Pilih User
                                        </button>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-11">
                                        <h5 style="font-weight: bold;margin-left: 35px;margin-top: 10px">Detail Penilaian
                                        </h5>
                                    </div>
                                </div>
                                <div class="row" style="margin-left: 28px; margin-right: 35px">
                                    <div class="col-12">
                                        <p style="margin-bottom: 0px">Nama Instansi</p>
                                        <div class="row">
                                            <div class="col-10" style="padding-right: 0px">
                                                <p style="background-color: lightgrey; margin-bottom: 10px">xfnjfgn</p>
                                                <hr
                                                    style="border-top: 2px dashed black; margin-top: 0px; margin-bottom: 2px">
                                                <p style="margin-bottom: 2px">K/L/D</p>
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                    Indeks
                                                    SPBE</p>
                                                <p style="background-color: lightgrey; margin-bottom: 10px">Predikat
                                                    SPBE</p>
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; border-top: 2px dashed black; margin-bottom: 2px">
                                                    Domain Kebijakan SPBE</p>
                                                <p style="margin-bottom: 2px">Kebijakan internal terkait Tata Kelola
                                                    SPBE</p>
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 2px">
                                                    Domain
                                                    Tata Kelola SPBE</p>
                                                <p style="margin-bottom: 2px">Perencanaan Strategis SPBE</p>
                                                <hr style="margin-bottom: 2px; margin-top: 0px">
                                                <p style="margin-bottom: 2px">Teknologi Informasi dan Komunikasi</p>
                                                <hr style="margin-bottom: 2px; margin-top: 0px">
                                                <p style="margin-bottom: 2px">Penyelenggaraan SPBE</p>
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 2px">
                                                    Domain
                                                    Manajemen SPBE</p>
                                                <p style="margin-bottom: 2px">Penerapan Manajemen SPBE</p>
                                                <hr style="margin-bottom: 2px; margin-top: 0px">
                                                <p style="margin-bottom: 2px">Audit TIK</p>
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 2px">
                                                    Domain
                                                    Layanan SPBE</p>
                                                <p style="margin-bottom: 2px">Layanan Administrasi Pemerintahan
                                                    Berbasis
                                                    Elektronik</p>
                                                <hr style="margin-bottom: 2px; margin-top: 0px">
                                                <p style="margin-bottom: 2px">Layanan Publik Berbasis Elektronik</p>
                                                <hr style="margin-bottom: 30px; margin-top: 0px">
                                            </div>
                                            <div class="col-2" style="padding-left: 0px">
                                                <p style="background-color: lightgrey; margin-bottom: 10px">:</p>
                                                <hr
                                                    style="border-top: 2px dashed black; margin-top: 0px; margin-bottom: 2px">
                                                <p style="margin-bottom: 02px">:</p>
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                    :</p>
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                    :</p>
                                                <hr
                                                    style="border-top: 2px dashed black; margin-top: 10px; margin-bottom: 0px">
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 2px">
                                                    :</p>
                                                <p style="margin-bottom: 2px">:</p>
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                    :</p>
                                                <p style="margin-bottom: 10px; margin-bottom: 0px">:</p>
                                                <hr style="margin-bottom: 0px; margin-top: 4px">
                                                <p style="margin-bottom: 10px; margin-bottom: 0px; margin-top: 0px">:
                                                </p>
                                                <hr style="margin-bottom: 0px; margin-top: 4px">
                                                <p style="margin-bottom: 10px; margin-bottom: 3px; margin-top: 1px">:
                                                </p>
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                    :</p>
                                                <p style="margin-bottom: 10px; margin-bottom: 0px; margin-top: 0px">:
                                                </p>
                                                <hr style="margin-bottom: 0px; margin-top: 4px">
                                                <p style="margin-bottom: 10px; margin-bottom: 4px; margin-top: 0px">:
                                                </p>
                                                <p
                                                    style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                    :</p>
                                                <p style="margin-bottom: 10px; margin-bottom: 0px; margin-top: 0px">:
                                                </p>
                                                <hr style="margin-bottom: 0px; margin-top: 4px">
                                                <p style="margin-bottom: 10px; margin-bottom: 2px; margin-top: 2px">:
                                                </p>
                                                <hr style="margin-bottom: 0px; margin-top: 0px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{-- <div class="row" style="margin-left: 25px; margin-right: 30px">
                                <div class="col-12">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead style="text-align: center">
                                            <tr>
                                                <th>No</th>
                                                <th>Indikator</th>
                                                <th>Level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="modal-xl">
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
    </div> --}}

@endsection

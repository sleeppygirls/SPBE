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

                                @if (Auth::user()->level == 'admin')
                                    <div class="col-12">
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
                                    </div>
                                    <div class="col-12">
                                        <form action="/" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-4" style="padding-top: 20px; padding-left: 40px ">
                                                    <select class="form-control" name="tahun">
                                                        <option {{ $tahunini == '' ? 'selected' : '' }}>
                                                            Pilih Tahun Evaluasi SPBE
                                                        </option>
                                                        @foreach ($data as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $item->id == $tahunini ? 'selected' : '' }}>
                                                                {{ $item->tahun }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-7" style="padding-top: 20px; padding-left: 10px">
                                                    <select class="form-control" name="user_id">
                                                        <option {{ $user_id == '' ? 'selected' : '' }}>
                                                            Pilih User
                                                        </option>
                                                        @foreach ($users as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $item->id == $user_id ? 'selected' : '' }}>
                                                                {{ $item->nama_instansi }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-1" style="padding-top: 20px; padding-right: 20px">
                                                    <button type="submit" class="btn btn-success">
                                                        Lihat
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                @else
                                    <div class="col-12">
                                        <form action="/" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-4">
                                                    <select class="form-control" name="tahun"
                                                        style="margin-top: 50px; margin-left: 40px ">
                                                        <option {{ $tahunini == '' ? 'selected' : '' }}>
                                                            Pilih Tahun Evaluasi SPBE
                                                        </option>
                                                        @foreach ($data as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $item->id == $tahunini ? 'selected' : '' }}>
                                                                {{ $item->tahun }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-2">
                                                    <button type="submit" class="btn btn-success"
                                                        style="margin-top: 50px; margin-left: 100px">
                                                        Lihat
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                @endif
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
                            @foreach ($data as $item)
                                @if ($item->id == $tahunini)
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table"
                                                style="margin-left: 25px; color:gray; margin-bottom: 0px">
                                                <tbody>

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
                                        <div class="col-12">
                                            <h5 style="font-weight: bold;margin-left: 35px;margin-top: 10px">Hasil Evaluasi
                                                SPBE
                                                {{ $item->tahun }}</h5>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="row" style="margin-left: 100px; margin-top: 30px; margin-bottom: -100px">
                                <div class="col-11 margin-left: 100px; margin-top: 10px">
                                    @livewire('cart-dashboard')
                                </div>
                            </div>
                            @if (Auth::user()->level == 'admin')
                                <div class="row">
                                    <div class="col-11">
                                        <h5 style="font-weight: bold;margin-left: 35px;margin-top: 10px">
                                            Detail Penilaian
                                        </h5>
                                    </div>
                                </div>
                                <div class="row" style="margin-left: 28px; margin-right: 35px">
                                    <div class="col-12">
                                        <div class="row">
                                            <table class="table" style="height: 10px">
                                                @if (@$user->nama_instansi)
                                                    <tr>
                                                        <td>Nama Instansi</td>
                                                        <td class="text-right">&nbsp; {{ @$user->nama_instansi }}</td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <td style="background-color: lightgrey">
                                                        {{ @$user->nama_instansi ? 'Indeks Akhir' : 'Indeks SPBE' }}</td>
                                                    <td class="text-right" style="background-color: lightgrey">
                                                        {{ @$hasil['index_SPBE'] ?? 0 }}</td>
                                                </tr>
                                                <tr>
                                                    @if (@$user->nama_instansi)
                                                    @else
                                                        <td style="background-color: lightgrey">Predikat SPBE</td>
                                                        <td class="text-right" style="background-color: lightgrey">
                                                            @if (@$hasil['index_SPBE'] > 0)
                                                                @if (@$hasil['index_SPBE'] >= 4.2 && @$hasil['index_SPBE'] < 5.0)
                                                                    Memuaskan
                                                                @elseif(@$hasil['index_SPBE'] >= 3.5 && @$hasil['index_SPBE'] < 4.2)
                                                                    Sangat Baik
                                                                @elseif(@$hasil['index_SPBE'] >= 2.6 && @$hasil['index_SPBE'] < 3.5)
                                                                    Baik
                                                                @elseif(@$hasil['index_SPBE'] >= 1.8 && @$hasil['index_SPBE'] < 2.6)
                                                                    Cukup
                                                                @elseif(@$hasil['index_SPBE'] < 1.8)
                                                                    Kurang
                                                                @endif
                                                            @endif
                                                        </td>
                                                    @endif
                                                </tr>
                                                @foreach ($hasil_hitung_per_domain as $domain)
                                                    <tr style="background-color: grey;">
                                                        <td>{{ $domain->domain }}</td>
                                                        <td class="text-right">{{ number_format($domain->nilai ?? 0, 2) }}
                                                        </td>
                                                    </tr>

                                                    @foreach ($domain->aspeks as $aspek)
                                                        <tr>
                                                            <td>{{ $aspek->aspek }}</td>
                                                            <td class="text-right">
                                                                {{ number_format($aspek->nilai ?? 0, 2) }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="row" style="margin-left: 28px; margin-right: 35px">
                                    <div class="col-12">
                                        <div class="row">
                                            <table class="table" style="height: 10px">
                                                <tr>
                                                    <td>Nama Instansi</td>
                                                    <td class="text-right">&nbsp; {{ Auth::user()->nama_instansi }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color: lightgrey">Indeks Akhir</td>
                                                    <td class="text-right" style="background-color: lightgrey">
                                                        {{ @$tahunini ? $indikators->total_index_akhir : 0 }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

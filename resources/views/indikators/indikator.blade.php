@extends('template.index')

@section('title', 'Home')

@section('content')
    {{-- @dd($username); --}}
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Tugas Penilaian Mandiri
                        </h1>
                    </div>

                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="min-height: 1700px; margin-bottom: 70px" class="card">
                            <div class="row">
                                <div class="col-10">
                                    <p style="margin-top: 40px; padding-left: 45px; margin-bottom: 0px; font-weight: bold">
                                        Detail Form</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn"
                                        style="margin-top: 35px;background-color: #ad323a"><a href="/penilaian"
                                            style="color: white">Kembali</a></button>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px; margin-bottom: 20px">
                                <table class="table" style="margin-left: 40px; margin-right: 40px; margin-bottom: 0px">
                                    <tbody>
                                        <tr>
                                            <td style="width: 250px; color: grey">Tahun</td>
                                            <td style="color: grey">{{ $task->tahun }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; color: grey">Nama Form</td>
                                            <td style="color: grey">{{ $task->name }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; color: grey">Deskripsi</td>
                                            <td style="color: grey">{{ $task->name }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; color: grey">Status Evaluasi</td>
                                            <td style="color: grey">{{ $task->status }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-11">
                                        <hr style="width: 910px; margin-top: 0px; margin-left: 40px">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                @if (Auth::user()->level == 'admin')
                                    <div class="col-4">
                                        <button type="button" class="btn"
                                            style="margin-left: 40px; background-color: #ad323a">
                                            <a href="/skors" style="color: white">
                                                Lihat Skor Index
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn"
                                            style="margin-left: 40px; background-color: #ad323a">
                                            <a href="/indikator/create" style="color: white">
                                                Tambah Indikator
                                            </a>
                                        </button>
                                    </div>
                                @else
                                    <div class="col-4">
                                        <button type="button" class="btn"
                                            style="margin-left: 40px; background-color: #ad323a">
                                            <a href="/skors" style="color: white">
                                                Lihat Skor Index
                                            </a>
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-9">
                                    <p style="margin-top: 40px; padding-left: 45px; margin-bottom: 0px; font-weight: bold">
                                        Data Indikator </p>
                                </div>
                                {{-- <div class="col-3">
                                    <p style="margin-top: 40px; font-weight: bold; margin-bottom: 0px; margin-left: 30px">
                                        Ubah Tampilan</p>
                                </div> --}}
                            </div>
                            <hr style="margin-top: 10px;margin-left: 30px;margin-right: 30px;">

                            <div class="row" tabindex="0">
                                <div class="col-2">
                                    <p
                                        style="margin-bottom: 0px; margin-left: 55px; padding-right: 0px; width: 23px; margin-right: 20px;">
                                        No.</p>
                                </div>
                                <div class="col-7">
                                    <p>Nama Indikator</p>
                                </div>
                                <div class="col-2" style="margin-left: 80px">
                                    <p>Aksi</p>
                                </div>
                            </div>
                            @foreach (@$indikator as $item)
                                <hr style=" margin-top: 0px; margin-left:35px; margin-right:33px;">
                                <div class="row" style="height: 50px">
                                    <div class="col-2">
                                        <p style="margin-bottom: 0px; margin-left: 55px; margin-right: 30px;">
                                            {{ $loop->iteration }}</p>
                                    </div>
                                    <div class="col-7">
                                        <p style="margin-bottom: 0px">{{ @$item->name }}</p>
                                    </div>
                                    <div class="col-3">
                                        <button type="button"
                                            class="ml-5 btn btn-{{ $item->exist != null ? 'danger' : 'primary' }}"
                                            style="padding-top: 0px;padding-bottom: 0px; margin-left: 20px"><a
                                                href="/indikator/{{ $item->id }}/{{ $username }}"
                                                style="color: white">Indikator
                                                {{ $item->no }}</a></button>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="row" style="margin-bottom: 50px">
                                <div class="col-sm-12 col-md-5" style="padding-top: 20px;">
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite"
                                        style="text-align: center; padding-right: 110px">
                                        Showing 51 to 57 of 57 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7"
                                    style="padding-top: 15px; margin-bottom: 20px; padding-left: 155px">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous" id="example2_previous"><a
                                                    href="#" aria-controls="example2" data-dt-idx="0" tabindex="0"
                                                    class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="example2" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="example2" data-dt-idx="2" tabindex="0"
                                                    class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="example2" data-dt-idx="3" tabindex="0"
                                                    class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="example2" data-dt-idx="4" tabindex="0"
                                                    class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="example2" data-dt-idx="5" tabindex="0"
                                                    class="page-link">5</a></li>
                                            <li class="paginate_button page-item next disabled" id="example2_next"><a
                                                    href="#" aria-controls="example2" data-dt-idx="7"
                                                    tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

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
                                    style="height: 2px; width: 77px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="3">
                                    <i style="margin-left: 28px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">2</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Penilaian <br> Dokumen</p>
                                </div>
                                <hr
                                    style="height: 2px; width: 77px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="3">
                                    <i style="margin-left: 28px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">3</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Penilaian <br> Interview</p>
                                </div>
                                <hr
                                    style="height: 2px; width: 77px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="3">
                                    <i style="margin-left: 28px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">4</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Penilaian <br> Visitasi</p>
                                </div>
                                <hr
                                    style="height: 2px; width: 77px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="5">
                                    <i style="margin-left: 30px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">5</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Harmonisasi </p>
                                </div>
                                <hr
                                    style="height: 2px; width: 77px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
                                <div class="6">
                                    <i style="margin-left: 10px; color: white; height: 20px;width: 20px;border-radius: 50%;background-color: gray;"
                                        class="fas fa-circle-2 fa-fw unchecked-icon">6</i>
                                    <p
                                        style="font-size: 15px; margin-left: 5px; margin-top: 5px; text-align: center; line-height: 1.2; margin-bottom: 0; color: gray;">
                                        Final </p>
                                </div>
                                <hr
                                    style="height: 2px; width: 77px; background-color: lightgray; margin-left: 5px; margin-top: 39px; margin-right: 0px">
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
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal" style="margin-left: 40px; margin-top: 30px;">
                                        Cari Dokumen
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Cari Dokumen</h5>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                        Cari Dokumen</button>
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
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
                                    <button style="padding-top: 20px; padding-bottom: 0px;" class="btn dropdown-toggle"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <a class="nav-item d-none d-sm-inline-block" style="margin-right: 200px">
                                            <p
                                                style="color: black; margin-top: 10px; margin-bottom: 5px; margin-left: 25px">
                                                <b>(F2301)
                                                    Evaluasi Penilaian SPBE
                                            </p>
                                        </a>
                                    </button>
                                    <div style="margin-left: 40px; min-width: 80px;" class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton">
                                        <a style="margin-right: 20px" class="dropdown-item" href="#">2023</a>
                                        <a style="margin-right: 20px" class="dropdown-item" href="#">2024</a>
                                    </div>
                                    <hr style="height: 2x; margin-top: 0px; margin-left: 35px; background-color: lightgrey">
                                </div>
                                <div class="row" style="margin-top: 30px; width: 450px">
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
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-11">
                                    <table class="table" style="margin-left: 25px; color:gray; margin-bottom: 0px">
                                        <tbody>
                                            <tr>
                                                <td style="border-color: white">ID Form</td>
                                                <td style="border-color: white">F2301</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Form</td>
                                                <td>Evaluasi Penerapan SPBE 2023</td>
                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>2023</td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi</td>
                                                <td>Evaluasi Penerapan SPBE 2023</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr style="margin-top: 0px; margin-left: 25px; width: 895px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-11">
                                    <h5 style="font-weight: bold;margin-left: 35px;margin-top: 10px">Hasil Evaluasi SPBE
                                        (tahunny dtbs)</h5>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 100px; margin-top: 30px; margin-bottom: -100px">
                                <div class="col-11 margin-left: 100px; margin-top: 10px">
                                    @livewire('cart-dashboard')
                                </div>
                            </div>
                            <div class="row" style="margin-left: 28px; margin-right: 35px">
                                <div class="col-12">
                                    <p style="margin-bottom: 0px">Nama Instansi</p>
                                    <div class="row">
                                        <div class="col-10" style="padding-right: 0px">
                                            <p style="background-color: lightgrey; margin-bottom: 10px">xfnjfgn</p>
                                            <hr style="border-top: 2px dashed black; margin-top: 0px; margin-bottom: 2px">
                                            <p style="margin-bottom: 2px">K/L/D</p>
                                            <p
                                                style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                Indeks
                                                SPBE</p>
                                            <p style="background-color: lightgrey; margin-bottom: 10px">Predikat SPBE</p>
                                            <p
                                                style="background-color: lightgrey; margin-bottom: 10px; border-top: 2px dashed black; margin-bottom: 2px">
                                                Domain Kebijakan SPBE</p>
                                            <p style="margin-bottom: 2px">Kebijakan internal terkait Tata Kelola SPBE</p>
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
                                            <p style="margin-bottom: 2px">Layanan Administrasi Pemerintahan Berbasis
                                                Elektronik</p>
                                            <hr style="margin-bottom: 2px; margin-top: 0px">
                                            <p style="margin-bottom: 2px">Layanan Publik Berbasis Elektronik</p>
                                            <hr style="margin-bottom: 30px; margin-top: 0px">
                                        </div>
                                        <div class="col-2" style="padding-left: 0px">
                                            <p style="background-color: lightgrey; margin-bottom: 10px">:</p>
                                            <hr style="border-top: 2px dashed black; margin-top: 0px; margin-bottom: 2px">
                                            <p style="margin-bottom: 02px">:</p>
                                            <p
                                                style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                :</p>
                                            <p
                                                style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                :</p>
                                            <hr style="border-top: 2px dashed black; margin-top: 10px; margin-bottom: 0px">
                                            <p
                                                style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 2px">
                                                :</p>
                                            <p style="margin-bottom: 2px">:</p>
                                            <p
                                                style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                :</p>
                                            <p style="margin-bottom: 10px; margin-bottom: 0px">:</p>
                                            <hr style="margin-bottom: 0px; margin-top: 4px">
                                            <p style="margin-bottom: 10px; margin-bottom: 0px; margin-top: 0px">:</p>
                                            <hr style="margin-bottom: 0px; margin-top: 4px">
                                            <p style="margin-bottom: 10px; margin-bottom: 3px; margin-top: 1px">:</p>
                                            <p
                                                style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                :</p>
                                            <p style="margin-bottom: 10px; margin-bottom: 0px; margin-top: 0px">:</p>
                                            <hr style="margin-bottom: 0px; margin-top: 4px">
                                            <p style="margin-bottom: 10px; margin-bottom: 4px; margin-top: 0px">:</p>
                                            <p
                                                style="background-color: lightgrey; margin-bottom: 10px; margin-bottom: 0px">
                                                :</p>
                                            <p style="margin-bottom: 10px; margin-bottom: 0px; margin-top: 0px">:</p>
                                            <hr style="margin-bottom: 0px; margin-top: 4px">
                                            <p style="margin-bottom: 10px; margin-bottom: 2px; margin-top: 2px">:</p>
                                            <hr style="margin-bottom: 0px; margin-top: 0px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 25px; margin-right: 30px">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

@endsection

@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Bantuan</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="margin-bottom: 50px" class="card">
                            <p
                                style="text-decoration: underline; margin-left: 50px; margin-top: 25px; margin-bottom: 10px; color: grey">
                                Frequently Asked Question</p>
                            <div class="col-11">
                                <table class="table border"
                                    style="margin-left: 40px; table-cell-padding-y: 12px; background-color: rgb(0, 166, 255); box-shadow: 3px 3px 3px lightgrey;">
                                    <tbody>
                                        <tr>
                                            <td style="10px" scope="row">
                                                <div class="row">
                                                    <div class="col-xs-1"
                                                        style="padding-left: 20px; padding-right: 15px; text-align: center">
                                                        <i class="fas fa-comments" style="color: white"></i>
                                                    </div>
                                                    {{-- <div class="col-10" style="padding-left: 0px">
                                                        <p style="margin-left: 0px; color: white; margin-bottom: 0px">
                                                            Bagaimana
                                                            cara mendapatkan aku (username dan password) aplikasi
                                                            monev.spbe?</p>
                                                    </div> --}}
                                                    <div class="row">
                                                        <div class="col-12" id="accordion">
                                                            <a class="d-block w-100" data-toggle="collapse"
                                                                href="#collapseOne">
                                                                <p class=" w-100" style="color: white; margin-bottom: 0px">
                                                                    Bagaimanacara mendapatkan aku (username dan password)
                                                                    aplikasimonev.spbe?</p>
                                                            </a>
                                                            <div id="collapseOne" class="collapse" data-parent="#accordion"
                                                                style="color: white">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                elit. Aenean commodo ligula eget dolor.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="10px" scope="row">
                                                <div class="row">
                                                    <div class="col-xs-1"
                                                        style="padding-left: 20px; padding-right: 15px; text-align: center">
                                                        <i class="fas fa-comments" style="color: white"></i>
                                                    </div>
                                                    {{-- <div class="col-10" style="padding-left: 0px">
                                                        <p style="margin-left: 0px; color: white; margin-bottom: 0px">
                                                            Bagaimana mekanisme lupa password?</p>
                                                    </div> --}}
                                                    <div class="row">
                                                        <div class="col-12" id="accordion">
                                                            <a class="d-block w-100" data-toggle="collapse"
                                                                href="#collapseTwo">
                                                                <p class=" w-100" style="color: white; margin-bottom: 0px">
                                                                    Bagaimana mekanisme lupa password?</p>
                                                            </a>
                                                            <div id="collapseTwo" class="collapse" data-parent="#accordion"
                                                                style="color: white">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                elit. Aenean commodo ligula eget dolor.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right: 0px" scope="row" style="padding-right: 0px">
                                                <div class="row">
                                                    <div class="col-xs-1"
                                                        style="padding-left: 20px; padding-right: 35px; text-align: center; width: 10px">
                                                        <i class="fas fa-comments" style="color: white"></i>
                                                    </div>
                                                    {{-- <div class="col-md-11" style="padding-left: 0px">
                                                        <p style="margin-left: 0px; color: white; margin-bottom: 0px">
                                                            Apabila
                                                            selama melakukan entri data terjadi kendala pada koneksi
                                                            internet, apakah data yang diinput akan hilang?</p>
                                                    </div> --}}
                                                    <div class="row">
                                                        <div class="col-12" id="accordion">
                                                            <a class="d-block w-100" data-toggle="collapse"
                                                                href="#collapseThree">
                                                                <p class=" w-100" style="color: white; margin-bottom: 0px">
                                                                    Apabila
                                                                    selama melakukan entri data terjadi kendala pada koneksi
                                                                    internet, apakah data yang diinput akan hilang?</p>
                                                            </a>
                                                            <div id="collapseThree" class="collapse" data-parent="#accordion"
                                                                style="color: white">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                elit. Aenean commodo ligula eget dolor.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p
                                style="text-decoration: underline; margin-left: 50px; margin-top: 0px; margin-bottom: 10px; color: grey">
                                Dokumen</p>
                            <div class="col-11">
                                <table class="table border" style="margin-left: 40px; table-cell-padding-y: 12px">
                                    <tbody>
                                        <tr>
                                            <td style="10px" scope="row">
                                                <a style="margin-left: 15px" href="/asset/perpres.pdf">Perpres Nomor 95 Tahun 2018
                                                    Tentang Sistem Pemerintahan berbasis Elektronik</a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="10px" scope="row">
                                                <a style="margin-left: 15px"href="/asset/permenpan.pdf">Permenpanrb Nomor 59 Tahun 2020 Tentang
                                                    Pemantauan dan Evaluasi Sistem Pemerintahan Berbasis Elektronik</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="10px" scope="row">
                                                <a style="margin-left: 15px"href="/asset/panrb.pdf">Pedoman Menteri PANRB Nomor 6 Tahun
                                                    2023 Tentang Tata Cara Tauval SPBE</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p style="text-decoration: underline; margin-left: 50px; margin-bottom: 10px; color: grey">Help
                                Desk Evaluasi
                                SPBE</p>
                            <div class="col-11">
                                <table class="table border" style="margin-left: 40px; margin-bottom: 15px">
                                    <tbody>
                                        <tr>
                                            <td style="padding-top: 10px; padding-left: 30px; padding-right: 30px; padding-bottom: 10px"
                                                scope="row">
                                                <p style="margin-bottom: 0px">Nomor Kontak :</p>
                                                <p style="margin-bottom: 0px">Kantor - (0351) 462927</p>
                                                <p style="margin-bottom: 0px">Email : diskominfo@madiunkab.go.id</p>
                                                <p style="margin-bottom: 15px">Lokasi : JL.Mastrip No. 23 Madiun</p>
                                                {{-- <p style="margin-bottom: 0px">Mekanisme Evaluasi SPBE : </p>
                                                <hr style="margin-top: 10px; margin-bottom: 12px">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p style="margin-bottom: 0px">Arman (Kementrian, Lembaga, Provinsi,
                                                            Kota)</p>
                                                    </div>
                                                    <div class="col-1">
                                                        <p style="margin-bottom: 0px; text-align: center">-</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p style="margin-bottom: 0px">0852 2119 8920</p>
                                                    </div>
                                                </div>
                                                <hr style="margin-top: 12px; margin-bottom: 12px">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p style="margin-bottom: 0px">Eka Bella (Kab. di area Sumatera,
                                                            Kalimantan, Papua, Papua Barat)</p>
                                                    </div>
                                                    <div class="col-1">
                                                        <p style="margin-bottom: 0px; text-align: center">-</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p style="margin-bottom: 0px">0895 3602 81347</p>
                                                    </div>
                                                </div>
                                                <hr style="margin-top: 12px; margin-bottom: 12px">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p style="margin-bottom: 0px">Muthia (Kab. di area Sulawesi, Bali,
                                                            NTT, NTB, Maluku, Maluku Utara, Kab. di area Jawa)</p>
                                                    </div>
                                                    <div class="col-1">
                                                        <p
                                                            style="margin-bottom: 0px; text-align: center; margin-top: 12px">
                                                            -</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p style="margin-bottom: 0px; margin-top: 12px">0857 7310 1473</p>
                                                    </div>
                                                </div>
                                                <hr style="margin-top: 12px; margin-bottom: 12px">
                                                <p style="margin-bottom: 0px">Aplikasi Evaluasi SPBE :</p>
                                                <hr style="margin-top: 12px; margin-bottom: 12px">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p style="margin-bottom: 0px">Iksan Ramadhan</p>
                                                    </div>
                                                    <div class="col-1">
                                                        <p style="margin-bottom: 0px; text-align: center">-</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p style="margin-bottom: 0px">0897 9664 258</p>
                                                    </div>
                                                </div> --}}
                                                <hr style="margin-top: 12px; margin-bottom: 0px">
                                            </td>
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




@endsection

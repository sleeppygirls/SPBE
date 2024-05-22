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

                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="min-height: 1200px; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-10">
                                    <p style="margin-top: 40px; padding-left: 45px; margin-bottom: 0px; font-weight: bold">
                                        Detail Form</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary" style="margin-top: 35px;"><a
                                            href="/penilaian" style="color: white">Kembali</a></button>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px; margin-bottom: 20px">
                                <table class="table" style="margin-left: 40px; margin-right: 40px">
                                    <tbody>
                                        <tr>
                                            <td style="width: 250px; color: grey">Tahun</td>
                                            <td style="color: grey"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; color: grey">Nama Form</td>
                                            <td style="color: grey"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; color: grey">Deskripsi</td>
                                            <td style="color: grey"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; color: grey">Status Evaluasi</td>
                                            <td style="color: grey"></td>
                                        </tr>
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <button type="button" class="btn btn-primary" style="margin-left: 40px;">Lihat Skor
                                        Index</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-9">
                                    <p style="margin-top: 40px; padding-left: 45px; margin-bottom: 0px; font-weight: bold">
                                        Data Indikator </p>
                                </div>
                                <div class="col-3">
                                    <p style="margin-top: 40px; font-weight: bold; margin-bottom: 0px; margin-left: 30px">
                                        Ubah Tampilan</p>
                                </div>
                            </div>
                            <hr style="margin-top: 10px;margin-left: 30px;margin-right: 30px;">

                            <div class="row" tabindex="0">
                                <div class="col-xs-2">
                                    <p
                                        style="margin-bottom: 0px; margin-left: 55px; padding-right: 0px; width: 23px; margin-right: 20px;">
                                        No.</p>
                                </div>
                                <div class="col-8">
                                    <p>Nama Indikator</p>
                                </div>
                                <div class="col-2" style="margin-left: 50px">
                                    <p>Aksi</p>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 55px; margin-right: 30px;">1</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kebijakan Internal arsitektur SPBE Instansi Pusat/Pemerintah
                                        Daerah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator 1</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 55px; margin-right: 30px;">2</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kebijakan Internal Peta Rencana SPBE Instansi Pusat/Pemerinath
                                        Daerah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator 2</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 55px; margin-right: 30px;">3</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kebijakan Internal Managemen Data</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator 3</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 55px; margin-right: 30px;">4</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator 4</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 55px; margin-right: 30px;">5</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kebijakan Internal Layanan Pusat Data</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator 5</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 55px; margin-right: 30px;">6</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kebijakan Internal Layanan Jaringan Intra Instansi
                                        Pusat/Pemerintahan Daerah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        6</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 55px; margin-right: 30px;">7</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kebijakan Internal Penggunaan Sistem Penghubung Layanan Instansi
                                        Pusat/Pemerintah Daerah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        7</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 55px; margin-right: 30px;">8</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kebijakan Internal Managemen Keamanan Informasi</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        8</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 55px; margin-right: 30px;">9</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kebijakan Internal Audit Tik</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        9</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">10</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kebijakan Internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah
                                        Daerah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        10</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">11</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Arsitektur SPBE Instansi Pusat/Pemerintahan Daerah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        11</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">12</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        12</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">13</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Keterpaduan Rencana dan Anggaran SPBE</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        13</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">14</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Inovasi Proses Bisnis SPBE</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        14</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">15</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Pembangunan Aplikasi SPBE</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        15</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">16</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Pusat Data</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        16</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">17</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        17</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">18</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah
                                        Daerah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        18</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">19</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Pelaksanaan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah
                                    </p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        19</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">20</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Kolaborasi Penerapan SPBE</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        20</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">21</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Penerapan Manajemen Risiko SPBE</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        21</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">22</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Penerapan Manajemen Keamanan Informasi</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        22</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">23</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Penerapan Manajemen Data</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        23</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">24</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Penerapan Manajemen Aset TIK</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        24</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">25</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Penerapan Kompetensi Sumber Daya Manusia</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        25</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">26</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Penerapan Manajemen Pengetahuan</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        26</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">27</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Penerapan Manajemen Perubahan</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        27</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">28</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Penerapan Manajemen Layanan SPBE</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        28</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">29</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Pelaksanaan Audit Infrastuktur SPBE</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        29</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">30</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Pelaksanaan Audit Aplikasi SPBE</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        30</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">31</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Pelaksanaan Audit Keamanan SPBE</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        31</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">32</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Perencanaan</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        32</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">33</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Penganggaran</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        33</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">34</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Keuangan</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        34</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">35</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Pengadaan Barang dan Jasa</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        35</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">36</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Kepegawaian</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        36</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">37</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Kearsipan Dinamis</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        37</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">38</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Pengelolaan Barang Milik Negara/Daerah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        38</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">39</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Pengawasan Internal Pemerintah</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        39</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">40</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Akuntabilitas Kinerja Organisasi</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        40</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">41</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Kinerja Pegawai</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        41</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">42</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Pengaduan Pelayanan Publik</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        42</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">43</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Data Terbuka</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        43</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">44</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Jaringan Dokumentasi dan Informasi Hukum (JDIH)</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        44</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">45</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Publik Sektor 1</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        45</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">46</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Publik Sektor 2</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        46</button>
                                </div>
                            </div>
                            <hr style="margin-top: 0px; margin-left:35px; margin-right:33px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <p style="margin-bottom: 0px; margin-left: 48px; margin-right: 30px;">47</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat Kematangan Layanan Publik Sektor 3</p>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary"
                                        style="padding-top: 0px;padding-bottom: 0px; margin-left: 30px">Indikator
                                        47</button>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 50px">
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
                                                    href="#" aria-controls="example2" data-dt-idx="0"
                                                    tabindex="0" class="page-link">Previous</a></li>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

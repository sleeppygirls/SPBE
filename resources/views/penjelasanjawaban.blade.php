@extends('template.index')

@section('title', 'Home')

@section('content')
    @if ($username == 'Admin')
        <div class="content-wrapper">
            <form action="/jawaban" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content-header p-0">
                    <div class="container-fluid back">
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                            </div>
                            <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                                <div style="margin-bottom: 50px" class="card">
                                    <div class="row" style="margin-top: 20px;">
                                        <table class="table"
                                            style="margin-left: 40px; margin-right: 40px; padding-right: 20px; margin-bottom: 0px;">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="background-color: lightgrey; color: grey; text-align: center;">
                                                        Indikator {{ $indikator->id }}</td>
                                                    <td style="text-align: right">
                                                        <button type="button" class="btn"
                                                            style="background-color: #ad323a">
                                                            <a href="/penilaian" style="color: white">
                                                                Kembali
                                                            </a>
                                                        </button>
                                                        {{-- <form action="{{ url('indikator/task') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" id="txtnama_username" name="username">
                                                            <input type="hidden" id="txtnama_instansi"
                                                                name="nama_instansi">
                                                            <input type="hidden" name="id_task"
                                                                value="{{ $indikator->id_task }}">
                                                            <button class="btn" style="background-color: #ad323a; color: white" type="submit">Kembali</button>
                                                        </form> --}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 250px; color: grey">Domain</td>
                                                    <td style="color: grey">{{ $domain->domain }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 250px; color: grey">Aspek</td>
                                                    <td style="color: grey">{{ $aspek->aspek }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 250px; color: grey; padding-bottom: 5px;">Indikator
                                                    </td>
                                                    <td style="color: grey">{{ $indikator->name }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr style="margin-top: 10px;margin-left: 30px;margin-right: 30px;">
                                    <div class="row">
                                        <div class="col-10">
                                            <button type="button" class="btn"
                                                style="margin-left: 30px; margin-bottom: 15px; background-color: #ad323a; color: white">Penjelasan
                                                Indikator</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11">
                                            <table class="table table-sm" style="margin-left: 40px; margin-bottom: 0px">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">Tingkat</th>
                                                        <th style="padding-left: 30px">Kriteria</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <input type="hidden" name="id_indikator" id="id_indikator"
                                                        value="{{ $indikator->id }}">
                                                    <input type="hidden" name="id_task" id="id_task"
                                                        value="{{ $indikator->id_task }}">
                                                    @foreach ($data as $key => $item)
                                                        <tr>
                                                            <td style="padding-left: 25px">{{ $key + 1 }}</td>
                                                            <td style="padding-left: 15px">
                                                                <div class="col-12" id="accordion">
                                                                    <a class="d-block w-100" data-toggle="collapse"
                                                                        href="#collapse{{ $key + 1 }}">
                                                                        <p class=" w-100"
                                                                            style="margin-bottom: 0px; color: black">
                                                                            {{ $item->text }} </p>
                                                                    </a>
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
            </form>
        </div>
    @else
        <div class="content-wrapper">
            <form action="/jawaban" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content-header p-0">
                    <div class="container-fluid back">
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                            </div>
                            <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                                <div style="margin-bottom: 50px" class="card">
                                    <div class="row" style="margin-top: 20px;">
                                        <table class="table"
                                            style="margin-left: 40px; margin-right: 40px; padding-right: 20px; margin-bottom: 0px;">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="background-color: lightgrey; color: grey; text-align: center;">
                                                        Indikator {{ $indikator->id }}</td>
                                                    <td style="background-color: lightgrey"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 250px; color: grey">Domain</td>
                                                    <td style="color: grey">{{ $domain->domain }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 250px; color: grey">Aspek</td>
                                                    <td style="color: grey">{{ $aspek->aspek }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 250px; color: grey; padding-bottom: 5px;">Indikator
                                                    </td>
                                                    <td style="color: grey">{{ $indikator->name }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr style="margin-top: 10px;margin-left: 30px;margin-right: 30px;">
                                    <div class="row">
                                        <div class="col-10">
                                            <button type="button" class="btn"
                                                style="margin-left: 30px; margin-bottom: 15px; background-color: #ad323a; color: white">Penjelasan
                                                Indikator</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11">
                                            <table class="table table-sm" style="margin-left: 40px; margin-bottom: 0px">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">Tingkat</th>
                                                        <th style="padding-left: 30px">Kriteria</th>
                                                        <th style="text-align: right;">Capaian</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <input type="hidden" name="id_indikator" id="id_indikator"
                                                        value="{{ $indikator->id }}">
                                                    <input type="hidden" name="id_task" id="id_task"
                                                        value="{{ $task->id }}">
                                                    @foreach ($data as $key => $item)
                                                        <tr>
                                                            <td style="padding-left: 25px">{{ $key + 1 }}</td>
                                                            <td style="padding-left: 15px">
                                                                <div class="col-12" id="accordion">
                                                                    <a class="d-block w-100" data-toggle="collapse"
                                                                        href="#collapse{{ $key + 1 }}">
                                                                        <p class=" w-100"
                                                                            style="margin-bottom: 0px; color: black">
                                                                            {{ $item->text }} </p>
                                                                    </a>
                                                                    <div id="collapse{{ $key + 1 }}"
                                                                        class="collapse" data-parent="#accordion">
                                                                        <textarea class="teks" name="jawab-{{ $item->id }}" cols="71" rows="1"
                                                                            style="resize: none;border-top-color: white;border-right: white;border-left-color: white;"
                                                                            {{ Auth::user()->level == 'admin' ? 'readonly' : '' }}>{{ @$item->d_jawaban }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td style="text-align: center">
                                                                <div id="radio" class="custom-control custom-radio"
                                                                    style="padding-left: 35px">
                                                                    <input type="hidden" name="username"
                                                                        value="{{ $username }}">
                                                                    @if (Auth::user()->level == 'user')
                                                                        <input
                                                                            class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                                                            type="radio"
                                                                            id="customRadio{{ $key + 1 }}"
                                                                            name="pencapaian" value="{{ $key + 1 }}"
                                                                            {{ @$detail_indikator->capaian == $key + 1 ? 'checked' : '' }}
                                                                            {{ Auth::user()->level == 'admin' ? 'readonly' : '' }}>
                                                                    @else
                                                                        <input
                                                                            class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                                                            type="radio"
                                                                            id="customRadio{{ $key + 1 }}"
                                                                            name="pencapaian" value="{{ $key + 1 }}"
                                                                            {{ @$detail_indikator->capaian != $key + 1 ? 'disabled' : '' }}
                                                                            {{ @$detail_indikator->capaian == $key + 1 ? 'checked' : '' }}
                                                                            {{ Auth::user()->level == 'admin' ? 'readonly' : '' }}>
                                                                    @endif
                                                                    <label for="customRadio{{ $key + 1 }}"
                                                                        class="custom-control-label"></label>
                                                                </div>

                                                                {{-- <div class="custom-control custom-radio custom-control-input-outline" style="padding-left: 35px">
                                                            <input class="custom-control-input" type="radio" id="customRadio{{$loop->iteration}}" name="customRadio">
                                                            <label for="customRadio{{$loop->iteration}}" class="custom-control-label"></label>
                                                          </div> --}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr style="margin-left: 35px; margin-right: 35px; margin-bottom: 0px; margin-top: 0px">
                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col-sm-12 col-md-5" style="padding-top: 5px;">
                                            <div class="dataTables_info" id="example2_info" role="status"
                                                aria-live="polite" style="text-align: center; padding-right: 110px">
                                                Showing 1 to 5 of 5 entries</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 40px;">
                                        <div class="col-11">
                                            <p style="margin-bottom: 0px; color: lightgrey">Daftar Dokumen Evaluasi Tahun
                                                Lalu
                                            </p>
                                            <p style="color: grey">(centang untuk menandai bahwa dokumen tersebut akan
                                                digunakan
                                                sebagai bukti dukung pada indikator yang dipilih)</p>
                                            <div class="form-group clearfix" style="margin-bottom: 3px;">
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="checkboxPrimary1" checked>
                                                    <label for="checkboxPrimary1"> Indikator_1.rar
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="icheck-danger d-inline">
                                                    <input type="checkbox" checked id="checkboxDanger1">
                                                    <label for="checkboxDanger1"> dt yg di up
                                                    </label>
                                                </div>
                                            </div>
                                            <p style="margin-top: 25px; margin-bottom: 5px; color: lightgrey;">Daftar
                                                Dokumen
                                            </p>
                                            <div class="row" style="margin-left: 2px">
                                                <div class="col-3" style="padding-left: 0px;">
                                                    <p>Dokumen yg diup</p>
                                                </div>
                                                <div class="col-1">
                                                    <button type="button" class="btn btn-danger"
                                                        style="padding-top: 3px; padding-bottom: 3px">Hapus</button>
                                                </div>
                                            </div>
                                            <p style="color: lightgrey; margin-top: 30px;">Upload Dokumen Pendukung</p>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input"
                                                        id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile"
                                                        style="color: lightgrey; width: 840px">Unggah satu [pdf] atau
                                                        banyak
                                                        file
                                                        [zip/rar] *max
                                                        100MB</label>
                                                </div>
                                            </div>
                                            <p style="color: red; margin-bottom: 0px;margin-top: 25px;font-size: small">
                                                *panjang
                                                nama file maksimum 60 karakter, jika melebihi 60 karakter, sistem akan
                                                otomatis
                                                memotong nama file menjadi 60 karakter</p>
                                            <p style="color: red; font-size: small; margin-bottom: 50px;">*apabila ukuran
                                                file
                                                yang
                                                di unggah melebihi ketentuan batas maksimum, agar dapat mereferensikan
                                                url/link
                                                data
                                                dukung dalam penjelasan</p>
                                            @if (Auth::user()->level == 'admin')
                                                <div class="callout callout-danger"
                                                    style="margin-bottom: 40px; padding-bottom: 5px; padding-top: 5px">
                                                    <h5>Catatan</h5>
                                                    <textarea name="catatan" id="catatan" cols="107" rows="3" style="resize: none">{{ @$detail_indikator->note }}</textarea>
                                                </div>
                                            @else
                                                <div class="callout callout-danger"
                                                    style="margin-bottom: 40px; padding-bottom: 5px; padding-top: 5px">
                                                    <h5>Catatan</h5>
                                                    <textarea name="catatan" id="catatan" cols="107" rows="3" style="resize: none" disabled>{{ @$detail_indikator->note }}</textarea>
                                                </div>
                                            @endif
                                            <button type="submit" class="btn btn-success"
                                                style="margin-left: 690px; margin-bottom: 15px">Upload
                                                dan
                                                Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            var rates = document.getElementById('radio').value;
            var rate_value;
            if (rates == 'Fixed Rate') {
                rate_value = document.getElementById('r1').value;

            } else if (rates == 'Variable Rate') {
                rate_value = document.getElementById('r2').value;

            } else if (rates == 'Multi Rate') {
                rate_value = document.getElementById('r3').value;
            }

            document.getElementById('results').innerHTML = rate_value;
        </script>
    @endif
@endsection

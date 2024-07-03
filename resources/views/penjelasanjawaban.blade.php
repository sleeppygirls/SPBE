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
                                                                value="{{ $task->id }}">
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
                                        <div class="col-12" id="accordion">
                                            <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                                <button type="button" class="btn"
                                                    style="margin-left: 30px; margin-bottom: 15px; background-color: #ad323a; color: white">
                                                    Penjelasan Indikator
                                                </button>
                                            </a>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                                                    <div style="margin-bottom: 50px" class="card">
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <p
                                                                    style="margin-top: 40px; padding-left: 45px; margin-bottom: 0px; font-weight: bold">
                                                                    Detail Penjelasan Indikator
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 20px; margin-bottom: 20px">
                                                            <table class="table"
                                                                style="margin-left: 40px; margin-right: 40px; margin-bottom: 0px">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 250px; color: grey">ID</td>
                                                                        <td style="color: grey">
                                                                            {{ @$indikator->keterangan->id }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 250px; color: grey">Penjelasan
                                                                        </td>
                                                                        <td style="color: grey">
                                                                            {{ @$indikator->keterangan->name }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            @if (@session('mess'))
                                                <div class="card card-default">
                                                    <div class="card-header">
                                                        <h3 class="card-title" style="color: #ad323a; font-weight: ">{{ session('mess') }}</h3>
                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-tool"
                                                                data-card-widget="collapse">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool"
                                                                data-card-widget="remove">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
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
                                                    {{-- @dd($data); --}}
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
                                                                        <textarea class="teks" id="jawab-{{ $key }}" name="jawab-{{ $item->id }}" cols="71"
                                                                            rows="1" style="resize: none;border-top-color: white;border-right: white;border-left-color: white;"
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
                                                                            onchange="rubahCapaian({{ $key }})"
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
                                            <p style="margin-bottom: 5px; color: lightgrey;">
                                                Daftar Dokumen
                                            </p>
                                            @foreach ($documents as $index => $document)
                                                <div class="form-group clearfix" style="margin-bottom: 3px;">
                                                    <div class=" d-inline">
                                                        <label>
                                                            <a href="{{ Storage::url(json_decode($document['files'], true)[0]['path']) }}"
                                                                target="_blank">
                                                                {{ $index + 1 }}. {{ $document['name'] }}
                                                            </a>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @if (Auth::user()->level == 'user')
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    Bukti Dukung
                                                </button>
                                            @endif
                                        </div>
                                        {{-- <p style="color: red; margin-bottom: 0px;margin-top: 25px;font-size: small">
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
                                            dukung dalam penjelasan</p> --}}
                                        @if (Auth::user()->level == 'admin')
                                            <div class="callout callout-danger"
                                                style="margin-top: 40px; margin-bottom: 40px; padding-bottom: 5px; padding-top: 5px">
                                                <h5>Catatan</h5>
                                                <textarea name="catatan" id="catatan" cols="107" rows="3" style="resize: none">{{ @$detail_indikator->note }}</textarea>
                                            </div>
                                        @else
                                            <div class="callout callout-danger"
                                                style="margin-top: 40px; margin-bottom: 40px; padding-bottom: 5px; padding-top: 5px">
                                                <h5>Catatan</h5>
                                                <textarea name="catatan" id="catatan" cols="107" rows="3" style="resize: none" disabled>{{ @$detail_indikator->note }}</textarea>
                                            </div>
                                        @endif
                                        <button type="submit" class="btn btn-success"
                                            style="margin-left: 690px; margin-bottom: 15px">
                                            Upload dan Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bukti Dukung</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('document-upload', [$indikator->id, $task->id])
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
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

@section('js')
    <script>
        function rubahCapaian(id) {
            console.log({
                id
            });

            for (let i = 0; i < 5; i++) {
                if (i > id) {
                    document.getElementById("jawab-" + i).readOnly = true;
                    document.getElementById("jawab-" + i).value = '';
                } else {

                    document.getElementById("jawab-" + i).readOnly = false;
                }

            }

        }
    </script>
@endsection

@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">
                            Tambah Tugas Penilaian Mandiri
                        </h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="padding-bottom: 30px ; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <form action="/task/{{ @$data->id }}" method="POST">
                                        @if (@$data)
                                            @method('PUT')
                                        @endif
                                        @csrf
                                        <input type="hidden" name="id" value="{{ @$data->id }}">
                                        <div class="card"
                                            style="margin-left: 80px ; padding: 20px; margin-top: 15px; margin-bottom: 15px; background-color: rgb(232, 253, 236)">
                                            <div class="form-group">
                                                <label for="nama_instansi">ID</label>
                                                <input type="text" class="form-control" name="id" placeholder="ID"
                                                    value="{{ @$data->id }}" {{ @$data->id ? 'readonly' : '' }}>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_instansi">Nama Form</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Nama Form" value="{{ @$data->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_instansi">Tahap Form</label>
                                                <input type="text" class="form-control" name="tahap"
                                                    placeholder="Tahap Form" value="{{ @$data->tahap }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Batas Waktu</label>
                                                <input type="date" class="form-control" name="batas"
                                                    placeholder="Batas Waltu" value="{{ @$data->batas }}">
                                                {{-- <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input type="text" name="batas"
                                                        class="form-control datetimepicker-input"
                                                        data-target="#reservationdate" placeholder="Batas Waktu" />
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="form-group">
                                                <label for="year">Tahun</label>
                                                <input type="number" class="form-control" placeholder="Tahun" id="year" name="tahun" min="1900" max="2100" step="1" required
                                                    value="{{ @$data->tahun }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_instansi">Status</label>
                                                <input type="text" class="form-control" name="status"
                                                    placeholder="Status" value="{{ @$data->status }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_instansi">Deskripsi</label>
                                                <input type="text" class="form-control" name="desc"
                                                    placeholder="Deskripsi" value="{{ @$data->desc }}">
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

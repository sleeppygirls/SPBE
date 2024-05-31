@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Tambah Indikator</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="padding-bottom: 30px ; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <form action="/indikator/task" method="POST" style="margin-left: 80px">
                                        @csrf
                                        <div class="card"
                                            style="padding: 20px; margin-top: 15px; margin-bottom: 15px; background-color: rgb(243, 230, 255)">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="no">No</label>
                                                        <input type="text" class="form-control" name="no"
                                                            placeholder="No">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Indikator</label>
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Indikator">
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <label for="aspek">Aspek</label>
                                                        <input type="text" class="form-control" name="aspek"
                                                            placeholder="Aspek">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="domain">Domain</label>
                                                        <input type="text" class="form-control" name="domain"
                                                            placeholder="Domain">
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <label for="aspek">Aspek</label>
                                                        <select id="aspek" name="aspek" style="margin-left: 20px;height: 40px; color: black; background-color: lightgray; font-weight: bold">
                                                            @foreach ($aspek as $item)
                                                                <option value="{{ $item->aspek }}">{{ $item->aspek }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="domain">Domain</label>
                                                        <select id="domain" name="domain" style="margin-left: 20px;height: 40px; color: black; background-color: lightgray; font-weight: bold">
                                                            @foreach ($domain as $item)
                                                                <option value="{{ $item->domain }}">{{ $item->domain }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun">Tahun</label>
                                                        <select id="tahun" name="tahun" style="margin-left: 20px;height: 40px; color: black; background-color: lightgray; font-weight: bold">
                                                            @foreach ($task as $item)
                                                                <option value="{{ $item->tahun }}">{{ $item->tahun }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="text">Penjelasan</label>
                                                        <input type="text" class="form-control"name="text"
                                                            placeholder="Penjelasan">
                                                        <input type="text" class="form-control"name="text"
                                                            placeholder="Penjelasan" style="margin-top: 20px">
                                                        <input type="text" class="form-control"name="text"
                                                            placeholder="Penjelasan" style="margin-top: 20px">
                                                        <input type="text" class="form-control"name="text"
                                                            placeholder="Penjelasan" style="margin-top: 20px">
                                                        <input type="text" class="form-control"name="text"
                                                            placeholder="Penjelasan" style="margin-top: 20px">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
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

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
                                                    <div class="form-group">
                                                        <label for="aspek">Aspek</label>
                                                        <input type="text" class="form-control" name="aspek"
                                                            placeholder="Aspek">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="domain">Domain</label>
                                                        <input type="text" class="form-control" name="domain"
                                                            placeholder="Domain">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="year">Tahun</label>
                                                        <input type="number" class="form-control" placeholder="Tahun"
                                                            id="year" name="tahun" min="1900" max="2100"
                                                            step="1" required>
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

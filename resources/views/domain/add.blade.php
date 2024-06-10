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
                                    <form action="/domain" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ @$domain->id }}">
                                        <div class="card"
                                            style="margin-left: 80px ; padding: 20px; margin-top: 15px; margin-bottom: 15px; background-color: rgb(241, 232, 253)">
                                            
                                            <div class="form-group">
                                                <label for="domain">Domain</label>
                                                <input type="text" class="form-control" name="domain"
                                                    placeholder="Domain" value="{{ @$domain->domain }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="bobot_domain">Bobot</label>
                                                <input type="decimal" class="form-control" name="bobot_domain"
                                                    placeholder="Bobot" value="{{ @$domain->bobot_domain }}">
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

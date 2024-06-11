@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">
                            Tambah Aspek
                        </h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="padding-bottom: 30px ; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <form action="/aspek" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ @$aspek->id }}">
                                        <div class="card"
                                            style="margin-left: 80px ; padding: 20px; margin-top: 15px; margin-bottom: 15px; background-color: rgb(241, 232, 253)">
                                            
                                            <div class="form-group">
                                                <label for="aspek">Aspek</label>
                                                <input type="text" class="form-control" name="aspek"
                                                    placeholder="Aspek" value="{{ @$aspek->aspek }}">
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="bobot_a">Bobot</label>
                                                <input type="decimal" class="form-control" name="bobot_a"
                                                    placeholder="Bobot" value="{{ @$aspek->bobot_a }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="bobot_aspeka">Bobot Aspek</label>
                                                <input type="decimal" class="form-control" name="bobot_aspeka"
                                                    placeholder="Bobot Aspek" value="{{ @$aspek->bobot_aspeka }}">
                                            </div> --}}
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

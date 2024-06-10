@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Tambah Domain & Aspek</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="padding-bottom: 30px ; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <form action="/adm/indikator/{{$indikator->id}}/domainaspek" method="POST" style="margin-left: 80px">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ @$indikator->id }}">
                                        <div class="card"
                                            style="padding: 20px; margin-top: 15px; margin-bottom: 15px; background-color: rgb(222, 254, 208)">
                                            <div class="row">
                                                <div class="col-11">
                                                    <input type="text" name="id" hidden value="{{ @$indikator->id }}">
                                                    <div class="form-group">
                                                        <label for="domain">Domain</label>
                                                        <select id="domain" name="domain" style="margin-left: 20px;height: 40px; color: black; background-color: lightgray; font-weight: bold">
                                                            @foreach ($domain as $item)
                                                                <option value="{{ $item->domain }}">{{ $item->domain }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="aspek">Aspek</label>
                                                        <select id="aspek" name="aspek" style="margin-left: 20px;height: 40px; color: black; background-color: lightgray; font-weight: bold">
                                                            @foreach ($aspek as $item)
                                                                <option value="{{ $item->aspek }}">{{ $item->aspek }}</option>
                                                            @endforeach
                                                        </select>
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

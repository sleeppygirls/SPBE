@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">
                            Tambah Bagian Indikator
                        </h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="padding-bottom: 30px ; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <form action="/bagians/{{ @$bagian->id }}" method="POST">
                                        @if (@$bagian)
                                            @method('PUT')
                                        @endif
                                        @csrf
                                        <input type="hidden" name="id" value="{{ @$bagian->id }}">
                                        <div class="card"
                                            style="margin-left: 80px ; padding: 20px; margin-top: 15px; margin-bottom: 15px; background-color: rgb(252, 248, 213)">
                                            <div class="form-group">
                                                <label for="nama_instansi">ID</label>
                                                <input type="text" class="form-control" name="id" placeholder="ID"
                                                    value="{{ @$bagian->id }}" {{ @$bagian->id ? 'readonly' : '' }}>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_instansi">Nama Instansi</label>
                                                <input type="text" class="form-control" name="name" placeholder="Nama Instansi"
                                                    value="{{ @$bagian->name }}" {{ @$bagian->name ? 'readonly' : '' }}>
                                            </div>
                                            @foreach ($indikators as $key => $indikator)
                                                <div class="form-check">
                                                    <input name="indikator-{{ $indikator->id }}" class="form-check-input"
                                                        type="checkbox" value="{{ $indikator->id }}"
                                                        {{ @$indikator->checked != null ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Indikator {{ $indikator->no }} : {{ $indikator->name }}
                                                    </label>
                                                </div>
                                            @endforeach
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

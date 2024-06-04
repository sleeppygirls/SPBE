@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">
                            Tambah Penjelasan
                        </h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="padding-bottom: 30px ; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    {{-- <form action="{{ url('adm/indikator/' . $indikator->id . '/penjelasan/' . $penjelasan->id) }}"
                                        method="POST">
                                        @if(@$penjelasan)
                                            @method('PUT')
                                        @endif --}}
                                        <form action="{{ isset($penjelasan) ? route('penjelasan.update', [$indikator->id, $penjelasan->id]) : route('penjelasan.store', $indikator->id) }}" method="POST">
                                            @csrf
                                            @if(isset($penjelasan))
                                                @method('PUT')
                                            @endif
                                        @csrf
                                        <input type="hidden" name="id" value="{{ @$indikator->id }}">
                                        <div class="card"
                                            style="margin-left: 80px ; padding: 20px; margin-top: 15px; margin-bottom: 15px; background-color: rgb(224, 255, 251)">
                                            {{-- <input type="hidden" name="id" value="{{ @$indikator->id }}"
                                                {{ @$indikator->id ? 'readonly' : '' }}> --}}
                                            <div class="form-group">
                                                <label for="name">Penjelasan</label>
                                                <input type="text" class="form-control" name="text"
                                                    placeholder="Penjelasan" value="{{ @$penjelasan->text }}">
                                                {{-- <input style="margin-top: 15px" type="text" class="form-control"
                                                    name="name" placeholder="Penjelasan" value="{{ @$bagian->name }}">
                                                <input style="margin-top: 15px" type="text" class="form-control"
                                                    name="name" placeholder="Nama Bagian" value="{{ @$bagian->name }}">
                                                <input style="margin-top: 15px" type="text" class="form-control"
                                                    name="name" placeholder="Nama Bagian" value="{{ @$bagian->name }}">
                                                <input style="margin-top: 15px" type="text" class="form-control"
                                                    name="name" placeholder="Nama Bagian" value="{{ @$bagian->name }}"> --}}
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

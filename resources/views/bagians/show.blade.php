@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Tugas Penilaian Mandiri
                        </h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div class="card pb-5">
                            <div class="row">
                                <div class="col-11">

                                    <div class="card-body" style="margin-left: 13px">


                                        <form action="/bagians" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{ @$bagian->id }}">

                                            <div class="form-group">
                                                <label for="name">Nama Instansi</label>
                                                <input type="text" class="form-control" name="name" value="{{ @$bagian->name }}">
                                            </div>

                                            @foreach ($indikators as $key => $indikator)
                                                <div class="form-check">
                                                    <input name="indikator-{{ $indikator->id }}" class="form-check-input" type="checkbox" value="{{ $indikator->id }}" {{ @$indikator->checked != null ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Indikator {{$indikator->no}} : {{ $indikator->name }}
                                                    </label>
                                                </div>
                                            @endforeach

                                            <button type="submit">Simpan</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

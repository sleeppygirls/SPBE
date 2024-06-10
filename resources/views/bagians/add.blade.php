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
                                    <form action="/users/{{$user->id}}/bagians" method="POST">
                                        @csrf
                                        <div class="card"
                                            style="margin-left: 80px ; padding: 20px; margin-top: 15px; margin-bottom: 15px; background-color: rgb(252, 248, 213)">

                                            <input type="text" name="id" hidden value="{{ @$bagian->id }}">
                                            <input type="text" name="id_user" hidden value="{{ @$user->id }}">
                                            <div class="form-group">
                                                <label for="id_task">Tahun</label>
                                                <select id="id_task" name="id_task" style="margin-left: 20px;height: 40px; color: black; background-color: lightgray; font-weight: bold">
                                                    @foreach ($task as $item)
                                                    <option value="{{ $item->id }}" {{ (@$bagian->id_task == $item->id) ? 'selected' : '' }}>
                                                        {{ $item->tahun }}
                                                    </option>
                                                    @endforeach
                                                </select>
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

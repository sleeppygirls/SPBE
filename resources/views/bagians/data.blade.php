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
                        <div style="min-height: 1010px; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">

                                    <div class="card-body" style="margin-left: 13px">
                                        <table id="example2" class="table table-bordered table-hover" style="width: 890px">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5px;padding-right: 0px;padding-left: 5px;">ID.</th>
                                                    <th>Nama</th>
                                                    <th>Indikators</th>
                                                    <th>aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bagians as $bagian)
                                                    <tr>
                                                        <td>{{ $bagian->id }}</td>
                                                        <td>{{ $bagian->name }}</td>
                                                        <td>
                                                            @isset($bagian->indikators)
                                                                @foreach (json_decode($bagian->indikators, true) as $item)
                                                                    {{ $item }}
                                                                @endforeach
                                                            @endisset
                                                        </td>
                                                        <td>
                                                            <a href="/bagians/{{ $bagian->id }}">
                                                                <button>Edit</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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

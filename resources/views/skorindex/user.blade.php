@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="content-header p-0">
            <div class="container-fluid back">
                <div class="row">
                    <div class="col-sm-12 mt-3">
                        <h1 style="color: white; padding-left: 11px" class="m-0 dashboard fw-bold">Skor
                            {{ $user->nama_instansi }}</h1>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;" class="col-12">
                        <div style="min-height: 500px; margin-bottom: 5px" class="card">
                            <div class="row">
                                <div class="col-11">
                                    <div class="body">
                                        <table class="table table-bordered"
                                            style="background-color: rgb(232, 236, 255); margin-top: 30px; margin-left: 40px; margin-right: 25px">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Domain</th>
                                                    <th>Aspek</th>
                                                    <th>Indikator</th>
                                                    <th>Bobot(%)</th>
                                                    <th>Bobot Aspek(%)</th>
                                                    <th>Tk Final Adj</th>
                                                    <th>Index Akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($indikators as $index => $indikator)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $indikator->domainR->domain ?? 'N/A' }}</td>
                                                        <td>{{ $indikator->aspekR->aspek ?? 'N/A' }}</td>
                                                        <td>{{ $indikator->name }}</td>
                                                        <td>{{ $indikator->bobot }}</td>
                                                        <td>{{ $indikator->bobot_aspek }}</td>
                                                        <td>{{ $indikator->detailIndikator->capaian ?? 0 }}</td>
                                                        <td>{{ $indikator->index_akhir }}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="7">Total</td>
                                                    <td>{{ $indikators->total_index_akhir }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="7">Total Bobot</td>
                                                    <td>{{ $indikators->total_bobot }}</td>
                                                </tr>
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

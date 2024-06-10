<?php

namespace App\Http\Controllers\Admin;

use App\Models\Aspek;
use App\Models\Domain;
use App\Models\Indikator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDomainAspekRequest;
use App\Http\Requests\UpdateDomainAspekRequest;

class DomainAspekController extends Controller
{
    public function index(Indikator $indikator)
    {
        $aspek = Aspek::where('id', $indikator->aspek)->first();
        $domain = Domain::where('id', $indikator->domain)->first();
        $no = 1;
        $data = [
            'indikator' => $indikator,
            'aspek'=>$aspek,
            'domain'=>$domain,
            'no'=>$no,
            "page" => "indikator",
        ];

        return view('domainaspek.data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Domain $domain, Aspek $aspek,Indikator $indikator)
    {
        $data = [
            'indikator' => $indikator,
            'domain' => $domain,
            'aspek' => $aspek,
            "page" => "indikator",
        ];
        return view('domainaspek.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDomainAspekRequest $request, Indikator $indikator)
    {
        $id_indikator = $indikator->id;
        Aspek::updateOrCreate([
            'id' => $request->input('id'),
        ], [
            'name' => $request->input('name'),
        ]);

        Domain::updateOrCreate([
            'id' => $request->input('id'),
        ], [
            'name' => $request->input('name'),
        ]);

        return redirect('/adm/indikator/'. $id_indikator .'/domainaspek')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Indikator $indikator)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domain $domain, Aspek $aspek, Indikator $indikator)
    {
        $aspek = Aspek::all();
        $domain = Domain::all();

        $data = [
            'indikator' => $indikator,
            "page" => "indikator",
            'domain' => $domain,
            'aspek' => $aspek
        ];

        return view('domainaspek.add', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDomainAspekRequest $request, Domain $domain, Aspek $aspek, Indikator $indikator)
    {
        $indikator = Indikator::all();
        $aspek = Aspek::all();
        $domain = Domain::all();

        $data = [
            'indikator' => $indikator,
            "page" => "indikator",
            'domain' => $domain,
            'aspek' => $aspek
        ];

        return view('domainaspek.add', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_indikator)
    {
        try {
            $indikator = Indikator::find($id_indikator);
            if ($indikator) {
                $indikator->update([
                    'aspek' => null,
                    'domain' => null
                ]);

                return redirect('/adm/indikator/'. $id_indikator .'/domainaspek')->with([
                    'mess' => 'Aspek dan Domain indikator berhasil diperbarui.',
                ]);
            } else {
                dd("indikator tidak ditemukan");
                return redirect('/adm/indikator/'. $id_indikator .'/domainaspek')->with([
                    'mess' => 'Indikator tidak ditemukan.',
                ]);
            }
        } catch (\Throwable $th) {
            dd("error");
            return redirect('/adm/indikator/'. $id_indikator .'/domainaspek')->with([
                'mess' => 'Aspek dan Domain indikator gagal diperbarui.',
            ]);
        }

    }
}

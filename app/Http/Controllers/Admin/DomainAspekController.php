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
        // $indikat or = Indikator::whereHas('domainR', function ($query) {
        //     $query->where('domain', 'id');
        // })->whereHas('aspekR', function ($query) {
        //     $query->where('aspek', 'id');
        // })->get();

        $aspek = Aspek::where('id', $indikator->aspek)->first();
        $domain = Domain::where('id', $indikator->domain)->first();
        // $indikator = Indikator::with(['domainR', 'aspekR'])->get();
    //    $indikator = DB::table('indikators')
    //    ->join('aspeks','indikators.aspek','=','aspeks.aspek')
    //    ->select('indikators.*','aspeks.aspek')
    //    ->where('indikators.id',$indikator->id)
    //    ->get();
        // dd($domain);
        $no = 1;
        $data = [
            'indikator' => $indikator,
            'aspek'=>$aspek,
            'domain'=>$domain,
            'no'=>$no,
            // 'aspek' => $aspek,
            // 'domain' => $domain,
            "page" => "indikator",
        ];

        return view('domainaspek.data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $data = [
    //         "page" => "indikator",
    //     ];
    //     return view('domainaspek.add', $data);
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreDomainAspekRequest $request, Indikator $indikator)
    // {
    //     $id_indikator = $indikator->id;
    //     Aspek::updateOrCreate([
    //         'id' => $request->input('id'),
    //     ], [
    //         'name' => $request->input('name'),
    //     ]);

    //     Domain::updateOrCreate([
    //         'id' => $request->input('id'),
    //     ], [
    //         'name' => $request->input('name'),
    //     ]);

    //     return redirect('/adm/indikator/'. $id_indikator .'/domainaspek')->with([
    //         'mess' => 'Data Berhasil Disimpan',
    //     ]);
    // }

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
        DB::transaction(function () use ($id_indikator){
            // Aspek::join('indikators','aspeks.id','=','indikators.aspek')
            // ->where('id_indikator',$id_indikator)
            // ->delete();

            // Domain::join('indikators','domains.id','=','indikators.domain')
            // ->where('id_indikator',$id_indikator)
            // ->delete();

            Aspek::whereHas('indikators', function ($query) use ($id_indikator){
                $query->where('id', $id_indikator);
            })->delete();

            Domain::whereHas('indikators', function ($query) use ($id_indikator){
                $query->where('id', $id_indikator);
            })->delete();
        });
        
        return redirect('/adm/indikator/'. $id_indikator .'/domainaspek')->with([
            'mess' => 'Data Berhasil Dihapus',
        ]);
    }
}

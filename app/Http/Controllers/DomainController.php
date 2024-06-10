<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Http\Requests\StoreDomainRequest;
use App\Http\Requests\UpdateDomainRequest;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $domain = Domain::all();

        $data = [
            'domain' => $domain,
            "page" => "domain",
        ];
        return view('domain.data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            "page" => "domain",
        ];
        return view('domain.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDomainRequest $request)
    {
        Domain::updateOrCreate([
            'id' => $request->input('id'),
        ], [
            'domain' => $request->input('domain'),
            'bobot_domain' => $request->input('bobot_domain'),
        ]);

        return redirect('/domain')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Domain $domain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domain $domain)
    {
        $data = [
            "domain" => $domain,
            "page" => "domain",
        ];

        return view('domain.add', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDomainRequest $request, Domain $domain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domain $domain)
    {
        $domain->delete();

        return redirect('/domain')->with([
            'mess' => 'Data Berhasil Dihapus',
        ]);
    }
}

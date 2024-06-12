<?php

namespace App\Livewire;

use App\Models\FileData;
use Livewire\Component;

class CariDokumen extends Component
{

    public $query;
    public $selectedDocument=[];
    public $results = [];

    public function cari()
    {
        $this->selectedDocument = [];
        $this->results = FileData::where('name', 'like', '%' . $this->query . '%')->with('task','user')->get();

    }

    public function selectDocument($documentId)
    {
        $this->selectedDocument = FileData::find($documentId);
    }


    public function render()
    {
        return view('livewire.cari-dokumen');
    }
}

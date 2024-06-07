<?php

namespace App\Livewire;

use App\Models\FileData;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class DocumentUpload extends Component
{
    use WithFileUploads;

    public $id_indikator;
    public $id_task;
    public $newDocument;
    public $newDocumentName;
    public $documents = [];
    public $isUploading = false;

    public function mount($id_indikator, $id_task)
    {
        $this->id_indikator = $id_indikator;
        $this->id_task = $id_task;
        $this->loadDocuments();
    }

    public function loadDocuments()
    {
        $this->documents = FileData::where('id_indikator', $this->id_indikator)
                                   ->where('id_task', $this->id_task)
                                   ->where('id_user', Auth::id())
                                   ->get()
                                   ->toArray();
    }

    public function addDocument()
    {
        session()->flash('message', 'Document successfully uploaded!');
        $this->isUploading = true;
        $this->validate([
            'newDocument' => 'required|mimes:pdf|max:2048',
            'newDocumentName' => 'required|string|max:255',
        ]);

        $path = $this->newDocument->store('public/documents');

        FileData::create([
            'id_indikator' => $this->id_indikator,
            'id_task' => $this->id_task,
            'id_user' => Auth::id(),
            'name' => $this->newDocumentName,
            'files' => json_encode([['name' => $this->newDocumentName, 'path' => $path]]),
        ]);

        $this->loadDocuments();

        $this->newDocument = null;
        $this->newDocumentName = null;
        $this->isUploading = false;
    }

    public function removeDocument($id)
    {
        session()->flash('message', 'Document successfully removed!');
        $fileData = FileData::find($id);
        if ($fileData) {
            $files = json_decode($fileData->files, true);
            foreach ($files as $file) {
                Storage::delete($file['path']);
            }
            $fileData->delete();
            $this->loadDocuments();
        }
    }
    public function render()
    {
        return view('livewire.document-upload');
    }
}
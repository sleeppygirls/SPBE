<div>
    <div class="form-group">
        <label for="documentFile">Document File</label>
        <input type="file" class="form-control-file" id="documentFile" wire:model="newDocument">
        @error('newDocument') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button class="btn btn-primary" wire:click="addDocument" wire:loading.attr="disabled">
        Upload
    </button>

    <div wire:loading wire:target="addDocument">
        Uploading...
    </div>

    <div class="mt-3">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <h3 class="mt-4">Uploaded Documents</h3>
    <ul class="list-group">
        @foreach($documents as $document)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $document['name'] }}
                <div>
                    <a href="{{ Storage::url(json_decode($document['files'], true)[0]['path']) }}" target="_blank" class="btn btn-sm btn-info">View</a>
                    <button class="btn btn-sm btn-danger" wire:click="removeDocument({{ $document['id'] }})">Delete</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>

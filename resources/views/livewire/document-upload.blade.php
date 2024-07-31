<div>
    <div class="form-group">
        <label for="documentFiles">Dokumen</label>
        <input type="file" class="form-control-file" id="documentFiles" wire:model="newDocuments" multiple>
        @error('newDocuments.*') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button class="btn btn-primary" wire:click="addDocuments" wire:loading.attr="disabled">
        Unggah
    </button>

    <div wire:loading wire:target="addDocuments">
        Sedang mengunggah...
    </div>

    <div class="mt-3">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <h3 class="mt-4">Dokumen yang Diunggah</h3>
    <ul class="list-group">
        @foreach($documents as $document)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $document['name'] }}
                <div>
                    <a href="{{ Storage::url(json_decode($document['files'], true)[0]['path']) }}" target="_blank" class="btn btn-sm btn-info">Lihat</a>
                    <button class="btn btn-sm btn-danger" wire:click="removeDocument({{ $document['id'] }})">Hapus</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>

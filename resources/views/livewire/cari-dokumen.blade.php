<div>
    <div class="form-group">
        <input type="text" class="form-control" id="searchInput" placeholder="Ketikkan Sesuatu"
        wire:model.lazy="query" wire:keyup="cari"
        >

    </div>

    <div class="list-group">
        @if ($results)

        @foreach($results as $result)
            <a wire:click="selectDocument({{ $result->id }})" href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $result->name }}</h5>
                    <small class="text-muted">{{ $result->created_at->diffForHumans() }}</small>
                </div>
                <p class="mb-1">{{ $result->user->nama_instansi }}</p>
                <small class="text-muted">{{ $result->task->name }}</small>

    @if($selectedDocument)
    <div class="mt-4">
        <h5>Preview PDF:</h5>
        <iframe src="{{ Storage::url(json_decode($selectedDocument['files'], true)[0]['path']) }}" width="100%" height="500px"></iframe>
    </div>
    @endif
            </a>
        @endforeach
        @else
        <i>Tidak ada hasil ditemukan.</i>
        @endif

    </div>
</div>

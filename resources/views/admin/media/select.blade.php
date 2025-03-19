@extends('layouts.admin')
@section('title', 'Select Media')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                @forelse($media as $item)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <img src="{{ $item->url }}" class="card-img-top" alt="{{ $item->name }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title text-truncate">{{ $item->name }}</h5>
                                <p class="card-text">
                                    <small class="text-muted">
                                        {{ number_format($item->size / 1024, 2) }} KB
                                    </small>
                                </p>
                                <button type="button" class="btn btn-primary btn-sm w-100 select-media" data-url="{{ $item->url }}" data-dismiss="modal">
                                    <i class="fas fa-check"></i> Select
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">No media files found.</div>
                    </div>
                @endforelse
            </div>

            <div class="d-flex justify-content-end mt-4">
                {{ $media->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.querySelectorAll('.select-media').forEach(button => {
            button.addEventListener('click', function() {
                const url = this.dataset.url;
                window.opener.postMessage({ type: 'media-selected', url: url }, '*');
                window.close();
            });
        });
    </script>
    @endpush
@endsection
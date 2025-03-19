@extends('layouts.admin')
@section('title', 'Media Library')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Media Library</h1>
        <a href="{{ route('admin.media.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Upload Media
        </a>
    </div>

    <div class="row">
        @forelse($media as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ $item->url }}" class="card-img-top" alt="{{ $item->name }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{ $item->name }}</h5>
                        <p class="card-text">
                            <small class="text-muted">
                                {{ number_format($item->size / 1024, 2) }} KB<br>
                                {{ $item->mime_type }}
                            </small>
                        </p>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-sm btn-info copy-url" data-url="{{ $item->url }}">
                                <i class="fas fa-copy"></i> Copy URL
                            </button>
                            <form action="{{ route('admin.media.destroy', $item) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this media?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
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

    @push('scripts')
    <script>
        document.querySelectorAll('.copy-url').forEach(button => {
            button.addEventListener('click', function() {
                const url = this.dataset.url;
                navigator.clipboard.writeText(url).then(() => {
                    alert('URL copied to clipboard!');
                });
            });
        });
    </script>
    @endpush
@endsection
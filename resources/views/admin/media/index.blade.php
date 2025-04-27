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
                    <div style="height: 200px; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa;">
                        <img src="{{ Storage::url($item->path) }}" class="card-img-top" alt="{{ $item->name }}" style="max-height: 200px; max-width: 100%; object-fit: contain;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{ $item->name }}</h5>
                        <p class="card-text">
                            <small class="text-muted">
                                {{ number_format($item->size / 1024, 2) }} KB<br>
                                {{ $item->mime_type }}
                            </small>
                        </p>
                        <div class="d-flex justify-content-end">
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

    <!-- Copy URL functionality has been removed -->
@endsection

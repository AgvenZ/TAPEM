@extends('layouts.admin')
@section('title', 'Edit News Article')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit News Article</h1>
        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to News
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $news->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10" required>{{ old('content', $news->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    @if($news->image_path)
                        <div class="mb-2">
                            <img src="{{ Storage::url($news->image_path) }}" alt="{{ $news->title }}" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    @endif
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="is_published" name="is_published" {{ old('is_published', $news->is_published) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_published">Publish this article</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Article
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@extends('layouts.admin')
@section('title', 'Upload Media')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Upload Media</h1>
        <a href="{{ route('admin.media.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Media Library
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" class="form-control" id="file" name="file" accept="image/*" required>
                    <small class="text-muted">Accepted formats: JPEG, PNG, GIF. Max size: 2MB</small>
                </div>
                <div class="mb-3">
                    <img id="preview" src="#" alt="Preview" style="max-width: 300px; display: none;">
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-upload"></i> Upload
                </button>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        document.getElementById('file').addEventListener('change', function(e) {
            const preview = document.getElementById('preview');
            const file = e.target.files[0];
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
    @endpush
@endsection

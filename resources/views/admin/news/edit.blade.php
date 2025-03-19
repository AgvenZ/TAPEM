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

                <input type="hidden" name="slug" id="slug" value="{{ old('slug', $news->slug) }}">

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
                    <div class="mt-3">
                        <button type="button" class="btn btn-outline-primary d-flex align-items-center justify-content-center gap-2 py-2 hover-shadow transition" onclick="openMediaSelector()" style="border: 1px dashed #0d6efd;">
                            <i class="fas fa-photo-video"></i>
                            <span>Select from Media Library</span>
                        </button>
                    </div>
                    <div id="selected-image-preview" class="mt-3" style="display: none;">
                        <div class="position-relative d-inline-block">
                            <img src="" alt="Selected image" class="img-thumbnail" style="max-width: 200px;">
                            <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2" onclick="removeSelectedImage()">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <input type="hidden" name="selected_media_url" id="selected-media-url">
                    </div>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <style>
                .hover-shadow:hover {
                    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
                    transform: translateY(-2px);
                }
                .transition {
                    transition: all 0.3s ease;
                }
                </style>

                <script>
                function removeSelectedImage() {
                    const previewContainer = document.getElementById('selected-image-preview');
                    const previewImage = previewContainer.querySelector('img');
                    const urlInput = document.getElementById('selected-media-url');
                    
                    previewContainer.style.display = 'none';
                    previewImage.src = '';
                    urlInput.value = '';
                }
                </script>

                <div class="mb-3 form-check">
                    <input type="hidden" name="is_published" value="0">
                    <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1" {{ $news->is_published ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_published">Publish this Article</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Article
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('admin.media.modal')

<script>
        function openMediaSelector() {
            const modal = new bootstrap.Modal(document.getElementById('mediaModal'));
            modal.show();
            loadMediaItems();
        }

        function loadMediaItems(page = 1) {
            const mediaItems = document.getElementById('mediaItems');
            const mediaLoader = document.getElementById('mediaLoader');
            const mediaPagination = document.getElementById('mediaPagination');
            const mediaLoadSuccess = document.getElementById('mediaLoadSuccess');
            
            mediaItems.innerHTML = '';
            mediaLoader.querySelector('.spinner-border').style.display = 'block';
            mediaLoader.querySelector('.check-circle').style.display = 'none';
            mediaLoadSuccess.classList.add('d-none');

            fetch(`{{ route('admin.media.select') }}?page=${page}`)
                .then(response => response.text())
                .then(html => {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const items = doc.querySelectorAll('.col-md-3');
                    const pagination = doc.querySelector('.d-flex.justify-content-end.mt-4');

                    items.forEach(item => {
                        const template = document.getElementById('mediaItemTemplate').content.cloneNode(true);
                        const img = template.querySelector('img');
                        const title = template.querySelector('.card-title');
                        const fileSize = template.querySelector('.file-size');
                        const selectBtn = template.querySelector('.select-media');

                        img.src = item.querySelector('img').src;
                        img.alt = item.querySelector('img').alt;
                        title.textContent = item.querySelector('.card-title').textContent;
                        fileSize.textContent = item.querySelector('.text-muted').textContent;
                        selectBtn.dataset.url = item.querySelector('.select-media').dataset.url;

                        selectBtn.addEventListener('click', function() {
                            const previewContainer = document.getElementById('selected-image-preview');
                            const previewImage = previewContainer.querySelector('img');
                            const urlInput = document.getElementById('selected-media-url');
                            const fileInput = document.getElementById('image');

                            previewImage.src = this.dataset.url;
                            urlInput.value = this.dataset.url;
                            previewContainer.style.display = 'block';
                            fileInput.value = '';

                            bootstrap.Modal.getInstance(document.getElementById('mediaModal')).hide();
                        });

                        mediaItems.appendChild(template);
                    });

                    if (pagination) {
                        mediaPagination.innerHTML = pagination.innerHTML;
                        mediaPagination.querySelectorAll('a').forEach(link => {
                            link.addEventListener('click', function(e) {
                                e.preventDefault();
                                const pageNum = this.href.split('page=')[1];
                                loadMediaItems(pageNum);
                            });
                        });
                    }

                    mediaLoader.querySelector('.spinner-border').style.display = 'none';
                    mediaLoader.querySelector('.check-circle').style.display = 'block';
                    setTimeout(() => {
                        mediaLoadSuccess.classList.remove('d-none');
                    }, 500);
                });
        }

        document.getElementById('title').addEventListener('input', function() {
            let slug = this.value
                .toLowerCase()
                .replace(/[^a-z0-9-]/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-|-$/g, '');
            document.getElementById('slug').value = slug;
        });
    </script>
@endsection
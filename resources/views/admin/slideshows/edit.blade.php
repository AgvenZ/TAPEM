@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Slideshow</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.slideshows.update', $slideshow) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $slideshow->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    <small class="form-text text-muted">Leave empty to keep the current image</small>
                    <div class="mt-3">
                        <button type="button" class="btn btn-outline-primary d-flex align-items-center justify-content-center gap-2 py-2 hover-shadow transition" onclick="openMediaSelector()" style="border: 1px dashed #0d6efd;">
                            <i class="fas fa-photo-video"></i>
                            <span>Select from Media Library</span>
                        </button>
                    </div>
                    <div id="selected-images-preview" class="mt-3" style="display: none;">
                        <div id="selected-images-grid" class="row g-2"></div>
                        <input type="hidden" name="selected_media_urls" id="selected-media-urls">
                    </div>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $slideshow->image_path) }}" alt="Current Image" style="max-height: 100px;">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="order" class="form-label">Display Order</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" value="{{ old('order', $slideshow->order) }}" min="0">
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="active" name="active" value="1" {{ old('active', $slideshow->active) ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">Active</label>
                </div>
                <button type="submit" class="btn btn-primary">Update Slideshow</button>
                <a href="{{ route('admin.slideshows.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

@include('admin.media.modal')

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
    const selectedMediaUrls = JSON.parse(document.getElementById('selected-media-urls').value || '[]');

    mediaItems.innerHTML = '';
    mediaLoader.style.display = 'flex';
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
                const checkbox = template.querySelector('.media-checkbox');

                img.src = item.querySelector('img').src;
                img.alt = item.querySelector('img').alt;
                title.textContent = item.querySelector('.card-title').textContent;
                fileSize.textContent = item.querySelector('.text-muted').textContent;
                const imageUrl = item.querySelector('.select-media').dataset.url;
                checkbox.value = imageUrl;
                checkbox.checked = selectedMediaUrls.includes(imageUrl);

                checkbox.addEventListener('change', function() {
                    const selectedCount = document.querySelectorAll('.media-checkbox:checked').length;
                    document.getElementById('selectedCount').textContent = `${selectedCount} items selected`;
                    document.getElementById('confirmSelection').disabled = selectedCount === 0;
                });

                document.getElementById('confirmSelection').addEventListener('click', function() {
                    const selectedUrls = Array.from(document.querySelectorAll('.media-checkbox:checked')).map(cb => cb.value);
                    const previewContainer = document.getElementById('selected-images-preview');
                    const previewGrid = document.getElementById('selected-images-grid');
                    const urlInput = document.getElementById('selected-media-urls');
                    const fileInput = document.getElementById('image');

                    if (selectedUrls.length > 0) {
                        previewGrid.innerHTML = selectedUrls.map(url => `
                            <div class="col-md-3">
                                <div class="position-relative">
                                    <img src="${url}" class="img-fluid rounded" alt="Selected image">
                                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1" onclick="removeSelectedImage('${url}')">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        `).join('');
                        urlInput.value = JSON.stringify(selectedUrls);
                        previewContainer.style.display = 'block';
                        fileInput.value = '';
                    }

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
            mediaLoadSuccess.classList.remove('d-none');
        });
}

function removeSelectedImage(urlToRemove) {
    const previewContainer = document.getElementById('selected-images-preview');
    const previewGrid = document.getElementById('selected-images-grid');
    const urlInput = document.getElementById('selected-media-urls');

    const selectedUrls = JSON.parse(urlInput.value || '[]').filter(url => url !== urlToRemove);

    if (selectedUrls.length === 0) {
        previewContainer.style.display = 'none';
        previewGrid.innerHTML = '';
        urlInput.value = '';
    } else {
        urlInput.value = JSON.stringify(selectedUrls);
        const imageToRemove = previewGrid.querySelector(`img[src="${urlToRemove}"]`).closest('.col-md-3');
        imageToRemove.remove();
    }
}
</script>
@endsection
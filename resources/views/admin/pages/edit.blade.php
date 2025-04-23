@extends('layouts.admin')
@section('title', 'Edit Page')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Page</h1>
        <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to page
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="parent_page" class="form-label">Parent Menu</label>
                    <div class="input-group">
                        <select class="form-select @error('parent_page') is-invalid @enderror" id="parent_page" name="parent_page" onchange="if(this.value === 'new') { new bootstrap.Modal(document.getElementById('newParentModal')).show(); }">
                            <option value="">None</option>
                            <option value="new" data-bs-toggle="modal" data-bs-target="#newParentModal">+ Add New Parent Menu</option>
                            @php
                                $existingParents = \App\Models\Page::select('parent_page')
                                    ->whereNotNull('parent_page')
                                    ->distinct()
                                    ->pluck('parent_page');
                            @endphp
                            @foreach($existingParents as $parent)
                                <option value="{{ $parent }}" {{ old('parent_page', $page->parent_page) == $parent ? 'selected' : '' }}>{{ $parent }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-outline-primary" type="button" onclick="editParentMenu()">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    @error('parent_page')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="menu_order" class="form-label">Menu Order</label>
                    <input type="number" class="form-control @error('menu_order') is-invalid @enderror" id="menu_order" name="menu_order" value="{{ old('menu_order', $page->order) }}">
                    <small class="form-text text-muted">Leave empty for automatic ordering</small>
                    @error('menu_order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $page->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <input type="hidden" name="slug" id="slug" value="{{ old('slug', $page->slug) }}">

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10" required>{{ old('content', $page->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="source_code" class="form-label">Source Code (HTML/CSS/JS)</label>
                    <div class="card mb-2">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Source Code Editor</span>
                            <div>
                                <button type="button" class="btn btn-sm btn-outline-secondary" id="toggle-preview-btn">Toggle Live Preview</button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <textarea class="form-control @error('source_code') is-invalid @enderror" id="source_code" name="source_code" rows="10" style="font-family: monospace; tab-size: 4;">{{ old('source_code', $page->source_code) }}</textarea>
                        </div>
                    </div>
                    <div class="card" id="source-preview" style="display: none;">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Live Preview</span>
                            <button type="button" class="btn btn-sm btn-outline-secondary" id="close-preview-btn">Close</button>
                        </div>
                        <div class="card-body p-0" id="source-preview-content"></div>
                    </div>
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const closePreviewBtn = document.getElementById('close-preview-btn');
                        const previewContainer = document.getElementById('source-preview');

                        closePreviewBtn.addEventListener('click', function() {
                            previewContainer.style.display = 'none';
                            document.getElementById('toggle-preview-btn').textContent = 'Toggle Live Preview';
                            livePreviewEnabled = false;
                        });
                    });
                    </script>
                    @error('source_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const sourceCodeEditor = document.getElementById('source_code');
                    const togglePreviewBtn = document.getElementById('toggle-preview-btn');
                    const previewContainer = document.getElementById('source-preview');
                    const previewContent = document.getElementById('source-preview-content');
                    let livePreviewEnabled = true; // Aktifkan live preview secara default
                    let previewIframe;

                    // Function to update preview
                    function updatePreview() {
                        const sourceCode = sourceCodeEditor.value;

                        // Create an iframe if it doesn't exist
                        if (!previewIframe) {
                            previewIframe = document.createElement('iframe');
                            previewIframe.style.width = '100%';
                            previewIframe.style.height = '600px';
                            previewIframe.style.border = 'none';
                            previewContent.innerHTML = '';
                            previewContent.appendChild(previewIframe);
                        }

                        // Write the source code to the iframe
                        const iframeDoc = previewIframe.contentDocument || previewIframe.contentWindow.document;
                        iframeDoc.open();
                        iframeDoc.write(sourceCode);
                        iframeDoc.close();
                    }

                    // Toggle live preview
                    togglePreviewBtn.addEventListener('click', function() {
                        livePreviewEnabled = !livePreviewEnabled;
                        previewContainer.style.display = livePreviewEnabled ? 'block' : 'none';
                        togglePreviewBtn.textContent = livePreviewEnabled ? 'Hide Live Preview' : 'Toggle Live Preview';

                        if (livePreviewEnabled) {
                            updatePreview();
                        }
                    });

                    // Update preview on input - real-time update
                    sourceCodeEditor.addEventListener('input', updatePreview);

                    // Tampilkan preview secara otomatis saat halaman dimuat
                    previewContainer.style.display = 'block';
                    togglePreviewBtn.textContent = 'Hide Live Preview';
                    updatePreview();
                });
                </script>

                <div class="mb-3">
                    <label for="image" class="form-label">Images</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    <div class="mt-3">
                        <button type="button" class="btn btn-outline-primary d-flex align-items-center justify-content-center gap-2 py-2 hover-shadow transition" onclick="openMediaSelector()" style="border: 1px dashed #0d6efd;">
                            <i class="fas fa-photo-video"></i>
                            <span>Select from Media Library</span>
                        </button>
                    </div>
                    <div id="selected-images-preview" class="mt-3">
                        <div id="selected-images-grid" class="row g-2">
                            @if($page->images)
                                @php
                                    $images = is_array($page->images) ? $page->images : json_decode($page->images, true);
                                @endphp
                                @if(is_array($images))
                                    @foreach($images as $image)
                                        <div class="col-md-3">
                                            <div class="position-relative">
                                                <img src="{{ Storage::url($image) }}" class="img-fluid rounded" alt="page Image">
                                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1" onclick="removeSelectedImage('{{ Storage::url($image) }}')">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endif
                        </div>
                        <input type="hidden" name="selected_media_urls" id="selected-media-urls" value="{{ $page->images ? json_encode(array_map(function($img) { return Storage::url($img); }, is_array($page->images) ? $page->images : json_decode($page->images, true))) : '' }}">
                    </div>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Modal for adding new parent menu -->
                <div class="modal fade" id="newParentModal" tabindex="-1" aria-labelledby="newParentModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="newParentModalLabel">Edit Parent Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="new_parent_name" class="form-label">Parent Menu Name</label>
                                    <input type="text" class="form-control" id="new_parent_name">
                                    <input type="hidden" name="old_parent_name" id="old_parent_name">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" onclick="addNewParentMenu()">Update</button>
                            </div>
                        </div>
                    </div>
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
                function editParentMenu() {
                    const select = document.getElementById('parent_page');
                    const currentParent = select.value;
                    if (currentParent && currentParent !== 'new' && currentParent !== '') {
                        document.getElementById('new_parent_name').value = currentParent;
                        document.getElementById('old_parent_name').value = currentParent;
                        const modal = new bootstrap.Modal(document.getElementById('newParentModal'));
                        modal.show();
                    }
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

                function addNewParentMenu() {
                    const newParentName = document.getElementById('new_parent_name').value.trim();
                    if (newParentName) {
                        const select = document.getElementById('parent_page');
                        const oldValue = select.value;

                        // If we're editing an existing parent menu
                        if (oldValue && oldValue !== 'new') {
                            // Update all pages with the old parent name
                            Array.from(select.options).forEach(option => {
                                if (option.value === oldValue) {
                                    option.text = newParentName;
                                    option.value = newParentName;
                                }
                            });
                        } else {
                            // Add new option
                            const option = new Option(newParentName, newParentName, false, true);
                            select.add(option, 1);
                        }

                        select.value = newParentName;
                        document.getElementById('new_parent_name').value = '';
                        const modal = bootstrap.Modal.getInstance(document.getElementById('newParentModal'));
                        modal.hide();
                    }
                }
                </script>
                <div class="mb-3 form-check">
                    <input type="hidden" name="is_published" value="0">
                    <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1" {{ $page->is_published ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_published">Publish this Page</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Page
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

                        checkbox.addEventListener('change', updateSelectedCount);
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

        function updateSelectedCount() {
            const selectedCount = document.querySelectorAll('.media-checkbox:checked').length;
            document.getElementById('selectedCount').textContent = `${selectedCount} items selected`;
            document.getElementById('confirmSelection').disabled = selectedCount === 0;
        }

        function handleConfirmSelection() {
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
        }

        document.addEventListener('DOMContentLoaded', function() {
            const confirmButton = document.getElementById('confirmSelection');
            if (confirmButton) {
                confirmButton.addEventListener('click', handleConfirmSelection);
            }
        });

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

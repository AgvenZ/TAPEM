<div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediaModalLabel">Select Media</h5>
                <div class="ms-auto d-flex align-items-center">
                    <span id="selectedCount" class="me-3">0 items selected</span>
                    <button type="button" class="btn btn-primary me-2" id="confirmSelection" disabled>Confirm Selection</button>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body">
                <div class="row" id="mediaItems">
                    <!-- Media items will be loaded here -->
                </div>
                <div class="d-flex justify-content-center mt-4" id="mediaLoader">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <i class="fas fa-check-circle text-success check-circle" style="font-size: 2rem; display: none;"></i>
                </div>
                <div class="alert alert-success d-none mt-4 text-center" id="mediaLoadSuccess">
                    All images have been loaded successfully
                </div>
                <div class="d-flex justify-content-end mt-4" id="mediaPagination">
                    <!-- Pagination will be loaded here -->
                </div>
            </div>
        </div>
    </div>
</div>

<template id="mediaItemTemplate">
    <div class="col-md-3 mb-4">
        <div class="card h-100">
            <div class="position-relative">
                <img src="" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                <div class="position-absolute top-0 end-0 p-2">
                    <div class="form-check">
                        <input class="form-check-input media-checkbox" type="checkbox" value="" style="transform: scale(1.5);">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title text-truncate"></h5>
                <p class="card-text">
                    <small class="text-muted file-size"></small>
                </p>
            </div>
        </div>
    </div>
</template>
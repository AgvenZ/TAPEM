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
                    <i class="fas fa-check-circle text-success check-circle" style="font-size: 2rem; display: none;" id="successIcon"></i>
                </div>
                <div class="alert alert-success d-none mt-4 text-center" id="mediaLoadSuccess">
                    All images have been loaded successfully
                </div>
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Fungsi untuk menyembunyikan loader dan menampilkan pesan status
                    function hideLoaderAndShowStatus() {
                        const mediaLoader = document.getElementById('mediaLoader');
                        const mediaLoadSuccess = document.getElementById('mediaLoadSuccess');
                        const spinner = document.querySelector('.spinner-border');
                        const successIcon = document.getElementById('successIcon');
                        const mediaItems = document.getElementById('mediaItems');
                        const mediaItemsCount = mediaItems ? mediaItems.querySelectorAll('.col-md-3').length : 0;

                        if (mediaLoader) {
                            mediaLoader.style.display = 'none';
                        }

                        if (spinner) {
                            spinner.style.display = 'none';
                        }

                        if (successIcon) {
                            successIcon.style.display = mediaItemsCount > 0 ? 'block' : 'none';
                        }

                        if (mediaLoadSuccess) {
                            mediaLoadSuccess.classList.remove('d-none');
                            if (mediaItemsCount > 0) {
                                mediaLoadSuccess.textContent = 'All images have been loaded successfully';
                                mediaLoadSuccess.classList.remove('alert-warning');
                                mediaLoadSuccess.classList.add('alert-success');
                            } else {
                                mediaLoadSuccess.textContent = 'No media found';
                                mediaLoadSuccess.classList.remove('alert-success');
                                mediaLoadSuccess.classList.add('alert-warning');
                            }
                        }
                    }

                    // Menambahkan observer untuk memantau perubahan pada #mediaItems
                    const mediaItemsObserver = new MutationObserver(function(mutations) {
                        // Jika ada perubahan pada #mediaItems
                        setTimeout(hideLoaderAndShowStatus, 500);

                        // Hentikan observer setelah pemeriksaan
                        mediaItemsObserver.disconnect();
                    });

                    // Mulai memantau #mediaItems untuk perubahan
                    const mediaItems = document.getElementById('mediaItems');
                    if (mediaItems) {
                        mediaItemsObserver.observe(mediaItems, { childList: true, subtree: true });
                    }

                    // Tambahkan event listener untuk modal show event
                    const mediaModal = document.getElementById('mediaModal');
                    if (mediaModal) {
                        mediaModal.addEventListener('shown.bs.modal', function() {
                            // Reset observer saat modal ditampilkan
                            if (mediaItems) {
                                mediaItemsObserver.observe(mediaItems, { childList: true, subtree: true });
                            }

                            // Periksa apakah gambar sudah dimuat
                            if (document.querySelectorAll('#mediaItems .col-md-3').length > 0) {
                                hideLoaderAndShowSuccess();
                            }
                        });
                    }

                    // Tambahkan event listener untuk memantau perubahan pada mediaPagination
                    // Ini akan mendeteksi ketika halaman terakhir telah dimuat
                    const mediaPaginationObserver = new MutationObserver(function(mutations) {
                        // Jika pagination telah dimuat dan ada item media
                        if (document.querySelectorAll('#mediaItems .col-md-3').length > 0) {
                            setTimeout(hideLoaderAndShowSuccess, 500);
                        }
                    });

                    const mediaPagination = document.getElementById('mediaPagination');
                    if (mediaPagination) {
                        mediaPaginationObserver.observe(mediaPagination, { childList: true, subtree: true });
                    }

                    // Tambahkan interval untuk memeriksa apakah gambar sudah dimuat tetapi loader masih terlihat
                    const loaderCheckInterval = setInterval(function() {
                        if (document.querySelectorAll('#mediaItems .col-md-3').length > 0 &&
                            document.getElementById('mediaLoader') &&
                            document.getElementById('mediaLoader').style.display !== 'none') {
                            hideLoaderAndShowSuccess();
                            clearInterval(loaderCheckInterval);
                        }
                    }, 1000);

                    // Bersihkan interval setelah 10 detik untuk mencegah interval berjalan terus-menerus
                    setTimeout(function() {
                        clearInterval(loaderCheckInterval);
                    }, 10000);
                });
                </script>
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
                <div style="height: 200px; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa;">
                    <img src="" class="card-img-top" alt="" style="max-height: 200px; max-width: 100%; object-fit: contain;">
                </div>
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
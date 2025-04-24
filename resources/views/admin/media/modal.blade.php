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
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Fungsi untuk menyembunyikan loader dan menampilkan pesan sukses
                    function hideLoaderAndShowSuccess() {
                        const mediaLoader = document.getElementById('mediaLoader');
                        const mediaLoadSuccess = document.getElementById('mediaLoadSuccess');
                        const spinner = document.querySelector('.spinner-border');
                        
                        if (mediaLoader) {
                            mediaLoader.style.display = 'none';
                        }
                        
                        if (spinner) {
                            spinner.style.display = 'none';
                        }
                        
                        if (mediaLoadSuccess) {
                            mediaLoadSuccess.classList.remove('d-none');
                        }
                    }
                    
                    // Menambahkan observer untuk memantau perubahan pada #mediaItems
                    const mediaItemsObserver = new MutationObserver(function(mutations) {
                        // Jika ada perubahan pada #mediaItems (gambar telah dimuat)
                        if (document.querySelectorAll('#mediaItems .col-md-3').length > 0) {
                            // Tunggu sedikit untuk memastikan semua gambar telah dimuat
                            setTimeout(hideLoaderAndShowSuccess, 500);
                            
                            // Hentikan observer setelah gambar dimuat
                            mediaItemsObserver.disconnect();
                        }
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
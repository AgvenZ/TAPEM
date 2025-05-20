@if(!empty($page->source_code))
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>{{ $page->title }} - Tata Pemerintahan Kota Semarang</title>
        <link rel="icon" type="image/png" href="/img/rel.png">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Judson:wght@700&family=Inconsolata:wght@400&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            .judson-font {
                font-family: 'Judson', serif;
            }
            .inconsolata-font {
                font-family: 'Inconsolata', monospace;
            }
            .arvo-font {
                font-family: 'Arvo', serif;
            }
            .andika-font {
                font-family: 'Andika New Basic', sans-serif;
            }
        </style>
    </head>
    <body class="font-sans" onclick="closeAllDropdowns(event)">
    <script>
        // Inisialisasi dropdown menu dan efek sticky navbar
        document.addEventListener('DOMContentLoaded', function() {
            // Pastikan dropdown menu berfungsi dengan benar
            var dropdownButtons = document.querySelectorAll('.dropdown-content');
            dropdownButtons.forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            });
        });
    </script>
        <!-- Canvas kosong untuk source_code -->
        <div class="dynamic-content">
            {!! $page->source_code !!}
        </div>
    </body>
    </html>
@else
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>{{ $page->title }} - Tata Pemerintahan Kota Semarang</title>
        <link rel="icon" type="image/png" href="/img/rel.png">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Judson:wght@700&family=Inconsolata:wght@400&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            .fade-in {
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 2s ease-out, transform 2s ease-out;
            }
            .fade-in.visible {
                opacity: 1;
                transform: translateY(0);
            }
            .slide-in {
                opacity: 0;
                transform: translateX(-100%);
                transition: opacity 1.2s ease-out, transform 1.2s ease-out;
            }
            .slide-in.visible {
                opacity: 1;
                transform: translateX(0);
            }
            .zoom-in {
                opacity: 0;
                transform: scale(0.8);
                transition: opacity 2s ease-out, transform 2s ease-out;
            }
            .zoom-out {
                opacity: 0;
                transform: scale(0.8);
                transition: opacity 1s ease-out, transform 1s ease-out;
            }
            .zoom-in.visible {
                opacity: 1;
                transform: scale(1);
            }
            .zoom-out.visible {
                opacity: 1;
                transform: scale(1);
            }
            .hover-grow {
                display: inline-block;
            }

            .hover-grow:hover {
                transform: scale(1.05);
                transition: transform 0.3s ease-in-out;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                z-index: 20;
                background-color: #333;
                color: white;
            }
            .dropdown-content a {
                color: white;
            }
            header.sticky {
                transition: all 0.5s ease-in-out;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000;
            }
            .hover-underline:hover {
                text-decoration: underline;
            }

            header.shrink {
                padding-top: 10px;
                padding-bottom: 10px;
            }

            header.shrink .container {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            header.shrink img {
                height: 60px;
                width: 200px;
            }

            header.shrink .text-lg {
                font-size: 1rem;
            }

            header.shrink .inconsolata-font {
                font-size: 1rem;
            }

            header.sticky img {
                transition: all 0.3s ease-in-out;
            }

            header.sticky .text-lg {
                transition: all 0.3s ease-in-out;
            }

            header.sticky .inconsolata-font {
                transition: all 0.3s ease-in-out;
            }
            header.sticky {
                transition: all 0.3s ease-in-out;
                margin-bottom: 0;
                padding-bottom: 0;
            }
            .dropdown-content a:hover {
                background-color: #FEFF01;
                color: black;
            }
            .judson-font {
                font-family: 'Judson', serif;
            }
            .inconsolata-font {
                font-family: 'Inconsolata', monospace;
            }
            .arvo-font {
                font-family: 'Arvo', serif;
            }
            .andika-font {
                font-family: 'Andika New Basic', sans-serif;
            }
        </style>

        <script>
            function toggleDropdown(event, id) {
                event.stopPropagation();
                var dropdowns = document.getElementsByClassName('dropdown-content');
                for (var i = 0; i < dropdowns.length; i++) {
                    if (dropdowns[i].id !== id) {
                        dropdowns[i].style.display = 'none';
                    }
                }
                var dropdown = document.getElementById(id);
                if (dropdown.style.display === 'block') {
                    dropdown.style.display = 'none';
                } else {
                    dropdown.style.display = 'block';
                }
            }

            function closeAllDropdowns(event) {
                var dropdowns = document.getElementsByClassName('dropdown-content');
                for (var i = 0; i < dropdowns.length; i++) {
                    dropdowns[i].style.display = 'none';
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                const header = document.querySelector('header');
                function handleScroll() {
                    if (window.scrollY > 50) {
                        header.classList.add('shrink');
                    } else {
                        header.classList.remove('shrink');
                    }
                }
                window.addEventListener('scroll', handleScroll);

                // Inisialisasi status sticky pada load
                handleScroll();

                // Pastikan dropdown menu berfungsi dengan benar
                var dropdownButtons = document.querySelectorAll('.dropdown-content');
                dropdownButtons.forEach(function(button) {
                    button.addEventListener('click', function(e) {
                        e.stopPropagation();
                    });
                });

                // Inisialisasi efek hover pada logo footer
                const logoContainers = document.querySelectorAll('.flex.justify-center.transform.hover\\:scale-105');
                logoContainers.forEach(function(container) {
                    container.addEventListener('mouseenter', function() {
                        const tooltip = this.querySelector('div.opacity-0');
                        if (tooltip) {
                            tooltip.classList.remove('opacity-0');
                            tooltip.classList.add('opacity-100');
                        }
                    });

                    container.addEventListener('mouseleave', function() {
                        const tooltip = this.querySelector('div.opacity-100');
                        if (tooltip) {
                            tooltip.classList.remove('opacity-100');
                            tooltip.classList.add('opacity-0');
                        }
                    });
                });
            });
        </script>
    </head>
    <body class="font-sans" onclick="closeAllDropdowns(event)">
    <script>
        // Inisialisasi dropdown menu dan efek sticky navbar
        document.addEventListener('DOMContentLoaded', function() {
            // Pastikan dropdown menu berfungsi dengan benar
            var dropdownButtons = document.querySelectorAll('.dropdown-content');
            dropdownButtons.forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            });
        });
    </script>
        <!-- Include navbar -->
        @include('layouts.navbar2')

        <!-- Navbar judul halaman -->
        <div class="bg-black text-white">
            <div class="flex justify-between items-center p-4">
                <div class="text-2xl font-bold andika-font ml-20">{{ strtoupper(preg_replace('/^\d{4}-\d{2}-\d{2}\s*\|\s*/', '', $page->title)) }}</div>
                <div class="flex items-center space-x-1 inconsolata-font mr-40">
                    @php
                        $parentTitle = preg_replace('/^\d{4}-\d{2}-\d{2}\s*\|\s*/', '', $page->parent_page);
                    @endphp
                    <a href="http://127.0.0.1:8000/" class="hover-underline text-white">{{ strtoupper($parentTitle) }}</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>{{ strtoupper(preg_replace('/^\d{4}-\d{2}-\d{2}\s*\|\s*/', '', $page->title)) }}</span>
                </div>
            </div>
        </div>

        <!-- Konten utama dengan layout lengkap -->
        <div class="relative w-full mx-auto flex items-center justify-center min-h-screen pt-20 pb-16" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('img/rev-bg2.png') }}'); background-attachment: fixed; background-size: cover; background-position: center;">
            <div class="relative z-10 w-full max-w-6xl mx-auto px-8 py-6 bg-gray bg-opacity-500">
                <!-- Bagian Gambar -->
                @if($page->images && is_array($page->images) && count($page->images) > 0)
                    <div class="mb-8 text-center mt-4">
                        <div class="image-container p-6 bg-gray-700 bg-opacity-50 rounded-lg shadow-lg border border-gray-500">
                            @foreach($page->images as $imageUrl)
                                <img src="{{ asset('storage/' . str_replace('public/', '', $imageUrl)) }}" alt="{{ $page->title }}" class="mx-auto my-4 max-w-full h-auto rounded-lg shadow-lg">
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Bagian Konten -->
                <div class="text-2xl inconsolata-font mt-4 text-white text-justify p-8">
                    {!! nl2br(e($page->content)) !!}
                </div>
            </div>
        </div>

        <!-- Include footer -->
        @include('layouts.footer')
    </body>
    </html>
@endif

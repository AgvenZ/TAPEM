<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $news->title }} - Tata Pemerintahan Kota Semarang</title>
    <link rel="icon" type="image/png" href="{{ asset('img/rel.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Judson:wght@700&family=Inconsolata:wght@400&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet">
    <style>
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
            color: rgb(0, 0, 0) !important;
            position: relative;
            padding-left: 24px;
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

        /* Gaya khusus untuk halaman news/show */
        .news-content-container {
            background: linear-gradient(135deg, rgba(25,25,25,0.95) 0%, rgba(40,40,40,0.9) 100%);
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.5), 0 1px 4px rgba(255,255,255,0.1) inset;
            border: 1px solid rgba(255,255,255,0.1);
            overflow: hidden;
            position: relative;
            animation: gradientShift 10s ease infinite alternate;
        }

        @keyframes gradientShift {
            0% {
                box-shadow: 0 10px 30px rgba(0,0,0,0.5), 0 1px 5px rgba(79, 70, 229, 0.1) inset;
            }
            50% {
                box-shadow: 0 10px 30px rgba(0,0,0,0.5), 0 1px 5px rgba(147, 51, 234, 0.1) inset;
            }
            100% {
                box-shadow: 0 10px 30px rgba(0,0,0,0.5), 0 1px 5px rgba(236, 72, 153, 0.1) inset;
            }
        }

        .news-content-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #4f46e5, #9333ea, #ec4899);
        }

        .news-title {
            position: relative;
            padding-bottom: 12px;
            margin-bottom: 16px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .news-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #4f46e5, #9333ea, #ec4899);
            border-radius: 3px;
        }

        .news-date {
            background-color: rgba(79, 70, 229, 0.2);
            border-radius: 20px;
            padding: 5px 15px;
            display: inline-block;
            margin-bottom: 15px;
            border: 1px solid rgba(79, 70, 229, 0.3);
        }

        .news-content {
            line-height: 1.7;
            font-size: 1rem;
            background-color: rgba(255,255,255,0.05);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.05);
        }

        /* Carousel styling */
        .carousel-custom {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 12px 20px rgba(0,0,0,0.6);
            margin: 25px auto;
            border: 1px solid rgba(255,255,255,0.1);
            position: relative;
            background: linear-gradient(145deg, rgba(30,30,30,0.4), rgba(60,60,60,0.2));
            padding: 8px;
        }

        .carousel-custom .carousel-inner {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3) inset;
            background: rgba(0,0,0,0.2);
            position: relative;
        }

        .carousel-custom .carousel-item {
            position: relative !important;
            height: 100%;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .carousel-custom .carousel-item.active {
            display: flex;
        }

        .carousel-custom .carousel-item img {
            transition: all 0.5s ease;
            max-height: 450px;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 5px 12px rgba(0,0,0,0.3);
            opacity: 1;
        }

        .carousel-custom:hover .carousel-item.active img {
            transform: scale(1.02);
        }

        .carousel-custom .carousel-control-prev,
        .carousel-custom .carousel-control-next {
            width: 10%;
            opacity: 0.7;
            background: rgba(0,0,0,0.5);
            border-radius: 50%;
            height: 50px;
            width: 50px;
            top: 50%;
            transform: translateY(-50%);
            margin: 0 15px;
            transition: all 0.3s ease;
            border: 2px solid rgba(255,255,255,0.2);
            z-index: 10;
        }

        .carousel-custom .carousel-control-prev:hover,
        .carousel-custom .carousel-control-next:hover {
            opacity: 1;
            background: rgba(79, 70, 229, 0.7);
            border-color: rgba(255,255,255,0.5);
            box-shadow: 0 0 15px rgba(79, 70, 229, 0.5);
        }

        .carousel-custom .carousel-indicators {
            bottom: -5px;
        }

        .carousel-custom .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.5);
            margin: 0 5px;
        }

        .carousel-custom .carousel-indicators button.active {
            background-color: white;
            transform: scale(1.2);
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease forwards;
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }

        /* Layout khusus untuk news/show */
        .news-sidebar {
            background: linear-gradient(135deg, rgba(30,30,30,0.9) 0%, rgba(50,50,50,0.85) 100%);
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.4);
            border: 1px solid rgba(255,255,255,0.1);
            padding: 20px;
            height: fit-content;
        }

        .news-sidebar-title {
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 15px;
            font-size: 1.5rem;
            color: white;
        }

        .news-sidebar-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #4f46e5, #9333ea);
            border-radius: 3px;
        }

        .news-meta-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 6px 14px;
            background-color: rgba(255,255,255,0.05);
            border-radius: 16px;
            transition: all 0.3s ease;
            border: 1px solid rgba(79, 70, 229, 0.2);
        }

        .news-meta-item:hover {
            background-color: rgba(79, 70, 229, 0.15);
            transform: scale(1.05);
        }

        .news-meta-icon {
            margin-right: 10px;
            color: #9333ea;
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
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
    @include('layouts.navbar2')

    <!-- Navbar judul halaman dengan desain baru -->
    <div class="bg-gradient-to-r from-gray-900 to-black text-white" style="margin-top: 200px;">
        <div class="flex justify-between items-center p-6">
            <div class="text-2xl font-bold andika-font ml-20 flex items-center">
                <div class="w-2 h-8 bg-gradient-to-b from-indigo-500 to-purple-600 mr-3"></div>
                BERITA
            </div>
            <div class="flex items-center space-x-2 inconsolata-font mr-40">
                <span onclick="window.location.href='/'" class="cursor-pointer hover:text-indigo-300 transition duration-300">DASHBOARD</span>
                <i class="fas fa-chevron-right text-indigo-400"></i>
                <span class="text-indigo-300">BERITA</span>
            </div>
        </div>
    </div>

    <!-- Konten utama dengan layout yang diperbarui -->
    <div class="relative w-full p-8 mx-auto flex items-start justify-center min-h-screen pt-4">
        <div class="absolute inset-0 w-full h-full" style="background-image: url('{{ asset('img/rev-bg2.png') }}'); background-size: cover; background-position: center; background-attachment: fixed;"></div>
        <div class="absolute inset-0 bg-black opacity-80 z-0"></div>
        <main class="container mx-auto py-6 relative z-10 rounded-lg max-w-5xl">
            <div class="flex flex-col justify-center gap-6">
                <!-- Konten Utama Berita -->
                <div class="w-full p-3 animate-fade-in">
                    <div class="news-content-container p-6">
                        <!-- Judul -->
                        <h1 class="text-3xl judson-font font-bold text-center text-white news-title animate-fade-in">
                            {{ $news->title }}
                        </h1>

                        <!-- Informasi Berita dalam satu baris horizontal -->
                        <div class="flex flex-wrap justify-center items-center gap-3 mt-3 mb-4 animate-fade-in delay-100">
                            <div class="news-meta-item inline-flex">
                                <i class="fas fa-calendar-alt news-meta-icon"></i>
                                <span class="arvo-font text-white text-sm">{{ $news->created_at ? $news->created_at->format('d F Y') : 'N/A' }}</span>
                            </div>
                            <div class="news-meta-item inline-flex">
                                <i class="fas fa-user news-meta-icon"></i>
                                <span class="arvo-font text-white text-sm">Admin TAPEM</span>
                            </div>
                            <div class="news-meta-item inline-flex">
                                <i class="fas fa-tag news-meta-icon"></i>
                                <span class="arvo-font text-white text-sm">Berita Resmi</span>
                            </div>
                        </div>

                        <!-- Bagian Gambar dengan carousel yang ditingkatkan -->
                        @if($news->images)
                            <div class="animate-fade-in delay-200">
                                <div id="newsCarousel" class="carousel slide carousel-custom" data-bs-ride="carousel" data-bs-interval="5000" style="max-width: 800px; margin: 0 auto;">
                                    <div class="carousel-indicators">
                                        @foreach(json_decode($news->images) as $index => $image)
                                            <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                        @endforeach
                                    </div>
                                    <div class="carousel-inner" style="aspect-ratio: 16/9; background-color: rgba(0,0,0,0.2); border-radius: 12px; overflow: hidden; position: relative;">
                                        @foreach(json_decode($news->images) as $index => $image)
                                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" style="height: 100%;">
                                                <div style="height: 100%; display: flex; align-items: center; justify-content: center; padding: 15px;">
                                                    <img src="{{ asset('storage/' . $image) }}" class="d-block shadow-lg" alt="News Image {{ $index + 1 }}" style="height: auto; width: auto; max-height: 450px; max-width: 95%; object-fit: contain; border-radius: 8px; transition: transform 0.5s ease;">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        @endif

                        <!-- Konten Berita -->
                        <div class="news-content text-white mt-6 animate-fade-in delay-300" style="font-size: 1rem;">
                            {!! nl2br(e($news->content)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @include('layouts.footer')
</body>
</html>

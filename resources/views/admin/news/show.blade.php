<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $news->title }} - Tata Pemerintahan Kota Semarang</title>
    <link rel="icon" type="image/png" href="{{ asset('img/rel.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <div class="bg-black text-white" style="margin-top: 200px;">
        <div class="flex justify-between items-center p-4">
            <div class="text-2xl font-bold andika-font ml-20">BERITA</div>
            <div class="flex items-center space-x-1 inconsolata-font mr-40">
                <span onclick="window.location.href='/'" class="cursor-pointer">DASHBOARD</span>
                <i class="fas fa-chevron-right"></i>
                <span>BERITA</span>
            </div>
        </div>
    </div>

    <div class="relative w-full p-12 mx-auto flex items-center justify-center min-h-screen pt-4">
        <div class="absolute inset-0 w-full h-full" style="background-image: url('{{ asset('img/rev-bg2.png') }}'); background-size: cover; background-position: center; background-attachment: fixed;"></div>
        <div class="absolute inset-0 bg-black opacity-70 z-0"></div>
        <main class="container mx-auto py-8 relative z-10 rounded-lg">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/3 mx-auto p-4">
                    <div class="relative bg-gray-800 bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-6xl text-white z-10">
                        <h1 class="text-4xl judson-font font-bold text-center">
                            {{ $news->title }}
                        </h1>
                        <div class="flex justify-center arvo-font items-center text-white mt-2">
                            <span class="mr-2">
                                <i class="fas fa-calendar-alt mr-1"></i>
                                {{ $news->created_at ? $news->created_at->format('d F Y') : 'N/A' }}
                            </span>
                            <span class="mr-2">|</span>
                            <span><i class="fas fa-user mr-1"></i>tapem</span>
                        </div>

                        @if($news->images)
                        <div id="newsCarousel" class="carousel slide mt-4" data-bs-ride="carousel" style="max-width: 800px; margin: 0 auto;">
                            <div class="carousel-indicators">
                                @foreach(json_decode($news->images) as $index => $image)
                                    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                @endforeach
                            </div>
                            <div class="carousel-inner rounded-lg" style="aspect-ratio: 16/9;">
                                @foreach(json_decode($news->images) as $index => $image)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <div style="height: 100%; display: flex; align-items: center; justify-content: center;">
                                            <img src="{{ asset('storage/' . $image) }}" class="d-block" alt="News Image {{ $index + 1 }}" style="max-height: 100%; max-width: 100%; object-fit: cover;">
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
                        @endif

                        <div class="text-2xl inconsolata-font mt-4 text-justify">
                            {!! nl2br(e($news->content)) !!}
                        </div>

                    </div>
                </div>
            </div>

        </main>
    </div>

    @include('layouts.footer')

    <script>
        // Pastikan efek hover pada logo di footer berfungsi dengan benar
        document.addEventListener('DOMContentLoaded', function() {
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
</body>
</html>

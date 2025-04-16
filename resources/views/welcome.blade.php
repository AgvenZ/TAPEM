<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tata Pemerintahan Kota Semarang</title>
    <link rel="icon" type="image/png" href="img/rel.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Judson:wght@700&family=Inconsolata:wght@400&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <style>
        .headline-font {
  font-family: 'Playfair Display', serif;
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
        /* CSS untuk navbar normal */
        header.sticky {
            transition: all 0.5s ease-in-out;
        }

        /* CSS untuk navbar yang diperkecil */
        header.shrink {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        header.shrink .container {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        header.shrink img {
            height: 60px; /* Ubah ukuran logo */
            width: 200px; /* Ubah ukuran logo */
        }

        header.shrink .text-lg {
            font-size: 1rem; /* Ubah ukuran font */
        }

        header.shrink .inconsolata-font {
            font-size: 1rem; /* Ubah ukuran font */
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
        .slideshow-container {
            position: relative;
            width: 100%;
            height: 288px;
        }
        .slideshow-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
        .no-outline:focus {
            outline: none;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 2s ease-out, transform 2s ease-out;
        }
        /* Gaya saat cursor berada di atas teks */
.hover-underline:hover {
    text-decoration: underline; /* Menampilkan underline saat hover */
}
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .slide-in {
            opacity: 0;
            transform: translateX(-100%);
            transition: opacity 1.4s ease-out, transform 1.4s ease-out;
        }
        .slide-in.visible {
            opacity: 1;
            transform: translateX(0);
        }
        .zoom-in {
            opacity: 0;
            transform: scale(0.8);
            transition: opacity 1.8s ease-out, transform 1.8s ease-out;
        }
        .zoom-out {
            opacity: 0;
            transform: scale(0.8);
            transition: opacity 1.4s ease-out, transform 1.4s ease-out;
        }
        .zoom-in.visible {
            opacity: 1;
            transform: scale(1);
        }
        .zoom-out.visible {
            opacity: 1;
            transform: scale(1);
        }
        .card-transition {
            transition: transform 2s ease, box-shadow 2s ease;
        }

        .card-transition:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .card-transition:active {
            transform: scale(0.95);
        }

        /* Animasi muncul bertahap */
        .card {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 1s ease, transform 1s ease;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
        }
        .card.visible {
            opacity: 1;
            transform: scale(1);
        }
    </style>
<body class="font-sans" onclick="closeAllDropdowns(event)">
    <header class="sticky top-0 z-50 border-b bg-white">
        <div class="container mx-auto flex justify-between items-center py-4">
            <div class="flex items-center">
                <a href="/" onclick="refreshPage(event)">
                    <img src="img/logo-pemkot.png" alt="Logo TAPEM" class="h-20 w-80 mr-4" />
                </a>
                <script>
                    function refreshPage(event) {
                        event.preventDefault();
                        location.reload();
                        window.scrollTo(0, 0); // Scroll ke bagian paling atas
                    }
                </script>
            </div>
            <div class="hidden md:flex items-center space-x-6 inconsolata-font">
                <a class="text-black text-lg" href="/tentang">TENTANG</a>
                <span class="text-lg">|</span>
                <a class="text-black text-lg" href="/regulasi">REGULASI</a>
                <span class="text-lg">|</span>
                <a class="text-black text-lg" href="/kontak">KONTAK</a>
                <div class="flex flex-col items-center">
                    <a class="text-black text-lg flex items-center" href="#">SLIDESHOW</a>
                    <label class="relative inline-flex items-center cursor-pointer mt-2">
                        <input checked class="sr-only peer no-outline" id="slideshowToggle" onclick="toggleSlideshow()" type="checkbox" />
                        <div class="w-12 h-7 bg-gray-400 rounded-full peer peer-focus:ring-0 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-[#760000]"></div>
                    </label>
                </div>
            </div>
            <div class="md:hidden flex items-center space-x-6 inconsolata-font">
                <a class="text-black text-lg" href="/regulasi">REGULASI</a>
                <span class="text-lg">|</span>
                <a class="text-black text-lg" href="/kontak">KONTAK</a>
                <div class="flex flex-col items-center">
                    <a class="text-black text-lg flex items-center" href="#">SLIDESHOW</a>
                    <label class="relative inline-flex items-center cursor-pointer mt-2">
                        <input checked class="sr-only peer no-outline" id="slideshowToggleMobile" onclick="toggleSlideshowMobile()" type="checkbox" />
                        <div class="w-12 h-7 bg-gray-200 rounded-full peer peer-focus:ring-0 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-[#760000]"></div>
                    </label>
                </div>
            </div>
        </div>
        <nav class="bg-[#FEFF01] border-t border-b border-gray-600">
            <div class="container mx-auto flex justify-between items-center py-3">
                <div class="flex items-center space-x-6 inconsolata-font">
                    <div class="relative">
                        <button class="text-black text-lg" onclick="toggleDropdown(event, 'profilDropdown')">PROFIL <i class="fas fa-caret-down"></i></button>
                        <div class="absolute bg-gray-800 shadow-lg mt-3 group-hover:block dropdown-content min-w-[200px]" id="profilDropdown">
                            <ul class="py-2 text-sm">
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/strukturorganisasi">STRUKTUR ORGANISASI</a></li>
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/sdm">SDM</a></li>
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/visi-misi">VISI DAN MISI</a></li>
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/tugas-fungsi">TUGAS DAN FUNGSI</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative">
                        <button class="text-black text-lg" onclick="toggleDropdown(event, 'programDropdown')">PROGRAM & KEGIATAN <i class="fas fa-caret-down"></i></button>
                        <div class="absolute bg-gray-800 shadow-lg mt-3 dropdown-content min-w-[250px]" id="programDropdown">
                            <ul class="py-2 text-sm">
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/pembinaan-administrasi-kecamatan-dan-kelurahan">PEMBINAAN ADMINISTRASI KECAMATAN DAN KELURAHAN</a></li>
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="evaluasi-kinerja-kecamatan-dan-kelurahan">EVALUASI KINERJA KECAMATAN DAN KELURAHAN</a></li>
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/fasilitasi-pengumuman-relaas">FASILITASI PENGUMUMAN RELAAS</a></li>
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/pelayanan-terpadu-akhir-pekan-dan-malam-hari">PELAYANAN TERPADU AKHIR PEKAN DAN MALAM HARI</a></li>
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/penamaan-dan-pendataan-rupa-bumi">PENAMAAN DAN PENDATAAN RUPA BUMI</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative">
                        <button class="text-black text-lg" onclick="toggleDropdown(event, 'informasiDropdown')">INFORMASI & LAYANAN <i class="fas fa-caret-down"></i></button>
                        <div class="absolute bg-gray-800 shadow-lg mt-3 dropdown-content min-w-[200px]" id="informasiDropdown">
                            <ul class="py-2 text-sm">
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/berita">BERITA</a></li>
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/e-magang">E-MAGANG</a></li>
                                <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/daftar-kecamatan-kelurahan">DAFTAR KECAMATAN/KELURAHAN</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-envelope text-red-600 text-lg"></i>
                    <a class="text-red-600 inconsolata-font text-lg hover-underline" href="mailto:tapemkotasmg@gmail.com">tapemkotasmg@gmail.com</a>
                </div>
            </div>
        </nav>
    </header>
</body>
    <div class="slideshow-container relative z-0" id="slideshowContainer">
        @php
            $slideshows = \App\Models\Slideshow::where('active', true)->orderBy('order')->get();
        @endphp
        @if($slideshows->count() > 0)
            <img alt="{{ $slideshows->first()->title }}" class="slideshow-image" id="slideshowImage" src="{{ asset('storage/' . $slideshows->first()->image_path) }}"/>
            <a class="prev" onclick="changeSlide(-1)">❮</a>
            <a class="next" onclick="changeSlide(1)">❯</a>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    let slideIndex = 0;
                    const slides = @json($slideshows->map(function($slideshow) {
                        return [
                            'image' => asset('storage/' . $slideshow->image_path),
                            'title' => $slideshow->title
                        ];
                    }));

                    function changeSlide(n) {
                        slideIndex += n;
                        if (slideIndex >= slides.length) slideIndex = 0;
                        if (slideIndex < 0) slideIndex = slides.length - 1;
                        const image = document.getElementById('slideshowImage');
                        if(image) {
                            image.src = slides[slideIndex].image;
                            image.alt = slides[slideIndex].title;
                        }
                    }

                    // Auto change slide every 5 seconds
                    if(slides.length > 0) {
                        setInterval(() => changeSlide(1), 5000);
                    }
                });
            </script>
        @endif
    </div>
    <div class="bg-red-900 flex items-center justify-center min-h-screen relative py-20" id="contentContainer">
        <img alt="Batik pattern background" class="absolute inset-0 w-full h-full object-cover opacity-100" height="1080" src="img/background1.png" width="1920"/>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-5xl font-bold mb-10 arvo-font text-center fade-in">BAGIAN TATA PEMERINTAHAN</h1>
            <div class="inline-block rounded-full overflow-hidden mb-8 shadow-[0_25px_50px_-12px_rgba(0,0,0,0.6)] zoom-in">
                <!-- Menghapus border dan border-white -->
                <img alt="Portrait of Yoga Tamtomo, S.STP" class="w-64 h-80 object-cover" height="400" src="img/kabag.png" width="300"/>
            </div>
            <h2 class="text-6xl font-bold mt-8 inconsolata-font slide-in">YOGA TAMTOMO, S.STP</h2>
            <p class="text-2xl inconsolata-font slide-in">Kepala Bagian Tata Pemerintahan</p>
        </div>
    </div>
    <div class="bg-red-600 flex items-center justify-center min-h-screen relative py-16" id="contentContainer">
        <img alt="Batik pattern background" class="absolute inset-0 w-full h-full object-cover opacity-1000" src="img/background5.png"/>
        <div class="relative z-10 text-center text-white px-4 w-full">
            <h1 class="text-2xl inconsolata-font"></h1>
            <div class="relative container mx-auto py-8 max-w-screen-lg">
                <div class="flex flex-col md:flex-row justify-center items-center gap-4 w-full">
                    <div class="bg-white p-6 shadow-lg w-3/4 md:w-5/6 lg:w-2/3 zoom-out">
                        <div class="text-center inconsolata-font text-black text-2xl mb-4">Alamat Kantor Bagian</div>
                        <div class="text-center inconsolata-font text-black text-2xl mb-4">Tata Pemerintahan Kota Semarang</div>
                        <iframe allowfullscreen="" height="400" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.229282343342!2d110.41032621415985!3d-6.982247794955957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ba87e15e37b%3A0xb6685e7f890af6d9!2sBalai%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1677037557628!5m2!1sid!2sid" style="border:0;" width="100%"></iframe>
                    </div>
                    <div class="bg-white p-6 shadow-lg w-3/4 md:w-5/6 lg:w-2/3 zoom-out">
                        <div class="text-center inconsolata-font text-black text-2xl mb-4">Channel Youtube Bagian</div>
                        <div class="text-center inconsolata-font text-black text-2xl mb-4">Tata Pemerintahan Kota Semarang</div>
                        <div class="panel-body" style="padding: 0;">
                            <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" frameborder="0" height="400" src="https://www.youtube.com/embed/lz2e61sfxO0" title="YouTube video player" width="100%"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <body class="bg-black text-white">
        <div class="relative min-h-screen flex items-center justify-center">
            <div class="absolute inset-0 w-full h-full">
                <img alt="Batik pattern background" class="absolute inset-0 w-full h-full object-cover opacity-100" height="1080" src="img/background3.png" width="1920"/>
            </div>
                <!-- Konten -->
                <div class="relative container mx-auto py-8 px-4">
                  <div class="text-black p-6 md:p-10 rounded-xl max-w-3xl mx-auto">
                    <h1 class="text-2xl md:text-6xl font-semibold mb-2 headline-font text-center zoom-in">
                        <i class="fas fa-newspaper text-yellow-400 mr-2 text-base md:text-6xl"></i>
                        BERITA TERBARU
                      </h1>
                    <div class="text-4xl md:text-3xl inconsolata-font font-bold text-red-700 italic text-center zoom-in" style="animation-delay: 0.3s;">
                        BAGIAN TATA PEMERINTAHAN
                      </div>
                    <div class="w-24 h-1 bg-yellow-300 mx-auto mt-4 mb-2 rounded-full fade-up" style="animation-delay: 0.5s;"></div>
                  </div>
                <div class="flex justify-center gap-8 flex-wrap md:flex-nowrap">
                    @foreach($latestNews as $news)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden cursor-pointer card-transition card hover:scale-105 transition-transform duration-300 ease-in-out h-full flex flex-col" onclick="window.location.href='{{ route('news.show', $news->slug) }}'">
                        @if($news->images)
                            @php
                                $images = json_decode($news->images, true);
                                $imagePath = is_array($images) && count($images) > 0 ? $images[0] : '';
                                $imagePath = str_replace('public/', '', $imagePath);
                            @endphp
                            @if($imagePath)
                                <div class="aspect-w-16 aspect-h-9">
                                    <img alt="{{ $news->title }}" class="w-full h-48 sm:h-56 object-cover" src="{{ asset('storage/' . $imagePath) }}"/>
                                </div>
                            @endif
                        @endif
                        <div class="p-4 sm:p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <span class="bg-red-600 text-white text-xs sm:text-sm font-bold px-2 sm:px-3 py-1 rounded inline-block">WARTA TAPEM</span>
                                <h2 class="text-lg sm:text-xl font-bold mt-3 line-clamp-2">{{ $news->title }}</h2>
                                <p class="text-gray-600 mt-3 text-sm sm:text-base line-clamp-3">{{ Str::limit(strip_tags($news->content), 150) }}</p>
                            </div>
                            <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer text-sm sm:text-base hover:text-red-700" href="{{ route('news.show', $news->slug) }}">Read more</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <br>
                <br>
            </div>
        </div>
    </body>
    <div class="flex justify-center items-center py-10 bg-black">
        <div class="flex items-center mx-8">
          <img alt="Semarang Kota logo and text" class="h-20" src="img/logo1.png"/>
        </div>
        <div class="flex items-center mx-8">
          <img alt="Semarang Smart City logo and text" class="h-20" src="img/logo2.png"/>
        </div>
        <div class="flex items-center mx-8 bg-white text-black p-4">
          <img alt="Satu Data Kota Semarang logo and text" class="h-20" src="img/logo3.png"/>
        </div>
        <div class="flex items-center mx-8">
          <img alt="PPID logo and text" class="h-20" src="img/logo4.png"/>
        </div>
      </div>
      <footer class="text-center py-4 bg-white text-black text-lg inconsolata-font">
        <p>
          © 2025 Bagian Tata Pemerintahan, Setda Kota Semarang All rights reserved
        </p>
      </footer>
        <script>
            var slideIndex = 0;
            var slides = @json($slideshows->map(function($slideshow) {
                return asset('storage/' . $slideshow->image_path);
            }));

            function changeSlide(n) {
                slideIndex += n;
                if (slideIndex >= slides.length) {
                    slideIndex = 0;
                } else if (slideIndex < 0) {
                    slideIndex = slides.length - 1;
                }
                document.getElementById("slideshowImage").src = slides[slideIndex];
            }

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

             // Mendapatkan elemen header
        const header = document.querySelector('header');

// Fungsi untuk menangani scroll
function handleScroll() {
    if (window.scrollY > 50) { // Ubah nilai 50 sesuai kebutuhan
        header.classList.add('shrink');
    } else {
        header.classList.remove('shrink');
    }
}

// Menambahkan event listener untuk scroll
window.addEventListener('scroll', handleScroll);

            function toggleSlideshow() {
    var slideshowContainer = document.getElementById("slideshowContainer");
    var contentContainer = document.getElementById("contentContainer");
    var slideshowToggle = document.getElementById("slideshowToggle");

    if (slideshowToggle.checked) {
        slideshowContainer.style.display = "block";
        contentContainer.classList.add("min-h-screen");
        contentContainer.classList.remove("py-16");
    } else {
        slideshowContainer.style.display = "none";
        contentContainer.classList.remove("min-h-screen");
        contentContainer.classList.add("py-16");
    }
    document.querySelector('.hover-underline').addEventListener('mouseenter', function() {
    this.style.textDecoration = 'underline';
});

document.querySelector('.hover-underline').addEventListener('mouseleave', function() {
    this.style.textDecoration = 'none';
});

    // Re-observe elements to trigger animations
    document.querySelectorAll('.fade-in, .slide-in, .zoom-out, .zoom-in').forEach(element => {
        observer.observe(element);
    });
    }

    function toggleSlideshowMobile() {
    var slideshowContainer = document.getElementById("slideshowContainer");
    var contentContainer = document.getElementById("contentContainer");
    var slideshowToggleMobile = document.getElementById("slideshowToggleMobile");

    if (slideshowToggleMobile.checked) {
        slideshowContainer.style.display = "block";
        contentContainer.classList.add("min-h-screen");
        contentContainer.classList.remove("py-16");
    } else {
        slideshowContainer.style.display = "none";
        contentContainer.classList.remove("min-h-screen");
        contentContainer.classList.add("py-16");
    }

    // Re-observe elements to trigger animations
    document.querySelectorAll('.fade-in, .slide-in, .zoom-out, .zoom-in').forEach(element => {
        observer.observe(element);
    });
    }

    window.onload = function() {
    document.getElementById("slideshowToggle").checked = true;
    toggleSlideshow();
    };

    const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        } else {
            entry.target.classList.remove('visible'); // Optional: Remove visible class if element is not in viewport
        }
    });
    }, {

    threshold: 0.1 // Adjust this value as needed
    });

    document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Saat card masuk ke viewport
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, index * 200); // Stagger the animation
            } else {
                // Saat card keluar dari viewport
                entry.target.classList.remove('visible');
            }
        });
    }, {
        threshold: 0.1 // Trigger saat 30% card terlihat
    });

    cards.forEach((card) => {
        observer.observe(card); // Mulai mengamati setiap card
    });
});

    document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.fade-in, .slide-in, .zoom-out, .zoom-in').forEach(element => {
        observer.observe(element);
    });
    });
            window.onload = function() {
                document.getElementById("slideshowToggle").checked = true;
                toggleSlideshow();
            };
        </script>
    </body>
    </html>

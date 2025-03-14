<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tata Pemerintahan Kota Semarang</title>
    <link rel="icon" type="image/png" href="http://localhost/TAPEM/tapem/resources/img/rel.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
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
        .andika-font {
            font-family: 'Andika New Basic', sans-serif;
        }
        .carousel {
            position: relative;
        }
        .carousel-inner {
            overflow: hidden;
            position: relative;
            width: 100%;
        }
        .carousel-item {
            display: none;
            position: absolute;
            width: 100%;
            transition: transform 0.5s ease;
        }
        .carousel-item.active {
            display: block;
            position: relative;
        }
        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            cursor: pointer;
        }
        .carousel-control-prev {
            left: 10px;
        }
        .carousel-control-next {
            right: 10px;
        }
        .carousel-indicators {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .carousel-indicators div {
            width: 10px;
            height: 10px;
            background-color: gray;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }
        .carousel-indicators .active {
            background-color: red;
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
        .hover-underline:hover {
    text-decoration: underline; /* Menampilkan underline saat hover */
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
                    <img src="http://localhost/TAPEM/tapem/resources/img/logo-pemkot.png" alt="Logo TAPEM" class="h-20 w-80 mr-4" />
                </a>
                <script>
                    function refreshPage(event) {
    event.preventDefault();
    window.location.href = "/"; // Arahkan ke beranda
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
    <div class="bg-black text-white">
        <div class="flex justify-between items-center p-4">
            <div class="text-2xl font-bold andika-font ml-20">BERITA</div>
            <div class="flex items-center space-x-1 inconsolata-font ml-auto mr-16">
                <span onclick="window.location.href='/'" class="cursor-pointer">BERANDA</span>
                <i class="fas fa-chevron-right"></i>
                <span>BERITA</span>
            </div>
        </div>
        <body class="bg-gray-100">
            <div class="relative w-full p-12 mx-auto flex items-center justify-center min-h-screen pt-6">
             <img alt="Background image of a cityscape with buildings and a clear sky" class="absolute inset-0 w-full h-full object-cover z-0" height="1080" src="http://localhost/TAPEM/tapem/resources/img/background4.png" width="1920"/>
             <main class="container mx-auto py-8 relative z-10 rounded-lg">
              <div class="flex flex-col md:flex-row">
               <div class="md:w-2/3 mx-auto p-4">
                <div class="relative bg-gray-800 bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-6xl text-white z-10">
                <h1 class="text-4xl judson-font font-bold text-center">
                    PEMENANG LOMBA DESAIN LOGO 477 KOTA SEMARANG
                </h1>
                <div class="flex justify-center arvo-font items-center text-white mt-2">
                 <span class="mr-2">
                    2024-02-01
                 </span>
                 <span class="mr-2">
                  |
                 </span>
                 <span>
                  tapem
                 </span>
                </div>
                <div class="carousel mt-4">
                 <div class="carousel-inner">
                  <div class="carousel-item active">
                   <img alt="Wali Kota dan Wakil Wali Kota Semarang sedang memberikan pidato" class="w-full" height="300" src="http://localhost/TAPEM/tapem/resources/img/berita4.png" width="600"/>
                  </div>
                  <div class="carousel-item">
                   <img alt="Wali Kota dan Wakil Wali Kota Semarang sedang berjabat tangan" class="w-full" height="300" src="http://localhost/TAPEM/tapem/resources/img/berita4-2.jpg" width="600"/>
                  </div>
                  <div class="carousel-item">
                   <img alt="Wali Kota dan Wakil Wali Kota Semarang bersama tamu undangan" class="w-full" height="300" src="http://localhost/TAPEM/tapem/resources/img/berita4-3.jpg" width="600"/>
                  </div>
                 </div>
                 <div class="carousel-control-prev" onclick="prevSlide()">
                  ❮
                 </div>
                 <div class="carousel-control-next" onclick="nextSlide()">
                  ❯
                 </div>
                 <div class="carousel-indicators">
                  <div class="active" onclick="goToSlide(0)">
                  </div>
                  <div onclick="goToSlide(1)">
                  </div>
                  <div onclick="goToSlide(2)">
                  </div>
                 </div>
                </div>
                <p class="text-2xl inconsolata-font mt-4 text-justify">
                 <i>
                    SEMARANG, 1 Februari 2024
                 </i>
                 - Muhammad Iqbal Febryan Kuningan, Jawa Barat, dinobatkan sebagai pemenang Lomba Desain Logo 477 Kota Semarang. Logo karyanya terpilih dari 500 desain yang masuk ke Dinas Komunikasi dan Informatika (Diskominfo) Kota Semarang.
                </p>
                <p class="text-2xl inconsolata-font mt-4 text-justify">
                 Logo karya Iqbal menampilkan berbentuk menyerupai tangan mengepal yang mengarah keatas, logo ini mengandung makna semangat dan dedikasi bersama dalam Upaya memajukan Kota Semarang menuju Tingkat kejayaan dan kemakmuran yang lebih tinggi.
                </p>
                <p class="text-2xl inconsolata-font mt-4 text-justify">
                    Pemenang lomba desain logo 477 Kota Semarang berhak mendapatkan hadiah berupa uang tunai sebesar Rp7,5 juta. Selain itu, logo karyanya akan digunakan sebagai logo resmi peringatan HUT ke-477 Kota Semarang yang akan berlangsung pada tanggal 25 Mei 2024.
                </p>
                <p class="text-2xl inconsolata-font mt-4 text-justify">
                    Pemerintah Kota Semarang mengapresiasi antusiasme masyarakat dalam mengikuti lomba desain logo 477 Kota Semarang. Lomba tersebut bertujuan untuk mengajak masyarakat berpartisipasi dalam memeriahkan peringatan HUT Kota Semarang.
                </p>
                <p class="text-2xl inconsolata-font mt-4">
                    Logo 477 Kota Semarang dapat diunduh melalui laman
                    <a href="https://drive.google.com/drive/u/0/folders/1uFLgtSWVBTjA17wo-908r8JioZrTAxDH" target="_blank">
                        <span class="text-2xl inconsolata-font mt-4 text-justify text-red-500 hover:underline">smg.city/logo477kotasemarang</span>
                    </a>
                </p>

                <div class="flex mt-4 justify-center">
                 <button class="bg-blue-600 text-white px-4 py-2 rounded mr-2" onclick="shareOnFacebook()">
                  <i class="fab fa-facebook-f">
                  </i>
                  Share
                 </button>
                 <button class="bg-black text-white px-4 py-2 rounded mr-2" onclick="shareOnX()">
                  <img alt="X logo" class="inline w-4 h-4 mr-1" src="https://img.freepik.com/free-vector/new-2023-twitter-logo-x-icon-design_1017-45418.jpg"/>
                  Share
                 </button>
                 <button class="bg-green-600 text-white px-4 py-2 rounded" onclick="shareOnWhatsApp()">
                  <i class="fab fa-whatsapp">
                  </i>
                  Share
                 </button>
                </div>
               </div>
              </div>
             </main>
            </div>
        </div>
       </div>
      </div>
     </div>
      <div class="flex justify-center items-center py-10 bg-black">
       <div class="flex items-center mx-8">
          <img alt="Semarang Kota logo and text" class="h-20" src="http://localhost/TAPEM/tapem/resources/img/logo1.png"/>
      </div>
      <div class="flex items-center mx-8">
        <img alt="Semarang Smart City logo and text" class="h-20" src="http://localhost/TAPEM/tapem/resources/img/logo2.png"/>
      </div>
      <div class="flex items-center mx-8 bg-white text-black p-4">
        <img alt="Satu Data Kota Semarang logo and text" class="h-20" src="http://localhost/TAPEM/tapem/resources/img/logo3.png"/>
      </div>
      <div class="flex items-center mx-8">
        <img alt="PPID logo and text" class="h-20" src="http://localhost/TAPEM/tapem/resources/img/logo4.png"/>
       </div>
      </div>
      <footer class="text-center py-4 bg-white text-black text-lg inconsolata-font">
       <p>
        © 2025 Bagian Tata Pemerintahan, Setda Kota Semarang All rights reserved
       </p>
      </footer>
    <script>
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

let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const indicators = document.querySelectorAll('.carousel-indicators div');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
                slide.style.transform = `translateX(${(i - index) * 100}%)`;
            });
            indicators.forEach((indicator, i) => {
                indicator.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        function goToSlide(index) {
            currentSlide = index;
            showSlide(currentSlide);
        }

        document.addEventListener('DOMContentLoaded', () => {
            showSlide(currentSlide);
        });

        function shareOnFacebook() {
            const url = window.location.href;
            const facebookShareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
            window.open(facebookShareUrl, '_blank');
        }

        function shareOnX() {
            const url = window.location.href;
            const text = "Check out this article!";
            const xShareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(text)}`;
            window.open(xShareUrl, '_blank');
        }

        function shareOnWhatsApp() {
            const url = window.location.href;
            const text = "Check out this article!";
            const whatsappShareUrl = `https://api.whatsapp.com/send?text=${encodeURIComponent(text)}%20${encodeURIComponent(url)}`;
            window.open(whatsappShareUrl, '_blank');
        }

// Menambahkan event listener untuk scroll
window.addEventListener('scroll', handleScroll);
    </script>
</body>
</html>

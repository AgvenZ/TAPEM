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
            box-shadow: 0 10px 15px rgb(255, 255, 255);
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
                <div class="flex flex-col items-center">
                </div>
            </div>
            <div class="md:hidden flex items-center space-x-6 inconsolata-font">
                <a class="text-black text-lg" href="/regulasi">REGULASI</a>
                <span class="text-lg">|</span>
                <a class="text-black text-lg" href="/kontak">KONTAK</a>
                <div class="flex flex-col items-center">
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
                <div class="flex items-center space-x-3 pr-7">
                    <i class="fas fa-envelope text-red-600 text-lg"></i>
                    <a class="text-red-600 inconsolata-font text-lg hover-underline" href="mailto:tapemkotasmg@gmail.com">tapemkotasmg@gmail.com</a>
                </div>
            </div>
        </nav>
    </header>
</body>
</body>
<div class="bg-black text-white">
    <div class="flex justify-between items-center p-4">
        <div class="text-2xl font-bold andika-font ml-20">BERITA</div>
        <div class="flex items-center space-x-1 inconsolata-font ml-auto mr-40">
            <span onclick="window.location.href='/'" class="cursor-pointer">INFORMASI & LAYANAN</span>
            <i class="fas fa-chevron-right"></i>
            <span>BERITA</span>
        </div>
    </div>
</div>
<body class="bg-black text-white">
    <div class="relative min-h-screen flex items-center justify-center">
        <div class="absolute inset-0 w-full h-full">
            <img alt="Background image" class="w-full h-full object-cover" src="img/background4.png"/>
        </div>
        <div class="relative container mx-auto py-8">
            <br>
            <br>
            <h1 class="text-4xl font-bold mb-7 arvo-font text-white text-center zoom-out">
                <i class="fas fa-newspaper text-yellow-500 mr-2 zoom-out"></i>
                <br>
                KUMPULAN BERITA
                <br> BAGIAN TATA PEMERINTAHAN
                <span class="absolute left-0 bottom-0 w-full h-1 bg-yellow-500 transform scale-x-0 transition-transform duration-500 ease-in-out origin-left"></span>
            </h1>
            <br>
            <div class="flex justify-center gap-8 flex-wrap md:flex-nowrap">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3 cursor-pointer card-transition card hover:scale-105 transition-transform duration-300 ease-in-out" onclick="window.location.href='berita1'">
                    <img alt="Two officials standing side by side" class="w-full h-64 object-cover" src="img/berita1.png"/>
                    <div class="p-6">
                        <span class="bg-red-600 text-white text-sm font-bold px-3 py-1 rounded">WARTA TAPEM</span>
                        <h2 class="text-xl font-bold mt-3">Doa Bersama Dan Serah Terima Jabatan Wali Kota Dan Wakil Wali Kota Semarang Periode 2025-2030</h2>
                        <p class="text-gray-600 mt-3">Semarang, 20 Februari 2025 – Pemerintah Kota Semarang menggelar acara doa bersama dan serah terima jabatan...</p>
                        <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer" href="berita1">Read more</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3 cursor-pointer card-transition card card hover:scale-105 transition-transform duration-300 ease-in-out" onclick="window.location.href='berita2'">
                    <img alt="People attending a seminar" class="w-full h-64 object-cover" src="img/berita2.png"/>
                    <div class="p-6">
                        <span class="bg-red-600 text-white text-sm font-bold px-3 py-1 rounded">WARTA TAPEM</span>
                        <h2 class="text-xl font-bold mt-3">Staff Bagian Tata Pemerintahan Setda Kota Semarang Ikuti Bimtek Penulisan Berbasis Kearifan Lokal 2025</h2>
                        <p class="text-gray-600 mt-3">Semarang – Dalam rangka meningkatkan kompetensi pegawai, staff dari Bagian Tata Pemerintahan Setda Kota Semarang mengikuti...</p>
                        <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer" href="berita2">Read more</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3 cursor-pointer card-transition card card hover:scale-105 transition-transform duration-300 ease-in-out" onclick="window.location.href='berita3'">
                    <img alt="People attending a seminar" class="w-full h-64 object-cover" src="img/berita3.png"/>
                    <div class="p-6">
                        <span class="bg-red-600 text-white text-sm font-bold px-3 py-1 rounded">WARTA TAPEM</span>
                        <h2 class="text-xl font-bold mt-3">Rapat Sinkronisasi Data Kependudukan: Menuju Administrasi Yang Akurat</h2>
                        <p class="text-gray-600 mt-3">Semarang, (18/01/2025) – Dalam rangka meningkatkan akurasi dan kualitas administrasi kependudukan, Pemerintah Kota Semarang melalui Bagian Tata Pemerintahan...</p>
                        <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer" href="berita3">Read more</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="flex justify-center gap-8 flex-wrap md:flex-nowrap">
                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3 cursor-pointer card-transition card hover:scale-105 transition-transform duration-300 ease-in-out" onclick="window.location.href='berita4'">
                    <img alt="People attending a seminar" class="w-full h-64 object-cover" src="img/berita4.png"/>
                    <div class="p-6">
                        <span class="bg-red-600 text-white text-sm font-bold px-3 py-1 rounded">WARTA TAPEM</span>
                        <h2 class="text-xl font-bold mt-3">PEMENANG LOMBA DESAIN LOGO 477 KOTA SEMARANG</h2>
                        <p class="text-gray-600 mt-3">SEMARANG, 1 Februari 2024 - Muhammad Iqbal Febryan Kuningan, Jawa Barat, dinobatkan sebagai pemenang Lomba Desain Logo 477 Kota Semarang. Logo karyanya terpilih dari 500 desain yang masuk ke Dinas Komunikasi...</p>
                        <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer" href="berita4">Read more</a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3 cursor-pointer card-transition card card hover:scale-105 transition-transform duration-300 ease-in-out" onclick="window.location.href='berita5'">
                    <img alt="People attending a seminar" class="w-full h-64 object-cover" src="img/berita5.png"/>
                    <div class="p-6">
                        <span class="bg-red-600 text-white text-sm font-bold px-3 py-1 rounded">WARTA TAPEM</span>
                        <h2 class="text-xl font-bold mt-3">Warga Tegalsari Apresiasi Program Mbak Ita Sapa Warga</h2>
                        <p class="text-gray-600 mt-3">Semarang, 8 Januari 2024 - Warga Kelurahan Tegalsari, Kecamatan Candisari, Kota Semarang, mengapresiasi program Mbak Ita Sapa Warga yang diselenggarakan oleh Pemerintah Kota...</p>
                        <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer" href="berita5">Read more</a>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3 cursor-pointer card-transition card card hover:scale-105 transition-transform duration-300 ease-in-out" onclick="window.location.href='berita6'">
                    <img alt="People attending a seminar" class="w-full h-64 object-cover" src="img/berita6.jpg"/>
                    <div class="p-6">
                        <span class="bg-red-600 text-white text-sm font-bold px-3 py-1 rounded">WARTA TAPEM</span>
                        <h2 class="text-xl font-bold mt-3">Kesempatan Magang di Bagian Tata Pemerintahan Setda Kota Semarang</h2>
                        <p class="text-gray-600 mt-3">Ingin merasakan pengalaman langsung bekerja di lingkungan pemerintahan? Inilah kesempatan emas buat kamu! Bagian Tata Pemerintahan Setda Kota Semarang membuka peluang magang bagi mahasiswa/pelajar...</p>
                        <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer" href="berita6">Read more</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="flex justify-center gap-8 flex-wrap md:flex-nowrap">
                <!-- Card 7 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3 cursor-pointer card-transition card hover:scale-105 transition-transform duration-300 ease-in-out" onclick="window.location.href='berita7'">
                    <img alt="Two officials standing side by side" class="w-full h-64 object-cover" src="img/berita7.png"/>
                    <div class="p-6">
                        <span class="bg-red-600 text-white text-sm font-bold px-3 py-1 rounded">WARTA TAPEM</span>
                        <h2 class="text-xl font-bold mt-3">Bagian Tata Pemerintahan Gelar Pembinaan Kelurahan untuk Meningkatkan Kualitas Kinerja, Data & Informasi</h2>
                        <p class="text-gray-600 mt-3">Semarang, 12 Oktober 2023 - Bagian Tata Pemerintahan Sekretariat Daerah Kota Semarang melakukan pembinaan kelurahan di beberapa kelurahan di Kota Semarang. Pembinaan tersebut dilakukan untuk meningkatkan kualitas penyusunan Laporan Evaluasi Kinerja, Penelaaha...</p>
                        <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer" href="berita7">Read more</a>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3 cursor-pointer card-transition card card hover:scale-105 transition-transform duration-300 ease-in-out" onclick="window.location.href='berita8'">
                    <img alt="People attending a seminar" class="w-full h-64 object-cover" src="img/berita8.png"/>
                    <div class="p-6">
                        <span class="bg-red-600 text-white text-sm font-bold px-3 py-1 rounded">WARTA TAPEM</span>
                        <h2 class="text-xl font-bold mt-3">Pemerintah Kota Semarang Gelar Rapat Koordinasi Kewaspadaan Wilayah terhadap Bencana Kebakaran</h2>
                        <p class="text-gray-600 mt-3">Warta Tapem - Semarang, 09 Oktober 2023 - Pemerintah Kota Semarang menggelar Rapat Koordinasi Kewaspadaan Wilayah terhadap Bencana Kebakaran pada Senin (09/7) di Situation Room  Balai Kota Semarang. Rapat ini dihadiri oleh Camat...</p>
                        <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer" href="berita8">Read more</a>
                    </div>
                </div>

                <!-- Card 9 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3 cursor-pointer card-transition card card hover:scale-105 transition-transform duration-300 ease-in-out" onclick="window.location.href='berita9'">
                    <img alt="People attending a seminar" class="w-full h-64 object-cover" src="img/berita9.png"/>
                    <div class="p-6">
                        <span class="bg-red-600 text-white text-sm font-bold px-3 py-1 rounded">WARTA TAPEM</span>
                        <h2 class="text-xl font-bold mt-3">Bagian Tata Pemerintahan Gelar Bimtek Penelaahan Nama Rupabumi Kota Semarang</h2>
                        <p class="text-gray-600 mt-3">Dalam rangka keberhasilan pelaksanaan proses dan optimalisasi pengumpulan data rupabumi di wilayah Kota Semarang, Bagian Tata Pemerintahan Sekretariat Daerah Kota Semarang melaksanakan kegiatan Bimbingan Teknis Penelaahan Nama Rupabumi...</p>
                        <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer" href="berita9">Read more</a>
                    </div>
                </div>
            </div>
            <br>
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
    var slides = [
        "img/slideshow1.png",
        "img/slideshow2.jpeg",
        "img/slideshow3.jpg"
    ];

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

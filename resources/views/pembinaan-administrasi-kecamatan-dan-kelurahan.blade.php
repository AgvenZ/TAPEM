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
        .dropdown-content a {
            color: white;
        }
        .andika-font {
            font-family: 'Andika New Basic', sans-serif;
        }
        .hover-underline:hover {
    text-decoration: underline; /* Menampilkan underline saat hover */
}
        /* CSS untuk navbar normal */
        header.sticky {
            transition: all 0.5s ease-in-out;
        }
        .transition-zoom {
    transform: scale(0.9); /* Mengecilkan gambar awal */
    transition: transform 0.5s ease-in-out, filter 0.5s ease-in-out;
    image-rendering: auto; /* Menjaga kejernihan gambar */
}

.transition-zoom:hover {
    transform: scale(1); /* Kembali ke ukuran normal saat hover */
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
    filter: contrast(1.4) saturate(1.3); /* Meningkatkan kontras dan saturasi agar lebih tajam */
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
    <div class="bg-black text-white">
        <div class="flex justify-between items-center p-4">
            <div class="text-2xl font-bold andika-font ml-20">PEMBINAAN ADMINISTRASI KECAMATAN DAN KELURAHAN</div>
            <div class="flex items-center space-x-1 inconsolata-font ml-auto mr-12">
                <span onclick="window.location.href='/'" class="cursor-pointer">PROGRAM & KEGIATAN</span>
                <i class="fas fa-chevron-right"></i>
                <div class="flex flex-col">
                    <span>PEMBINAAN ADMINISTRASI</span>
                    <span>KECAMATAN DAN KELURAHAN</span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center min-h-screen bg-cover bg-center" style="background-image: url('img/background4.png');">
        <div class="p-20 rounded-lg max-w-6xl text-white">
            <img alt="Descriptive image related to Kecamatan and Kelurahan" class="mb-8 w-full h-auto transition-zoom" height="1920" src="img/poster1.png" width="1080"/>
            <p class="text-2xl arvo-font mb-8 text-justify">
                Kecamatan memiliki peran yang sangat strategis sebagai perangkat daerah yang dalam pelaksanaan tugasnya memperoleh pelimpahan kewenangan pemerintahan dari Walikota untuk menangani sebagian urusan otonomi daerah, dan menyelenggarakan tugas umum pemerintahan. Hal ini diperkuat dengan terbitnya Peraturan Pemerintah Nomor 17 Tahun 2018 tentang Kecamatan yang kemudian ditindaklanjuti dengan Peraturan Daerah Kota Semarang Nomor 2 Tahun 2021 tentang Kecamatan.
            </p>
            <p class="text-2xl arvo-font mb-8 text-justify">
                Peraturan Pemerintah Nomor 17 Tahun 2018 tentang Kecamatan, khususnya pada Pasal 32 yang juga sejalan dengan Peraturan Daerah Kota Semarang Nomor 2 Tahun 2021 tentang Kecamatan pada Pasal 36 ayat 1 mengamanatkan bahwa pembinaan dan pengawasan Kecamatan dan Kelurahan dilaksanakan sesuai dengan peraturan perundang-undangan.
            </p>
            <p class="text-2xl arvo-font mb-8 text-justify">
                Dalam rangka menjalankan amanat tersebut untuk meningkatkan kapasitas pemerintahan Kecamatan dan Kelurahan, Pemerintah Kota Semarang melaksanakan Pembinaan Pelaksanaan Pemerintahan Kecamatan dan Kelurahan.
            </p>
            <br>
            <h2 class="andika-font text-4xl font-bold mb-4 text-justify">Pembinaan Kecamatan dan Kelurahan mencakup hal-hal berikut:</h2>
            <ol class="text-2xl arvo-font mb-8 list-decimal list-inside text-justify">
                <li>Updating informasi pada Portal Web Kecamatan dan Kelurahan</li>
                <li>Pengisian administrasi Kecamatan dan Kelurahan di Silaker</li>
                <li>Dokumen perencanaan dan kinerja</li>
                <li>Inovasi pelayanan publik</li>
                <li>Pendelegasian sebagian kewenangan Walikota kepada Camat</li>
                <li>Pelaksanaan pelayanan terpadu</li>
                <li>Pelaksanaan tugas pemerintahan</li>
                <li>Data hasil pembangunan Kelurahan secara periodik</li>
            </ol>
            <p class="text-2xl arvo-font mb-8 text-justify">
                Sebagaimana Pasal 7 pada Peraturan Daerah Kota Semarang Nomor 2 Tahun 2021 tentang Kecamatan, tugas Camat di antaranya melaksanakan pembinaan dan pengawasan penyelenggaraan pemerintahan Kelurahan.
            </p>
        </div>
    </div>
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
        <p>© 2025 Bagian Tata Pemerintahan, Setda Kota Semarang All rights reserved</p>
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

// Menambahkan event listener untuk scroll
window.addEventListener('scroll', handleScroll);
    </script>
</body>
</html>

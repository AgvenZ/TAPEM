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
        /* CSS untuk navbar normal */
        header.sticky {
            transition: all 0.5s ease-in-out;
        }
        .andika-font {
            font-family: 'Andika New Basic', sans-serif;
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

        .hover-underline:hover {
    text-decoration: underline; /* Menampilkan underline saat hover */
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
        body {
            background-color: #1a1a1a;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Andika New Basic', sans-serif;
        }
    </style>
<body class="font-sans" onclick="closeAllDropdowns(event)">
    @include('layouts.navbar2')
    <div class="bg-black text-white">
     <div class="flex justify-between items-center p-4">
      <div class="text-2xl font-bold andika-font ml-20">
       REGULASI
      </div>
      <div class="flex items-center space-x-1 inconsolata-font ml-auto mr-48">
       <span class="cursor-pointer" onclick="window.location.href='/'">
        DASHBOARD
       </span>
       <i class="fas fa-chevron-right">
       </i>
       <span>
        REGULASI
       </span>
      </div>
     </div>
    </div>
    <body class="text-white font-sans bg-cover bg-no-repeat flex items-center justify-center min-h-screen" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/rev-bg2.png'); background-attachment: fixed; background-size: cover; background-position: center;">
        <div class="text-white container mx-auto p-4 arvo-font">
            <div class="p-14 rounded-lg">
                <ol class="list-decimal list-inside text-lg md:text-xl lg:text-2xl leading-relaxed text-justify">
                    <li class="-mr-10">Undang-Undang Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik <a href="https://drive.google.com/file/d/10EzZqxgSKVA2vhXnQDm66Ai7GIeYNwZ9/view" class="text-red-500" target="_blank">(unduh)</a></li>
                    <li class="-mr-10">Undang-Undang Nomor 25 Tahun 2009 Tentang Pelayanan Publik <a href="https://drive.google.com/file/d/1qiUtCz-saM4cRkIj_ZMoi2nElP-XbLXq/view" class="text-red-500" target="_blank">(unduh)</a></li>
                    <li class="-mr-10">Undang-Undang Nomor 23 Tahun 2014 Tentang Pemerintahan Daerah <a href="https://drive.google.com/file/d/1W58F5qDfHA5tXXz4mm9Uwb6qJZZdoOuF/view" class="text-red-500" target="_blank">(unduh)</a></li>
                    <li class="-mr-10">Undang-Undang Nomor 1 Tahun 2022 Tentang Hubungan Keuangan antara Pemerintah Pusat dan</li>
                    <p class="pl-6">Pemerintah Daerah <a href="https://drive.google.com/file/d/1qIvkwlbgLU07Whhafnoak_dG7BSkErZK/view" class="text-red-500" target="_blank">(unduh)</a></p>
                    <li class="-mr-10">Peraturan Pemerintah Nomor 17 Tahun 2018 Tentang Kecamatan <a href="https://drive.google.com/file/d/1_xAYroFN4ME3Rnv6bIYwfRhRnqjeVPMX/view" class="text-red-500" target="_blank">(unduh)</a></li>
                    <li class="-mr-10">Peraturan Pemerintah Nomor 2 Tahun 2021 Tentang Penyelenggaraan Nama Rupabumi <a href="https://drive.google.com/file/d/1M6hjEUpKVeQi-1rC6EV3sRchMoMKIQmz/view" class="text-red-500" target="_blank">(unduh)</a></li>
                    <li class="-mr-10">Peraturan Daerah Nomor 2 Tahun 2021 Tentang Kecamatan <a href="https://drive.google.com/file/d/1x-vfwuL0GJ5-UTo1ws2cL33aZh_Cg3SA/view" class="text-red-500" target="_blank">(unduh)</a></li>
                    <li class="-mr-10">Peraturan Walikota Nomor 7 Tahun 2018 Tentang Pelimpahan Sebagian Kewenangan Walikota</li>
                    <p class="pl-6">Kepada Camat <a href="https://drive.google.com/file/d/1NllWKAIlM7eszuh67ffmYOgvmtteZteX/view" class="text-red-500" target="_blank">(unduh)</a></p>
                    <li class="mr-10">Peraturan Walikota Semarang Nomor 90 Tahun 2021 Tentang Kedudukan, Susunan  </li>
                    <p class="pl-6">Organisasi, Tugas Dan Fungsi Serta Sistem Kerja Sekretariat Daerah Kota Semarang <a href="https://drive.google.com/file/d/1d_dphX_dtsu8yrRf9pIgq7TgiA-Xp43B/view" class="text-red-500" target="_blank">(unduh)</a></p>
                    <li class="-ml-3">Peraturan Walikota Semarang Nomor 9 Tahun 2022 Tentang Evaluasi Kinerja Kecamatan dan</li>
                    <p class="pl-6">Kelurahan <a href="https://drive.google.com/file/d/1o3vKURhjOqhgX4TUoyxAG-VsAHNbYJQD/view" class="text-red-500" target="_blank">(unduh)</a></p>
                    <li class="-ml-2">Peraturan Walikota Nomor 25 Tahun 2022 Tentang Pedoman Pengelolaan Informasi Dan </li>
                    <p class="pl-6">Dokumentasi Publik di Lingkungan Pemerintah Daerah <a href="https://drive.google.com/file/d/1VK0d31jgbHyndcCg5q-YWT63TmUXNcCU/view" class="text-red-500" target="_blank">(unduh)</a></p>
                </ol>
            </div>
        </div>
    </body>
    @include('layouts.footer')
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

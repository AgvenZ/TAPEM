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
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hover-underline:hover {
    text-decoration: underline; /* Menampilkan underline saat hover */
}

        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .table-row {
            opacity: 0;
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

        a.arvo-font:hover {
    text-decoration: underline;
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
    @include('layouts.navbar2')
    @section('page-title', 'PENAMAAN DAN PENDATAAN RUPA BUMI')
    @section('page-subtitle', 'PENAMAAN DAN PENDATAAN RUPA BUMI')
    @section('parent-menu', 'PROGRAM & KEGIATAN')
    @include('layouts.navbar-hitam')
    <div class="flex items-center justify-center min-h-screen bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/rev-bg2.png'); background-attachment: fixed; background-size: cover; background-position: center;">
            <div class="p-35 rounded-lg max-w-6xl text-white">
                <br>
                <br>
                <div class="flex justify-center mb-8">
                    <img alt="Descriptive image related to Kecamatan and Kelurahan" class="mb-8 w-full h-auto transition-zoom" height="1920" src="img/poster5.png" width="1080"/>
                </div>
                <div class="text-center mb-8">
                    <h1 class="andika-font text-4xl font-bold mb-4 font-bold mb-4">Penamaan dan Pendataan Rupabumi</h1>
                </div>
                <div class="mb-8 text-justify">
                    <p class="text-2xl arvo-font mb-8 list-decimal list-inside mb-4 text-justify">
                        Rupabumi adalah permukaan bumi, terdiri dari objek yang dikenal (terdiri dari buatan manusia dan alami), unsur-unsur buatan manusia dan alami, serta batas-batas, yang dapat digambarkan, diukur, dan/atau diidentifikasi di lokasi tertentu di permukaan bumi. Nama Rupabumi adalah nama geografi yang diberikan pada unsur-unsur rupabumi yang berupa nama unsur buatan manusia dan alami, serta batas-batas yang ada di permukaan bumi, yang digunakan sebagai referensi lokasi di permukaan bumi.
                    </p>
                    <br>
                    <h2 class="andika-font text-4xl font-bold mb-4 font-bold mb-4">Tahapan Penyelenggaraan Nama Rupabumi terdiri atas :</h2>
                    <ul class="text-2xl arvo-font mb-8 list-decimal list-inside">
                        <li>Penerapan Nama Rupabumi</li>
                        <li>Penetapan Nama Rupabumi</li>
                        <li>Penyebarluasan Nama Rupabumi</li>
                        <li>Pembinaan Nama Rupabumi</li>
                        <li>Penggunaan Nama Rupabumi</li>
                    </ul>
                    <p class="text-2xl arvo-font mb-8">
                        Penyelenggaraan Nama Rupabumi menggunakan aplikasi berbasis web yaitu Sistem Informasi Nama Rupabumi (Sinar) yang dapat diakses melalui
                        <a class="arvo-font text-red-500" href="https://sinar.big.go.id/"> (https://sinar.big.go.id/)</a>
                    </p>
                    <p class="text-2xl arvo-font mb-8">
                        Bagi Tata Pemerintahan sebagai dasar hukum dalam penerbitan produk hukum, nama rupabumi yang telah dibakukan dapat digunakan sebagai dasar penetapan nama unsur rupabumi dalam produk hukum yang diterbitkan. Selain itu, Nama Rupabumi yang telah dibakukan dapat digunakan untuk referensi lokasi di permukaan bumi.
                    </p>
                    <br>
                </div>
                <div class="text-center mb-8">
                    <div class="relative bg-gray-800 bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-6xl text-white z-10">
                    <h2 class="andika-font text-center text-3xl font-bold mb-4 text-red-500">PENDATAAN NAMA RUPABUMI DI KOTA SEMARANG</h2>
                    <p class="text-2xl inconsolata-font text-white text-center mb-4">update tanggal 19 Oktober 2022</p>
        <div class="overflow-x-auto">
    <table class="min-w-full border-collapse border border-gray-500 text-white">
                <thead>
                    <tr style="background-color: #FEFF01; color: black;">
                        <th class="border border-gray-500 px-4 py-2" rowspan="2">NO</th>
                        <th class="border border-gray-500 px-4 py-2" rowspan="2">KECAMATAN</th>
                        <th class="border border-gray-500 px-4 py-2" colspan="4">TAHAP PENDATAAN NAMA RUPA BUMI</th>
                        <th class="border border-gray-500 px-4 py-2" rowspan="2">TOTAL</th>
                    </tr>
                    <tr style="background-color: #FEFF01; color: black;">
                        <th class="border border-gray-500 px-4 py-2">PENELAHAN</th>
                        <th class="border border-gray-500 px-4 py-2">PERMOHONAN REKOMENDASI</th>
                        <th class="border border-gray-500 px-4 py-2">PENGUMUMAN</th>
                        <th class="border border-gray-500 px-4 py-2">PENETAPAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-500 px-4 py-2">BANYUMANIK</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">128</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">14</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">142</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-500 px-4 py-2">CANDISARI</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">31</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">33</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-600 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-500 px-4 py-2">GAJAHMUNGKUR</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">79</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">13</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">92</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">4</td>
                        <td class="border border-gray-500 px-4 py-2">GAYAMSARI</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">74</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">8</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">82</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">5</td>
                        <td class="border border-gray-500 px-4 py-2">GENUK</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">108</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">36</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">146</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">6</td>
                        <td class="border border-gray-500 px-4 py-2">GUNUNGPATI</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">97</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">8</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">5</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">110</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">7</td>
                        <td class="border border-gray-500 px-4 py-2">MIJEN</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">87</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">22</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">10</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">119</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">8</td>
                        <td class="border border-gray-500 px-4 py-2">NGALIYAN</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">132</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">34</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">166</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">9</td>
                        <td class="border border-gray-500 px-4 py-2">PEDURUNGAN</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">152</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">17</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">169</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">10</td>
                        <td class="border border-gray-500 px-4 py-2">SEMARANG BARAT</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">225</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">6</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">10</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">242</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">11</td>
                        <td class="border border-gray-500 px-4 py-2">SEMARANG SELATAN</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">121</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">27</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">148</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">12</td>
                        <td class="border border-gray-500 px-4 py-2">SEMARANG TENGAH</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">314</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">11</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">325</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">13</td>
                        <td class="border border-gray-500 px-4 py-2">SEMARANG TIMUR</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">18</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">18</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">14</td>
                        <td class="border border-gray-500 px-4 py-2">SEMARANG UTARA</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">154</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">7</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">161</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">15</td>
                        <td class="border border-gray-500 px-4 py-2">TEMBALANG</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">85</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">86</td>
                    </tr>
                    <tr class="table-row">
                        <td class="border border-gray-500 px-4 py-2 text-center">16</td>
                        <td class="border border-gray-500 px-4 py-2">TUGU</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">81</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">0</td>
                        <td class="border border-gray-500 px-4 py-2 text-center">84</td>
                    </tr>
                </tbody>
            </table>
        </div>
                </div>
                <br>
                <br>
                <br>
                <div class="flex justify-center mb-8">
                    <img alt="Descriptive image related to Kecamatan and Kelurahan" class="mb-8 w-full h-auto transition-zoom" height="1920" src="img/poster6.png" width="1080"/>
                </div>
            </div>
        </div>
    </div>
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
            document.addEventListener('DOMContentLoaded', function () {
    const rows = document.querySelectorAll('.table-row');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('fade-in-up');
                }, index * 100);
            } else {
                entry.target.classList.remove('fade-in-up'); // Reset animasi saat elemen keluar viewport
            }
        });
    }, { threshold: 0.3 });

    rows.forEach(row => observer.observe(row));
});


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

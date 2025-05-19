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
        /* CSS untuk navbar normal */
        header.sticky {
            transition: all 0.5s ease-in-out;
        }
        .hover-underline:hover {
    text-decoration: underline; /* Menampilkan underline saat hover */
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
        .andika-font {
            font-family: 'Andika New Basic', sans-serif;
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
    @include('layouts.navbar2')

    <div class="bg-black text-white">
        <div class="flex justify-between items-center p-4">
            <div class="text-2xl font-bold andika-font ml-20">STRUKTUR ORGANISASI</div>
            <div class="flex items-center space-x-1 inconsolata-font ml-auto mr-40">
                <span onclick="window.location.href='/'" class="cursor-pointer">PROFIL</span>
                <i class="fas fa-chevron-right"></i>
                <span>STRUKTUR ORGANISASI</span>
            </div>
        </div>
    </div>

    <div class="relative w-full p-12 mx-auto flex items-center justify-center min-h-screen pt-6">
        <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/rev-bg2.png'); background-attachment: fixed; background-size: cover; background-position: center;"></div>
        <div class="relative z-10 p-6 rounded-lg w-full max-w-6xl text-white">
            <p class="text-xl md:text-3xl arvo-font mb-8 list-decimal list-inside text-justify">
                <br>
                <br>
                Bagian Tata Pemerintahan dipimpin oleh Kepala Bagian yang berkedudukan di bawah dan bertanggung jawab kepada Sekretaris Daerah melalui Asisten Pemerintahan. Berdasarkan Peraturan Wali Kota Semarang Nomor 90 Tahun 2021 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi serta Sistem Kerja Sekretariat Daerah Kota Semarang.
            </p>

            <p class="andika-font text-2xl md:text-4xl font-bold mb-4 text-justify">
                Bagian Tata Pemerintahan terdiri atas:
            </p>

            <ul class="list-decimal list-inside text-xl md:text-3xl arvo-font mb-8 text-justify pl-6">
                <li>Subkoordinator Administrasi Pemerintahan</li>
                <li>Subkoordinator Administrasi Kewilayahan</li>
                <li>Subkoordinator Partisipasi Masyarakat</li>
            </ul>

            <br>

            <div class="flex justify-center">
                <div class="relative bg-gray-800 bg-opacity-90 p-6 rounded-lg shadow-lg w-full text-white z-10">
                    <p class="andika-font text-center text-2xl font-bold mb-4">
                        STRUKTUR ORGANISASI
                    </p>
                    <div class="flex justify-center">
                        <img alt="Organizational chart showing the structure of the government section"
                            class="w-full max-w-6xl"
                            src="img/tabel.png"
                            style="height: auto"/>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>


    @include('layouts.footer')

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

        // Animasi elemen saat scroll
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.fade-in, .slide-in, .zoom-in, .zoom-out, .card').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>

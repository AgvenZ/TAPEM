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

        .andika-font {
            font-family: 'Andika New Basic', sans-serif;
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

    @section('page-title', 'VISI DAN MISI')
    @section('page-subtitle', 'VISI DAN MISI')
    @section('parent-menu', 'PROFIL')
    @include('layouts.navbar-hitam')

    <div class="relative w-full p-12 mx-auto flex items-center justify-center min-h-screen pt-6">
        <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/rev-bg2.png'); background-attachment: fixed; background-size: cover; background-position: center;"></div>
        <div class="relative z-10 p-6 rounded-lg w-full max-w-6xl text-white">
            <div class="fade-in">
                <br>
                <br>
                <h1 class="text-5xl andika-font font-bold mb-4">VISI</h1>
                <p class="text-2xl arvo-font mb-8 text-justify">"Terwujudnya Kota Semarang yang Semakin Hebat yang berlandaskan Pancasila, dalam bingkai NKRI ber-Bhineka Tunggal Ika"</p>
            </div>

            <div class="fade-in">
                <h2 class="text-5xl andika-font font-bold mb-4 mt-8">MISI</h2>
                <ol class="arvo-font list-decimal list-inside text-2xl space-y-4 text-justify pl-6">
                    <li>Meningkatkan kualitas dan kapasitas sumber daya manusia yang unggul dan produktif untuk mencapai kesejahteraan dan keadilan</li>
                    <li>Meningkatkan potensi ekonomi lokal yang berdaya saing dan stimulasi pembangunan industri, berlandaskan riset dan inovasi berdasar prinsip demokrasi ekonomi Pancasila</li>
                    <li>Menjamin kemerdekaan masyarakat menjalankan ibadah, pemenuhan hak dasar dan perlindungan kesejahteraan sosial serta hak asasi manusia bagi masyarakat secara berkeadilan</li>
                    <li>Mewujudkan infrastruktur berkualitas yang berwawasan lingkungan untuk mendukung kemajuan kota</li>
                    <li>Menjalankan reformasi birokrasi pemerintah secara dinamis dan menyusun produk hukum yang sesuai nilai-nilai Pancasila dalam kerangka Negara Kesatuan Republik Indonesia</li>
                </ol>
            </div>
        </div>
    </div>

@include('layouts.footer')

    <script>
        // Fungsi untuk animasi fade-in
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            const slideElements = document.querySelectorAll('.slide-in');
            const zoomInElements = document.querySelectorAll('.zoom-in');
            const zoomOutElements = document.querySelectorAll('.zoom-out');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            fadeElements.forEach(el => observer.observe(el));
            slideElements.forEach(el => observer.observe(el));
            zoomInElements.forEach(el => observer.observe(el));
            zoomOutElements.forEach(el => observer.observe(el));
        });

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

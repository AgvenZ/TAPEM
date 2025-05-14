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
        .hover-underline:hover {
            text-decoration: underline;
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

        /* Animasi floating untuk gambar profil */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
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
        body {
            background-color: #1a1a1a;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* New styles for aligned layout */
        .main-content-container {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        .profile-image-container {
            width: 90%;
            max-width: 565px;
            margin: 0 auto;
        }
        .profile-image {
            width: 100%;
            height: auto;
            max-height: 320px;
            object-fit: cover;
            border-radius: 0.75rem;
        }
        .content-box {
            width: 100%;
            margin-top: 2rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .profile-image {
                max-height: 300px;
            }
        }
    </style>
<body class="font-sans" onclick="closeAllDropdowns(event)">
    @include('layouts.navbar2')
</body>
    <div class="bg-black text-white">
        <div class="flex justify-between items-center p-4">
            <div class="text-2xl font-bold andika-font ml-20">TENTANG</div>
            <div class="flex items-center space-x-1 inconsolata-font ml-auto mr-44">
                <span onclick="window.location.href='/'" class="cursor-pointer">BERANDA</span>
                <i class="fas fa-chevron-right"></i>
                <span>TENTANG</span>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/rev-bg1.png');">
        <div class="main-content-container">
            <br>

            <!-- Profile Section -->
            <section id="profile">
                <div class="text-center mb-12 fade-in">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4">



                </div>
                <br>

                <div class="profile-image-container slide-in">
                    <div class="relative floating">
                        <div class="absolute inset-0 bg-gradient-to-r from-rose-600/20 to-amber-500/20 rounded-xl blur-xl animate-pulse"></div>
                        <img alt="Balai Kota Semarang" class="relative z-10 profile-image shadow-2xl border-4 border-white" src="img/balkot-tentang.png"/>
                    </div>
                </div>

                <div class="content-box zoom-in">
                    <div class="bg-white p-8 rounded-xl shadow-lg bg-opacity-90">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 text-center">Tata Pemerintahan Kota Semarang</h3>
                        <div class="space-y-6">
                            <p class="text-gray-600 text-lg text-justify">
                                Tata pemerintahan Kota Semarang adalah sistem pengelolaan administrasi dan layanan publik yang dijalankan oleh Pemerintah Kota Semarang guna memastikan kesejahteraan masyarakat serta pembangunan kota yang berkelanjutan. Pemerintahan ini dipimpin oleh Wali Kota dan Wakil Wali Kota, serta didukung oleh berbagai Organisasi Perangkat Daerah (OPD) yang bertugas mengatur berbagai sektor, seperti pelayanan masyarakat, infrastruktur, ekonomi, pendidikan, dan lingkungan.
                            </p>
                            <p class="text-gray-600 text-lg text-justify">
                                Pemerintah Kota Semarang menerapkan prinsip transparansi, akuntabilitas, dan partisipasi publik dalam setiap kebijakan dan programnya. Berbagai inovasi digital juga terus dikembangkan untuk meningkatkan efisiensi pelayanan, seperti e-Government dan platform layanan online yang memudahkan warga dalam mengakses informasi serta mengurus administrasi pemerintahan.
                            </p>
                            <p class="text-gray-600 text-lg text-justify">
                                Dengan semangat pembangunan yang inklusif dan berkelanjutan, tata pemerintahan Kota Semarang berupaya mewujudkan kota yang lebih maju, nyaman, dan berdaya saing tinggi di tingkat nasional maupun global.
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </section>
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
                if (window.scrollY > 50) {
                    header.classList.add('shrink');
                } else {
                    header.classList.remove('shrink');
                }
            }

            // Menambahkan event listener untuk scroll
            window.addEventListener('scroll', handleScroll);

            // Animasi untuk elemen-elemen dengan kelas fade-in, slide-in, zoom-in
            document.addEventListener('DOMContentLoaded', function() {
                // Fungsi untuk mendeteksi elemen dalam viewport
                function isInViewport(element) {
                    const rect = element.getBoundingClientRect();
                    return (
                        rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.bottom >= 0
                    );
                }

                // Fungsi untuk menambahkan kelas visible pada elemen yang terlihat
                function handleAnimation() {
                    const fadeElements = document.querySelectorAll('.fade-in');
                    const slideElements = document.querySelectorAll('.slide-in');
                    const zoomElements = document.querySelectorAll('.zoom-in');
                    const zoomOutElements = document.querySelectorAll('.zoom-out');

                    [...fadeElements, ...slideElements, ...zoomElements, ...zoomOutElements].forEach(element => {
                        if (isInViewport(element)) {
                            element.classList.add('visible');
                        }
                    });
                }

                // Jalankan saat halaman dimuat
                handleAnimation();

                // Jalankan saat scroll
                window.addEventListener('scroll', handleAnimation);
            });
    </script>
</body>
</html>

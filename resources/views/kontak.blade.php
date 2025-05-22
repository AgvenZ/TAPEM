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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        a:hover {
            text-decoration: underline;
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
        .hover-underline:hover {
            text-decoration: underline;
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

        /* New styles for modern contact page */
        .contact-container {
            backdrop-filter: blur(8px);
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            padding: 2.5rem;
            margin: 2rem auto;
            max-width: 850px;
        }

        .contact-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(90deg, #000000, #FF0000);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .contact-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            color: #E0E0E0;
        }

        .social-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 1rem;
            transition: all 0.3s ease;
            border-left: 3px solid;
            border-image: linear-gradient(to bottom, #000000, #FF0000) 1;
        }

        .social-card:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }

        .social-icon {
            width: 40px;
            height: 40px;
            object-fit: contain;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
        }

        .social-link {
            color: #FFFFFF;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .social-link:hover {
            color: #FF0000;
            text-decoration: none;
        }

        .map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            border: 2px solid rgba(255, 255, 255, 0.1);
        }

        .breadcrumb {
            color: #AAAAAA;
        }

        .breadcrumb a:hover {
            color: #00BFFF;
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            margin: 1.5rem 0;
        }
    </style>
</head>
<body class="font-sans" onclick="closeAllDropdowns(event)">
    @include('layouts.navbar2')
    <!-- Navbar judul halaman dengan desain baru -->
    <div class="bg-gradient-to-r from-gray-900 to-black text-white">
        <div class="flex justify-between items-center p-6">
            <div class="text-2xl font-bold andika-font ml-20 flex items-center">
                <div class="w-2 h-8 bg-gradient-to-b from-indigo-500 to-purple-600 mr-3"></div>
                KONTAK
            </div>
            <div class="flex items-center space-x-2 inconsolata-font mr-40">
                <span onclick="window.location.href='/'" class="cursor-pointer hover:text-indigo-300 transition duration-300">DASHBOARD</span>
                <i class="fas fa-chevron-right text-indigo-400"></i>
                <span class="text-indigo-300">KONTAK</span>
            </div>
        </div>
    </div>


    <div class="flex items-center justify-center bg-cover bg-center py-16" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/rev-bg1.png');">
        <div class="contact-container relative z-10">
            <div class="text-center mb-8">
                <h1 class="contact-title">HUBUNGI KAMI</h1>
                <p class="contact-subtitle">Gd. Moch Ichsan Lt.6, Jl. Pemuda No. 148 Semarang</p>
            </div>

            <div class="flex flex-col lg:flex-row gap-6">
                <div class="w-full lg:w-1/2">
                    <div class="map-container">
                        <iframe allowfullscreen="" class="w-full" height="350" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.229282343342!2d110.41032621415985!3d-6.982247794955957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ba87e15e37b%3A0xb6685e7f890af6d9!2sBalai%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1677037557628!5m2!1sid!2sid" style="border:0;"></iframe>
                    </div>
                    <div class="mt-3 text-center text-gray-300">
                        <p class="text-base poppins-font">Kami siap melayani Anda dengan sebaik-baiknya</p>
                        <p class="text-base mt-2 poppins-font">Jam operasional:<br>Senin - Kamis, 08.00 - 16.00 WIB<br>Jumat, 07.30 - 14.00 WIB</p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="grid grid-cols-1 gap-3">
                        <div class="social-card flex items-center space-x-3 py-3">
                            <img alt="Instagram logo" class="social-icon w-10 h-10" src="img/sosmed1.png"/>
                            <a href="https://www.instagram.com/bagtapemkotasmg" target="_blank" class="social-link">@bagtapemkotasmg</a>
                        </div>

                        <div class="social-card flex items-center space-x-3 py-3">
                            <img alt="Twitter logo" class="social-icon w-10 h-10" src="img/sosmed2.png"/>
                            <a href="https://twitter.com/bagtapemkotasmg" target="_blank" class="social-link">@bagtapemkotasmg</a>
                        </div>

                        <div class="social-card flex items-center space-x-3 py-3">
                            <img alt="TikTok logo" class="social-icon w-10 h-10" src="img/sosmed3.png"/>
                            <a href="https://www.tiktok.com/@bagtapemkotasmg" target="_blank" class="social-link">@bagtapemkotasmg</a>
                        </div>

                        <div class="social-card flex items-center space-x-3 py-3">
                            <img alt="Facebook logo" class="social-icon w-10 h-10" src="img/sosmed4.png"/>
                            <a href="https://www.facebook.com/profile.php?id=100085015884271" target="_blank" class="social-link">Bagian Tata Pemerintahan Setda Kota Semarang</a>
                        </div>

                        <div class="social-card flex items-center space-x-3 py-3">
                            <img alt="YouTube logo" class="social-icon w-10 h-10" src="img/sosmed5.png"/>
                            <a href="https://youtube.com/@bagiantatapemerintahansetd2949?si=CL0zivLNQYl37FEr" target="_blank" class="social-link">Bagian Tapem Setda Kota Semarang</a>
                        </div>

                        <div class="social-card flex items-center space-x-3 py-3">
                            <i class="fas fa-envelope text-red-600 text-3xl"></i>
                            <a href="mailto:bagtapem@semarangkota.go.id" class="social-link">bagtapem@semarangkota.go.id</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider my-6"></div>
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
            // Hanya menutup dropdown lain, tidak menutup dropdown yang sedang diklik
            var dropdowns = document.getElementsByClassName('dropdown-content');
            for (var i = 0; i < dropdowns.length; i++) {
                if (dropdowns[i].id !== id) {
                    dropdowns[i].style.display = 'none';
                }
            }
            // Selalu tampilkan dropdown yang diklik
            var dropdown = document.getElementById(id);
            dropdown.style.display = 'block';
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

        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.social-card, .map-container, .contact-title, .contact-subtitle').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>

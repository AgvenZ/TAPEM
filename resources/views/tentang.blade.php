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
    text-decoration: underline; /* Menampilkan underline saat hover */
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
        body {
            background-color: #1a1a1a;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
<body class="font-sans" onclick="closeAllDropdowns(event)">
    @include('layouts.navbar')
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
    <div class="flex items-center justify-center min-h-screen bg-cover bg-center" style="background-image: url('img/background3.png');">
        <div class="p-28 rounded-lg max-w-6xl text-white">
            <div class="custom-bg flex items-center justify-center min-h-screen">
                <div class="bg-gray-800 bg-opacity-90 text-white inconsolata-font p-8 rounded-3xl max-w-5xl mx-auto">
                    <!-- Container untuk gambar dan teks -->
                    <div class="flex flex-col items-center">
                        <!-- Gambar dengan corner radius 125 dan dimensi 447x298 -->
                        <div class="overflow-hidden mb-8 shadow-[0_25px_50px_-12px_rgba(0,0,0,0.6)]" style="width: 447px; height: 298px; border-radius: 125px;">
                            <img alt="Portrait of Yoga Tamtomo, S.STP" class="w-full h-full object-cover" src="img/balkot-tentang.png"/>
                        </div>
                        <!-- Teks -->
                        <div class="text-xl text-justify space-y-4">
                            <p>
                                Tata pemerintahan Kota Semarang adalah sistem pengelolaan administrasi dan layanan publik yang dijalankan oleh Pemerintah Kota Semarang guna memastikan kesejahteraan masyarakat serta pembangunan kota yang berkelanjutan. Pemerintahan ini dipimpin oleh Wali Kota dan Wakil Wali Kota, serta didukung oleh berbagai Organisasi Perangkat Daerah (OPD) yang bertugas mengatur berbagai sektor, seperti pelayanan masyarakat, infrastruktur, ekonomi, pendidikan, dan lingkungan.
                            </p>
                            <p>
                                Pemerintah Kota Semarang menerapkan prinsip transparansi, akuntabilitas, dan partisipasi publik dalam setiap kebijakan dan programnya. Berbagai inovasi digital juga terus dikembangkan untuk meningkatkan efisiensi pelayanan, seperti e-Government dan platform layanan online yang memudahkan warga dalam mengakses informasi serta mengurus administrasi pemerintahan.
                            </p>
                            <p>
                                Dengan semangat pembangunan yang inklusif dan berkelanjutan, tata pemerintahan Kota Semarang berupaya mewujudkan kota yang lebih maju, nyaman, dan berdaya saing tinggi di tingkat nasional maupun global.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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

// Menambahkan event listener untuk scroll
window.addEventListener('scroll', handleScroll);
    </script>
</body>
</html>

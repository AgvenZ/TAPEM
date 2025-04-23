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
        body {
            background-image: url('img/background2.png'); /* Placeholder for the background image */
            background-size: cover;
            background-repeat: no-repeat;
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
        .hover-underline:hover {
    text-decoration: underline; /* Menampilkan underline saat hover */
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
</head>
<body class="font-sans" onclick="closeAllDropdowns(event)">
    @include('layouts.navbar')
</body>
    <div class="bg-black text-white">
     <div class="flex justify-between items-center p-4">
      <div class="text-2xl font-bold andika-font ml-20">
       KONTAK
      </div>
      <div class="flex items-center space-x-1 inconsolata-font ml-auto mr-48">
       <span class="cursor-pointer" onclick="window.location.href='/'">
        BERANDA
       </span>
       <i class="fas fa-chevron-right">
       </i>
       <span>
        KONTAK
       </span>
      </div>
     </div>
    </div>
    <div class="relative flex items-center justify-center min-h-screen">
     <img alt="Background image of a cityscape" class="absolute inset-0 w-full h-full object-cover z-0" height="1080" src="img/background2.png" width="1920"/>
     <div class="container mx-auto py-12 relative z-10">
      <div class="text-white text-center">
       <h1 class="andika-font text-4xl font-bold mb-8">
        KONTAK KAMI
       </h1>
       <p class="inconsolata-font mb-8 text-2xl">
        Gd. Moch Ichsan Lt.6, Jl. Pemuda No. 148 Semarang
       </p>
      </div>
      <div class="text-[#00BFFF] inconsolata-font flex flex-col md:flex-row items-center justify-center space-y-8 md:space-y-0 md:space-x-8">
       <div class="mb-8 md:mb-0">
        <iframe allowfullscreen="" class="mx-auto" height="400" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.229282343342!2d110.41032621415985!3d-6.982247794955957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ba87e15e37b%3A0xb6685e7f890af6d9!2sBalai%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1677037557628!5m2!1sid!2sid" style="border:0;" width="500">
        </iframe>
       </div>
       <div class="space-y-4 text-left text-xl text-custom">
        <div class="flex items-center space-x-4">
         <img alt="Instagram logo" class="w-12 h-12" height="48" src="img/sosmed1.png" width="48"/>
         <a href="https://www.instagram.com/bagtapemkotasmg" target="_blank">
          @bagtapemkotasmg
         </a>
        </div>
        <div class="flex items-center space-x-4">
         <img alt="Twitter logo" class="w-12 h-12" height="48" src="img/sosmed2.png" width="48"/>
         <a href="https://twitter.com/bagtapemkotasmg" target="_blank">
          @bagtapemkotasmg
         </a>
        </div>
        <div class="flex items-center space-x-4">
         <img alt="TikTok logo" class="w-12 h-12" height="48" src="img/sosmed3.png" width="48"/>
         <a href="https://www.tiktok.com/@bagtapemkotasmg" target="_blank">
          @bagtapemkotasmg
         </a>
        </div>
        <div class="flex items-center space-x-4">
         <img alt="Facebook logo" class="w-12 h-12" height="48" src="img/sosmed4.png" width="48"/>
         <a href="https://www.facebook.com/profile.php?id=100085015884271" target="_blank">
          Bagian Tata Pemerintahan Setda Kota Semarang
         </a>
        </div>
        <div class="flex items-center space-x-4">
         <img alt="YouTube logo" class="w-12 h-12" height="48" src="img/sosmed5.png" width="48"/>
         <a href="https://youtube.com/@bagiantatapemerintahansetd2949?si=CL0zivLNQYl37FEr" target="_blank">
          Bagian Tapem Setda Kota Semarang
         </a>
        </div>
        <div class="flex items-center space-x-4">
         <img alt="Envelope logo" class="w-12 h-12" height="48" src="img/sosmed6.png" width="48"/>
         <a href="mailto:bagtapem@semarangkota.go.id">
          bagtapem@semarangkota.go.id
         </a>
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
    </div>
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

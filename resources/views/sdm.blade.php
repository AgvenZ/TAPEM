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

        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .table-row {
            opacity: 0;
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
</body>
@section('page-title', 'SDM')
@section('page-subtitle', 'SDM')
@section('parent-menu', 'PROFIL')
@include('layouts.navbar-hitam')
        <div class="relative w-full p-12 mx-auto flex items-center justify-center min-h-screen pt-6">
         <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/rev-bg2.png'); background-attachment: fixed; background-size: cover; background-position: center;"></div>
         <div class="relative bg-gray-800 bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-6xl text-white z-10">
          <h1 class="andika-font text-center text-xl font-bold mb-4">
           DATA KEPEGAWAIAN BAGIAN TATA PEMERINTAHAN SETDA KOTA SEMARANG
          </h1>
          <div class="overflow-x-auto">
           <table class="min-w-full border-collapse border border-gray-500 text-white">
            <thead>
             <tr style="background-color: #FEFF01; color: black;">
              <th class="border border-gray-500 px-4 py-2">
               NO
              </th>
              <th class="border border-gray-500 px-4 py-2">
               NAMA
              </th>
              <th class="border border-gray-500 px-4 py-2">
               JABATAN
              </th>
             </tr>
            </thead>
            <tbody>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               1
              </td>
              <td class="border border-gray-500 px-4 py-2">
               YOGA TAMTOMO, S.STP
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Kepala Bagian
              </td>
             </tr>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               2
              </td>
              <td class="border border-gray-500 px-4 py-2">
               ISIA KUMALA SARI, S.STP
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Analis Kebijakan Muda
              </td>
             </tr>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               3
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Dra. TARFIKAH
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Analis Pemerintahan Daerah
              </td>
             </tr>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               4
              </td>
              <td class="border border-gray-500 px-4 py-2">
               KRISNANTA RIZKY HENGKY F, S.STP, M.A.P
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Ketua Tim Kerja
              </td>
             </tr>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               5
              </td>
              <td class="border border-gray-500 px-4 py-2">
               HENY DWI RUSTIKASARI, SE
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Ketua Tim Kerja
              </td>
             </tr>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               6
              </td>
              <td class="border border-gray-500 px-4 py-2">
               AGUS ALI MAHFUD, S.Sos.I
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Penggerak Swadaya Masyarakat
              </td>
             </tr>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               7
              </td>
              <td class="border border-gray-500 px-4 py-2">
               ALHAM HAIDIR DARMIN, S.Sos
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Penggerak Swadaya Masyarakat
              </td>
             </tr>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               8
              </td>
              <td class="border border-gray-500 px-4 py-2">
               DJAJENG MUKTININGRUM, S.Sos
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Penggerak Swadaya Masyarakat
              </td>
             </tr>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               9
              </td>
              <td class="border border-gray-500 px-4 py-2">
               HANIFIA YUNASTITI, S.I.P.
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Analis Desa dan Kelurahan
              </td>
             </tr>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               10
              </td>
              <td class="border border-gray-500 px-4 py-2">
               ERICK WICAKSONO, S.STP., M.M.
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Analis Pemerintahan Daerah
              </td>
             </tr>
             <tr class="table-row">
              <td class="border border-gray-500 px-4 py-2 text-center">
               11
              </td>
              <td class="border border-gray-500 px-4 py-2">
               TRIYONO
              </td>
              <td class="border border-gray-500 px-4 py-2">
               Pengadministrasi Umum
              </td>
             </tr>
            </tbody>
           </table>
          </div>
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

            document.addEventListener('DOMContentLoaded', function () {
            const rows = document.querySelectorAll('.table-row');
            rows.forEach((row, index) => {
                setTimeout(() => {
                    row.classList.add('fade-in-up');
                }, index * 100);
            });
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

<body>
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
            <div class="text-2xl font-bold andika-font ml-20">TUGAS DAN FUNGSI</div>
            <div class="flex items-center space-x-1 inconsolata-font ml-auto mr-40">
                <span onclick="window.location.href='/'" class="cursor-pointer">PROFIL</span>
                <i class="fas fa-chevron-right"></i>
                <span>TUGAS DAN FUNGSI</span>
            </div>
        </div>
    </div>

    <div class="relative w-full p-12 mx-auto flex items-center justify-center min-h-screen pt-6">
        <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/rev-bg2.png'); background-attachment: fixed; background-size: cover; background-position: center;"></div>
        <div class="relative z-10 p-6 rounded-lg w-full max-w-6xl text-white">
            <div class="fade-in">
                <br>
                <h1 class="text-red-500 andika-font text-3xl font-bold mb-4 text-justify">
                    Menurut Peraturan Walikota Nomor 90 Tahun 2021
                    <span class="text-white">
                        Tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi serta Sistem Kerja Sekretariat Daerah Kota Semarang, Kepala Bagian Tata Pemerintahan memiliki tugas sebagai berikut:
                    </span>
                </h1>

                <p class="andika-font text-3xl font-bold mb-4 text-justify">
                    Merencanakan, mengkoordinasikan, membina, mengawasi dan mengendalikan serta mengevaluasi tugas Administrasi Pemerintahan, Administrasi Kewilayahan, dan Partisipasi Masyarakat.
                </p>
            </div>

        <br><br>

        <p class="text-3xl font-bold andika-font mb-8 text-justify">
            Dalam melaksanakan tugas, Bagian Tata Pemerintahan mempunyai fungsi:
        </p>

        <ul class="alpha-list pl-6 text-2xl arvo-font mb-8 text-justify list-disc leading-relaxed">
            <li class="mb-2">Perencanaan program, kegiatan, dan anggaran.</li>
            <li class="mb-2">Pelaksanaan manajemen kinerja pegawai dalam lingkup tanggung jawabnya.</li>
            <li class="mb-2">Pelaksanaan koordinasi dengan instansi dan pihak terkait.</li>
            <li class="mb-2">Pelaksanaan kegiatan penyusunan kebijakan di Bagian Tata Pemerintahan.</li>
            <li class="mb-2">Pelaksanaan kegiatan Administrasi Pemerintahan, Administrasi Kewilayahan, dan Partisipasi Masyarakat.</li>
            <li class="mb-2">Pelaksanaan kegiatan penyusunan data dan informasi di Bagian Tata Pemerintahan.</li>
            <li class="mb-2">Pelaksanaan kegiatan pengelolaan dan pertanggungjawaban keuangan di Bagian Tata Pemerintahan.</li>
            <li class="mb-2">Pelaksanaan monitoring dan evaluasi serta penyusunan laporan program dan kegiatan.</li>
            <li class="mb-2">Pelaksanaan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</li>
        </ul>

        <br>

        <p class="text-3xl font-bold andika-font mb-8 text-justify">
            Bagian Tata Pemerintahan, terdiri atas tiga subkoordinator yang memiliki tugas masing-masing yaitu:
        </p>

        <ol class="text-2xl arvo-font mb-8 list-decimal pl-6 space-y-4">
            <li>
                <h2 class="font-bold">Subkoordinator Administrasi Pemerintahan</h2>
                <ul class="alpha-list pl-6 text-2xl arvo-font mb-8 text-justify list-disc leading-relaxed">
                    <li class="mb-2">Menyiapkan penyusunan Rencana Kerja dan Anggaran serta Dokumen Pelaksanaan Anggaran.</li>
                    <li class="mb-2">Menyiapkan kegiatan manajemen kinerja pegawai dalam lingkup tanggung jawabnya.</li>
                    <li class="mb-2">Menyiapkan kegiatan koordinasi dengan instansi dan pihak terkait.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan kebijakan di bidang Administrasi Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyelenggaraan urusan Administrasi Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan pengkoordinasian tugas umum pemerintahan.</li>
                    <li class="mb-2">Menyiapkan pengkoordinasian kegiatan fasilitasi penyelesaian masalah Stabilitas Daerah, Kewaspadaan Daerah, dan Ketahanan Daerah.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi dan pelaksanaan tugas tampung tantra.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan kebijakan, fasilitasi, dan pengkoordinasian penyelenggaraan ketenteraman, ketertiban umum, serta perlindungan masyarakat, administrasi kependudukan dan catatan sipil, pertanahan, kesatuan bangsa dan politik, serta persandian.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan bahan penetapan kode dan data kewilayahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi penegasan batas wilayah, rupa bumi, dan toponimi serta relas.</li>
                    <li class="mb-2">Menyiapkan kegiatan pelayanan administratif di Administrasi Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan bahan Rencana Strategis, Rencana Kerja, dan Rencana Kinerja Tahunan Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan bahan Sistem Akuntabilitas Kinerja Instansi Pemerintah Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan bahan Laporan Keterangan Pertanggungjawaban Walikota di lingkungan Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan bahan Laporan Penyelenggaraan Pemerintahan Daerah di lingkungan Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan pengelolaan Sistem Pengendalian Intern Pemerintah Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan data dan informasi Administrasi Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Administrasi Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Administrasi Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan laporan kegiatan Administrasi Pemerintahan.</li>
                    <li class="mb-2">Melaksanakan butir-butir kegiatan jabatan fungsional yang bersangkutan.</li>
                    <li class="mb-2">Melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</li>
                </ul>
            </li>

            <li>
                <h2 class="font-bold">Subkoordinator Administrasi Kewilayahan</h2>
                <ul class="alpha-list pl-6 text-2xl arvo-font mb-8 text-justify list-disc leading-relaxed">
                    <li class="mb-2">Menyiapkan penyusunan Rencana Kerja dan Anggaran serta Dokumen Pelaksanaan Anggaran.</li>
                    <li class="mb-2">Menyiapkan kegiatan manajemen kinerja pegawai dalam lingkup tanggung jawabnya.</li>
                    <li class="mb-2">Menyiapkan kegiatan koordinasi dengan instansi dan pihak terkait.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan kebijakan di bidang Administrasi Kewilayahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan pengkoordinasian, inventarisasi permasalahan, dan pembinaan penyelenggaraan urusan pemerintahan di Kecamatan.</li>
                    <li class="mb-2">Menyiapkan kegiatan pengkajian penataan Kecamatan dan/atau Kelurahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi perencanaan, peningkatan, dan pembinaan aparatur Kecamatan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi perencanaan, pengembangan, dan pengendalian prasarana, sarana, serta sistem informasi Kecamatan.</li>
                    <li class="mb-2">Menyiapkan kegiatan evaluasi kinerja Kecamatan.</li>
                    <li class="mb-2">Menyiapkan kegiatan pelayanan administratif di Administrasi Kewilayahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi pengelolaan sistem informasi Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi pengelolaan barang milik daerah Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi pengelolaan Standar Operasional Prosedur Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi pengelolaan Proses Bisnis Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi pengelolaan Kelembagaan Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan data dan informasi Administrasi Kewilayahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Administrasi Kewilayahan.</li>
                    <li class="mb-2">Menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Administrasi Kewilayahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan laporan kegiatan Administrasi Kewilayahan.</li>
                    <li class="mb-2">Melaksanakan butir-butir kegiatan jabatan fungsional yang bersangkutan.</li>
                    <li class="mb-2">Melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</li>
                </ul>
            </li>

            <li>
                <h2 class="font-bold">Subkoordinator Partisipasi Masyarakat</h2>
                <ul class="alpha-list pl-6 text-2xl arvo-font mb-8 text-justify list-disc leading-relaxed">
                    <li class="mb-2">Menyiapkan penyusunan Rencana Kerja dan Anggaran serta Dokumen Pelaksanaan Anggaran.</li>
                    <li class="mb-2">Menyiapkan kegiatan manajemen kinerja pegawai dalam lingkup tanggung jawabnya.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan Sasaran Kinerja Pegawai.</li>
                    <li class="mb-2">Menyiapkan kegiatan koordinasi dengan instansi dan pihak terkait.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan kebijakan di bidang Partisipasi Masyarakat.</li>
                    <li class="mb-2">Menyiapkan kegiatan pengkoordinasian penyusunan kebijakan di bidang Partisipasi Masyarakat.</li>
                    <li class="mb-2">Menyiapkan kegiatan pengkoordinasian tugas perangkat daerah di bidang Partisipasi Masyarakat.</li>
                    <li class="mb-2">Menyiapkan pengkoordinasian kegiatan pemantauan dan evaluasi pelaksanaan kebijakan di bidang Partisipasi Masyarakat.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi kepala daerah di bidang Partisipasi Masyarakat.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi evaluasi perkembangan kelurahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan pelayanan administratif di Partisipasi Masyarakat.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi pengelolaan kepegawaian Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi pengelolaan gaji dan tunjangan di lingkungan Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi pelaksanaan Reformasi Birokrasi Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan pengelolaan tata persuratan dinas Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan fasilitasi pengelolaan dan pertanggungjawaban keuangan di lingkungan Bagian Tata Pemerintahan.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan data dan informasi Partisipasi Masyarakat.</li>
                    <li class="mb-2">Menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Partisipasi Masyarakat.</li>
                    <li class="mb-2">Menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Partisipasi Masyarakat.</li>
                    <li class="mb-2">Menyiapkan kegiatan penyusunan laporan kegiatan Subbagian Partisipasi Masyarakat.</li>
                    <li class="mb-2">Melaksanakan butir-butir kegiatan jabatan fungsional yang bersangkutan.</li>
                    <li class="mb-2">Melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</li>
                </ul>
            </li>
        </ol>
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

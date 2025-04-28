<html lang="en">

    <div class="flex items-center justify-center min-h-screen bg-cover bg-center">
        <div class="p-23 rounded-lg max-w-6xl text-gray">
            <h1 class="text-5xl andika-font font-bold mb-4">VISI</h1>
            <p class="text-2xl arvo-font mb-8">“Terwujudnya Kota Semarang yang Semakin Hebat yang berlandaskan Pancasila, dalam bingkai NKRI ber-Bhineka Tunggal Ika”</p>
            <h2 class="text-5xl andika-font font-bold mb-4">MISI</h2>
            <ol class="arvo-font list-decimal list-inside text-2xl space-y-4">
                <li>Meningkatkan kualitas dan kapasitas sumber daya manusia yang unggul dan produktif untuk mencapai kesejahteraan dan keadilan</li>
                <li>Meningkatkan potensi ekonomi lokal yang berdaya saing dan stimulasi pembangunan industri, berlandaskan riset dan inovasi berdasar prinsip demokrasi ekonomi Pancasila</li>
                <li>Menjamin kemerdekaan masyarakat menjalankan ibadah, pemenuhan hak dasar dan perlindungan kesejahteraan sosial serta hak asasi manusia bagi masyarakat secara berkeadilan</li>
                <li>Mewujudkan infrastruktur berkualitas yang berwawasan lingkungan untuk mendukung kemajuan kota</li>
                <li>Menjalankan reformasi birokrasi pemerintah secara dinamis dan menyusun produk hukum yang sesuai nilai-nilai Pancasila dalam kerangka Negara Kesatuan Republik Indonesia</li>
            </ol>
        </div>
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
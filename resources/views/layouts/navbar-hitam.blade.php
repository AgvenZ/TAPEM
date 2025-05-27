<!-- Navbar judul halaman dengan desain hitam -->
<div class="bg-gradient-to-r from-gray-900 to-black text-white">
    <div class="flex items-center p-6 relative">
        <div class="text-2xl font-bold andika-font ml-20 flex items-center">
            <div class="w-2 h-8 bg-gradient-to-b from-indigo-500 to-purple-600 mr-3"></div>
            @yield('page-title', 'HALAMAN')
        </div>
        <!-- Posisi teks di 75% dari lebar layar (antara garis ketiga dan keempat) -->
        <div class="absolute inconsolata-font" style="left: 75%; transform: translateX(-50%); letter-spacing: -0.5px; font-size: 0.95rem;">
            <div class="flex items-center space-x-2">
                <span onclick="window.location.href='/'" class="cursor-pointer hover:text-indigo-300 transition duration-300" style="white-space: nowrap;">@yield('parent-menu', '')</span>
                <i class="fas fa-chevron-right text-indigo-400"></i>
                <span class="text-indigo-300" style="white-space: nowrap;">@yield('page-subtitle', '')</span>
            </div>
        </div>
    </div>
</div>

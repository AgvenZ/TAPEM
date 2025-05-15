<div class="bg-gradient-to-r from-gray-900 to-black py-12 px-4 sm:px-6 lg:px-8 relative">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-center">
            <!-- Logo 1 with hover effect and description -->
            <div class="flex justify-center transform hover:scale-105 transition duration-300 group relative">
                <img alt="Semarang Kota logo and text" class="h-20" src="{{ asset('img/logo1.png') }}"/>
                <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-red-600 text-white px-3 py-1 rounded-md text-sm font-medium whitespace-nowrap shadow-lg">
                    Pemerintah Kota Semarang
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-b-4 border-l-transparent border-r-transparent border-b-white"></div>
                </div>
            </div>

            <!-- Logo 2 with hover effect and description -->
            <div class="flex justify-center transform hover:scale-105 transition duration-300 group relative">
                <img alt="Semarang Smart City logo and text" class="h-20" src="{{ asset('img/logo2.png') }}"/>
                <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-red-600 text-white px-3 py-1 rounded-md text-sm font-medium whitespace-nowrap shadow-lg">
                    Semarang Smart City
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-b-4 border-l-transparent border-r-transparent border-b-white"></div>
                </div>
            </div>

            <!-- Logo 3 with enhanced box, hover effect and description -->
            <div class="flex justify-center transform hover:scale-105 transition duration-300 group relative">
                <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img alt="Satu Data Kota Semarang logo and text" class="h-20" src="{{ asset('img/logo3.png') }}"/>
                </div>
                <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-red-600 text-white px-3 py-1 rounded-md text-sm font-medium whitespace-nowrap shadow-lg">
                    Satu Data Kota Semarang
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-b-4 border-l-transparent border-r-transparent border-b-white"></div>
                </div>
            </div>

            <!-- Logo 4 with hover effect and description -->
            <div class="flex justify-center transform hover:scale-105 transition duration-300 group relative">
                <img alt="PPID logo and text" class="h-20" src="{{ asset('img/logo4.png') }}"/>
                <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-red-600 text-white px-3 py-1 rounded-md text-sm font-medium whitespace-nowrap shadow-lg">
                    PPID Kota Semarang
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-b-4 border-l-transparent border-r-transparent border-b-white"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to top button -->
    <button id="scrollToTopBtn" class="hidden fixed bottom-6 right-6 bg-red-600 hover:bg-red-700 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg transition-all duration-300 transform hover:scale-110 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>
</div>

<footer class="bg-gradient-to-r from-red-900 to-black py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-white font-medium inconsolata-font text-lg tracking-wide animate-pulse">
            © 2025 Bagian Tata Pemerintahan, Setda Kota Semarang All rights reserved
        </p>
    </div>
</footer>

<script>
    // Scroll to top button functionality
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.remove('hidden');
            scrollToTopBtn.classList.add('block');
        } else {
            scrollToTopBtn.classList.remove('block');
            scrollToTopBtn.classList.add('hidden');
        }
    });

    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

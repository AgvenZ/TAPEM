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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <style>
        .headline-font {
            font-family: 'Playfair Display', serif;
        }
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
            height: 500px;
            overflow: hidden;
            transition: opacity 0.5s ease, all 0.5s ease;
        }
        .slideshow-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 1s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
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
            background-color: rgba(0,0,0,0.3);
            z-index: 100;
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
        .hover-underline:hover {
            text-decoration: underline;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .slide-in {
            opacity: 0;
            transform: translateX(-100%);
            transition: opacity 1.4s ease-out, transform 1.4s ease-out;
        }
        .slide-in.visible {
            opacity: 1;
            transform: translateX(0);
        }
        .zoom-in {
            opacity: 0;
            transform: scale(0.8);
            transition: opacity 1.8s ease-out, transform 1.8s ease-out;
        }
        .zoom-out {
            opacity: 0;
            transform: scale(0.8);
            transition: opacity 1.4s ease-out, transform 1.4s ease-out;
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

        /* New Unified Animated Background with Red Topology */
        .unified-section {
            position: relative;
            overflow: hidden;
            background-color: white;
            z-index: 1;
        }

        .topology-canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.7;
        }

        /* Floating animation */
        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        /* Glow effect */
        .glow {
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                box-shadow: 0 0 5px rgba(254, 255, 1, 0.5);
            }
            to {
                box-shadow: 0 0 20px rgba(254, 255, 1, 0.8);
            }
        }

        /* Toggle button for slideshow */
        .toggle-slideshow {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1000;
            background: rgba(0,0,0,0.7);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .toggle-slideshow:hover {
            background: rgba(0,0,0,0.9);
        }

        /* Cloud Gradient Overlay */
        .cloud-gradient-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 180px;
            background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0.5) 50%, rgba(255,255,255,0.9) 80%, #ffffff 100%);
            z-index: 10;
            pointer-events: none;
            mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,0 C200,60 400,100 500,30 C600,70 800,40 1000,80 L1000,100 L0,100 Z" /></svg>');
            mask-size: 100% 100%;
            -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,0 C200,60 400,100 500,30 C600,70 800,40 1000,80 L1000,100 L0,100 Z" /></svg>');
            -webkit-mask-size: 100% 100%;
            animation: cloudFloat 15s ease-in-out infinite alternate;
        }

        /* Add a second cloud layer for more depth */
        .cloud-gradient-overlay::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            z-index: 9;
            mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,20 C150,5 300,50 500,10 C700,40 850,10 1000,30 L1000,100 L0,100 Z" /></svg>');
            mask-size: 120% 100%;
            -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,20 C150,5 300,50 500,10 C700,40 850,10 1000,30 L1000,100 L0,100 Z" /></svg>');
            -webkit-mask-size: 120% 100%;
            animation: cloudFloatReverse 20s ease-in-out infinite alternate;
            opacity: 0.7;
        }

        /* Third cloud layer for more realistic effect */
        .cloud-layer-three {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 200px;
            background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 60%, rgba(255,255,255,0.7) 90%, #ffffff 100%);
            z-index: 8;
            pointer-events: none;
            mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,40 C100,10 250,60 400,20 C550,40 750,5 900,30 C950,45 980,25 1000,40 L1000,100 L0,100 Z" /></svg>');
            mask-size: 150% 100%;
            -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,40 C100,10 250,60 400,20 C550,40 750,5 900,30 C950,45 980,25 1000,40 L1000,100 L0,100 Z" /></svg>');
            -webkit-mask-size: 150% 100%;
            animation: cloudFloatSlow 25s ease-in-out infinite alternate;
            opacity: 0.6;
        }

        @keyframes cloudFloat {
            0% {
                mask-position: 0% 0%;
                -webkit-mask-position: 0% 0%;
            }
            100% {
                mask-position: 100% 0%;
                -webkit-mask-position: 100% 0%;
            }
        }

        @keyframes cloudFloatReverse {
            0% {
                mask-position: 100% 0%;
                -webkit-mask-position: 100% 0%;
            }
            100% {
                mask-position: 0% 0%;
                -webkit-mask-position: 0% 0%;
            }
        }

        @keyframes cloudFloatSlow {
            0% {
                mask-position: 30% 0%;
                -webkit-mask-position: 30% 0%;
            }
            100% {
                mask-position: 70% 0%;
                -webkit-mask-position: 70% 0%;
            }
        }

        /* Ensure smooth transition between slideshow and content */
        #slideshowContainer {
            margin-bottom: -2px; /* Remove any gap between slideshow and content */
        }

        .unified-section {
            margin-top: -2px; /* Ensure no gap with slideshow */
        }
    </style>
</head>
<body class="font-sans" onclick="closeAllDropdowns(event)">
    @include('layouts.navbar')

    <!-- Slideshow Section -->
    <div class="slideshow-container relative z-0" id="slideshowContainer">
        @php
            $slideshows = \App\Models\Slideshow::where('active', true)->orderBy('order')->get();
        @endphp
        @if($slideshows->count() > 0)
            @foreach($slideshows as $index => $slideshow)
                <img alt="{{ $slideshow->title }}" class="slideshow-image {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}"
                     data-index="{{ $index }}"
                     src="{{ asset('storage/' . $slideshow->image_path) }}"/>
            @endforeach
            <a class="prev" onclick="changeSlide(-1)">❮</a>
            <a class="next" onclick="changeSlide(1)">❯</a>
            <button class="toggle-slideshow" onclick="toggleSlideshow()"></button>
            <!-- Cloud Gradient Overlay -->
            <div class="cloud-gradient-overlay"></div>
        @endif
    </div>

    <!-- Unified Sections with Red Topology Background -->
    <div class="unified-section">
        <!-- Topology Canvas Background -->
        <canvas id="topologyCanvas" class="topology-canvas"></canvas>

        <!-- Profile Section -->
        <section id="profile" class="py-20 px-4">
            <div class="container mx-auto max-w-6xl relative z-10">
                <div class="text-center mb-16 fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        <span class="text-gray-800">Kepala Bagian Tata Pemerintahan</span>
                    </h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-rose-600 to-amber-500 mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Memimpin dengan integritas dan komitmen untuk pelayanan publik yang berkualitas
                    </p>
                </div>

                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="w-full md:w-1/3 flex justify-center slide-in">
                        <div class="relative floating">
                            <div class="absolute inset-0 bg-gradient-to-r from-rose-600/20 to-amber-500/20 rounded-full blur-xl animate-pulse"></div>
                            <img alt="Portrait of Yoga Tamtomo, S.STP" class="relative z-10 w-64 h-80 md:w-80 md:h-96 object-cover rounded-xl shadow-2xl border-4 border-white" src="img/kabag.png"/>
                        </div>
                    </div>

                    <div class="w-full md:w-2/3 zoom-in">
                        <div class="bg-white p-8 rounded-xl shadow-lg bg-opacity-90">
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">YOGA TAMTOMO, S.STP</h3>
                            <p class="text-lg text-rose-600 font-medium mb-6">Kepala Bagian Tata Pemerintahan</p>

                            <div class="space-y-4">
                                <p class="text-gray-600">
                                    Selamat datang di website resmi Bagian Tata Pemerintahan Kota Semarang. Kami berkomitmen untuk memberikan pelayanan terbaik dalam tata kelola pemerintahan yang efektif dan efisien.
                                </p>
                                <p class="text-gray-600">
                                    Pada situs web ini kami isi dengan berita-berita seputar kegiatan Bagian Tata Pemerintahan Setda Kota Semarang.  Tak kalah menariknya, di situs web ini senantiasa kami update info-info terbaru dan penting yang perlu diketahui oleh masyarakat.  Oleh karena itu, masyarakat perlu sering melihat situs web ini agar tidak ketinggalan informasi penting khususnya untuk kegiatan dan layanan di Bagian Tata Pemerintahan. Kritik dan saran selalu kami nantikan, agar panyajian informasi di situs web ini dapat memberikan manfaat yang sebesar-besarnya bagi masyarakat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Info Section -->
        <section id="info" class="py-16 px-4">
            <div class="container mx-auto max-w-6xl relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-xl shadow-lg h-full zoom-out bg-opacity-90">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-map-marker-alt text-rose-600 mr-3"></i>
                            Lokasi Kantor
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Jl. Pemuda No.148, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132
                        </p>
                        <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                            <iframe class="w-full h-64" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.229282343342!2d110.41032621415985!3d-6.982247794955957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ba87e15e37b%3A0xb6685e7f890af6d9!2sBalai%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1677037557628!5m2!1sid!2sid"></iframe>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-lg h-full zoom-out bg-opacity-90" style="transition-delay: 0.2s;">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fab fa-youtube text-rose-600 mr-3"></i>
                            Channel YouTube
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Ikuti perkembangan terbaru Bagian Tata Pemerintahan Kota Semarang melalui channel YouTube resmi kami.
                        </p>
                        <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                            <iframe class="w-full h-64" src="https://www.youtube.com/embed/lz2e61sfxO0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section id="news" class="py-20 px-4">
            <div class="container mx-auto max-w-6xl relative z-10">
                <div class="text-center mb-16 fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">
                        Berita Terkini
                    </h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-rose-600 to-amber-500 mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Informasi terbaru seputar kegiatan Bagian Tata Pemerintahan Kota Semarang
                    </p>
                </div>
                <div class="flex justify-center gap-8 flex-wrap md:flex-nowrap">
                    @foreach($latestNews as $news)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden cursor-pointer card-transition card hover:scale-105 transition-transform duration-300 ease-in-out h-full flex flex-col bg-opacity-90" onclick="window.location.href='{{ route('news.show', $news->slug) }}'">
                        @if($news->images)
                            @php
                                $images = json_decode($news->images, true);
                                $imagePath = is_array($images) && count($images) > 0 ? $images[0] : '';
                                $imagePath = str_replace('public/', '', $imagePath);
                            @endphp
                            @if($imagePath)
                                <div class="aspect-w-16 aspect-h-9">
                                    <img alt="{{ $news->title }}" class="w-full h-48 sm:h-56 object-cover" src="{{ asset('storage/' . $imagePath) }}"/>
                                </div>
                            @endif
                        @endif
                        <div class="p-4 sm:p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <span class="bg-red-600 text-white text-xs sm:text-sm font-bold px-2 sm:px-3 py-1 rounded inline-block">WARTA TAPEM</span>
                                <h2 class="text-lg sm:text-xl font-bold mt-3 line-clamp-2">{{ $news->title }}</h2>
                                <p class="text-gray-600 mt-3 text-sm sm:text-base line-clamp-3">{{ Str::limit(strip_tags($news->content), 150) }}</p>
                            </div>
                            <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer text-sm sm:text-base hover:text-red-700" href="{{ route('news.show', $news->slug) }}">Read more</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')

    <script>
        // Slideshow functionality
        let currentSlide = 0;
        let slideshowInterval;
        const slides = document.querySelectorAll('.slideshow-image');
        const totalSlides = slides.length;
        let slideshowActive = true;

        function showSlide(index) {
            // Wrap around if index is out of bounds
            if (index >= totalSlides) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = index;
            }

            // Hide all slides
            slides.forEach(slide => {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0');
            });

            // Show current slide
            slides[currentSlide].classList.remove('opacity-0');
            slides[currentSlide].classList.add('opacity-100');
        }

        function changeSlide(n) {
            showSlide(currentSlide + n);
            resetSlideshowInterval();
        }

        function startSlideshow() {
            if (slideshowActive && totalSlides > 0) {
                slideshowInterval = setInterval(() => changeSlide(1), 5000);
            }
        }

        function resetSlideshowInterval() {
            clearInterval(slideshowInterval);
            startSlideshow();
        }

        function toggleSlideshow() {
            const slideshowContainer = document.getElementById('slideshowContainer');
            const toggleButton = document.querySelector('.toggle-slideshow');

            if (slideshowActive) {
                // Hide slideshow
                slideshowContainer.style.opacity = '0';
                setTimeout(() => {
                    slideshowContainer.style.display = 'none';
                }, 500); // Wait for fade out transition
                toggleButton.textContent = '';
                clearInterval(slideshowInterval);
                slideshowActive = false;
            } else {
                // Show slideshow
                slideshowContainer.style.display = 'block';
                // Memaksa browser untuk melakukan reflow sebelum mengubah opacity
                slideshowContainer.offsetHeight;
                // Mengatur opacity ke 1 untuk menampilkan slideshow
                slideshowContainer.style.opacity = '1';
                toggleButton.textContent = '';
                slideshowActive = true;
                startSlideshow();
            }
        }

        // Red Topology Canvas Animation
        function initTopologyAnimation() {
            const canvas = document.getElementById('topologyCanvas');
            const ctx = canvas.getContext('2d');

            // Set canvas size
            function resizeCanvas() {
                const container = document.querySelector('.unified-section');
                canvas.width = container.offsetWidth;
                canvas.height = container.offsetHeight;
            }

            // Initial resize
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);

            // Animation settings
            const settings = {
                lineColor: '#e63946', // Bright red color
                lineWidth: 2,
                lineCount: 80,
                maxAmplitude: 80,
                speed: 0.02,
                segments: 100,
                opacity: 0.7
            };

            // Create nodes
            const nodes = [];
            for (let i = 0; i < settings.lineCount; i++) {
                nodes.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    vx: Math.random() * 0.5 - 0.25,
                    vy: Math.random() * 0.5 - 0.25,
                    radius: Math.random() * 3 + 1,
                    amplitude: Math.random() * settings.maxAmplitude + 20,
                    frequency: Math.random() * 0.01 + 0.005,
                    phase: Math.random() * Math.PI * 2
                });
            }

            // Animation loop
            let time = 0;
            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // Update time
                time += settings.speed;

                // Draw wavy lines between nodes
                ctx.strokeStyle = settings.lineColor;
                ctx.lineWidth = settings.lineWidth;
                ctx.globalAlpha = settings.opacity;

                for (let i = 0; i < nodes.length; i++) {
                    const nodeA = nodes[i];

                    // Update node position with smooth movement
                    nodeA.x += nodeA.vx;
                    nodeA.y += nodeA.vy;

                    // Bounce off edges
                    if (nodeA.x < 0 || nodeA.x > canvas.width) nodeA.vx *= -1;
                    if (nodeA.y < 0 || nodeA.y > canvas.height) nodeA.vy *= -1;

                    // Draw connections to nearby nodes
                    for (let j = i + 1; j < nodes.length; j++) {
                        const nodeB = nodes[j];
                        const dx = nodeB.x - nodeA.x;
                        const dy = nodeB.y - nodeA.y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        // Only draw lines between nearby nodes
                        if (distance < 150) {
                            // Create wavy line effect
                            ctx.beginPath();
                            ctx.moveTo(nodeA.x, nodeA.y);

                            // Draw wavy line with multiple segments
                            for (let s = 1; s <= settings.segments; s++) {
                                const t = s / settings.segments;
                                const x = nodeA.x + dx * t;
                                const y = nodeA.y + dy * t;

                                // Add wave effect
                                const waveOffset = Math.sin(time + t * Math.PI * 1) *
                                                  (nodeA.amplitude + nodeB.amplitude) / 1 *
                                                  Math.sin(t * Math.PI);

                                // Perpendicular direction for the wave
                                const perpX = -dy / distance;
                                const perpY = dx / distance;

                                const waveX = x + perpX * waveOffset;
                                const waveY = y + perpY * waveOffset;

                                ctx.lineTo(waveX, waveY);
                            }

                            ctx.stroke();
                        }
                    }
                }

                requestAnimationFrame(animate);
            }

            // Start animation
            animate();
        }

        // Initialize slideshow and background animation
        document.addEventListener('DOMContentLoaded', function() {
            if(totalSlides > 0) {
                showSlide(0);
                startSlideshow();
            }

            // Initialize topology animation
            initTopologyAnimation();
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

        // Header shrink on scroll
        const header = document.querySelector('header');
        function handleScroll() {
            if (window.scrollY > 50) {
                header.classList.add('shrink');
            } else {
                header.classList.remove('shrink');
            }
        }
        window.addEventListener('scroll', handleScroll);

        // Intersection Observer for animations
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                } else {
                    entry.target.classList.remove('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.card');
            cards.forEach((card) => {
                observer.observe(card);
            });

            document.querySelectorAll('.fade-in, .slide-in, .zoom-out, .zoom-in').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>

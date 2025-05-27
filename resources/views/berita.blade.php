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
        .andika-font {
            font-family: 'Andika New Basic', sans-serif;
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
        .hover-underline:hover {
    text-decoration: underline; /* Menampilkan underline saat hover */
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
        /* Gaya saat cursor berada di atas teks */
.hover-underline:hover {
    text-decoration: underline; /* Menampilkan underline saat hover */
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

        /* Animasi muncul bertahap */
        .card {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 1s ease, transform 1s ease;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 15px rgb(255, 255, 255);
        }
        .card.visible {
            opacity: 1;
            transform: scale(1);
        }
    </style>
<body class="font-sans" onclick="closeAllDropdowns(event)">
    @include('layouts.navbar2')
    @section('page-title', 'BERITA')
    @section('page-subtitle', 'BERITA')
    @section('parent-menu', 'INFORMASI & LAYANAN')
    @include('layouts.navbar-hitam')
<body class="bg-black text-white">
    <div class="relative min-h-screen flex items-center justify-center">
        <div class="absolute inset-0 w-full h-full" style="background-image: url('img/rev-bg2.png'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        </div>
        <div class="relative container mx-auto py-8 px-4">
            <div class="text-white p-6 md:p-10 rounded-xl max-w-3xl mx-auto">
              <h1 class="text-2xl md:text-6xl font-semibold mb-2 headline-font text-center zoom-in">
                  <i class="fas fa-newspaper text-yellow-400 mr-2 text-base md:text-6xl"></i>
                  KUMPULAN BERITA
                </h1>
              <div class="text-4xl md:text-3xl inconsolata-font font-bold text-red-700 italic text-center zoom-in" style="animation-delay: 0.3s;">
                  BAGIAN TATA PEMERINTAHAN
                </div>
              <div class="w-24 h-1 bg-yellow-300 mx-auto mt-4 mb-2 rounded-full fade-up" style="animation-delay: 0.5s;"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4 sm:px-6 lg:px-8">
                @foreach($news as $item)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden cursor-pointer card-transition card hover:scale-105 transition-transform duration-300 ease-in-out h-full flex flex-col" onclick="window.location.href='{{ route('news.show', $item->slug) }}'">
                        @if($item->images)
                            @php
                                $images = json_decode($item->images, true);
                                $imagePath = is_array($images) && count($images) > 0 ? $images[0] : '';
                                $imagePath = str_replace('public/', '', $imagePath);
                            @endphp
                            @if($imagePath)
                                <div class="aspect-w-16 aspect-h-9">
                                    <img alt="{{ $item->title }}" class="w-full h-48 sm:h-56 object-cover" src="{{ asset('storage/' . $imagePath) }}"/>
                                </div>
                            @endif
                        @endif
                        <div class="p-4 sm:p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <span class="bg-red-600 text-white text-xs sm:text-sm font-bold px-2 sm:px-3 py-1 rounded inline-block">WARTA TAPEM</span>
                                <h2 class="text-lg sm:text-xl font-bold mt-3 line-clamp-2">{{ $item->title }}</h2>
                                <p class="text-gray-600 mt-3 text-sm sm:text-base line-clamp-3">{{ Str::limit(strip_tags($item->content), 150) }}</p>
                            </div>
                            <a class="text-red-600 font-bold mt-4 inline-block cursor-pointer text-sm sm:text-base hover:text-red-700" href="{{ route('news.show', $item->slug) }}">Read more</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
</body>
@include('layouts.footer')
  <script>
    var slideIndex = 0;
    var slides = [
        "img/slideshow1.png",
        "img/slideshow2.jpeg",
        "img/slideshow3.jpg"
    ];

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

    function toggleSlideshow() {
var slideshowContainer = document.getElementById("slideshowContainer");
var contentContainer = document.getElementById("contentContainer");
var slideshowToggle = document.getElementById("slideshowToggle");

if (slideshowToggle.checked) {
slideshowContainer.style.display = "block";
contentContainer.classList.add("min-h-screen");
contentContainer.classList.remove("py-16");
} else {
slideshowContainer.style.display = "none";
contentContainer.classList.remove("min-h-screen");
contentContainer.classList.add("py-16");
}
document.querySelector('.hover-underline').addEventListener('mouseenter', function() {
this.style.textDecoration = 'underline';
});

document.querySelector('.hover-underline').addEventListener('mouseleave', function() {
this.style.textDecoration = 'none';
});

// Re-observe elements to trigger animations
document.querySelectorAll('.fade-in, .slide-in, .zoom-out, .zoom-in').forEach(element => {
observer.observe(element);
});
}

function toggleSlideshowMobile() {
var slideshowContainer = document.getElementById("slideshowContainer");
var contentContainer = document.getElementById("contentContainer");
var slideshowToggleMobile = document.getElementById("slideshowToggleMobile");

if (slideshowToggleMobile.checked) {
slideshowContainer.style.display = "block";
contentContainer.classList.add("min-h-screen");
contentContainer.classList.remove("py-16");
} else {
slideshowContainer.style.display = "none";
contentContainer.classList.remove("min-h-screen");
contentContainer.classList.add("py-16");
}

// Re-observe elements to trigger animations
document.querySelectorAll('.fade-in, .slide-in, .zoom-out, .zoom-in').forEach(element => {
observer.observe(element);
});
}

window.onload = function() {
document.getElementById("slideshowToggle").checked = true;
toggleSlideshow();
};

const observer = new IntersectionObserver(entries => {
entries.forEach(entry => {
if (entry.isIntersecting) {
    entry.target.classList.add('visible');
} else {
    entry.target.classList.remove('visible'); // Optional: Remove visible class if element is not in viewport
}
});
}, {

threshold: 0.1 // Adjust this value as needed
});

document.addEventListener('DOMContentLoaded', function () {
const cards = document.querySelectorAll('.card');

const observer = new IntersectionObserver((entries) => {
entries.forEach((entry, index) => {
    if (entry.isIntersecting) {
        // Saat card masuk ke viewport
        setTimeout(() => {
            entry.target.classList.add('visible');
        }, index * 200); // Stagger the animation
    } else {
        // Saat card keluar dari viewport
        entry.target.classList.remove('visible');
    }
});
}, {
threshold: 0.1 // Trigger saat 30% card terlihat
});

cards.forEach((card) => {
observer.observe(card); // Mulai mengamati setiap card
});
});

document.addEventListener('DOMContentLoaded', function() {
document.querySelectorAll('.fade-in, .slide-in, .zoom-out, .zoom-in').forEach(element => {
observer.observe(element);
});
});
    window.onload = function() {
        document.getElementById("slideshowToggle").checked = true;
        toggleSlideshow();
    };
</script>
</body>
</html>

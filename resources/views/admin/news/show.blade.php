<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $news->title }} - Tata Pemerintahan Kota Semarang</title>
    <link rel="icon" type="image/png" href="{{ asset('img/rel.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Judson:wght@700&family=Inconsolata:wght@400&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet">
    <style>
        .hover-grow { display: inline-block; }
        .hover-grow:hover { transform: scale(1.05); transition: transform 0.3s ease-in-out; }
        .dropdown-content { display: none; position: absolute; z-index: 20; background-color: #333; color: white; }
        .andika-font { font-family: 'Andika New Basic', sans-serif; }
        .judson-font { font-family: 'Judson', serif; }
        .inconsolata-font { font-family: 'Inconsolata', monospace; }
        .arvo-font { font-family: 'Arvo', serif; }
        .hover-underline:hover { text-decoration: underline; }
    </style>
</head>
<body class="bg-gray-100">
    <div class="bg-black text-white">
        <div class="flex justify-between items-center p-4">
            <div class="text-2xl font-bold andika-font ml-20">BERITA</div>
            <div class="flex items-center space-x-1 inconsolata-font ml-auto mr-16">
                <span onclick="window.location.href='/'" class="cursor-pointer">BERANDA</span>
                <i class="fas fa-chevron-right"></i>
                <span>BERITA</span>
            </div>
        </div>
    </div>
    
    <div class="relative w-full p-12 mx-auto flex items-center justify-center min-h-screen pt-6">
        <img alt="Background image of a cityscape with buildings and a clear sky" class="absolute inset-0 w-full h-full object-cover z-0" height="1080" src="{{ asset('img/background4.png') }}" width="1920"/>
        <main class="container mx-auto py-8 relative z-10 rounded-lg">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/3 mx-auto p-4">
                    <div class="relative bg-gray-800 bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-6xl text-white z-10">
                        <h1 class="text-4xl judson-font font-bold text-center">
                            {{ $news->title }}
                        </h1>
                        <div class="flex justify-center arvo-font items-center text-white mt-2">
                            <span class="mr-2">
                                {{ $news->created_at->format('Y-m-d') }}
                            </span>
                            <span class="mr-2">|</span>
                            <span>tapem</span>
                        </div>
                        
                        @if($news->images)
                        <div id="newsCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                @foreach(json_decode($news->images) as $index => $image)
                                    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                @endforeach
                            </div>
                            <div class="carousel-inner rounded-lg">
                                @foreach(json_decode($news->images) as $index => $image)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/' . $image) }}" class="d-block w-100" alt="News Image {{ $index + 1 }}">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        @endif

                        <div class="text-2xl inconsolata-font mt-4 text-justify">
                            {!! nl2br(e($news->content)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
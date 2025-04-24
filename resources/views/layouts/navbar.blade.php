<header class="sticky top-0 z-50 border-b bg-white">
    <div class="container mx-auto flex justify-between items-center py-4">
        <div class="flex items-center">
            <a href="http://127.0.0.1:8000/">
                <img src="/img/logo-pemkot.png" alt="Logo TAPEM" class="h-20 w-80 mr-4" />
            </a>
        </div>
        <div class="hidden md:flex items-center space-x-6 inconsolata-font">
            <a class="text-black text-lg" href="/tentang">TENTANG</a>
            <span class="text-lg">|</span>
            <a class="text-black text-lg" href="/regulasi">REGULASI</a>
            <span class="text-lg">|</span>
            <a class="text-black text-lg" href="/kontak">KONTAK</a>
            @if(request()->is('/'))
            <div class="flex flex-col items-center">
                <a class="text-black text-lg flex items-center" href="#">SLIDESHOW</a>
                <label class="relative inline-flex items-center cursor-pointer mt-2">
                    <input checked class="sr-only peer no-outline" id="slideshowToggle" onclick="toggleSlideshow()" type="checkbox" />
                    <div class="w-12 h-7 bg-gray-400 rounded-full peer peer-focus:ring-0 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-[#760000]"></div>
                </label>
            </div>
            @endif
        </div>
        <div class="md:hidden flex items-center space-x-6 inconsolata-font">
            <a class="text-black text-lg" href="/regulasi">REGULASI</a>
            <span class="text-lg">|</span>
            <a class="text-black text-lg" href="/kontak">KONTAK</a>
            @if(request()->is('/'))
            <div class="flex flex-col items-center">
                <a class="text-black text-lg flex items-center" href="#">SLIDESHOW</a>
                <label class="relative inline-flex items-center cursor-pointer mt-2">
                    <input checked class="sr-only peer no-outline" id="slideshowToggleMobile" onclick="toggleSlideshowMobile()" type="checkbox" />
                    <div class="w-12 h-7 bg-gray-200 rounded-full peer peer-focus:ring-0 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-[#760000]"></div>
                </label>
            </div>
            @endif
        </div>
    </div>
    @php
    $uniqueParentMenus = \App\Models\Page::whereNotNull('parent_page')->select('parent_page')->distinct()->where('is_published', true)->orderBy('order')->get();
@endphp
<nav class="bg-[#FEFF01] border-t border-b border-gray-600">
        <div class="container mx-auto flex justify-between items-center py-3">
            <div class="flex items-center space-x-6 inconsolata-font">
                @foreach($uniqueParentMenus as $parentMenu)
                <div class="relative">
                    @php
                        // Menghilangkan format tanggal dari judul parent menu
                        $parentTitle = preg_replace('/^\d{4}-\d{2}-\d{2}\s*\|\s*/', '', $parentMenu->parent_page);
                    @endphp
                    <button class="text-black text-lg" onclick="toggleDropdown(event, 'dropdown_{{ $loop->index }}')">{{ strtoupper($parentTitle) }} <i class="fas fa-caret-down"></i></button>
                    <div class="absolute bg-gray-800 shadow-lg mt-3 group-hover:block dropdown-content min-w-[200px]" id="dropdown_{{ $loop->index }}">
                        <ul class="py-2 text-sm">
                            @php
                                $childPages = \App\Models\Page::where('parent_page', $parentMenu->parent_page)->where('is_published', true)->orderBy('order')->get();
                            @endphp
                            @foreach($childPages as $childPage)
                            @php
                                // Menghilangkan format tanggal dari judul child page
                                $childTitle = preg_replace('/^\d{4}-\d{2}-\d{2}\s*\|\s*/', '', $childPage->title);
                            @endphp
                            <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/{{ $childPage->slug }}">{{ strtoupper($childTitle) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="flex items-center space-x-3">
                <div id="realtime-clock" class="mr-4 inconsolata-font text-lg text-black"></div>
                <i class="fas fa-envelope text-red-600 text-lg"></i>
                <a class="text-red-600 inconsolata-font text-lg hover-underline" href="mailto:tapemkotasmg@gmail.com">tapemkotasmg@gmail.com</a>
            </div>
            <script>
                function updateClock() {
                    const now = new Date();
                    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                    const dateString = now.toLocaleDateString('id-ID', options);
                    
                    let hours = now.getHours();
                    let minutes = now.getMinutes();
                    let seconds = now.getSeconds();
                    
                    // Add leading zeros
                    hours = hours < 10 ? '0' + hours : hours;
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    seconds = seconds < 10 ? '0' + seconds : seconds;
                    
                    const timeString = `${hours}:${minutes}:${seconds}`;
                    document.getElementById('realtime-clock').innerHTML = `<i class="far fa-clock mr-1"></i> ${dateString} | ${timeString}`;
                }
                
                // Update clock immediately and then every second
                updateClock();
                setInterval(updateClock, 1000);
            </script>
        </div>
    </nav>
</header>

{{-- Breadcrumb Section --}}
@if(!request()->is('/'))
<div class="bg-black text-white">
    <div class="flex justify-between items-center p-4">
        <div class="text-2xl font-bold andika-font ml-20">
            @php
                // Mendapatkan judul halaman saat ini
                $currentTitle = '';
                $parentTitle = '';
                $currentSlug = request()->path();
                
                // Cek apakah ini halaman dinamis
                $currentPage = \App\Models\Page::where('slug', $currentSlug)->first();
                
                if ($currentPage) {
                    // Menghilangkan format tanggal dari judul
                    $currentTitle = preg_replace('/^\d{4}-\d{2}-\d{2}\s*\|\s*/', '', $currentPage->title);
                    
                    // Jika halaman memiliki parent
                    if ($currentPage->parent_page) {
                        $parentTitle = preg_replace('/^\d{4}-\d{2}-\d{2}\s*\|\s*/', '', $currentPage->parent_page);
                        $parentSlug = \App\Models\Page::where('title', 'like', '%' . $parentTitle . '%')
                                    ->where('parent_page', null)
                                    ->value('slug');
                    }
                } else {
                    // Untuk halaman statis seperti berita, kontak, dll
                    $currentTitle = ucwords(str_replace('-', ' ', $currentSlug));
                }
            @endphp
            {{ strtoupper($currentTitle) }}
         </div>
        <div class="flex items-center space-x-1 inconsolata-font ml-auto mr-16">
            @if($parentTitle)
                <span onclick="window.location.href='/{{ $parentSlug ?? '#' }}'" class="cursor-pointer hover:underline">{{ strtoupper($parentTitle) }}</span>
                <i class="fas fa-chevron-right"></i>
                <span>{{ strtoupper($currentTitle) }}</span>
            @else
                <span>{{ strtoupper($currentTitle) }}</span>
            @endif
        </div>
    </div>
</div>
@endif
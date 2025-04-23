<header class="sticky top-0 z-50 border-b bg-white">
    <div class="container mx-auto flex justify-between items-center py-4">
        <div class="flex items-center">
            <a href="/" onclick="refreshPage(event)">
                <img src="/img/logo-pemkot.png" alt="Logo TAPEM" class="h-20 w-80 mr-4" />
            </a>
            <script>
                function refreshPage(event) {
                    event.preventDefault();
                    location.reload();
                    window.scrollTo(0, 0);
                }
            </script>
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
                    <button class="text-black text-lg" onclick="toggleDropdown(event, 'dropdown_{{ $loop->index }}')">{{ strtoupper($parentMenu->parent_page) }} <i class="fas fa-caret-down"></i></button>
                    <div class="absolute bg-gray-800 shadow-lg mt-3 group-hover:block dropdown-content min-w-[200px]" id="dropdown_{{ $loop->index }}">
                        <ul class="py-2 text-sm">
                            @php
                                $childPages = \App\Models\Page::where('parent_page', $parentMenu->parent_page)->where('is_published', true)->orderBy('order')->get();
                            @endphp
                            @foreach($childPages as $childPage)
                            <li><a class="block px-4 py-3 hover:bg-[#FEFF01] hover:text-black" href="/{{ $childPage->slug }}">{{ strtoupper($childPage->title) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="flex items-center space-x-3">
                <i class="fas fa-envelope text-red-600 text-lg"></i>
                <a class="text-red-600 inconsolata-font text-lg hover-underline" href="mailto:tapemkotasmg@gmail.com">tapemkotasmg@gmail.com</a>
            </div>
        </div>
    </nav>
</header>

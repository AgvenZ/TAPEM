<header class="sticky top-0 z-50 border-b bg-gradient-to-r from-gray-100/80 to-gray-300/80 shadow-lg backdrop-blur-sm transition-all duration-300 ease-in-out">
<style>
    /* CSS untuk dropdown hover */
    .relative.group:hover .dropdown-content {
        display: block !important;
    }
</style>
    <div class="container mx-auto flex justify-between items-center py-4">
        <div class="flex items-center">
            <a href="http://127.0.0.1:8000/" class="logo-container overflow-hidden">
                <img src="/img/logo-pemkot.png" alt="Logo TAPEM" class="h-20 w-80 mr-4 transition-transform duration-500 hover:scale-90" />
            </a>
        </div>
        <div class="hidden md:flex items-center space-x-6 inconsolata-font">
            <a class="text-black text-lg relative nav-link overflow-hidden group flex items-center" href="/tentang">
                <i class="fas fa-info-circle mr-2 text-red-600 group-hover:text-yellow-500 transition-colors duration-300"></i>
                <span class="relative z-10 group-hover:text-red-600 transition-colors duration-300">TENTANG</span>
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-600 to-yellow-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
            <span class="text-lg text-gray-400">|</span>
            <a class="text-black text-lg relative nav-link overflow-hidden group flex items-center" href="/regulasi">
                <i class="fas fa-gavel mr-2 text-red-600 group-hover:text-yellow-500 transition-colors duration-300"></i>
                <span class="relative z-10 group-hover:text-red-600 transition-colors duration-300">REGULASI</span>
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-600 to-yellow-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
            <span class="text-lg text-gray-400">|</span>
            <a class="text-black text-lg relative nav-link overflow-hidden group flex items-center" href="/kontak">
                <i class="fas fa-envelope mr-2 text-red-600 group-hover:text-yellow-500 transition-colors duration-300"></i>
                <span class="relative z-10 group-hover:text-red-600 transition-colors duration-300">KONTAK</span>
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-600 to-yellow-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
            @if(request()->is('/'))
            <div class="flex flex-col items-center ml-2">
                <a class="text-black text-lg flex items-center group">
                    <i class="fas fa-images mr-2 text-red-600 group-hover:text-yellow-500 transition-colors duration-300"></i>
                    <span class="group-hover:text-red-600 transition-colors duration-300">SLIDESHOW</span>
                </a>
                <label class="relative inline-flex items-center cursor-pointer mt-2 transform hover:scale-105 transition-transform duration-300">
                    <input checked class="sr-only peer no-outline" id="slideshowToggle" onclick="toggleSlideshow()" type="checkbox" />
                    <div class="w-12 h-7 bg-gray-400 rounded-full peer peer-focus:ring-2 peer-focus:ring-red-300 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-gradient-to-r peer-checked:from-red-600 peer-checked:to-red-800 shadow-md"></div>
                </label>
            </div>
            @endif
        </div>
    </div>
    @php
    $uniqueParentMenus = \App\Models\Page::whereNotNull('parent_page')->select('parent_page')->distinct()->where('is_published', true)->orderBy('order')->get();
    @endphp
    <nav class="bg-gradient-to-r from-[#8B0000] to-[#A52A2A] border-t border-b border-gray-300 shadow-md">
        <div class="container mx-auto flex justify-between items-center py-3">
            <div class="flex items-center space-x-6 inconsolata-font">
                @foreach($uniqueParentMenus as $parentMenu)
                <div class="relative group">
                    @php
                        // Menghilangkan format tanggal dari judul parent menu
                        $parentTitle = preg_replace('/^\d{4}-\d{2}-\d{2}\s*\|\s*/', '', $parentMenu->parent_page);
                    @endphp
                    <button class="text-white text-lg font-medium relative overflow-hidden group flex items-center" onclick="toggleDropdown(event, 'dropdown_{{ $loop->index }}')">
                        <span class="relative z-10 group-hover:text-yellow-300 transition-colors duration-300 flex items-center">
                            {{ strtoupper($parentTitle) }}
                            <i class="fas fa-caret-down ml-1 transform group-hover:rotate-180 transition-transform duration-300 text-yellow-300"></i>
                        </span>
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-yellow-300 to-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                    </button>
                    <div class="absolute bg-[#333] rounded-md shadow-xl mt-3 dropdown-content min-w-[220px] transform z-50 border border-gray-200" id="dropdown_{{ $loop->index }}" style="display: none;">
                        <ul class="py-2 text-sm">
                            @php
                                $childPages = \App\Models\Page::where('parent_page', $parentMenu->parent_page)->where('is_published', true)->orderBy('order')->get();
                            @endphp
                            @foreach($childPages as $childPage)
                            @php
                                // Menghilangkan format tanggal dari judul child page
                                $childTitle = preg_replace('/^\d{4}-\d{2}-\d{2}\s*\|\s*/', '', $childPage->title);
                            @endphp
                            <li class="hover:bg-[#A52A2A] transition-colors duration-200">
                                <a class="block px-4 py-2 text-white hover:text-yellow-300 hover:bg-[#A52A2A] transition-all duration-200 border-l-2 border-transparent hover:border-yellow-300 flex items-center" href="/{{ $childPage->slug }}">
                                    <i class="fas fa-chevron-right mr-2 text-red-500 opacity-100 transform -translate-x-2 transition-all duration-300"></i>
                                    {{ strtoupper($childTitle) }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="flex items-center space-x-3">
                <div id="realtime-clock" class="mr-4 inconsolata-font text-lg text-white bg-[rgba(0,0,0,0.4)] px-3 py-1 rounded-lg shadow-sm border border-gray-200"></div>
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="focus:outline-none">
                        <i class="fas fa-envelope text-white text-lg bg-red-600 p-2 rounded-full shadow-md hover:bg-red-700 transition-all duration-300 transform hover:scale-110 cursor-pointer"></i>
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="absolute -right-2 bottom-full mb-2 bg-white p-2 rounded-lg shadow-xl z-50 min-w-[250px]">
                        <div class="text-sm text-gray-800 font-medium flex items-center">
                            <i class="fas fa-envelope mr-2 text-red-600"></i>
                            <span>Email Kami:</span>
                        </div>
                        <a href="mailto:bagtapem@semarangkota.go.id" class="text-red-600 hover:text-red-800 text-sm mt-1 block break-all">bagtapem@semarangkota.go.id</a>
                    </div>
                </div>
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

<!-- Add Alpine.js CDN if not already included -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

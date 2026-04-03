{{-- =============================================
NAVBAR - KYH Wedding & Event Organizer
Alpine.js: scroll detection + mobile menu + active section
============================================= --}}

<nav x-data="{
        scrolled: false,
        mobileOpen: false,
        activeSection: 'home',
        init() {
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 50;
            });

            // Intersection Observer: detect which section is visible
            const sections = ['home', 'tentang', 'layanan', 'portofolio', 'kontak'];
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.activeSection = entry.target.id;
                    }
                });
            }, { rootMargin: '-30% 0px -60% 0px' });

            sections.forEach(id => {
                const el = document.getElementById(id);
                if (el) observer.observe(el);
            });
        }
    }" :class="scrolled
        ? 'bg-[#0D0D0D]/95 backdrop-blur-md shadow-lg shadow-black/30'
        : 'bg-transparent'" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            {{-- ===== LOGO ===== --}}
            <a href="{{ route('home') }}" class="flex items-center flex-shrink-0">
                <img src="{{ asset('assets/icons/icons_kyh.png') }}" alt="KYH Logo"
                    class="h-24 w-auto object-contain drop-shadow-[0_0_10px_rgba(201,168,76,0.5)]">
            </a>

            {{-- ===== DESKTOP NAV LINKS ===== --}}
            <ul class="hidden md:flex items-center gap-8">
                @php
                    $navLinks = [
                        ['label' => 'Home', 'href' => route('home'), 'section' => 'home'],
                        ['label' => 'Tentang Kami', 'href' => '#tentang', 'section' => 'tentang'],
                        ['label' => 'Layanan', 'href' => '#layanan', 'section' => 'layanan'],
                        ['label' => 'Portofolio', 'href' => '#portofolio', 'section' => 'portofolio'],
                        ['label' => 'Kontak', 'href' => '#kontak', 'section' => 'kontak'],
                    ];
                @endphp

                @foreach ($navLinks as $link)
                    <li>
                        <a href="{{ $link['href'] }}" :class="activeSection === '{{ $link['section'] }}'
                                    ? 'text-[#C9A84C] after:w-full'
                                    : 'text-white/80 hover:text-[#C9A84C] after:w-0 hover:after:w-full'" class="relative text-sm font-medium tracking-wider uppercase transition-colors duration-300
                                       after:content-[''] after:absolute after:left-0 after:bottom-[-4px]
                                       after:h-[1px] after:bg-[#C9A84C] after:transition-all after:duration-300">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- ===== DARK MODE TOGGLE (Desktop) ===== --}}
            <button
                @click="$store.theme.toggle()"
                class="theme-toggle hidden md:flex"
                :title="$store.theme.dark ? 'Switch to Light Mode' : 'Switch to Dark Mode'"
                aria-label="Toggle dark mode"
            >
                {{-- Sun: shown in dark mode, click → go light --}}
                <svg x-show="$store.theme.dark" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                </svg>
                {{-- Moon: shown in light mode, click → go dark --}}
                <svg x-show="!$store.theme.dark" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="display:none;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"/>
                </svg>
            </button>

            {{-- ===== CTA BUTTON (Desktop) ===== --}}
            <div class="hidden md:block">
                <a href="#kontak" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full text-sm font-semibold tracking-wider uppercase
                           bg-[#C9A84C] text-[#0D0D0D]
                           hover:bg-[#E2BE7A] hover:shadow-lg hover:shadow-[#C9A84C]/30
                           transform hover:-translate-y-0.5
                           transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                        <path
                            d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.12 1.526 5.854L0 24l6.302-1.503A11.957 11.957 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.01-1.373l-.36-.213-3.737.891.937-3.637-.234-.374A9.774 9.774 0 012.182 12C2.182 6.565 6.565 2.182 12 2.182S21.818 6.565 21.818 12 17.435 21.818 12 21.818z" />
                    </svg>
                    Konsultasi Gratis
                </a>
            </div>

            {{-- ===== HAMBURGER BUTTON (Mobile) ===== --}}
            <button @click="mobileOpen = !mobileOpen"
                class="md:hidden p-2 rounded-lg text-white/80 hover:text-[#C9A84C] transition-colors duration-300"
                aria-label="Toggle navigation">
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" style="display:none;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>
    </div>

    {{-- ===== MOBILE MENU ===== --}}
    <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-[#0D0D0D]/97 backdrop-blur-md border-t border-[#C9A84C]/20" style="display: none;">
        <div class="px-4 py-6 space-y-1">
            @foreach ($navLinks as $link)
                <a href="{{ $link['href'] }}" @click="mobileOpen = false" class="block px-4 py-3 text-sm font-medium tracking-wider uppercase text-white/80
                               hover:text-[#C9A84C] hover:bg-white/5 rounded-lg transition-colors duration-200">
                    {{ $link['label'] }}
                </a>
            @endforeach

            {{-- Dark mode toggle in mobile --}}
            <button
                @click="$store.theme.toggle(); mobileOpen = false"
                class="w-full flex items-center gap-3 px-4 py-3 text-sm font-medium tracking-wider uppercase
                       text-white/80 hover:text-[#C9A84C] hover:bg-white/5 rounded-lg transition-colors duration-200"
            >
                <svg x-show="$store.theme.dark" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                </svg>
                <svg x-show="!$store.theme.dark" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="display:none;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"/>
                </svg>
                <span x-text="$store.theme.dark ? 'Light Mode' : 'Dark Mode'"></span>
            </button>

            <div class="pt-4 pb-2">
                <a href="#kontak" @click="mobileOpen = false" class="block w-full text-center py-3 rounded-full font-semibold tracking-wider uppercase
                           bg-[#C9A84C] text-[#0D0D0D] hover:bg-[#E2BE7A] transition-colors duration-300">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </div>

</nav>
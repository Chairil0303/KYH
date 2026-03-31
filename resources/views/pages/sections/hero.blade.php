{{-- =============================================
     HERO SECTION
     id="home" → navbar Home anchor
     ============================================= --}}
<section
    id="home"
    class="relative min-h-screen flex items-center justify-center overflow-hidden"
    x-data="{ loaded: false }"
    x-init="setTimeout(() => loaded = true, 100)"
>
    {{-- Background Image --}}
    <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/images/hero-bg.jpg') }}');"
    ></div>

    {{-- Gradient Overlay --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/75 via-black/55 to-black/85"></div>

    {{-- Gold vignette bottom --}}
    <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-[#C9A84C]/10 to-transparent"></div>

    {{-- Bokeh particles --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/5 w-2 h-2 rounded-full bg-[#C9A84C]/30 animate-ping" style="animation-duration:3s;"></div>
        <div class="absolute top-1/3 right-1/4 w-1.5 h-1.5 rounded-full bg-[#C9A84C]/20 animate-ping" style="animation-duration:4s; animation-delay:1s;"></div>
        <div class="absolute bottom-1/3 left-1/3 w-1 h-1 rounded-full bg-white/25 animate-ping" style="animation-duration:5s; animation-delay:2s;"></div>
        <div class="absolute top-2/3 right-1/3 w-2 h-2 rounded-full bg-[#C9A84C]/15 animate-ping" style="animation-duration:3.5s; animation-delay:0.5s;"></div>
    </div>

    {{-- Hero Content --}}
    <div
        class="relative z-10 text-center px-4 sm:px-6 max-w-4xl mx-auto pt-24"
        :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        style="transition: all 1s ease;"
    >
        {{-- Top ornament --}}
        <div class="flex items-center justify-center gap-4 mb-8">
            <span class="h-px w-16 bg-gradient-to-r from-transparent to-[#C9A84C]"></span>
            <span class="text-[#C9A84C] text-xs tracking-[0.4em] uppercase font-medium">Wedding & Event Organizer</span>
            <span class="h-px w-16 bg-gradient-to-l from-transparent to-[#C9A84C]"></span>
        </div>

        {{-- H1 --}}
        <h1
            class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-4 leading-none tracking-tight"
            style="font-family:'Playfair Display',serif;"
        >
            Kita Yang
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#C9A84C] via-[#E2BE7A] to-[#C9A84C]">
                Handle
            </span>
        </h1>

        {{-- Italic tagline --}}
        <p class="text-lg sm:text-xl md:text-2xl text-white/70 italic mb-8 tracking-wide" style="font-family:'Playfair Display',serif;">
            "Serahkan semua pada kami, nikmati setiap momennya."
        </p>

        {{-- Welcome message --}}
        <p class="text-sm sm:text-base text-white/60 max-w-2xl mx-auto mb-12 leading-relaxed tracking-wide">
            Kami hadir untuk mewujudkan hari istimewa Anda menjadi sebuah kisah yang tak terlupakan.
            Dari dekorasi yang memukau hingga setiap detail kecil —
            <em class="text-[#C9A84C]/90 not-italic font-medium">Kita Yang Handle.</em>
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a
                href="#paket"
                id="hero-cta-primary"
                class="group inline-flex items-center gap-3 px-8 py-4 rounded-full
                       bg-gradient-to-r from-[#C9A84C] to-[#A07830]
                       text-[#0D0D0D] font-semibold text-sm tracking-widest uppercase
                       shadow-xl shadow-[#C9A84C]/30
                       hover:shadow-[#C9A84C]/50 hover:from-[#E2BE7A] hover:to-[#C9A84C]
                       transform hover:-translate-y-1 transition-all duration-500"
            >
                <svg class="w-5 h-5 group-hover:rotate-12 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"/>
                </svg>
                Lihat Paket Pernikahan 2025
            </a>

            <a
                href="#kontak"
                id="hero-cta-secondary"
                class="inline-flex items-center gap-2 px-8 py-4 rounded-full
                       border border-white/30 text-white/80 font-medium text-sm tracking-widest uppercase
                       hover:border-[#C9A84C] hover:text-[#C9A84C] hover:bg-white/5
                       transform hover:-translate-y-1 transition-all duration-500"
            >
                Konsultasi Gratis
            </a>
        </div>

        {{-- Scroll indicator --}}
        <div class="mt-16 flex flex-col items-center gap-2 animate-bounce">
            <span class="text-white/30 text-xs tracking-widest uppercase">Scroll</span>
            <svg class="w-5 h-5 text-[#C9A84C]/50" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
            </svg>
        </div>
    </div>
</section>

{{-- =============================================
OUR PARTNERS / CLIENT LOGO SECTION
id="partners" → infinite horizontal marquee
✓ Pure CSS Animation — no jQuery / no Slick
✓ Grayscale → full-color on hover
✓ Responsive: 5-6 logo desktop, 3-4 tablet, 2-3 mobile
✓ Path asset Laravel: {{ asset(...) }}
✓ Fade edge mask kiri-kanan untuk kesan premium
============================================= --}}

<section id="partners" class="py-20 md:py-28 bg-[#0D0D0D] relative overflow-hidden">

    {{-- Subtle top border line --}}
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#C9A84C]/30 to-transparent">
    </div>

    {{-- Decorative ambient glow --}}
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[200px] rounded-full bg-[#C9A84C]/4 blur-3xl pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-14" data-aos="fade-up">
            <span class="inline-block text-[#C9A84C] text-xs tracking-[0.4em] uppercase font-medium mb-4">
                — Dipercaya Oleh —
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight"
                style="font-family:'Playfair Display',serif;">
                Venue &amp; Partner
                <em class="text-[#C9A84C] not-italic">Terpercaya</em>
            </h2>
            <p class="mt-4 text-white/40 max-w-lg mx-auto text-sm leading-relaxed">
                Kami telah berkolaborasi dengan venue-venue terbaik untuk menghadirkan pengalaman yang tak terlupakan.
            </p>
        </div>

    </div>

    {{-- ================================================================
    MARQUEE WRAPPER — overflow hidden + fade mask kiri & kanan
    ================================================================ --}}
    <div class="partners-track-wrapper relative w-full overflow-hidden" data-aos="fade-up" data-aos-delay="100" {{--
        Pause on hover: CSS handles via .partners-track-wrapper:hover .partners-track --}}>

        {{-- Left fade mask --}}
        <div class="absolute left-0 top-0 bottom-0 w-24 sm:w-36 z-10 pointer-events-none"
            style="background: linear-gradient(to right, #0D0D0D 0%, transparent 100%);"></div>

        {{-- Right fade mask --}}
        <div class="absolute right-0 top-0 bottom-0 w-24 sm:w-36 z-10 pointer-events-none"
            style="background: linear-gradient(to left, #0D0D0D 0%, transparent 100%);"></div>

        {{-- Inner scrolling track — duplicated for seamless loop --}}
        <div class="partners-track flex items-center gap-12 md:gap-16 w-max" aria-label="Logo partner kami">

            {{-- ===== SET 1 (original) ===== --}}
            @php
                $logos = [
                    ['src' => asset('assets/icons/venue/1.png'), 'alt' => 'Partner Venue 1'],
                    ['src' => asset('assets/icons/venue/2.jpg'), 'alt' => 'Partner Venue 2'],
                    ['src' => asset('assets/icons/venue/3.jpg'), 'alt' => 'Partner Venue 3'],
                    ['src' => asset('assets/icons/venue/4.jpg'), 'alt' => 'Partner Venue 4'],
                    ['src' => asset('assets/icons/venue/5.jpg'), 'alt' => 'Partner Venue 5'],
                    ['src' => asset('assets/icons/venue/6.png'), 'alt' => 'Partner Venue 6'],
                    ['src' => asset('assets/icons/venue/7.png'), 'alt' => 'Partner Venue 7'],
                    ['src' => asset('assets/icons/venue/8.png'), 'alt' => 'Partner Venue 8'],
                    ['src' => asset('assets/icons/venue/9.png'), 'alt' => 'Partner Venue 9'],
                    ['src' => asset('assets/icons/venue/10.png'), 'alt' => 'Partner Venue 10'],
                ];
            @endphp

            @foreach ($logos as $logo)
                <div class="partners-logo-item flex-shrink-0">
                    <img src="{{ $logo['src'] }}" alt="{{ $logo['alt'] }}" loading="lazy" class="partners-logo h-16 sm:h-20 md:h-28 w-auto object-contain
                                       select-none pointer-events-none" draggable="false">
                </div>
            @endforeach

            {{-- ===== SET 2 (duplikat — untuk seamless infinite loop) ===== --}}
            @foreach ($logos as $logo)
                <div class="partners-logo-item flex-shrink-0" aria-hidden="true">
                    <img src="{{ $logo['src'] }}" alt="" loading="lazy" class="partners-logo h-16 sm:h-20 md:h-28 w-auto object-contain
                                       select-none pointer-events-none" draggable="false">
                </div>
            @endforeach

        </div><!-- /.partners-track -->
    </div><!-- /.partners-track-wrapper -->

    {{-- Subtle bottom border --}}
    <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent">
    </div>

</section>


{{-- ================================================================
STYLE — Pure CSS Animation (no external library)
================================================================ --}}
<style>
    /* ── Keyframe: geser dari 0 → -50% (karena track = 2× panjang asli) ── */
    @keyframes partners-marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* ── Track utama ── */
    .partners-track {
        animation: partners-marquee 35s linear infinite;
        will-change: transform;
    }

    /* ── Pause saat hover wrapper ── */
    .partners-track-wrapper:hover .partners-track {
        animation-play-state: paused;
    }

    /* ── Logo: grayscale default → warna saat hover ── */
    .partners-logo {
        filter: grayscale(100%) brightness(0.75);
        opacity: 0.65;
        transition: filter 0.4s ease, opacity 0.4s ease, transform 0.3s ease;
    }

    .partners-logo-item:hover .partners-logo {
        filter: grayscale(0%) brightness(1);
        opacity: 1;
        transform: scale(1.08);
    }

    /* ── Responsive: pastikan logo pointer-events aktif per item ── */
    .partners-logo-item {
        cursor: default;
        padding: 0.5rem;
    }

    /* ── Aksesibilitas: reduce-motion ── */
    @media (prefers-reduced-motion: reduce) {
        .partners-track {
            animation: none;
        }
    }
</style>
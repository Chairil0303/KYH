<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description ?? 'KYH - Kita Yang Handle. Wedding & Event Organizer terpercaya di Jakarta. Kami mengambil alih stres Anda agar Anda bisa menikmati momen.' }}">
    <title>{{ $title ?? 'KYH - Kita Yang Handle | Wedding & Event Organizer' }}</title>

    {{-- Anti-FOUC: apply saved theme IMMEDIATELY before anything renders --}}
    <script>
        (function() {
            if (localStorage.getItem('kyh-theme') === 'dark') {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>

    {{-- Google Fonts: Playfair Display + Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- AOS (Animate On Scroll) CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    {{-- Alpine.store: global theme state (must be BEFORE Alpine CDN) --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('theme', {
                dark: document.documentElement.classList.contains('dark'),
                toggle() {
                    this.dark = !this.dark;
                    document.documentElement.classList.toggle('dark', this.dark);
                    localStorage.setItem('kyh-theme', this.dark ? 'dark' : 'light');
                }
            });
        });
    </script>

    {{-- Alpine.js CDN --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Vite: Tailwind CSS v4 + JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --gold:        #C9A84C;
            --gold-light:  #E2BE7A;
            --gold-dark:   #A07830;
            --black:       #0D0D0D;
            --off-white:   #FAF8F4;
            --charcoal:    #1A1A1A;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--off-white);
            color: var(--black);
        }

        .font-playfair { font-family: 'Playfair Display', serif; }
        .text-gold      { color: var(--gold); }
        .bg-gold        { background-color: var(--gold); }
        .border-gold    { border-color: var(--gold); }

        /* Smooth scroll offset for fixed navbar */
        [id] { scroll-margin-top: 80px; }

        /* AOS custom overrides */
        [data-aos] { pointer-events: none; }
        [data-aos].aos-animate { pointer-events: auto; }

        /* Portfolio filter transition */
        .portfolio-item {
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        /* Parallax helper */
        .parallax-bg {
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        /* =============================================
           SMOOTH THEME TRANSITION
           ============================================= */
        body,
        section,
        nav,
        footer {
            transition: background-color 0.35s ease;
        }
        p, h1, h2, h3, h4, span, label, a, li, button {
            transition: color 0.25s ease;
        }
        input, select, textarea {
            transition: background-color 0.25s ease, border-color 0.25s ease, color 0.25s ease;
        }

        /* =============================================
           DARK MODE OVERRIDES
           Only targets light sections — hero, portfolio,
           stats strip & footer are already dark.
           ============================================= */

        /* Body */
        html.dark body {
            background-color: #111111;
            color: #F0EAD8;
        }

        /* Light sections → near-black */
        html.dark #tentang,
        html.dark #layanan,
        html.dark #kontak {
            background-color: #141414;
        }

        /* ---- TENTANG KAMI ---- */
        html.dark #tentang h2,
        html.dark #tentang h3 {
            color: #F0EAD8;
        }
        html.dark #tentang h4 {
            color: #F0EAD8 !important;
        }
        html.dark #tentang p {
            color: rgba(240, 234, 216, 0.55) !important;
        }
        /* Label "— Tentang Kami —" stays gold (already text-[#C9A84C], no change needed) */
        /* "Kenali Kami Lebih Dekat" rounded CTA */
        html.dark #tentang a.rounded-full {
            background-color: #2D2D2D !important;
            color: #F0EAD8 !important;
        }
        html.dark #tentang a.rounded-full:hover {
            background-color: #C9A84C !important;
            color: #0D0D0D !important;
        }

        /* ---- LAYANAN ---- */
        html.dark #layanan h2 {
            color: #F0EAD8 !important;
        }
        html.dark #layanan > div > div > div:first-child p {
            color: rgba(240, 234, 216, 0.55) !important;
        }
        /* Service card CTA link color */
        html.dark #layanan .text-center a {
            color: #C9A84C !important;
            border-color: #C9A84C !important;
        }

        /* ---- KONTAK ---- */
        html.dark #kontak h2 {
            color: #F0EAD8 !important;
        }
        html.dark #kontak > div > div:first-child > p,
        html.dark #kontak > div > div:first-child > div > p {
            color: rgba(240, 234, 216, 0.55) !important;
        }
        /* Kontak label (gold) stays unchanged */

        /* Contact info card: bg-[#0D0D0D] is already dark → stays dark ✓ */

        /* "Kirim Pesan" form card */
        html.dark #kontak .bg-white {
            background-color: #1E1E1E !important;
        }
        html.dark #kontak h3 {
            color: #F0EAD8 !important;
        }
        html.dark #kontak form p {
            color: rgba(240, 234, 216, 0.45) !important;
        }
        /* Form labels */
        html.dark #kontak label {
            color: rgba(240, 234, 216, 0.6) !important;
        }
        /* Form fields */
        html.dark #kontak input,
        html.dark #kontak select,
        html.dark #kontak textarea {
            background-color: #252525 !important;
            border-color: rgba(240, 234, 216, 0.12) !important;
            color: #F0EAD8 !important;
        }
        html.dark #kontak input::placeholder,
        html.dark #kontak textarea::placeholder {
            color: rgba(240, 234, 216, 0.25) !important;
        }
        html.dark #kontak select option {
            background-color: #252525;
            color: #F0EAD8;
        }
        /* Footer note under button */
        html.dark #kontak .text-center.text-xs {
            color: rgba(240, 234, 216, 0.30) !important;
        }
        html.dark #kontak .text-center.text-xs a {
            color: #C9A84C !important;
        }

        /* ---- DARK MODE TOGGLE BUTTON ---- */
        .theme-toggle {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,0.2);
            color: rgba(255,255,255,0.7);
            cursor: pointer;
            transition: all 0.3s ease;
            background: transparent;
        }
        .theme-toggle:hover {
            border-color: rgba(201,168,76,0.6);
            color: #C9A84C;
            background: rgba(201,168,76,0.08);
        }
    </style>
</head>
<body class="antialiased">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Main Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <x-footer />

    {{-- AOS JS + Init --}}
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
            easing: 'ease-out-cubic',
            offset: 80,
        });
    </script>

</body>
</html>

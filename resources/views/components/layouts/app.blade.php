<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description ?? 'KYH - Kita Yang Handle. Wedding & Event Organizer terpercaya di Jakarta. Kami mengambil alih stres Anda agar Anda bisa menikmati momen.' }}">
    <title>{{ $title ?? 'KYH - Kita Yang Handle | Wedding & Event Organizer' }}</title>

    {{-- Google Fonts: Playfair Display + Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

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

</body>
</html>

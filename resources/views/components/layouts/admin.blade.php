<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description ?? 'KYH Admin Panel' }}">
    <title>{{ $title ?? 'Admin' }} — KYH Admin Panel</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* =====================================================
           KYH ADMIN — DESIGN TOKENS & BASE STYLES
           ===================================================== */
        :root {
            --gold:         #C9A84C;
            --gold-light:   #E2BE7A;
            --gold-dark:    #A07830;
            --bg:           #0F0F0F;
            --sidebar-bg:   #141414;
            --card-bg:      #1A1A1A;
            --border:       rgba(201,168,76,0.12);
            --text:         #F0EAD8;
            --text-muted:   rgba(240,234,216,0.45);
            --sidebar-w:    260px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        html, body {
            height: 100%;
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            -webkit-font-smoothing: antialiased;
        }

        /* ===== LAYOUT WRAPPER ===== */
        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        /* ===== MAIN CONTENT AREA ===== */
        .admin-main {
            flex: 1;
            margin-left: var(--sidebar-w);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ===== PAGE BODY ===== */
        .page-body {
            flex: 1;
            padding: 2rem;
        }

        /* ===== SHARED ALERT STYLES ===== */
        .alert-success {
            background: rgba(201,168,76,0.08);
            border: 1px solid rgba(201,168,76,0.25);
            border-radius: 6px;
            padding: 0.8rem 1.2rem;
            margin-bottom: 1.5rem;
            font-size: 0.825rem;
            color: var(--gold-light);
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .alert-error {
            background: rgba(220,38,38,0.06);
            border: 1px solid rgba(220,38,38,0.18);
            border-radius: 6px;
            padding: 0.8rem 1.2rem;
            margin-bottom: 1.5rem;
            font-size: 0.825rem;
            color: rgba(252,165,165,0.9);
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        /* ===== SHARED CARD STYLES ===== */
        .admin-card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 1.5rem;
        }

        .gold-pill {
            display: inline-block;
            background: rgba(201,168,76,0.1);
            border: 1px solid rgba(201,168,76,0.25);
            color: var(--gold);
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 0.3rem 0.9rem;
            border-radius: 100px;
        }

        /* ===== MOBILE ===== */
        @media (max-width: 768px) {
            .admin-main {
                margin-left: 0;
            }
        }
    </style>

    {{-- Optional per-page styles --}}
    {{ $styles ?? '' }}
</head>
<body>

<div class="admin-layout" x-data="{ mobileSidebar: false }">

    {{-- Sidebar Component --}}
    <x-admin.sidebar :active="$active ?? 'dashboard'" />

    {{-- Main --}}
    <div class="admin-main">

        {{-- Topbar Component --}}
        <x-admin.topbar :pageTitle="$pageTitle ?? 'Dashboard'" :pageSubtitle="$pageSubtitle ?? ''" />

        {{-- Page Content --}}
        <main class="page-body">

            {{-- Flash Messages --}}
            @if (session('success'))
                <div class="alert-success">
                    <svg style="width:16px;height:16px;flex-shrink:0;" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert-error">
                    <svg style="width:16px;height:16px;flex-shrink:0;" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                    {{ session('error') }}
                </div>
            @endif

            {{-- Slot: page content --}}
            {{ $slot }}

        </main>
    </div>

</div>

</body>
</html>

{{-- =============================================
     ADMIN SIDEBAR
     Props:
       $active  — current route name key (e.g. 'dashboard', 'events')
     ============================================= --}}

@props(['active' => 'dashboard'])

@php
    $nav = [
        'main' => [
            [
                'key'   => 'dashboard',
                'label' => 'Dashboard',
                'href'  => route('admin.dashboard'),
                'icon'  => 'M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z',
            ],
        ],
        'manajemen' => [
            [
                'key'   => 'events',
                'label' => 'Event & Pesanan',
                'href'  => '#',
                'icon'  => 'M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5',
            ],
            [
                'key'   => 'portfolio',
                'label' => 'Portofolio',
                'href'  => '#',
                'icon'  => 'M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z',
            ],
            [
                'key'   => 'services',
                'label' => 'Layanan & Paket',
                'href'  => '#',
                'icon'  => 'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z',
            ],
            [
                'key'   => 'messages',
                'label' => 'Pesan Masuk',
                'href'  => '#',
                'icon'  => 'M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155',
            ],
        ],
        'sistem' => [
            [
                'key'   => 'settings',
                'label' => 'Pengaturan',
                'href'  => '#',
                'icon'  => 'M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
            ],
        ],
    ];
@endphp

<style>
    /* ===== SIDEBAR ===== */
    .sidebar {
        width: var(--sidebar-w, 260px);
        background: var(--sidebar-bg);
        border-right: 1px solid var(--border);
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
        position: fixed;
        top: 0; left: 0;
        height: 100vh;
        z-index: 40;
        transition: transform 0.3s ease;
        overflow: hidden;
    }

    .sidebar-logo {
        padding: 1.75rem 1.5rem;
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex-shrink: 0;
    }

    .sidebar-logo img {
        height: 42px;
        width: auto;
        filter: drop-shadow(0 0 6px rgba(201,168,76,0.4));
    }

    .sidebar-logo-text {
        display: flex;
        flex-direction: column;
    }

    .sidebar-logo-text .logo-title {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: var(--gold);
    }

    .sidebar-logo-text .logo-sub {
        font-size: 0.6rem;
        color: var(--text-muted);
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .sidebar-nav {
        flex: 1;
        padding: 1.25rem 0.75rem;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: rgba(201,168,76,0.15) transparent;
    }

    .nav-section-label {
        font-size: 0.6rem;
        font-weight: 600;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: var(--text-muted);
        padding: 0.5rem 0.75rem;
        margin-bottom: 0.25rem;
    }

    .nav-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.65rem 0.75rem;
        border-radius: 6px;
        font-size: 0.825rem;
        font-weight: 500;
        color: var(--text-muted);
        text-decoration: none;
        transition: all 0.2s ease;
        margin-bottom: 2px;
    }

    .nav-item:hover {
        background: rgba(201,168,76,0.07);
        color: var(--gold-light);
    }

    .nav-item.active {
        background: rgba(201,168,76,0.12);
        color: var(--gold);
        border-left: 2px solid var(--gold);
        padding-left: calc(0.75rem - 2px);
    }

    .nav-item svg {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        opacity: 0.7;
    }

    .nav-item.active svg,
    .nav-item:hover svg {
        opacity: 1;
    }

    .sidebar-footer {
        flex-shrink: 0;
        padding: 1rem 0.75rem;
        border-top: 1px solid var(--border);
    }

    .logout-btn {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.6rem 0.75rem;
        border-radius: 6px;
        font-size: 0.8rem;
        font-weight: 500;
        color: rgba(240,100,100,0.7);
        transition: all 0.2s ease;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        font-family: 'Inter', sans-serif;
    }

    .logout-btn:hover {
        background: rgba(220,38,38,0.08);
        color: rgba(250,120,120,0.9);
    }

    .logout-btn svg {
        width: 15px;
        height: 15px;
        opacity: 0.8;
    }

    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
        }
        .sidebar.mobile-open {
            transform: translateX(0);
        }
    }
</style>

<aside class="sidebar" :class="mobileSidebar ? 'mobile-open' : ''">

    {{-- Logo --}}
    <div class="sidebar-logo">
        <img src="{{ asset('assets/icons/icons_kyh.png') }}" alt="KYH Logo">
        <div class="sidebar-logo-text">
            <span class="logo-title">KYH Admin</span>
            <span class="logo-sub">Wedding & Event</span>
        </div>
    </div>

    {{-- Navigation --}}
    <nav class="sidebar-nav">

        {{-- Menu Utama --}}
        <p class="nav-section-label">Menu Utama</p>
        @foreach ($nav['main'] as $item)
            <a href="{{ $item['href'] }}"
               class="nav-item {{ $active === $item['key'] ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                </svg>
                {{ $item['label'] }}
            </a>
        @endforeach

        {{-- Manajemen --}}
        <p class="nav-section-label" style="margin-top:1.25rem;">Manajemen</p>
        @foreach ($nav['manajemen'] as $item)
            <a href="{{ $item['href'] }}"
               class="nav-item {{ $active === $item['key'] ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                </svg>
                {{ $item['label'] }}
            </a>
        @endforeach

        {{-- Sistem --}}
        <p class="nav-section-label" style="margin-top:1.25rem;">Sistem</p>
        @foreach ($nav['sistem'] as $item)
            <a href="{{ $item['href'] }}"
               class="nav-item {{ $active === $item['key'] ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                </svg>
                {{ $item['label'] }}
            </a>
        @endforeach

    </nav>

    {{-- Logout --}}
    <div class="sidebar-footer">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">
                <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/>
                </svg>
                Keluar
            </button>
        </form>
    </div>

</aside>

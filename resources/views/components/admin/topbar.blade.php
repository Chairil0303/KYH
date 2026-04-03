{{-- =============================================
     ADMIN TOPBAR
     Props:
       $pageTitle    — page heading (e.g. 'Dashboard')
       $pageSubtitle — small subtitle below the heading
     ============================================= --}}

@props(['pageTitle' => 'Dashboard', 'pageSubtitle' => ''])

<style>
    /* ===== TOPBAR ===== */
    .topbar {
        height: 64px;
        background: var(--sidebar-bg);
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 2rem;
        position: sticky;
        top: 0;
        z-index: 30;
        flex-shrink: 0;
    }

    .topbar-left h1 {
        font-size: 1rem;
        font-weight: 600;
        color: var(--text);
        letter-spacing: 0.02em;
        line-height: 1.2;
    }

    .topbar-left p {
        font-size: 0.7rem;
        color: var(--text-muted);
        margin-top: 1px;
    }

    .topbar-right {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    /* Mobile hamburger */
    .topbar-hamburger {
        display: none;
        background: none;
        border: none;
        cursor: pointer;
        color: var(--text-muted);
        padding: 0.25rem;
        transition: color 0.2s ease;
    }

    .topbar-hamburger:hover { color: var(--gold); }
    .topbar-hamburger svg { width: 20px; height: 20px; }

    /* Admin badge */
    .admin-badge {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.4rem 0.85rem 0.4rem 0.4rem;
        background: rgba(201,168,76,0.06);
        border: 1px solid var(--border);
        border-radius: 100px;
        transition: background 0.2s ease;
    }

    .admin-badge:hover {
        background: rgba(201,168,76,0.10);
    }

    .admin-avatar {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--gold-dark), var(--gold));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.65rem;
        font-weight: 700;
        color: #0D0D0D;
        letter-spacing: 0.03em;
        flex-shrink: 0;
    }

    .admin-info .admin-name {
        display: block;
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--text);
        line-height: 1.2;
    }

    .admin-info .admin-role {
        display: block;
        font-size: 0.6rem;
        color: var(--gold);
        text-transform: uppercase;
        letter-spacing: 0.07em;
    }

    @media (max-width: 768px) {
        .topbar-hamburger { display: flex; }
        .topbar { padding: 0 1rem; }
    }
</style>

@php
    $admin    = Auth::guard('admin')->user();
    $initials = strtoupper(substr($admin->name, 0, 2));
@endphp

<header class="topbar">

    <div style="display:flex;align-items:center;gap:1rem;">
        {{-- Mobile hamburger --}}
        <button class="topbar-hamburger" @click="mobileSidebar = !mobileSidebar" aria-label="Toggle sidebar">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>

        <div class="topbar-left">
            <h1>{{ $pageTitle }}</h1>
            @if ($pageSubtitle)
                <p>{{ $pageSubtitle }}</p>
            @endif
        </div>
    </div>

    <div class="topbar-right">
        <div class="admin-badge">
            <div class="admin-avatar">{{ $initials }}</div>
            <div class="admin-info">
                <span class="admin-name">{{ $admin->name }}</span>
                <span class="admin-role">{{ $admin->role }}</span>
            </div>
        </div>
    </div>

</header>

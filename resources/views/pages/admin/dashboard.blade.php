<x-layouts.admin
    title="Dashboard"
    :pageTitle="'Dashboard'"
    :pageSubtitle="'Selamat datang di panel admin KYH'"
    active="dashboard"
>

    {{-- ===== COMING SOON PLACEHOLDER ===== --}}
    <div style="
        max-width: 560px;
        margin: 4rem auto;
        text-align: center;
        padding: 3rem 2rem;
        background: var(--card-bg);
        border: 1px solid var(--border);
        border-radius: 8px;
    ">
        {{-- Icon --}}
        <div style="
            width: 72px; height: 72px;
            margin: 0 auto 1.5rem;
            background: rgba(201,168,76,0.08);
            border: 1px solid rgba(201,168,76,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        ">
            <svg style="width:32px;height:32px;color:var(--gold);" fill="none" stroke="currentColor" stroke-width="1.4" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
            </svg>
        </div>

        <div class="gold-pill" style="margin-bottom:1rem;">Admin Panel</div>

        <h2 style="font-family:'Playfair Display',serif;font-size:1.5rem;color:var(--text);margin-bottom:0.5rem;">
            Dashboard Sedang Disiapkan
        </h2>

        <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.7;margin-top:0.75rem;">
            Login berhasil! Dashboard KYH sedang dalam pengembangan.<br>
            Fitur manajemen event, portofolio, dan pesan masuk akan segera hadir.
        </p>
    </div>

</x-layouts.admin>

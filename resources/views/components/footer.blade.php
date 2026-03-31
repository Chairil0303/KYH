{{-- ====================================
     FOOTER - KYH Wedding & Event Organizer
     Desain elegan / dark dengan aksen gold
     ==================================== --}}

<footer class="bg-[#0D0D0D] text-white/70 pt-20 pb-8">

    {{-- Ornamental Divider Top --}}
    <div class="flex items-center justify-center mb-16 px-4">
        <span class="h-px flex-1 max-w-[120px] bg-gradient-to-r from-transparent to-[#C9A84C]/60"></span>
        <span class="mx-4 text-[#C9A84C] text-2xl leading-none" style="font-family:'Playfair Display',serif;">❧</span>
        <span class="h-px flex-1 max-w-[120px] bg-gradient-to-l from-transparent to-[#C9A84C]/60"></span>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8 lg:gap-16">

            {{-- ===== KOLOM 1: Brand --}}
            <div>
                <div class="flex items-center gap-3 mb-5">
                    <img
                        src="{{ asset('assets/icons/icons_kyh.png') }}"
                        alt="KYH Logo"
                        class="h-14 w-auto object-contain drop-shadow-[0_0_10px_rgba(201,168,76,0.4)]"
                    >
                    <span
                        class="font-bold text-3xl tracking-widest text-[#C9A84C]"
                        style="font-family:'Playfair Display',serif;"
                    >
                        KYH
                    </span>
                </div>

                <h3 class="text-white font-semibold text-sm tracking-widest uppercase mb-3">
                    Kita Yang Handle
                </h3>
                <p class="text-white/55 text-sm leading-relaxed mb-6">
                    Mengambil alih stres Anda agar Anda bisa menikmati momen. Kami hadir untuk mewujudkan setiap detail impian pernikahan dan acara Anda menjadi kenangan abadi.
                </p>

                {{-- Social Icons --}}
                <div class="flex items-center gap-3">
                    <a href="https://www.instagram.com/kyh.organizer" target="_blank"
                       class="w-9 h-9 rounded-full border border-[#C9A84C]/40 flex items-center justify-center
                              text-[#C9A84C]/70 hover:text-[#C9A84C] hover:border-[#C9A84C] hover:bg-[#C9A84C]/10
                              transition-all duration-300"
                       aria-label="Instagram KYH"
                    >
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>
                    <a href="https://wa.me/6281234567890" target="_blank"
                       class="w-9 h-9 rounded-full border border-[#C9A84C]/40 flex items-center justify-center
                              text-[#C9A84C]/70 hover:text-[#C9A84C] hover:border-[#C9A84C] hover:bg-[#C9A84C]/10
                              transition-all duration-300"
                       aria-label="WhatsApp KYH"
                    >
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.12 1.526 5.854L0 24l6.302-1.503A11.957 11.957 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.01-1.373l-.36-.213-3.737.891.937-3.637-.234-.374A9.774 9.774 0 012.182 12C2.182 6.565 6.565 2.182 12 2.182S21.818 6.565 21.818 12 17.435 21.818 12 21.818z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- ===== KOLOM 2: Tautan Cepat --}}
            <div>
                <h4 class="text-white font-semibold text-sm tracking-widest uppercase mb-6 relative
                            after:content-[''] after:absolute after:left-0 after:bottom-[-10px]
                            after:h-[1px] after:w-8 after:bg-[#C9A84C]">
                    Tautan Cepat
                </h4>
                <ul class="space-y-3 mt-4">
                    @php
                        $footerLinks = [
                            ['label' => 'Beranda',           'href' => route('home')],
                            ['label' => 'Tentang Kami',      'href' => '#tentang'],
                            ['label' => 'Layanan Kami',      'href' => '#layanan'],
                            ['label' => 'Portofolio',        'href' => '#portofolio'],
                            ['label' => 'Paket Pernikahan',  'href' => '#paket'],
                            ['label' => 'Hubungi Kami',      'href' => '#kontak'],
                        ];
                    @endphp

                    @foreach ($footerLinks as $link)
                        <li>
                            <a
                                href="{{ $link['href'] }}"
                                class="flex items-center gap-2 text-sm text-white/55 hover:text-[#C9A84C] transition-colors duration-300 group"
                            >
                                <span class="w-4 h-[1px] bg-[#C9A84C]/0 group-hover:bg-[#C9A84C] transition-all duration-300"></span>
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- ===== KOLOM 3: Kontak --}}
            <div>
                <h4 class="text-white font-semibold text-sm tracking-widest uppercase mb-6 relative
                            after:content-[''] after:absolute after:left-0 after:bottom-[-10px]
                            after:h-[1px] after:w-8 after:bg-[#C9A84C]">
                    Hubungi Kami
                </h4>
                <ul class="space-y-4 mt-4">
                    {{-- Alamat --}}
                    <li class="flex items-start gap-3">
                        <span class="text-[#C9A84C] mt-0.5 flex-shrink-0">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-2.003 3.5-4.697 3.5-8.327a8 8 0 10-16 0c0 3.63 1.556 6.326 3.5 8.327a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                        <span class="text-sm text-white/55 leading-relaxed">
                            Jakarta Barat, DKI Jakarta<br>Indonesia
                        </span>
                    </li>

                    {{-- WhatsApp --}}
                    <li class="flex items-center gap-3">
                        <span class="text-[#C9A84C] flex-shrink-0">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.12 1.526 5.854L0 24l6.302-1.503A11.957 11.957 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.01-1.373l-.36-.213-3.737.891.937-3.637-.234-.374A9.774 9.774 0 012.182 12C2.182 6.565 6.565 2.182 12 2.182S21.818 6.565 21.818 12 17.435 21.818 12 21.818z"/>
                            </svg>
                        </span>
                        <a href="https://wa.me/6281234567890" target="_blank"
                           class="text-sm text-white/55 hover:text-[#C9A84C] transition-colors duration-300">
                            +62 812-3456-7890
                        </a>
                    </li>

                    {{-- Instagram --}}
                    <li class="flex items-center gap-3">
                        <span class="text-[#C9A84C] flex-shrink-0">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </span>
                        <a href="https://www.instagram.com/kyh.organizer" target="_blank"
                           class="text-sm text-white/55 hover:text-[#C9A84C] transition-colors duration-300">
                            @kyh.organizer
                        </a>
                    </li>

                    {{-- Email --}}
                    <li class="flex items-center gap-3">
                        <span class="text-[#C9A84C] flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                            </svg>
                        </span>
                        <a href="mailto:info@kyh-organizer.com"
                           class="text-sm text-white/55 hover:text-[#C9A84C] transition-colors duration-300">
                            info@kyh-organizer.com
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- ===== Bottom Bar ===== --}}
        <div class="mt-16 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-white/35 tracking-wider">
                &copy; 2025 <span class="text-[#C9A84C]/70">KYH — Kita Yang Handle</span>. Seluruh hak cipta dilindungi.
            </p>
            <p class="text-xs text-white/25 tracking-wider italic" style="font-family:'Playfair Display',serif;">
                "Kenangan indah dimulai dari sini."
            </p>
        </div>
    </div>
</footer>

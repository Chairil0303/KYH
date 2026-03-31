{{-- =============================================
     PORTOFOLIO SECTION
     id="portofolio" → navbar "Portofolio" anchor
     ============================================= --}}
<section id="portofolio" class="py-24 md:py-32 bg-[#0D0D0D] relative overflow-hidden">

    {{-- Decorative --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full bg-[#C9A84C]/3 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16">
            <span class="inline-block text-[#C9A84C] text-xs tracking-[0.4em] uppercase font-medium mb-4">
                — Portofolio —
            </span>
            <h2
                class="text-3xl sm:text-4xl md:text-5xl font-bold text-white leading-tight"
                style="font-family:'Playfair Display',serif;"
            >
                Karya yang Bicara
                <em class="text-[#C9A84C] not-italic">Sendiri</em>
            </h2>
            <p class="mt-5 text-white/45 max-w-xl mx-auto leading-relaxed">
                Setiap foto adalah cerita. Setiap momen adalah kepercayaan yang kami jaga dengan sepenuh hati.
            </p>
        </div>

        {{-- Portfolio Grid --}}
        @php
            $portfolios = [
                [
                    'label'    => 'Wedding Outdoor',
                    'location' => 'The Green Venue, Jakarta',
                    'image'    => 'https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=800&auto=format&fit=crop',
                    'size'     => 'lg:col-span-2 lg:row-span-2',
                    'height'   => 'h-80 lg:h-full',
                ],
                [
                    'label'    => 'Intimate Reception',
                    'location' => 'Villa Elegan, Bogor',
                    'image'    => 'https://images.unsplash.com/photo-1532712938310-34cb3982ef74?q=80&w=800&auto=format&fit=crop',
                    'size'     => '',
                    'height'   => 'h-52',
                ],
                [
                    'label'    => 'Grand Ballroom',
                    'location' => 'Hotel Bintang 5, Jakarta Pusat',
                    'image'    => 'https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?q=80&w=800&auto=format&fit=crop',
                    'size'     => '',
                    'height'   => 'h-52',
                ],
                [
                    'label'    => 'Garden Party',
                    'location' => 'Private Garden, Serpong',
                    'image'    => 'https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?q=80&w=800&auto=format&fit=crop',
                    'size'     => '',
                    'height'   => 'h-52',
                ],
                [
                    'label'    => 'Corporate Event',
                    'location' => 'Jakarta Convention Center',
                    'image'    => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=800&auto=format&fit=crop',
                    'size'     => '',
                    'height'   => 'h-52',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:grid-rows-2 lg:h-[560px]">
            @foreach ($portfolios as $i => $item)
                <div
                    class="group relative overflow-hidden rounded-2xl {{ $item['size'] }}"
                    id="portfolio-item-{{ $i + 1 }}"
                >
                    <img
                        src="{{ $item['image'] }}"
                        alt="{{ $item['label'] }}"
                        class="w-full {{ $item['height'] }} lg:h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    >
                    {{-- Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent
                                opacity-60 group-hover:opacity-90 transition-opacity duration-400"></div>

                    {{-- Gold border hover --}}
                    <div class="absolute inset-0 rounded-2xl border-2 border-transparent group-hover:border-[#C9A84C]/50 transition-colors duration-400 pointer-events-none"></div>

                    {{-- Label --}}
                    <div class="absolute bottom-0 left-0 right-0 p-5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-400">
                        <span class="inline-block text-[#C9A84C] text-xs tracking-widest uppercase mb-1">{{ $item['location'] }}</span>
                        <h3 class="text-white font-bold text-lg leading-tight" style="font-family:'Playfair Display',serif;">
                            {{ $item['label'] }}
                        </h3>
                    </div>

                    {{-- View icon --}}
                    <div class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- CTA --}}
        <div class="text-center mt-14">
            <a
                href="#kontak"
                class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full
                       border-2 border-[#C9A84C] text-[#C9A84C] font-semibold text-sm tracking-widest uppercase
                       hover:bg-[#C9A84C] hover:text-[#0D0D0D] transition-all duration-300"
            >
                Diskusikan Konsep Anda
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

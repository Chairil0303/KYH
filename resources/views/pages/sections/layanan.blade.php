{{-- =============================================
     LAYANAN SECTION
     id="layanan" → navbar "Layanan" anchor
     ============================================= --}}
<section id="layanan" class="py-24 md:py-32 bg-[#FAF8F4] relative overflow-hidden">

    {{-- Decorative bg --}}
    <div class="absolute top-0 right-0 w-72 h-72 rounded-full bg-[#C9A84C]/5 -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 rounded-full bg-[#C9A84C]/5 translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16">
            <span class="inline-block text-[#C9A84C] text-xs tracking-[0.4em] uppercase font-medium mb-4">
                — Layanan Kami —
            </span>
            <h2
                class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#0D0D0D] leading-tight"
                style="font-family:'Playfair Display',serif;"
            >
                Solusi <em class="text-[#C9A84C] not-italic">All-In</em> untuk
                <br class="hidden sm:block"> Acara Impian Anda
            </h2>
            <p class="mt-5 text-[#0D0D0D]/55 max-w-xl mx-auto leading-relaxed">
                Dari perencanaan hingga hari H, kami menangani setiap detail agar Anda cukup hadir dan menikmati momen.
            </p>
        </div>

        {{-- Service Cards --}}
        @php
            $services = [
                [
                    'title'       => 'Catering',
                    'description' => 'Menu lezat dari chef berpengalaman dengan pilihan masakan Indonesia, Western, dan fusion untuk ratusan tamu.',
                    'color'       => 'from-amber-900/80 to-amber-700/80',
                    'image'       => asset('assets/images/layanan-catering.jpg'),
                    'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.056 4.024.166C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5M3 15c0 1.105.895 2 2 2h14a2 2 0 002-2v-2m-18 0h18M6.75 15h.008v.008H6.75V15zm3.75 0h.008v.008H10.5V15zm3.75 0h.008v.008H14.25V15z"/>',
                ],
                [
                    'title'       => 'Dekorasi',
                    'description' => 'Konsep dekorasi custom yang memukau — dari nuansa klasik mewah, bohemian, garden party, hingga modern minimalis.',
                    'color'       => 'from-rose-900/80 to-rose-700/80',
                    'image'       => asset('assets/images/layanan-dekorasi.jpg'),
                    'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/>',
                ],
                [
                    'title'       => 'Make-Up Artist',
                    'description' => 'Tim MUA profesional yang siap membuat Anda tampil memukau dan sempurna di hari istimewa Anda.',
                    'color'       => 'from-purple-900/80 to-purple-700/80',
                    'image'       => asset('assets/images/layanan-mua.jpg'),
                    'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"/>',
                ],
                [
                    'title'       => 'Dokumentasi',
                    'description' => 'Fotografer & videografer berpengalaman yang akan mengabadikan setiap momen berharga dalam karya seni visual.',
                    'color'       => 'from-sky-900/80 to-sky-700/80',
                    'image'       => asset('assets/images/layanan-dokumentasi.jpg'),
                    'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z"/>',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-5">
            @foreach ($services as $i => $service)
                <div
                    class="group relative overflow-hidden rounded-2xl cursor-pointer
                           shadow-lg hover:shadow-2xl hover:shadow-[#C9A84C]/20
                           transform hover:-translate-y-2 transition-all duration-500"
                    id="service-card-{{ $i + 1 }}"
                >
                    <div class="absolute inset-0">
                        <img
                            src="{{ $service['image'] }}"
                            alt="{{ $service['title'] }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        >
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t {{ $service['color'] }} opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0D0D0D]/70 via-transparent to-transparent"></div>
                    <div class="absolute inset-0 rounded-2xl border-2 border-transparent group-hover:border-[#C9A84C]/40 transition-colors duration-300 pointer-events-none"></div>

                    <div class="relative z-10 p-6 md:p-7 flex flex-col h-72">
                        <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center mb-auto group-hover:bg-[#C9A84C]/20 group-hover:border-[#C9A84C]/40 transition-all duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                {!! $service['icon'] !!}
                            </svg>
                        </div>
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-xl font-bold text-white mb-2" style="font-family:'Playfair Display',serif;">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-white/70 text-sm leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                                {{ $service['description'] }}
                            </p>
                            <a href="#kontak" class="mt-3 inline-flex items-center gap-1 text-[#C9A84C] text-xs font-semibold tracking-wider uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-150">
                                Pelajari
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                            </a>
                        </div>
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
                Konsultasikan Kebutuhan Anda
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

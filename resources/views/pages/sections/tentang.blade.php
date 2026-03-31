{{-- =============================================
     TENTANG KAMI SECTION
     id="tentang" → navbar "Tentang Kami" anchor
     ============================================= --}}
<section id="tentang" class="py-16 md:py-20 bg-[#FAF8F4] relative overflow-hidden">

    {{-- Decorative circles --}}
    <div class="absolute top-0 left-0 w-64 h-64 rounded-full bg-[#C9A84C]/5 -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 rounded-full bg-[#C9A84C]/5 translate-x-1/2 translate-y-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Image Column --}}
            <div class="relative order-2 lg:order-1" data-aos="fade-right" data-aos-duration="900">
                {{-- Main image --}}
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img
                        src="{{ asset('assets/images/tentang-bg.jpg') }}"
                        alt="KYH Team"
                        class="w-full h-[360px] object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                </div>

                {{-- Floating card --}}
                <div class="absolute -bottom-6 -right-6 bg-[#0D0D0D] text-white rounded-2xl px-6 py-5 shadow-2xl border border-[#C9A84C]/20 hidden sm:block">
                    <div class="text-3xl font-bold text-[#C9A84C] mb-0.5" style="font-family:'Playfair Display',serif;">8+</div>
                    <div class="text-xs text-white/50 tracking-widest uppercase">Tahun Pengalaman</div>
                </div>

                {{-- Gold accent frame --}}
                <div class="absolute -top-4 -left-4 w-24 h-24 border-t-2 border-l-2 border-[#C9A84C]/40 rounded-tl-2xl pointer-events-none"></div>
                <div class="absolute -bottom-4 -right-4 w-24 h-24 border-b-2 border-r-2 border-[#C9A84C]/40 rounded-br-2xl pointer-events-none hidden sm:block" style="bottom: -16px; right: -16px;"></div>
            </div>

            {{-- Text Column --}}
            <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="900">
                <span class="inline-block text-[#C9A84C] text-xs tracking-[0.4em] uppercase font-medium mb-4">
                    — Tentang Kami —
                </span>

                <h2
                    class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#0D0D0D] leading-tight mb-4"
                    style="font-family:'Playfair Display',serif;"
                >
                    Kami Hadir untuk
                    <em class="text-[#C9A84C] not-italic">Momen</em> Terbaik Anda
                </h2>

                <p class="text-[#0D0D0D]/60 leading-relaxed mb-5">
                    <strong class="text-[#0D0D0D] font-semibold">KYH – Kita Yang Handle</strong> adalah wedding & event organizer berbasis di Jakarta Barat yang berdiri sejak 2017. Kami lahir dari satu keyakinan sederhana: setiap momen istimewa layak dirayakan tanpa rasa khawatir.
                </p>

                <p class="text-[#0D0D0D]/60 leading-relaxed mb-8">
                    Dengan tim profesional berpengalaman, kami mengambil alih setiap detail perencanaan — dari konsep, vendor, dekorasi, hingga hari H — sehingga Anda dan keluarga bisa hadir sepenuhnya, menikmati setiap detiknya.
                </p>

                {{-- Values --}}
                <div class="space-y-2 mb-6">
                    @php
                        $values = [
                            ['icon' => '✦', 'title' => 'Profesional & Terpercaya', 'desc' => 'Setiap acara ditangani oleh tim berdedikasi yang telah mengelola 500+ event.'],
                            ['icon' => '✦', 'title' => 'Detail-Oriented',          'desc' => 'Tidak ada hal kecil yang kami lewatkan. Setiap detail adalah bagian dari cerita Anda.'],
                            ['icon' => '✦', 'title' => 'All-In Solution',          'desc' => 'Satu titik koordinasi untuk semua kebutuhan acara Anda. Simpel, efisien, tenang.'],
                        ];
                    @endphp

                    @foreach ($values as $val)
                        <div class="flex items-start gap-4">
                            <span class="text-[#C9A84C] text-lg mt-0.5 flex-shrink-0">{{ $val['icon'] }}</span>
                            <div>
                                <h4 class="font-semibold text-[#0D0D0D] text-sm mb-0.5">{{ $val['title'] }}</h4>
                                <p class="text-[#0D0D0D]/55 text-sm leading-relaxed">{{ $val['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a
                    href="#kontak"
                    class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full
                           bg-[#0D0D0D] text-white font-semibold text-sm tracking-widest uppercase
                           hover:bg-[#C9A84C] hover:text-[#0D0D0D]
                           transition-all duration-400"
                >
                    Kenali Kami Lebih Dekat
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

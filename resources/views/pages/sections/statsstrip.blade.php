{{-- =============================================
     STATS STRIP SECTION
     ============================================= --}}
<section class="bg-[#0D0D0D] py-8 border-y border-[#C9A84C]/20">
    <div class="max-w-5xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-0 divide-y md:divide-y-0 md:divide-x divide-[#C9A84C]/20">
            @php
                $stats = [
                    ['number' => '500+', 'label' => 'Acara Sukses'],
                    ['number' => '8+',   'label' => 'Tahun Berpengalaman'],
                    ['number' => '98%',  'label' => 'Klien Puas'],
                    ['number' => '50+',  'label' => 'Mitra Vendor'],
                ];
            @endphp

            @foreach ($stats as $i => $stat)
                <div class="text-center py-4 px-6" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <div
                        class="text-3xl md:text-4xl font-bold text-[#C9A84C] mb-1"
                        style="font-family:'Playfair Display',serif;"
                    >
                        {{ $stat['number'] }}
                    </div>
                    <div class="text-xs text-white/40 tracking-widest uppercase">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

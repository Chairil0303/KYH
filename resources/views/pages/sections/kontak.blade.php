{{-- =============================================
KONTAK SECTION
id="kontak" → navbar "Kontak" anchor
============================================= --}}
<section id="kontak" class="py-24 md:py-32 bg-[#FAF8F4] relative overflow-hidden">

    {{-- Decorative --}}
    <div
        class="absolute top-0 right-0 w-96 h-96 rounded-full bg-[#C9A84C]/5 -translate-y-1/3 translate-x-1/3 pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 left-0 w-64 h-64 rounded-full bg-[#C9A84C]/5 translate-y-1/3 -translate-x-1/3 pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16">
            <span class="inline-block text-[#C9A84C] text-xs tracking-[0.4em] uppercase font-medium mb-4">
                — Kontak —
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#0D0D0D] leading-tight"
                style="font-family:'Playfair Display',serif;">
                Mari Wujudkan
                <em class="text-[#C9A84C] not-italic">Momen Impian</em> Anda
            </h2>
            <p class="mt-5 text-[#0D0D0D]/55 max-w-xl mx-auto leading-relaxed">
                Ceritakan kebutuhan Anda kepada kami. Konsultasi pertama <strong>gratis</strong> dan tanpa komitmen.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-16">

            {{-- Contact Info --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- Card info --}}
                <div class="bg-[#0D0D0D] rounded-2xl p-8 border border-[#C9A84C]/20">
                    <h3 class="text-white font-semibold text-xl mb-6" style="font-family:'Playfair Display',serif;">
                        Informasi Kontak
                    </h3>

                    <div class="space-y-5">
                        @php
                            $contacts = [
                                [
                                    'label' => 'Lokasi',
                                    'value' => 'Jakarta Barat, DKI Jakarta',
                                    'sub' => 'Indonesia',
                                    'icon' => '<path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-2.003 3.5-4.697 3.5-8.327a8 8 0 10-16 0c0 3.63 1.556 6.326 3.5 8.327a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>',
                                    'fill' => true,
                                    'href' => null,
                                ],
                                [
                                    'label' => 'WhatsApp',
                                    'value' => '+62 852-8291-8207',
                                    'sub' => 'Respon cepat dalam 1 jam',
                                    'icon' => '<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.12 1.526 5.854L0 24l6.302-1.503A11.957 11.957 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.01-1.373l-.36-.213-3.737.891.937-3.637-.234-.374A9.774 9.774 0 012.182 12C2.182 6.565 6.565 2.182 12 2.182S21.818 6.565 21.818 12 17.435 21.818 12 21.818z"/>',
                                    'fill' => true,
                                    'href' => 'https://wa.me/6285282918207',
                                ],
                                [
                                    'label' => 'Instagram',
                                    'value' => '@kitayanghandle',
                                    'sub' => 'Lihat karya & behind the scene',
                                    'icon' => '<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>',
                                    'fill' => true,
                                    'href' => 'https://www.instagram.com/kitayanghandle/',
                                ],
                                [
                                    'label' => 'Email',
                                    'value' => 'info@kyh-organizer.com',
                                    'sub' => 'Respon dalam 24 jam kerja',
                                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>',
                                    'fill' => false,
                                    'href' => 'mailto:info@kyh-organizer.com',
                                ],
                            ];
                        @endphp

                        @foreach ($contacts as $c)
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-[#C9A84C]/15 border border-[#C9A84C]/25 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-[#C9A84C]" @if($c['fill']) fill="currentColor" @else
                                    fill="none" stroke="currentColor" stroke-width="1.5" @endif viewBox="0 0 24 24">
                                        {!! $c['icon'] !!}
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-white/40 text-xs tracking-widest uppercase mb-0.5">{{ $c['label'] }}</p>
                                    @if($c['href'])
                                        <a href="{{ $c['href'] }}" target="_blank"
                                            class="text-white font-medium text-sm hover:text-[#C9A84C] transition-colors duration-200">
                                            {{ $c['value'] }}
                                        </a>
                                    @else
                                        <p class="text-white font-medium text-sm">{{ $c['value'] }}</p>
                                    @endif
                                    <p class="text-white/35 text-xs mt-0.5">{{ $c['sub'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Quick WhatsApp CTA --}}
                <a href="https://wa.me/6285282918207?text=Halo%20KYH%2C%20saya%20ingin%20konsultasi%20gratis"
                    target="_blank" id="kontak-whatsapp-cta" class="flex items-center justify-center gap-3 w-full py-4 rounded-2xl
                           bg-gradient-to-r from-[#C9A84C] to-[#A07830] text-[#0D0D0D]
                           font-bold text-sm tracking-widest uppercase
                           shadow-xl shadow-[#C9A84C]/30 hover:shadow-[#C9A84C]/50
                           hover:from-[#E2BE7A] hover:to-[#C9A84C]
                           transform hover:-translate-y-0.5 transition-all duration-400">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.12 1.526 5.854L0 24l6.302-1.503A11.957 11.957 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.01-1.373l-.36-.213-3.737.891.937-3.637-.234-.374A9.774 9.774 0 012.182 12C2.182 6.565 6.565 2.182 12 2.182S21.818 6.565 21.818 12 17.435 21.818 12 21.818z" />
                    </svg>
                    Chat WhatsApp Sekarang
                </a>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-3">
                <form id="kontak-form"
                    class="bg-white rounded-2xl p-8 md:p-10 shadow-xl shadow-black/5 border border-[#C9A84C]/10" x-data="{
                        form: { nama: '', email: '', acara: '', pesan: '' },
                        sent: false,
                        submit() {
                            // Redirect to WhatsApp with prefilled message
                            const wa = `https://wa.me/6285282918207?text=Halo+KYH!+%0A%0ANama%3A+${encodeURIComponent(this.form.nama)}%0AEmail%3A+${encodeURIComponent(this.form.email)}%0AJenis+Acara%3A+${encodeURIComponent(this.form.acara)}%0APesan%3A+${encodeURIComponent(this.form.pesan)}`;
                            window.open(wa, '_blank');
                            this.sent = true;
                        }
                    }" @submit.prevent="submit()">
                    <h3 class="text-2xl font-bold text-[#0D0D0D] mb-2" style="font-family:'Playfair Display',serif;">
                        Kirim Pesan
                    </h3>
                    <p class="text-[#0D0D0D]/50 text-sm mb-8">Isi form di bawah dan kami akan menghubungi Anda segera.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                        {{-- Nama --}}
                        <div>
                            <label class="block text-xs font-semibold tracking-widest uppercase text-[#0D0D0D]/60 mb-2"
                                for="form-nama">Nama Lengkap</label>
                            <input id="form-nama" type="text" x-model="form.nama" placeholder="Nama Anda" required
                                class="w-full px-4 py-3 rounded-xl border border-[#0D0D0D]/15 text-[#0D0D0D] text-sm
                                       placeholder-[#0D0D0D]/30
                                       focus:outline-none focus:border-[#C9A84C] focus:ring-2 focus:ring-[#C9A84C]/20
                                       transition-all duration-200 bg-[#FAF8F4]">
                        </div>

                        {{-- Email --}}
                        <div>
                            <label class="block text-xs font-semibold tracking-widest uppercase text-[#0D0D0D]/60 mb-2"
                                for="form-email">Email</label>
                            <input id="form-email" type="email" x-model="form.email" placeholder="email@anda.com"
                                required class="w-full px-4 py-3 rounded-xl border border-[#0D0D0D]/15 text-[#0D0D0D] text-sm
                                       placeholder-[#0D0D0D]/30
                                       focus:outline-none focus:border-[#C9A84C] focus:ring-2 focus:ring-[#C9A84C]/20
                                       transition-all duration-200 bg-[#FAF8F4]">
                        </div>
                    </div>

                    {{-- Jenis Acara --}}
                    <div class="mb-5">
                        <label class="block text-xs font-semibold tracking-widest uppercase text-[#0D0D0D]/60 mb-2"
                            for="form-acara">Jenis Acara</label>
                        <select id="form-acara" x-model="form.acara" required class="w-full px-4 py-3 rounded-xl border border-[#0D0D0D]/15 text-[#0D0D0D] text-sm
                                   focus:outline-none focus:border-[#C9A84C] focus:ring-2 focus:ring-[#C9A84C]/20
                                   transition-all duration-200 bg-[#FAF8F4] appearance-none">
                            <option value="" disabled selected>Pilih jenis acara...</option>
                            <option value="Pernikahan">Pernikahan</option>
                            <option value="Lamaran">Lamaran</option>
                            <option value="Birthday Party">Birthday Party</option>
                            <option value="Corporate Event">Corporate Event</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    {{-- Pesan --}}
                    <div class="mb-8">
                        <label class="block text-xs font-semibold tracking-widest uppercase text-[#0D0D0D]/60 mb-2"
                            for="form-pesan">Ceritakan Acara Anda</label>
                        <textarea id="form-pesan" x-model="form.pesan" rows="4"
                            placeholder="Tanggal acara, estimasi tamu, konsep yang diinginkan..." class="w-full px-4 py-3 rounded-xl border border-[#0D0D0D]/15 text-[#0D0D0D] text-sm
                                   placeholder-[#0D0D0D]/30 resize-none
                                   focus:outline-none focus:border-[#C9A84C] focus:ring-2 focus:ring-[#C9A84C]/20
                                   transition-all duration-200 bg-[#FAF8F4]"></textarea>
                    </div>

                    {{-- Submit --}}
                    <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-[#C9A84C] to-[#A07830] text-[#0D0D0D]
                               font-bold text-sm tracking-widest uppercase
                               hover:from-[#E2BE7A] hover:to-[#C9A84C]
                               shadow-lg shadow-[#C9A84C]/30 hover:shadow-[#C9A84C]/50
                               transform hover:-translate-y-0.5 transition-all duration-400">
                        <span x-show="!sent">Kirim via WhatsApp ✦</span>
                        <span x-show="sent" style="display:none;">Pesan Terkirim! Cek WhatsApp Anda 🎉</span>
                    </button>

                    <p class="text-center text-xs text-[#0D0D0D]/35 mt-4">
                        Atau hubungi langsung via WhatsApp: <a href="https://wa.me/6285282918207" target="_blank"
                            class="text-[#C9A84C] hover:underline">+62 852-8291-8207</a>
                    </p>
                </form>
            </div>

        </div>
    </div>
</section>
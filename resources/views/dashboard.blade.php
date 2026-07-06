<x-app-layout>
    @push('styles')
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(225, 220, 255, 0.4);
        }
        .card-shadow {
            box-shadow: 0 10px 30px -5px rgba(31, 35, 64, 0.04);
        }
        .hover-lift {
            transition: transform 0.2s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.2s ease;
        }
        .hover-lift:hover {
            transform: translateY(-4px) scale(1.01);
            box-shadow: 0 20px 40px -10px rgba(31, 35, 64, 0.08);
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
    @endpush

    <div class="space-y-8 max-w-[1280px] mx-auto pt-4">
        <!-- Page Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="text-[32px] leading-[40px] tracking-[-0.01em] font-semibold text-[#151936]">Ringkasan Dashboard</h2>
                <p class="text-[16px] text-[#484553]">Kinerja waktu-nyata dan wawasan inventaris untuk Clitoria Botanical.</p>
            </div>
            <div class="flex items-center gap-2 bg-[#f4f2ff] text-[#432b9f] px-4 py-2 rounded-xl border border-[#c9c4d5]/20">
                <span class="material-symbols-outlined text-[18px]">public</span>
                <span class="text-[14px] font-bold">Sepanjang Waktu</span>
            </div>
        </div>

        <!-- Metric Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1: Total Produk -->
            <div class="glass-card card-shadow p-6 rounded-[24px] hover-lift group">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#5b46b8]/10 flex items-center justify-center text-[#432b9f] transition-transform group-hover:rotate-12">
                        <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">shopping_bag</span>
                    </div>
                    <span class="text-[10px] font-bold text-[#797584] uppercase tracking-wider bg-[#edecff] px-2 py-1 rounded-full">Inventaris</span>
                </div>
                <p class="text-[#797584] text-[14px] font-medium">Total Produk</p>
                <h3 class="text-[48px] font-bold text-[#151936] mt-1">{{ $totalProducts ?? 0 }}</h3>
            </div>

            <!-- Card 2: Total Gallery -->
            <div class="glass-card card-shadow p-6 rounded-[24px] hover-lift group">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#a28dff]/10 flex items-center justify-center text-[#614cba] transition-transform group-hover:rotate-12">
                        <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">collections</span>
                    </div>
                    <span class="text-[10px] font-bold text-[#797584] uppercase tracking-wider bg-[#edecff] px-2 py-1 rounded-full">Aset</span>
                </div>
                <p class="text-[#797584] text-[14px] font-medium">Total Galeri</p>
                <h3 class="text-[48px] font-bold text-[#151936] mt-1">{{ \App\Models\Gallery::count() ?? 0 }}</h3>
            </div>

            <!-- Card 3: Total Testimonial -->
            <div class="glass-card card-shadow p-6 rounded-[24px] hover-lift group">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#306600]/10 flex items-center justify-center text-[#224c00] transition-transform group-hover:rotate-12">
                        <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">reviews</span>
                    </div>
                    <span class="text-[10px] font-bold text-[#797584] uppercase tracking-wider bg-[#edecff] px-2 py-1 rounded-full">Bukti Sosial</span>
                </div>
                <p class="text-[#797584] text-[14px] font-medium">Total Testimoni</p>
                <h3 class="text-[48px] font-bold text-[#151936] mt-1">{{ \App\Models\Testimonial::count() ?? 0 }}</h3>
            </div>

            <!-- Card 4: Total Team Member -->
            <div class="glass-card card-shadow p-6 rounded-[24px] hover-lift group">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#5b46b8]/10 flex items-center justify-center text-[#432b9f] transition-transform group-hover:rotate-12">
                        <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">groups</span>
                    </div>
                    <span class="text-[10px] font-bold text-[#797584] uppercase tracking-wider bg-[#edecff] px-2 py-1 rounded-full">Organisasi</span>
                </div>
                <p class="text-[#797584] text-[14px] font-medium">Total Anggota Tim</p>
                <h3 class="text-[48px] font-bold text-[#151936] mt-1">{{ \App\Models\Team::count() ?? 0 }}</h3>
            </div>

            <!-- Card 5: Sales Count -->
            <div class="glass-card card-shadow p-6 rounded-[24px] hover-lift group relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-[#b3f582]/20 rounded-full blur-2xl"></div>
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#306600]/10 flex items-center justify-center text-[#224c00] transition-transform group-hover:rotate-12">
                        <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">shopping_cart</span>
                    </div>
                    <span class="text-[10px] font-bold text-[#224c00] uppercase tracking-wider bg-[#b3f582]/40 px-2 py-1 rounded-full">Aktif</span>
                </div>
                <p class="text-[#797584] text-[14px] font-medium">Total Penjualan</p>
                <div class="flex items-baseline gap-3">
                    <h3 class="text-[48px] font-bold text-[#151936] mt-1">{{ $summary['sales']['sales_count'] ?? 0 }}</h3>
                </div>
                <div class="mt-4 h-1 w-full bg-[#edecff] rounded-full overflow-hidden">
                    <div class="h-full bg-[#98d869] w-3/4 rounded-full"></div>
                </div>
            </div>

            <!-- Card 6: Revenue -->
            <div class="p-6 rounded-[24px] hover-lift group relative overflow-hidden bg-[#432b9f] text-white shadow-xl shadow-[#432b9f]/20">
                <div class="absolute -left-4 -bottom-4 w-32 h-32 bg-[#a28dff]/20 rounded-full blur-3xl"></div>
                <div class="flex justify-between items-start mb-4 relative z-10">
                    <div class="w-12 h-12 rounded-2xl bg-white/20 flex items-center justify-center text-white transition-transform group-hover:rotate-12">
                        <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">payments</span>
                    </div>
                    <span class="text-[10px] font-bold text-white/80 uppercase tracking-wider bg-white/10 px-2 py-1 rounded-full">Pendapatan Total</span>
                </div>
                <p class="text-white/70 text-[14px] font-medium relative z-10">Keseluruhan Omzet</p>
                <h3 class="text-[40px] font-bold text-white mt-1 relative z-10">Rp {{ number_format($summary['revenue']['total_revenue'] ?? 0, 0, ',', '.') }}</h3>
                <p class="mt-4 text-white/60 text-[14px] relative z-10 flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">schedule</span> Terakhir diperbarui 12m yang lalu
                </p>
            </div>
        </div>

        <!-- Recent Sales Section -->
        <div class="glass-card card-shadow rounded-[24px] overflow-hidden border border-[#c9c4d5]/20">
            <div class="p-6 border-b border-[#c9c4d5]/10 flex justify-between items-center bg-white/50">
                <div>
                    <h4 class="text-[24px] font-semibold text-[#151936]">Ringkasan Penjualan Terbaru</h4>
                    <p class="text-[14px] text-[#797584]">Transaksi terakhir di semua saluran.</p>
                </div>
                <a href="{{ route('admin.sales.index') }}" class="flex items-center gap-2 text-[#432b9f] font-bold hover:bg-[#432b9f]/5 px-4 py-2 rounded-full transition-all">
                    Lihat Semua Laporan
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-[#f4f2ff]/50">
                            <th class="px-6 py-4 text-[12px] font-semibold text-[#797584] uppercase">Tanggal</th>
                            <th class="px-6 py-4 text-[12px] font-semibold text-[#797584] uppercase">Pelanggan</th>
                            <th class="px-6 py-4 text-[12px] font-semibold text-[#797584] uppercase">Jumlah</th>
                            <th class="px-6 py-4 text-[12px] font-semibold text-[#797584] uppercase text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#c9c4d5]/10 bg-white/30">
                        @forelse($recentSales as $sale)
                        <tr class="hover:bg-[#f4f2ff] transition-colors group">
                            <td class="px-6 py-4 text-[16px] text-[#151936]">{{ \Carbon\Carbon::parse($sale->transaction_date)->format('M d, Y') }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-[#e6deff] text-[#1d0061] flex items-center justify-center text-[10px] font-bold">
                                        {{ strtoupper(substr($sale->customer_name, 0, 2)) }}
                                    </div>
                                    <div>
                                        <p class="text-[16px] font-bold text-[#151936]">{{ $sale->customer_name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-[16px] font-bold text-[#151936]">Rp {{ number_format($sale->total_amount, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('admin.sales.show', $sale->id) }}" class="material-symbols-outlined text-[#797584] hover:text-[#432b9f] transition-colors">visibility</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-[#797584]">Tidak ada penjualan terbaru ditemukan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>

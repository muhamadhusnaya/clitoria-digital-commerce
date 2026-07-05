<x-app-layout>
    <!-- Page Header Section -->
    <div class="flex justify-between items-end mb-12">
        <div class="flex flex-col gap-2">
            <h1 class="text-[48px] leading-[56px] font-bold text-on-surface tracking-tight">Harga Produk</h1>
            <p class="text-[18px] text-on-surface-variant max-w-2xl">Kelola variasi produk, tingkatan paket, dan paket bundling untuk seluruh katalog botani.</p>
        </div>
        <a href="{{ route('admin.product-prices.create') }}" class="flex items-center gap-2 px-6 py-3.5 bg-primary-container text-on-primary rounded-full text-[14px] font-bold hover:scale-[1.02] active:scale-[0.98] transition-all shadow-lg shadow-primary-container/20">
            <span class="material-symbols-outlined text-[20px]" data-icon="add">add</span>
            Tambah Harga Baru
        </a>
    </div>

    <!-- Quick Stats Bento-lite -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
        <div class="bg-surface-container-lowest p-6 rounded-lg shadow-[0px_10px_30px_rgba(31,35,64,0.04)] border border-outline-variant/10">
            <p class="text-[12px] uppercase tracking-widest text-outline mb-2 font-semibold">TOTAL SKU</p>
            <p class="text-[32px] font-bold text-on-surface">{{ $product_prices->count() }}</p>
        </div>
        <div class="bg-surface-container-lowest p-6 rounded-lg shadow-[0px_10px_30px_rgba(31,35,64,0.04)] border border-outline-variant/10">
            <p class="text-[12px] uppercase tracking-widest text-outline mb-2 font-semibold">BUNDLE AKTIF</p>
            <p class="text-[32px] font-bold text-on-surface">{{ $product_prices->where('type', 'bundle')->count() }}</p>
        </div>
        <div class="bg-surface-container-lowest p-6 rounded-lg shadow-[0px_10px_30px_rgba(31,35,64,0.04)] border border-outline-variant/10">
            <p class="text-[12px] uppercase tracking-widest text-outline mb-2 font-semibold">RATA-RATA HARGA</p>
            <p class="text-[32px] font-bold text-on-surface">Rp {{ number_format($product_prices->avg('price'), 0, ',', '.') }}</p>
        </div>
        <div class="bg-surface-container-lowest p-6 rounded-lg shadow-[0px_10px_30px_rgba(31,35,64,0.04)] border border-outline-variant/10">
            <p class="text-[12px] uppercase tracking-widest text-outline mb-2 font-semibold">DISKON MENDATANG</p>
            <p class="text-[32px] font-bold text-secondary">3</p>
        </div>
    </div>

    <!-- Pricing Data Table Card -->
    <section class="bg-surface-container-lowest rounded-xl shadow-[0px_10px_30px_rgba(31,35,64,0.04)] border border-outline-variant/10 overflow-hidden">
        <div class="px-8 py-6 border-b border-outline-variant/20 flex justify-between items-center bg-white/50 backdrop-blur-sm">
            <h3 class="text-[24px] font-semibold text-on-surface">Matriks Harga Inventaris</h3>
            <div class="flex gap-4">
                <button class="flex items-center gap-2 px-4 py-2 rounded-full border border-outline-variant text-[14px] text-on-surface-variant hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-[18px]" data-icon="filter_list">filter_list</span>
                    Filter
                </button>
                <button class="flex items-center gap-2 px-4 py-2 rounded-full border border-outline-variant text-[14px] text-on-surface-variant hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-[18px]" data-icon="download">download</span>
                    Ekspor CSV
                </button>
            </div>
        </div>
        
        @if (session('success'))
            <div class="bg-tertiary-container/10 border-b border-tertiary-container text-tertiary-container px-8 py-4 text-sm font-medium">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low/50">
                        <th class="px-8 py-5 text-[12px] tracking-widest uppercase text-outline font-semibold">Produk</th>
                        <th class="px-8 py-5 text-[12px] tracking-widest uppercase text-outline font-semibold">Nama Paket</th>
                        <th class="px-8 py-5 text-[12px] tracking-widest uppercase text-outline font-semibold">Tipe</th>
                        <th class="px-8 py-5 text-[12px] tracking-widest uppercase text-outline font-semibold">Harga</th>
                        <th class="px-8 py-5 text-[12px] tracking-widest uppercase text-outline font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/10">
                    @forelse ($product_prices as $price)
                    <tr class="hover:bg-surface-container-low/30 transition-colors group">
                        <td class="px-8 py-5">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-lg bg-surface-container-high overflow-hidden shadow-sm">
                                    @if($price->product && $price->product->image)
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $price->product->image) }}"/>
                                    @else
                                        <div class="w-full h-full flex items-center justify-center bg-surface-container">
                                            <span class="material-symbols-outlined text-outline">image</span>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <span class="block text-[14px] font-bold text-on-surface">{{ $price->product->name ?? 'Produk Tidak Diketahui' }}</span>
                                    <span class="text-[12px] text-outline flex items-center gap-1">
                                        <span class="w-2 h-2 rounded-full bg-tertiary"></span> Sertifikat Organik
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-[16px] text-on-surface-variant">{{ $price->package_name }}</td>
                        <td class="px-8 py-5">
                            @if($price->type == 'single')
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 text-[12px] tracking-widest uppercase rounded-full font-bold">Single</span>
                            @else
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 text-[12px] tracking-widest uppercase rounded-full font-bold">Bundle</span>
                            @endif
                        </td>
                        <td class="px-8 py-5 text-[16px] font-bold text-on-surface">Rp {{ number_format($price->price, 0, ',', '.') }}</td>
                        <td class="px-8 py-5 text-right">
                            <div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('admin.product-prices.edit', $price->id) }}" class="p-2 text-outline hover:text-primary hover:bg-primary/5 rounded-full transition-all">
                                    <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                </a>
                                <form action="{{ route('admin.product-prices.destroy', $price->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus harga ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-outline hover:text-error hover:bg-error/5 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-12 text-center text-on-surface-variant">
                            <div class="flex flex-col items-center justify-center">
                                <span class="material-symbols-outlined text-4xl mb-3 text-outline-variant">payments</span>
                                <p>Belum ada harga produk yang ditemukan.</p>
                                <a href="{{ route('admin.product-prices.create') }}" class="mt-2 text-primary hover:underline font-medium">Buat sekarang</a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($product_prices->count() > 0)
        <!-- Pagination Placeholder -->
        <div class="px-8 py-5 bg-surface-container-low/20 flex justify-between items-center border-t border-outline-variant/10">
            <span class="text-[14px] text-outline">Menampilkan 1-{{ $product_prices->count() }} dari {{ $product_prices->count() }} hasil</span>
            <div class="flex items-center gap-1">
                <button class="p-2 rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant">
                    <span class="material-symbols-outlined text-[20px]" data-icon="chevron_left">chevron_left</span>
                </button>
                <button class="w-8 h-8 rounded-full bg-primary-container text-on-primary flex items-center justify-center text-[14px]">1</button>
                <button class="p-2 rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant">
                    <span class="material-symbols-outlined text-[20px]" data-icon="chevron_right">chevron_right</span>
                </button>
            </div>
        </div>
        @endif
    </section>

    <!-- Contextual Actions / Bottom Bento -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-primary/5 p-8 rounded-lg border border-primary/10 flex flex-col gap-4">
            <div class="flex items-center gap-3 text-primary">
                <span class="material-symbols-outlined" data-icon="auto_fix_high">auto_fix_high</span>
                <h4 class="text-[24px] font-semibold">Saran Cerdas</h4>
            </div>
            <p class="text-[16px] text-on-surface-variant">Algoritma kami mendeteksi bahwa 'Midnight Glow Elixir' sering dibeli dengan 'Ritual Tea'. Pertimbangkan untuk membuat bundle <span class="font-bold text-primary">Wellness Pair</span> seharga Rp 1.100.000 untuk meningkatkan nilai pesanan rata-rata sebesar 12%.</p>
            <button class="mt-2 text-primary font-bold text-[14px] flex items-center gap-1 hover:gap-2 w-fit transition-all">
                Buat bundle ini <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
            </button>
        </div>
        <div class="bg-secondary/5 p-8 rounded-lg border border-secondary/10 flex flex-col gap-4">
            <div class="flex items-center gap-3 text-secondary">
                <span class="material-symbols-outlined" data-icon="campaign">campaign</span>
                <h4 class="text-[24px] font-semibold">Sinkronisasi Promosi</h4>
            </div>
            <p class="text-[16px] text-on-surface-variant">Diskon 'Equinox Ritual' mendatang akan dimulai dalam 3 hari. Pastikan semua penyesuaian harga untuk koleksi Botani selesai sebelum tengah malam ini.</p>
            <div class="flex gap-4 mt-2">
                <div class="flex flex-col">
                    <span class="text-[10px] text-outline uppercase font-bold">DIMULAI DALAM</span>
                    <span class="text-[24px] font-bold text-on-surface">71:24:12</span>
                </div>
                <button class="ml-auto self-end px-4 py-2 border border-secondary text-secondary rounded-full text-[14px] font-bold hover:bg-secondary/10 transition-colors">
                    Lihat Jadwal
                </button>
            </div>
        </div>
    </div>
</x-app-layout>

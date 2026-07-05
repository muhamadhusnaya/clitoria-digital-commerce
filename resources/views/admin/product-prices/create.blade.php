<x-app-layout>
    <!-- Header Section -->
    <div class="mb-10 flex flex-col items-start gap-4">
        <a href="{{ route('admin.product-prices.index') }}" class="flex items-center gap-2 text-primary font-label-md text-[14px] hover:underline group">
            <span class="material-symbols-outlined text-[18px] group-hover:-translate-x-1 transition-transform">arrow_back</span>
            Kembali ke Daftar
        </a>
        <h2 class="font-display-lg text-[48px] leading-[56px] font-bold text-on-background">Buat Harga/Paket Baru</h2>
        <p class="text-on-surface-variant font-body-md text-[16px]">Tentukan tingkatan harga dan jenis paket baru untuk produk botani Anda.</p>
    </div>

    @if ($errors->any())
    <div class="mb-6 p-4 bg-[#ffdad6] text-[#ba1a1a] rounded-xl text-[14px] font-medium">
        <ul class="list-disc list-inside space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.product-prices.store') }}" method="POST">
        @csrf
        <!-- Content Grid -->
        <div class="grid grid-cols-12 gap-6">
            <!-- Left Column: Package Details -->
            <div class="col-span-12 lg:col-span-7">
                <div class="bg-surface-container-lowest rounded-xl p-8 shadow-[0px_10px_30px_rgba(31,35,64,0.04)] border border-outline-variant/30">
                    <div class="flex items-center gap-3 mb-8">
                        <span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">inventory_2</span>
                        <h3 class="font-headline-sm text-[24px] font-semibold">Detail Paket</h3>
                    </div>
                    <div class="space-y-6">
                        <!-- Base Product Dropdown -->
                        <div class="flex flex-col gap-2">
                            <label class="font-label-md text-[14px] font-medium text-on-surface-variant px-1">Produk Dasar <span class="text-error">*</span></label>
                            <select name="product_id" id="product_id" required class="h-[56px] px-6 rounded-xl border-outline-variant bg-surface-container-low text-on-surface text-[16px] transition-all appearance-none cursor-pointer focus:border-primary focus:ring focus:ring-primary/20">
                                <option value="" disabled selected>-- Pilih Produk --</option>
                                @if(isset($products))
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }} data-name="{{ $product->name }}">
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        
                        <!-- Package Name Text Input -->
                        <div class="flex flex-col gap-2">
                            <label class="font-label-md text-[14px] font-medium text-on-surface-variant px-1">Nama Paket <span class="text-error">*</span></label>
                            <input name="package_name" id="package_name-input" value="{{ old('package_name') }}" required class="h-[56px] px-6 rounded-xl border-outline-variant bg-surface-container-low text-on-surface text-[16px] transition-all focus:border-primary focus:ring focus:ring-primary/20" placeholder="Mis. Eco Sachet, Premium Tin Box" type="text"/>
                        </div>
                        
                        <!-- Row: Type & Unit -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col gap-2">
                                <label class="font-label-md text-[14px] font-medium text-on-surface-variant px-1">Tipe Paket <span class="text-error">*</span></label>
                                <select name="type" id="type" required class="h-[56px] px-6 rounded-xl border-outline-variant bg-surface-container-low text-on-surface text-[16px] transition-all appearance-none cursor-pointer focus:border-primary focus:ring focus:ring-primary/20">
                                    <option value="single" {{ old('type') == 'single' ? 'selected' : '' }}>Single Item</option>
                                    <option value="bundle" {{ old('type') == 'bundle' ? 'selected' : '' }}>Bundle Package</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-label-md text-[14px] font-medium text-on-surface-variant px-1">Status Stok</label>
                                <div class="h-[56px] flex items-center justify-between px-6 rounded-xl border border-outline-variant bg-surface-container-low">
                                    <span class="text-on-surface text-[16px]">Tersedia</span>
                                    <div class="w-10 h-5 bg-tertiary-fixed rounded-full relative shadow-inner">
                                        <div class="absolute right-0.5 top-0.5 w-4 h-4 bg-white rounded-full shadow-sm"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Price Numerical Input -->
                        <div class="flex flex-col gap-2">
                            <label class="font-label-md text-[14px] font-medium text-on-surface-variant px-1">Harga Jual (Rp) <span class="text-error">*</span></label>
                            <div class="relative">
                                <span class="absolute left-6 top-1/2 -translate-y-1/2 text-[24px] text-primary font-bold">Rp</span>
                                <input name="price" id="price-input" value="{{ old('price') }}" required type="number" min="0" step="0.01" class="h-[72px] pl-16 pr-6 w-full rounded-xl border-outline-variant bg-surface-container-low text-[36px] text-primary font-bold transition-all focus:border-primary focus:ring focus:ring-primary/20 outline-none" placeholder="0"/>
                            </div>
                            <p class="text-[12px] text-outline px-1 mt-1">Ini adalah harga akhir ke pelanggan (sudah termasuk pajak).</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Pricing Summary Preview -->
            <div class="col-span-12 lg:col-span-5">
                <div class="bg-surface-container-lowest rounded-xl p-8 shadow-[0px_10px_30px_rgba(31,35,64,0.04)] border border-outline-variant/30 sticky top-24">
                    <div class="flex items-center gap-3 mb-8">
                        <span class="material-symbols-outlined text-secondary bg-secondary/10 p-2 rounded-lg">visibility</span>
                        <h3 class="font-headline-sm text-[24px] font-semibold">Pratinjau Harga</h3>
                    </div>
                    <!-- Preview Card -->
                    <div class="relative overflow-hidden rounded-2xl border-2 border-primary/20 bg-white p-1">
                        <div class="rounded-xl overflow-hidden bg-gradient-to-br from-primary-fixed to-white p-6">
                            <div class="flex justify-between items-start mb-12">
                                <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow-sm">
                                    <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1">eco</span>
                                </div>
                                <span class="px-3 py-1 bg-tertiary-container text-tertiary-fixed font-bold text-[12px] tracking-widest rounded-full">NATURAL</span>
                            </div>
                            <p class="text-on-surface-variant font-bold text-[14px] mb-1 uppercase tracking-wider" id="preview-type">Single Item</p>
                            <h4 class="font-headline-md text-[32px] font-bold text-on-background mb-4" id="preview-name">Pilih Paket...</h4>
                            <div class="flex items-baseline gap-2 mb-6">
                                <span class="text-[24px] text-primary font-bold">Rp</span>
                                <span class="text-[48px] leading-[56px] text-primary font-bold" id="preview-price">0</span>
                            </div>
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center gap-2 text-on-surface-variant text-[16px]">
                                    <span class="material-symbols-outlined text-tertiary text-sm">check_circle</span>
                                    Berasal dari kebun organik
                                </li>
                                <li class="flex items-center gap-2 text-on-surface-variant text-[16px]">
                                    <span class="material-symbols-outlined text-tertiary text-sm">check_circle</span>
                                    Kemasan dapat didaur ulang
                                </li>
                            </ul>
                            <button type="button" class="w-full h-[56px] rounded-xl bg-primary text-white font-bold opacity-80 cursor-not-allowed" disabled>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                    <div class="mt-8 p-4 rounded-xl bg-surface-container-high/50 border border-dashed border-outline-variant">
                        <h5 class="text-[14px] font-bold mb-2">Ringkasan Langsung</h5>
                        <div class="flex justify-between items-center text-sm mb-1">
                            <span class="text-on-surface-variant">Estimasi Margin Profit</span>
                            <span class="font-semibold text-tertiary">~42%</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-on-surface-variant">Pembaruan Terakhir</span>
                            <span class="text-outline">Baru saja</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Footer Action Bar -->
        <footer class="fixed bottom-0 right-0 left-64 h-24 bg-surface/90 backdrop-blur-xl border-t border-outline-variant/30 px-12 z-40 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
                <p class="text-on-surface-variant text-[14px] font-medium">Perubahan belum disimpan</p>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.product-prices.index') }}" class="px-8 h-[56px] flex items-center justify-center rounded-xl font-bold text-primary hover:bg-primary/10 transition-all text-[14px]">
                    Batal
                </a>
                <button type="submit" class="px-10 h-[56px] flex items-center justify-center rounded-xl bg-primary-container text-white font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all text-[14px]">
                    Simpan Harga
                </button>
            </div>
        </footer>
    </form>

    <script>
        const nameInput = document.getElementById('package_name-input');
        const priceInput = document.getElementById('price-input');
        const previewName = document.getElementById('preview-name');
        const previewPrice = document.getElementById('preview-price');
        const productSelect = document.getElementById('product_id');
        const typeSelect = document.getElementById('type');
        const previewType = document.getElementById('preview-type');

        function updatePreviewName() {
            const productName = productSelect.options[productSelect.selectedIndex]?.getAttribute('data-name') || '';
            const packageName = nameInput.value;
            if (productName && packageName) {
                previewName.textContent = productName + ' - ' + packageName;
            } else if (packageName) {
                previewName.textContent = packageName;
            } else if (productName) {
                previewName.textContent = productName;
            } else {
                previewName.textContent = 'Pilih Paket...';
            }
        }

        nameInput.addEventListener('input', updatePreviewName);
        productSelect.addEventListener('change', updatePreviewName);

        priceInput.addEventListener('input', (e) => {
            const val = e.target.value;
            previewPrice.textContent = val ? Number(val).toLocaleString('id-ID') : '0';
        });

        typeSelect.addEventListener('change', (e) => {
            previewType.textContent = e.target.options[e.target.selectedIndex].text;
        });

        // Initialize preview on page load (for validation errors)
        if(nameInput.value || productSelect.value) updatePreviewName();
        if(priceInput.value) previewPrice.textContent = Number(priceInput.value).toLocaleString('id-ID');
        if(typeSelect.value) previewType.textContent = typeSelect.options[typeSelect.selectedIndex].text;
    </script>
</x-app-layout>

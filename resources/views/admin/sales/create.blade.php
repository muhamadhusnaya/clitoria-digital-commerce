<x-app-layout>
    <style>
        .custom-shadow {
            box-shadow: 0px 10px 30px 0px rgba(31, 35, 64, 0.04);
        }
    </style>
    
    <div x-data="salesForm({{ $products->toJson() }})" class="pb-32">
        <!-- Breadcrumbs & Header -->
        <div class="mb-10 animate-in fade-in duration-700">
            <a class="inline-flex items-center gap-2 text-primary hover:gap-3 transition-all mb-4" href="{{ route('admin.sales.index') }}">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                <span class="font-label-md">Kembali ke Daftar</span>
            </a>
            <h2 class="font-display-lg text-[32px] lg:text-[48px] font-bold text-on-surface tracking-tight">Catat Penjualan Manual</h2>
            <p class="text-body-lg text-[18px] text-on-surface-variant mt-2 max-w-2xl">Buat transaksi manual untuk pesanan luring, pesanan khusus, atau penjualan lainnya.</p>
        </div>

        @if ($errors->any())
        <div class="mb-6 bg-[#FFDAD6] text-error p-4 rounded-xl custom-shadow">
            <ul class="list-disc pl-5 font-medium">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.sales.store') }}" method="POST" id="sales-form">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left Column: Sale Details -->
                <section class="lg:col-span-5 space-y-6">
                    <div class="bg-white p-8 rounded-xl custom-shadow border border-surface-container">
                        <h3 class="font-headline-sm text-[24px] font-bold text-on-surface mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">description</span>
                            Detail Penjualan
                        </h3>
                        
                        <div class="space-y-5">
                            <div class="group">
                                <label class="block font-bold text-[14px] text-on-surface-variant mb-2 group-focus-within:text-primary transition-colors">Tanggal Transaksi</label>
                                <div class="relative">
                                    <input type="date" name="sale_date" value="{{ old('sale_date', date('Y-m-d')) }}" class="w-full h-[56px] px-4 rounded-xl border border-outline-variant bg-surface-container-low focus:bg-white text-body-md focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
                                </div>
                            </div>
                            
                            <div class="group">
                                <label class="block font-bold text-[14px] text-on-surface-variant mb-2 group-focus-within:text-primary transition-colors">Nama Pelanggan (Opsional)</label>
                                <div class="relative">
                                    <input type="text" name="customer_name" value="{{ old('customer_name') }}" class="w-full h-[56px] px-4 rounded-xl border border-outline-variant bg-surface-container-low focus:bg-white text-body-md focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="Masukkan nama pelanggan...">
                                    <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-outline pointer-events-none">person_search</span>
                                </div>
                            </div>
                            
                            <div class="group">
                                <label class="block font-bold text-[14px] text-on-surface-variant mb-2 group-focus-within:text-primary transition-colors">Catatan Internal</label>
                                <textarea name="notes" rows="4" class="w-full p-4 rounded-xl border border-outline-variant bg-surface-container-low focus:bg-white text-body-md resize-none focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="Catatan pengiriman khusus atau instruksi pesanan...">{{ old('notes') }}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Visual -->
                    <div class="h-64 rounded-xl overflow-hidden relative group hidden lg:block">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="{{ asset('images/bunga_telang_tea.png') }}" alt="Teh bunga telang">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent flex items-end p-6">
                            <p class="text-white font-bold text-[14px] opacity-90 italic">"Kemurnian di setiap seduhan."</p>
                        </div>
                    </div>
                </section>
                
                <!-- Right Column: Order Items -->
                <section class="lg:col-span-7 space-y-6">
                    <div class="bg-white p-8 rounded-xl custom-shadow border border-surface-container">
                        <h3 class="font-headline-sm text-[24px] font-bold text-on-surface mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">inventory</span>
                            Daftar Pesanan
                        </h3>
                        
                        <!-- Add Item Controls (Alpine-driven logic replacement) -->
                        <div class="flex items-center gap-4 mb-8">
                            <button type="button" @click="addItem()" class="h-[56px] px-6 bg-primary-container text-white rounded-xl font-bold flex items-center justify-center gap-2 hover:scale-[1.02] active:scale-95 transition-all shadow-md">
                                <span class="material-symbols-outlined text-[20px]">add</span>
                                Tambah Produk
                            </button>
                        </div>
                        
                        <!-- Dynamic Items List / Table -->
                        <div class="overflow-hidden border border-outline-variant/30 rounded-xl">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-surface-container-low border-b border-outline-variant/30">
                                        <th class="px-6 py-4 font-bold text-[12px] uppercase tracking-widest text-on-surface-variant">Produk</th>
                                        <th class="px-6 py-4 font-bold text-[12px] uppercase tracking-widest text-on-surface-variant text-center">Harga (Rp)</th>
                                        <th class="px-6 py-4 font-bold text-[12px] uppercase tracking-widest text-on-surface-variant text-center w-24">Jml</th>
                                        <th class="px-6 py-4 font-bold text-[12px] uppercase tracking-widest text-on-surface-variant text-right">Subtotal</th>
                                        <th class="px-6 py-4"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-outline-variant/20">
                                    <template x-for="(item, index) in items" :key="item.id">
                                        <tr class="hover:bg-surface-container-lowest transition-colors">
                                            
                                            <!-- Product Name/Selection -->
                                            <td class="px-4 py-4 align-top">
                                                <input type="hidden" :name="`items[${index}][product_id]`" x-model="item.product_id">
                                                <div class="flex flex-col gap-2">
                                                    <select x-model="item.selected_product" @change="updateProductDetails(index)" class="w-full border border-outline-variant bg-surface-container-low rounded-lg px-3 py-2 text-sm outline-none focus:border-primary">
                                                        <option value="custom">-- Kustom --</option>
                                                        <template x-for="product in products" :key="product.id">
                                                            <option :value="product.id" x-text="product.name"></option>
                                                        </template>
                                                    </select>
                                                    <input type="text" :name="`items[${index}][product_name]`" x-model="item.product_name" required class="w-full border border-outline-variant bg-surface-container-low rounded-lg px-3 py-2 text-sm outline-none focus:border-primary" placeholder="Nama produk...">
                                                </div>
                                            </td>
                                            
                                            <!-- Price -->
                                            <td class="px-4 py-4 align-top">
                                                <input type="number" :name="`items[${index}][price]`" x-model.number="item.price" min="0" required class="w-full border border-outline-variant bg-surface-container-low rounded-lg px-3 py-2 text-sm outline-none text-right focus:border-primary">
                                            </td>
                                            
                                            <!-- Quantity -->
                                            <td class="px-4 py-4 align-top">
                                                <input type="number" :name="`items[${index}][qty]`" x-model.number="item.qty" min="1" required class="w-full border border-outline-variant bg-surface-container-low rounded-lg px-3 py-2 text-sm outline-none text-center focus:border-primary">
                                            </td>
                                            
                                            <!-- Subtotal -->
                                            <td class="px-4 py-4 text-right font-bold text-on-surface align-top pt-6">
                                                Rp <span x-text="formatCurrency(item.price * item.qty)"></span>
                                            </td>
                                            
                                            <!-- Action -->
                                            <td class="px-4 py-4 text-right align-top pt-5">
                                                <button type="button" @click="removeItem(index)" class="p-2 text-error hover:bg-error-container/20 rounded-full transition-colors" title="Hapus Item" :disabled="items.length === 1">
                                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                                </button>
                                            </td>
                                            
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                            
                            <!-- Empty State for Items -->
                            <div x-show="items.length === 0" class="text-center py-8">
                                <p class="text-on-surface-variant text-[14px]">Belum ada produk yang ditambahkan.</p>
                            </div>
                        </div>
                        
                        <!-- Summary Calculation -->
                        <div class="mt-8 pt-8 border-t border-outline-variant/30 flex flex-col items-end space-y-3">
                            <div class="flex justify-between w-full max-w-[280px] text-on-surface-variant">
                                <span class="font-bold text-[14px]">Total Item</span>
                                <span class="font-bold text-[14px] text-on-surface" x-text="totalItems()"></span>
                            </div>
                            <div class="flex justify-between w-full max-w-[280px] pt-3">
                                <span class="font-headline-sm text-[20px] font-bold text-on-surface">Total Harga</span>
                                <span class="font-headline-sm text-[20px] font-bold text-primary">Rp <span x-text="formatCurrency(grandTotal())"></span></span>
                            </div>
                        </div>
                        
                    </div>
                </section>
                
            </div>
            
            <!-- Sticky Bottom Action Bar -->
            <div class="fixed bottom-0 md:left-64 left-0 right-0 h-24 bg-white/80 backdrop-blur-md border-t border-surface-container shadow-[0_-4px_20px_rgba(31,35,64,0.05)] px-6 z-40">
                <div class="max-w-[1280px] mx-auto w-full h-full flex items-center justify-between">
                    <div class="hidden md:flex items-center gap-4 text-on-surface-variant">
                        <span class="material-symbols-outlined text-[20px] text-primary">info</span>
                        <p class="font-bold text-[14px]">Perubahan tidak akan disimpan hingga Anda mengirimkan form.</p>
                    </div>
                    <div class="flex items-center gap-4 w-full md:w-auto justify-end">
                        <a href="{{ route('admin.sales.index') }}" class="px-8 h-14 rounded-xl font-bold flex items-center justify-center text-primary-container hover:bg-primary-container/5 transition-colors">
                            Batal
                        </a>
                        <button type="submit" class="px-10 h-14 bg-primary-container text-white rounded-xl font-bold flex items-center gap-3 hover:scale-[1.02] active:scale-95 transition-all shadow-lg shadow-primary-container/20">
                            <span class="material-symbols-outlined">save</span>
                            Simpan Penjualan
                        </button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>

    <!-- Alpine.js logic for Sales Form -->
    <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('salesForm', (productsList) => ({
            products: productsList,
            items: [
                { id: Date.now(), product_id: '', product_name: '', selected_product: 'custom', price: 0, qty: 1 }
            ],
            
            addItem() {
                this.items.push({
                    id: Date.now(),
                    product_id: '',
                    product_name: '',
                    selected_product: 'custom',
                    price: 0,
                    qty: 1
                });
            },
            
            removeItem(index) {
                if (this.items.length > 1) {
                    this.items.splice(index, 1);
                }
            },
            
            updateProductDetails(index) {
                const item = this.items[index];
                
                if (item.selected_product === 'custom') {
                    item.product_id = '';
                    item.product_name = '';
                    item.price = 0;
                } else {
                    const product = this.products.find(p => p.id == item.selected_product);
                    if (product) {
                        item.product_id = product.id;
                        item.product_name = product.name;
                        item.price = product.price;
                    }
                }
            },
            
            totalItems() {
                return this.items.reduce((sum, item) => sum + (parseInt(item.qty) || 0), 0);
            },
            
            grandTotal() {
                return this.items.reduce((sum, item) => sum + ((parseFloat(item.price) || 0) * (parseInt(item.qty) || 0)), 0);
            },
            
            formatCurrency(value) {
                return new Intl.NumberFormat('id-ID', { maximumFractionDigits: 0 }).format(value);
            }
        }));
    });
    </script>
</x-app-layout>

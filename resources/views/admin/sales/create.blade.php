<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('New Sales Entry') }}
            </h2>
            <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-all">
                Cancel
            </a>
        </div>
    </x-slot>

    <div class="py-12" x-data="salesForm({{ $products->toJson() }})">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @if (session('success'))
                        <div class="mb-6 bg-[#B3F582] text-[#224C00] p-4 rounded-md flex items-center gap-2">
                            <span class="material-symbols-outlined">check_circle</span>
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 bg-[#FFDAD6] text-[#BA1A1A] p-4 rounded-md">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.sales.store') }}" method="POST" id="sales-form">
                        @csrf
                        
                        <!-- Transaction Details Card -->
                        <div class="mb-8 p-6 bg-[#F4F2FF] dark:bg-[#2C2C2A] border border-[#C9C4D5] dark:border-gray-700 rounded-xl">
                            <h3 class="text-lg font-semibold text-[#432B9F] dark:text-[#EADDFF] mb-4 border-b border-[#C9C4D5] dark:border-gray-700 pb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined">receipt_long</span> Transaction Details
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="sale_date" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Transaction Date</label>
                                    <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date', date('Y-m-d')) }}" class="w-full bg-white dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none">
                                </div>
                                
                                <div>
                                    <label for="customer_name" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Customer Name</label>
                                    <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name') }}" class="w-full bg-white dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none" placeholder="e.g. John Doe (Optional)">
                                </div>

                                <div class="md:col-span-2">
                                    <label for="notes" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Internal Notes</label>
                                    <textarea name="notes" id="notes" rows="2" class="w-full bg-white dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none" placeholder="e.g. Paid via Bank Transfer">{{ old('notes') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Products Section -->
                        <div class="mb-8">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-semibold text-[#151936] dark:text-gray-100 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[#432B9F]">inventory_2</span> Products Sold
                                </h3>
                                <button type="button" @click="addItem()" class="px-4 py-2 bg-[#EADDFF] text-[#432B9F] rounded-full text-sm font-medium hover:bg-[#D0BCFF] transition-all flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">add</span> Add Row
                                </button>
                            </div>

                            <!-- Desktop Table Header (hidden on mobile) -->
                            <div class="hidden md:grid grid-cols-12 gap-4 mb-2 px-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                <div class="col-span-5">Product</div>
                                <div class="col-span-2">Price (Rp)</div>
                                <div class="col-span-2">Quantity</div>
                                <div class="col-span-2">Subtotal</div>
                                <div class="col-span-1 text-center">Action</div>
                            </div>

                            <!-- Dynamic Items List -->
                            <div class="space-y-4">
                                <template x-for="(item, index) in items" :key="item.id">
                                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center bg-[#F4F2FF] dark:bg-[#2C2C2A] md:bg-transparent md:dark:bg-transparent p-4 md:p-0 rounded-xl border border-[#C9C4D5] md:border-none dark:border-gray-700">
                                        
                                        <!-- Product Selection -->
                                        <div class="md:col-span-5 space-y-2 md:space-y-0">
                                            <label class="md:hidden text-xs font-medium text-gray-500">Product Name</label>
                                            
                                            <!-- Hidden Inputs for Form Submission -->
                                            <input type="hidden" :name="`items[${index}][product_id]`" x-model="item.product_id">
                                            
                                            <div class="flex items-center gap-2">
                                                <!-- Dropdown for existing products -->
                                                <select x-model="item.selected_product" @change="updateProductDetails(index)" class="w-1/3 bg-white dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-lg px-2 py-2 focus:ring-2 focus:ring-[#432B9F] text-sm outline-none">
                                                    <option value="custom">Custom...</option>
                                                    <template x-for="product in products" :key="product.id">
                                                        <option :value="product.id" x-text="product.name"></option>
                                                    </template>
                                                </select>
                                                
                                                <!-- Text input for product name -->
                                                <input type="text" :name="`items[${index}][product_name]`" x-model="item.product_name" required class="w-2/3 bg-white dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#432B9F] text-sm outline-none" placeholder="Product name...">
                                            </div>
                                        </div>

                                        <!-- Price -->
                                        <div class="md:col-span-2 space-y-2 md:space-y-0">
                                            <label class="md:hidden text-xs font-medium text-gray-500">Price (Rp)</label>
                                            <input type="number" :name="`items[${index}][price]`" x-model.number="item.price" min="0" required class="w-full bg-white dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#432B9F] text-sm outline-none">
                                        </div>

                                        <!-- Quantity -->
                                        <div class="md:col-span-2 space-y-2 md:space-y-0">
                                            <label class="md:hidden text-xs font-medium text-gray-500">Quantity</label>
                                            <input type="number" :name="`items[${index}][qty]`" x-model.number="item.qty" min="1" required class="w-full bg-white dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#432B9F] text-sm outline-none">
                                        </div>

                                        <!-- Subtotal (Readonly) -->
                                        <div class="md:col-span-2 space-y-2 md:space-y-0">
                                            <label class="md:hidden text-xs font-medium text-gray-500">Subtotal</label>
                                            <div class="w-full bg-gray-100 dark:bg-gray-700 border border-transparent rounded-lg px-3 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 flex items-center justify-between">
                                                <span>Rp</span>
                                                <span x-text="formatCurrency(item.price * item.qty)"></span>
                                            </div>
                                        </div>

                                        <!-- Action -->
                                        <div class="md:col-span-1 flex justify-end md:justify-center mt-2 md:mt-0">
                                            <button type="button" @click="removeItem(index)" class="text-[#BA1A1A] hover:bg-[#FFDAD6] p-2 rounded-full transition-colors flex items-center justify-center" title="Remove Item" :disabled="items.length === 1">
                                                <span class="material-symbols-outlined text-sm">delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </template>
                            </div>
                            
                            <!-- Add Row button if empty -->
                            <div x-show="items.length === 0" class="text-center py-8 bg-[#F4F2FF] dark:bg-[#2C2C2A] rounded-xl border border-dashed border-[#797584] dark:border-gray-600">
                                <p class="text-gray-500 mb-3">No products added to this transaction.</p>
                                <button type="button" @click="addItem()" class="px-4 py-2 bg-[#432B9F] text-white rounded-full text-sm font-medium hover:bg-[#5B46B8] transition-all shadow-sm">
                                    Add First Product
                                </button>
                            </div>
                        </div>

                        <!-- Grand Total Summary -->
                        <div class="flex flex-col items-end mb-8 border-t border-[#C9C4D5] dark:border-gray-700 pt-6">
                            <div class="w-full md:w-1/3 bg-[#EADDFF] dark:bg-[#4A4458] rounded-xl p-6 shadow-sm border border-[#D0BCFF] dark:border-[#635B70]">
                                <div class="flex justify-between items-center text-sm text-gray-600 dark:text-gray-300 mb-2">
                                    <span>Total Items:</span>
                                    <span class="font-bold text-[#151936] dark:text-white" x-text="totalItems()"></span>
                                </div>
                                <div class="flex justify-between items-center text-xl font-bold text-[#432B9F] dark:text-[#D0BCFF] mt-4 pt-4 border-t border-[#D0BCFF] dark:border-[#635B70]">
                                    <span>Grand Total:</span>
                                    <span>Rp <span x-text="formatCurrency(grandTotal())"></span></span>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-end gap-3 pt-4">
                            <button type="submit" class="px-8 py-3 bg-[#432B9F] text-white rounded-full font-bold text-lg hover:bg-[#5B46B8] transition-all shadow-md flex items-center gap-2 w-full md:w-auto justify-center">
                                <span class="material-symbols-outlined">save</span> Save Transaction
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
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

@extends('layouts.public')

@section('title', 'Your Cart | Clitoria Digital Commerce')

@section('content')
    <div class="max-w-[1280px] mx-auto px-5 md:px-16 pt-32 pb-24">
        <!-- Header -->
        <div class="mb-12 reveal">
            <h1 class="text-3xl md:text-4xl font-bold text-on-surface mb-2">Review Your Order</h1>
            <p class="text-on-surface-variant">You have 2 items in your cart.</p>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-12 gap-12" x-data="{ items: [{id:1, name:'Sacred Blue Butterfly Pea Tea', price:65, qty:2, weight:'250g', img:'https://images.unsplash.com/photo-1615526674996-2b47e256b825'}, {id:2, name:'Premium Blue Matcha Powder', price:45, qty:1, weight:'100g', img:'https://images.unsplash.com/photo-1576402187878-974f70c890a5'}], get subtotal() { return this.items.reduce((sum, item) => sum + (item.price * item.qty), 0); } }">
            
            <!-- Left Side: Cart Items (8 cols) -->
            <div class="xl:col-span-8">
                <!-- Items Table/List -->
                <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden mb-8 reveal">
                    <!-- Desktop Header -->
                    <div class="hidden md:grid grid-cols-12 gap-4 p-6 bg-surface-container-low border-b border-outline-variant font-medium text-sm text-on-surface-variant uppercase tracking-wider">
                        <div class="col-span-6">Product</div>
                        <div class="col-span-3 text-center">Quantity</div>
                        <div class="col-span-3 text-right">Subtotal</div>
                    </div>

                    <!-- Item rows (Alpine template for dummy logic) -->
                    <template x-for="item in items" :key="item.id">
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 p-6 border-b border-outline-variant last:border-0 items-center">
                            <!-- Product Details -->
                            <div class="col-span-1 md:col-span-6 flex gap-4 items-center">
                                <button @click="items = items.filter(i => i.id !== item.id)" class="text-on-surface-variant hover:text-error transition-colors focus:outline-none">
                                    <span class="material-symbols-outlined">close</span>
                                </button>
                                <div class="w-20 h-20 bg-surface-container rounded-lg overflow-hidden flex-shrink-0">
                                    <img :src="item.img" alt="Product Image" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h3 class="font-semibold text-on-surface text-lg" x-text="item.name"></h3>
                                    <p class="text-sm text-on-surface-variant" x-text="item.weight"></p>
                                </div>
                            </div>
                            
                            <!-- Quantity -->
                            <div class="col-span-1 md:col-span-3 flex justify-start md:justify-center items-center mt-4 md:mt-0">
                                <div class="flex items-center border border-outline-variant rounded-full bg-surface h-10 w-28">
                                    <button @click="if(item.qty > 1) item.qty--" class="w-8 h-full flex items-center justify-center text-on-surface hover:text-primary focus:outline-none">
                                        <span class="material-symbols-outlined text-sm">remove</span>
                                    </button>
                                    <input type="text" x-model="item.qty" class="w-12 h-full bg-transparent text-center font-semibold text-on-surface border-none focus:ring-0 text-sm" readonly>
                                    <button @click="item.qty++" class="w-8 h-full flex items-center justify-center text-on-surface hover:text-primary focus:outline-none">
                                        <span class="material-symbols-outlined text-sm">add</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Subtotal -->
                            <div class="col-span-1 md:col-span-3 text-left md:text-right mt-2 md:mt-0 font-bold text-lg text-on-surface">
                                $<span x-text="(item.price * item.qty).toFixed(2)"></span>
                            </div>
                        </div>
                    </template>
                    
                    <div x-show="items.length === 0" class="p-12 text-center text-on-surface-variant" style="display: none;">
                        <span class="material-symbols-outlined text-5xl mb-4 opacity-50">shopping_cart</span>
                        <p class="text-lg">Your cart is empty.</p>
                        <a href="{{ route('public.products.index') ?? '#' }}" class="inline-block mt-4 text-primary font-medium hover:underline">Continue Shopping</a>
                    </div>
                </div>

                <!-- Shipping Alert -->
                <div class="bg-tertiary-container/30 border border-tertiary-fixed rounded-xl p-4 flex items-center gap-4 reveal delay-100">
                    <div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary flex-shrink-0">
                        <span class="material-symbols-outlined text-xl">local_shipping</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-on-surface">Complimentary Shipping Activated</h4>
                        <p class="text-sm text-on-surface-variant">Your order qualifies for free global shipping!</p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Order Summary (4 cols) -->
            <div class="xl:col-span-4">
                <div class="bg-surface-container-low rounded-2xl p-8 sticky top-32 shadow-premium reveal delay-200">
                    <h3 class="text-xl font-bold text-on-surface mb-6">Order Summary</h3>
                    
                    <div class="space-y-4 text-on-surface-variant border-b border-outline-variant pb-6 mb-6">
                        <div class="flex justify-between items-center">
                            <span>Subtotal</span>
                            <span class="font-medium text-on-surface">$<span x-text="subtotal.toFixed(2)"></span></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Tax (Estimated)</span>
                            <span class="font-medium text-on-surface">$0.00</span>
                        </div>
                        <div class="flex justify-between items-center text-tertiary">
                            <span>Shipping</span>
                            <span class="font-medium">Free</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-8">
                        <span class="text-lg font-bold text-on-surface">Grand Total</span>
                        <span class="text-2xl font-bold text-on-surface">$<span x-text="subtotal.toFixed(2)"></span></span>
                    </div>

                    <!-- WhatsApp CTA -->
                    <a :href="`https://wa.me/1234567890?text=Hello%20Clitoria!%20I%20would%20like%20to%20order%20the%20items%20in%20my%20cart.%20Total:%20$${subtotal.toFixed(2)}.`" target="_blank" class="w-full bg-primary text-white hover:bg-primary-container transition-colors py-4 rounded-full font-bold text-lg flex items-center justify-center gap-2 shadow-md hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transform hover:scale-[1.02] duration-300 w-full text-center">
                        <span class="material-symbols-outlined">chat</span>
                        Checkout via WhatsApp
                    </a>
                    
                    <p class="text-xs text-center text-on-surface-variant mt-4">
                        By checking out via WhatsApp, you'll be connected directly with our concierge team to confirm shipping details.
                    </p>

                    <!-- Trust Badges -->
                    <div class="flex justify-center items-center gap-4 mt-8 pt-6 border-t border-outline-variant opacity-60">
                        <span class="material-symbols-outlined text-2xl" title="Secure Payment">lock</span>
                        <span class="material-symbols-outlined text-2xl" title="Verified Quality">verified</span>
                        <span class="material-symbols-outlined text-2xl" title="Organic Sourced">eco</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

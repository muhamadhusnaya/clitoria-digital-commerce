@extends('layouts.public')

@section('title', 'Your Cart | Clitoria Digital Commerce')

@section('content')
    @php
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        $waNumber = isset($settings['whatsapp_number']) ? preg_replace('/[^0-9]/', '', $settings['whatsapp_number']) : '';
        $itemsText = "";
        $index = 1;
        foreach($summary['items'] as $item) {
            // Append package name only if it's not empty, to make it look clean
            $productName = $item['product_name'] . ($item['package_name'] ? " (" . $item['package_name'] . ")" : "");
            $itemsText .= $index . ". " . $productName . "\n   Qty: " . $item['quantity'] . "\n\n";
            $index++;
        }
        
        $totalFormatted = str_replace('Rp ', 'Rp ', $summary['formatted_total_price']); // Ensure space
        $rawWaText = "Halo Clitoria,\n\nSaya ingin memesan:\n\n" . 
                     $itemsText . 
                     "Total:\n" . $totalFormatted . "\n\n" .
                     "Mohon informasi pembayaran dan pengiriman.\n\nTerima kasih.";
                     
        $waText = rawurlencode($rawWaText);
    @endphp

    <div class="max-w-[1280px] mx-auto px-5 md:px-16 pt-32 pb-24">
        <!-- Header -->
        <div class="mb-12 reveal">
            <h1 class="text-3xl md:text-4xl font-bold text-on-surface mb-2">Review Your Order</h1>
            <p class="text-on-surface-variant">You have {{ $summary['total_items'] }} items in your cart.</p>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-12 gap-12">
            
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

                    @forelse($summary['items'] as $item)
                        @php
                            $product = \App\Models\Product::find($item['product_id']);
                        @endphp
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 p-6 border-b border-outline-variant last:border-0 items-center">
                            <!-- Product Details -->
                            <div class="col-span-1 md:col-span-6 flex gap-4 items-center">
                                <form action="{{ route('public.cart.remove') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_price_id" value="{{ $item['product_price_id'] }}">
                                    <button type="submit" class="text-on-surface-variant hover:text-error transition-colors focus:outline-none">
                                        <span class="material-symbols-outlined">close</span>
                                    </button>
                                </form>
                                <div class="w-20 h-20 bg-surface-container rounded-lg overflow-hidden flex-shrink-0">
                                    @if($product && $product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $item['product_name'] }}" class="w-full h-full object-cover">
                                    @endif
                                </div>
                                <div>
                                    <h3 class="font-semibold text-on-surface text-lg">
                                        @if($product)
                                        <a href="{{ route('public.products.show', $product->slug) }}">{{ $item['product_name'] }}</a>
                                        @else
                                        {{ $item['product_name'] }}
                                        @endif
                                    </h3>
                                    <p class="text-sm text-on-surface-variant">{{ $item['package_name'] }} - Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                                </div>
                            </div>
                            
                            <!-- Quantity -->
                            <div class="col-span-1 md:col-span-3 flex justify-start md:justify-center items-center mt-4 md:mt-0">
                                <form action="{{ route('public.cart.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_price_id" value="{{ $item['product_price_id'] }}">
                                    <div class="flex items-center border border-outline-variant rounded-full bg-surface h-10 w-28">
                                        <button type="submit" name="quantity" value="{{ $item['quantity'] - 1 }}" class="w-8 h-full flex items-center justify-center text-on-surface hover:text-primary focus:outline-none">
                                            <span class="material-symbols-outlined text-sm">remove</span>
                                        </button>
                                        <input type="text" value="{{ $item['quantity'] }}" class="w-12 h-full bg-transparent text-center font-semibold text-on-surface border-none focus:ring-0 text-sm" readonly>
                                        <button type="submit" name="quantity" value="{{ $item['quantity'] + 1 }}" class="w-8 h-full flex items-center justify-center text-on-surface hover:text-primary focus:outline-none">
                                            <span class="material-symbols-outlined text-sm">add</span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- Subtotal -->
                            <div class="col-span-1 md:col-span-3 text-left md:text-right mt-2 md:mt-0 font-bold text-lg text-on-surface">
                                Rp {{ number_format($item['subtotal'], 0, ',', '.') }}
                            </div>
                        </div>
                    @empty
                        <div class="p-12 text-center text-on-surface-variant">
                            <span class="material-symbols-outlined text-5xl mb-4 opacity-50">shopping_cart</span>
                            <p class="text-lg">Your cart is empty.</p>
                            <a href="{{ route('public.products.index') }}" class="inline-block mt-4 text-primary font-medium hover:underline">Continue Shopping</a>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Right Side: Order Summary (4 cols) -->
            <div class="xl:col-span-4">
                <div class="bg-surface-container-low rounded-2xl p-8 sticky top-32 shadow-premium reveal delay-200">
                    <h3 class="text-xl font-bold text-on-surface mb-6">Order Summary</h3>
                    
                    <div class="space-y-4 text-on-surface-variant border-b border-outline-variant pb-6 mb-6">
                        <div class="flex justify-between items-center">
                            <span>Subtotal</span>
                            <span class="font-medium text-on-surface">{{ $summary['formatted_total_price'] }}</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-8">
                        <span class="text-lg font-bold text-on-surface">Grand Total</span>
                        <span class="text-2xl font-bold text-on-surface">{{ $summary['formatted_total_price'] }}</span>
                    </div>

                    <!-- WhatsApp CTA -->
                    @if(count($summary['items']) > 0)
                    <a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}" target="_blank" class="w-full bg-primary text-white hover:bg-primary-container transition-colors py-4 rounded-full font-bold text-lg flex items-center justify-center gap-2 shadow-md hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transform hover:scale-[1.02] duration-300 text-center">
                        <span class="material-symbols-outlined">chat</span>
                        Checkout via WhatsApp
                    </a>
                    @else
                    <button disabled class="w-full bg-surface-variant text-on-surface-variant py-4 rounded-full font-bold text-lg flex items-center justify-center gap-2 cursor-not-allowed">
                        <span class="material-symbols-outlined">chat</span>
                        Checkout via WhatsApp
                    </button>
                    @endif
                    
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

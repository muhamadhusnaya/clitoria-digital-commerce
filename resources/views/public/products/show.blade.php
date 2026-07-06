@extends('layouts.public')

@section('title', $product->name . ' - Clitoria')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-surface-container-lowest border-b border-outline-variant py-4">
        <div class="max-w-[1280px] mx-auto px-5 md:px-16 flex items-center gap-2 text-sm text-on-surface-variant">
            <a href="{{ route('public.home') }}" class="hover:text-primary transition-colors">Home</a>
            <span class="material-symbols-outlined text-sm">chevron_right</span>
            <a href="{{ route('public.products.index') }}" class="hover:text-primary transition-colors">Shop</a>
            <span class="material-symbols-outlined text-sm">chevron_right</span>
            <span class="text-on-surface font-medium">{{ $product->name }}</span>
        </div>
    </div>

    <!-- Product Detail Container -->
    @php
        $firstPrice = $product->prices->first();
        $defaultPackage = $firstPrice ? $firstPrice->package_name : '';
        $defaultPriceNum = $firstPrice ? $firstPrice->price : 0;
        
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        $waNumber = isset($settings['whatsapp_number']) ? preg_replace('/[^0-9]/', '', $settings['whatsapp_number']) : '';
    @endphp

    <div class="max-w-[1280px] mx-auto px-5 md:px-16 py-12 lg:py-20" x-data="{ selectedPackage: '{{ $defaultPackage }}', currentPrice: {{ $defaultPriceNum }}, selectedPriceId: {{ $firstPrice ? $firstPrice->id : 'null' }}, quantity: 1 }">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20">
            
            <!-- Left: Image Gallery -->
            <div class="space-y-6">
                <div class="aspect-square bg-surface-container-lowest rounded-2xl overflow-hidden flex items-center justify-center p-8 soft-shadow border border-outline-variant relative group">
                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-contain transform group-hover:scale-110 transition-transform duration-700">
                </div>
            </div>

            <!-- Right: Product Info -->
            <div class="flex flex-col">
                <div class="reveal">
                    <h1 class="text-4xl lg:text-5xl font-bold text-on-surface mb-4 leading-tight">{{ $product->name }}</h1>
                    
                    <!-- Price -->
                    <div class="text-3xl font-bold text-on-surface mb-8">Rp <span x-text="new Intl.NumberFormat('id-ID').format(currentPrice)"></span></div>
                </div>

                @if($product->prices->count() > 0)
                <!-- Weight Selector -->
                <div class="mb-8 reveal delay-100">
                    <h3 class="text-on-surface font-semibold mb-3">Pilih Varian</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        @foreach($product->prices as $price)
                        <button @click="selectedPackage = '{{ $price->package_name }}'; currentPrice = {{ $price->price }}; selectedPriceId = {{ $price->id }};" :class="{'bg-primary text-white border-primary': selectedPackage === '{{ $price->package_name }}', 'bg-surface border-outline-variant text-on-surface hover:border-primary': selectedPackage !== '{{ $price->package_name }}'}" class="border rounded-md py-3 font-medium transition-colors focus:outline-none">
                            {{ $price->package_name }}
                        </button>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Quantity & Actions -->
                <div class="mb-10 reveal delay-200">
                    <form action="{{ route('public.cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_price_id" x-bind:value="selectedPriceId">
                        
                        <div class="flex gap-4 mb-4">
                            <!-- Qty Selector -->
                            <div class="flex items-center border border-outline rounded-full bg-surface w-32 h-14">
                                <button type="button" @click="if(quantity > 1) quantity--" class="w-10 h-full flex items-center justify-center text-on-surface hover:text-primary focus:outline-none">
                                    <span class="material-symbols-outlined">remove</span>
                                </button>
                                <input type="text" name="quantity" x-model="quantity" class="w-12 h-full bg-transparent text-center font-semibold text-on-surface border-none focus:ring-0" readonly>
                                <button type="button" @click="quantity++" class="w-10 h-full flex items-center justify-center text-on-surface hover:text-primary focus:outline-none">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                            
                            <!-- Add to Bag -->
                            <button type="submit" class="flex-grow bg-surface-container-low text-on-surface hover:bg-surface-container-high border border-outline-variant transition-colors rounded-full font-bold text-lg flex items-center justify-center gap-2 focus:outline-none focus:ring-2 focus:ring-primary shadow-sm hover:shadow-md">
                                <span class="material-symbols-outlined">shopping_bag</span>
                                Add to Bag
                            </button>
                        </div>
                    </form>
                    
                    <!-- Primary CTA WhatsApp -->
                    <a :href="`https://wa.me/{{ $waNumber }}?text=${encodeURIComponent('Halo Clitoria! Saya ingin memesan ' + quantity + 'x ' + '{{ addslashes($product->name) }}' + ' (' + selectedPackage + ') ')}`" target="_blank" class="w-full bg-primary text-white hover:bg-primary-container transition-colors py-4 rounded-full font-bold text-lg flex items-center justify-center gap-2 shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transform hover:scale-[1.02] duration-300">
                        <span class="material-symbols-outlined">chat</span>
                        Order via WhatsApp
                    </a>
                </div>

                <!-- Description & Benefits -->
                <div class="reveal delay-300 prose max-w-none text-on-surface-variant mb-8">
                    {!! $product->description !!}
                </div>

                <!-- Bento Details Grid -->
                <div class="grid grid-cols-3 gap-4 mt-auto reveal delay-300">
                    <div class="bg-surface-container-low p-4 rounded-xl text-center flex flex-col items-center justify-center">
                        <span class="material-symbols-outlined text-primary mb-2">public</span>
                        <span class="text-xs font-semibold text-on-surface">Ethically Sourced</span>
                    </div>
                    <div class="bg-surface-container-low p-4 rounded-xl text-center flex flex-col items-center justify-center">
                        <span class="material-symbols-outlined text-primary mb-2">local_cafe</span>
                        <span class="text-xs font-semibold text-on-surface">The Ritual</span>
                    </div>
                    <div class="bg-surface-container-low p-4 rounded-xl text-center flex flex-col items-center justify-center">
                        <span class="material-symbols-outlined text-primary mb-2">flight_takeoff</span>
                        <span class="text-xs font-semibold text-on-surface">Global Delivery</span>
                    </div>
                </div>
            </div>
        </div>
        
        @if(isset($relatedProducts) && $relatedProducts->count() > 0)
        <!-- Related Products -->
        <div class="mt-24 border-t border-outline-variant pt-16">
            <h2 class="text-3xl font-bold mb-8 text-on-surface">You May Also Like</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($relatedProducts as $related)
                <a href="{{ route('public.products.show', $related->slug) }}" class="block reveal group">
                    <div class="aspect-square rounded-xl bg-surface-container-lowest overflow-hidden flex items-center justify-center border border-outline-variant hover:border-primary transition-all p-6 mb-4 relative soft-shadow">
                        <img src="{{ Storage::url($related->image) }}" class="w-4/5 h-4/5 object-contain group-hover:scale-110 transition-transform duration-500" alt="{{ $related->name }}">
                    </div>
                    <h4 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">{{ $related->name }}</h4>
                    <p class="text-primary font-bold">
                        @if($related->prices->count() > 0)
                            Rp {{ number_format($related->prices->first()->price, 0, ',', '.') }}
                        @endif
                    </p>
                </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
@endsection

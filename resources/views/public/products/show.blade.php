@extends('layouts.public')

@section('title', 'Sacred Blue Butterfly Pea Tea | Clitoria Digital Commerce')

@section('content')
    <div class="max-w-[1280px] mx-auto px-5 md:px-16 pt-32 pb-24">
        <!-- Breadcrumbs -->
        <nav class="flex text-sm text-on-surface-variant mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('public.home') }}" class="inline-flex items-center hover:text-primary transition-colors">Home</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
                        <a href="{{ route('public.products.index') ?? '#' }}" class="hover:text-primary transition-colors">Shop</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
                        <span class="text-on-surface font-medium">Sacred Blue Butterfly Pea Tea</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left Side: Product Gallery (7 cols) -->
            <div class="lg:col-span-7">
                <div class="bg-surface-container-low rounded-xl overflow-hidden relative reveal">
                    <img src="https://images.unsplash.com/photo-1615526674996-2b47e256b825?auto=format&fit=crop&w=800&q=80" alt="Sacred Blue Tea" class="w-full h-auto object-cover" id="mainImage">
                    <div class="absolute top-6 left-6 bg-tertiary-container text-tertiary-fixed text-label-caps px-4 py-2 rounded-full">Organic Certified</div>
                </div>
                
                <!-- Thumbnails Grid -->
                <div class="grid grid-cols-4 gap-4 mt-4 reveal delay-100">
                    <button class="bg-surface-container-low rounded-lg overflow-hidden border-2 border-primary focus:outline-none h-24">
                        <img src="https://images.unsplash.com/photo-1615526674996-2b47e256b825?auto=format&fit=crop&w=200&q=80" alt="Thumb 1" class="w-full h-full object-cover">
                    </button>
                    <button class="bg-surface-container-lowest rounded-lg overflow-hidden border-2 border-transparent hover:border-primary/50 focus:outline-none h-24 transition-colors">
                        <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?auto=format&fit=crop&w=200&q=80" alt="Thumb 2" class="w-full h-full object-cover">
                    </button>
                    <button class="bg-surface-container-lowest rounded-lg overflow-hidden border-2 border-transparent hover:border-primary/50 focus:outline-none h-24 transition-colors">
                        <img src="https://images.unsplash.com/photo-1594283838618-292101e4a36f?auto=format&fit=crop&w=200&q=80" alt="Thumb 3" class="w-full h-full object-cover">
                    </button>
                    <button class="bg-surface-container-lowest rounded-lg overflow-hidden border-2 border-transparent hover:border-primary/50 focus:outline-none h-24 transition-colors">
                        <img src="https://images.unsplash.com/photo-1576402187878-974f70c890a5?auto=format&fit=crop&w=200&q=80" alt="Thumb 4" class="w-full h-full object-cover">
                    </button>
                </div>
            </div>

            <!-- Right Side: Product Info & Order Form (5 cols) -->
            <div class="lg:col-span-5 flex flex-col">
                <div class="reveal">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-primary text-label-caps tracking-widest">SIGNATURE COLLECTION</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-on-surface mb-4">Sacred Blue Butterfly Pea Tea</h1>
                    
                    <!-- Rating -->
                    <div class="flex items-center gap-2 mb-6">
                        <div class="flex text-yellow-400">
                            <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star_half</span>
                        </div>
                        <span class="text-on-surface-variant text-sm underline cursor-pointer">4.8 (124 Reviews)</span>
                    </div>

                    <!-- Price -->
                    <div class="text-3xl font-bold text-on-surface mb-8" id="productPrice">$32.00</div>
                </div>

                <!-- Weight Selector -->
                <div class="mb-8 reveal delay-100" x-data="{ selectedWeight: '100g' }">
                    <h3 class="text-on-surface font-semibold mb-3">Select Size</h3>
                    <div class="grid grid-cols-3 gap-3">
                        <button @click="selectedWeight = '100g'; document.getElementById('productPrice').innerText = '$32.00';" :class="{'bg-primary text-white border-primary': selectedWeight === '100g', 'bg-surface border-outline-variant text-on-surface hover:border-primary': selectedWeight !== '100g'}" class="border rounded-md py-3 font-medium transition-colors focus:outline-none">
                            100g
                        </button>
                        <button @click="selectedWeight = '250g'; document.getElementById('productPrice').innerText = '$65.00';" :class="{'bg-primary text-white border-primary': selectedWeight === '250g', 'bg-surface border-outline-variant text-on-surface hover:border-primary': selectedWeight !== '250g'}" class="border rounded-md py-3 font-medium transition-colors focus:outline-none">
                            250g
                        </button>
                        <button @click="selectedWeight = '500g'; document.getElementById('productPrice').innerText = '$120.00';" :class="{'bg-primary text-white border-primary': selectedWeight === '500g', 'bg-surface border-outline-variant text-on-surface hover:border-primary': selectedWeight !== '500g'}" class="border rounded-md py-3 font-medium transition-colors focus:outline-none">
                            500g
                        </button>
                    </div>
                </div>
                
                <!-- Quantity & Actions -->
                <div class="mb-10 reveal delay-200" x-data="{ qty: 1 }">
                    <div class="flex gap-4 mb-4">
                        <!-- Qty Selector -->
                        <div class="flex items-center border border-outline rounded-full bg-surface w-32 h-14">
                            <button @click="if(qty > 1) qty--" class="w-10 h-full flex items-center justify-center text-on-surface hover:text-primary focus:outline-none">
                                <span class="material-symbols-outlined">remove</span>
                            </button>
                            <input type="text" x-model="qty" class="w-12 h-full bg-transparent text-center font-semibold text-on-surface border-none focus:ring-0" readonly>
                            <button @click="qty++" class="w-10 h-full flex items-center justify-center text-on-surface hover:text-primary focus:outline-none">
                                <span class="material-symbols-outlined">add</span>
                            </button>
                        </div>
                        
                        <!-- Add to Bag -->
                        <button class="flex-grow bg-surface-container-low text-on-surface hover:bg-surface-container-high border border-outline-variant transition-colors rounded-full font-bold text-lg flex items-center justify-center gap-2 focus:outline-none focus:ring-2 focus:ring-primary shadow-sm hover:shadow-md">
                            <span class="material-symbols-outlined">shopping_bag</span>
                            Add to Bag
                        </button>
                    </div>
                    
                    <!-- Primary CTA WhatsApp -->
                    <a :href="`https://wa.me/1234567890?text=Hello%20Clitoria!%20I%20would%20like%20to%20order%20${qty}x%20Sacred%20Blue%20Butterfly%20Pea%20Tea.`" target="_blank" class="w-full bg-primary text-white hover:bg-primary-container transition-colors py-4 rounded-full font-bold text-lg flex items-center justify-center gap-2 shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transform hover:scale-[1.02] duration-300">
                        <span class="material-symbols-outlined">chat</span>
                        Order via WhatsApp
                    </a>
                </div>

                <!-- Description & Benefits -->
                <div class="reveal delay-300">
                    <p class="text-on-surface-variant mb-6 leading-relaxed">
                        Our signature Butterfly Pea Tea is ethically sourced from single-estate organic farms. Each flower is hand-picked at dawn to ensure maximum potency and color vibrancy. Perfect for brewing hot tea, crafting colorful lattes, or mixing into magical cocktails.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
                            <span class="text-on-surface-variant">Rich in antioxidants (anthocyanins)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
                            <span class="text-on-surface-variant">Naturally caffeine-free & stress-relieving</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
                            <span class="text-on-surface-variant">Changes color from blue to purple with lemon</span>
                        </li>
                    </ul>
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
    </div>
@endsection

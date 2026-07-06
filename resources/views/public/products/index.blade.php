@extends('layouts.public')

@section('title', 'Shop | Clitoria Digital Commerce')

@section('content')
    <div class="bg-surface-container-low pb-24">
        <!-- Header -->
        <div class="bg-gradient-to-br from-surface to-surface-container py-16">
            <div class="max-w-[1280px] mx-auto px-5 md:px-16 text-center reveal">
                <h1 class="text-4xl md:text-display-lg font-bold text-on-surface mb-4">The Blue Collection</h1>
                <p class="text-lg text-on-surface-variant max-w-2xl mx-auto">Explore our curated selection of premium, organic Butterfly Pea products. Elevate your wellness ritual with every sip.</p>
            </div>
        </div>

        <!-- Filters (Sticky) -->
        <div class="sticky top-[72px] md:top-[88px] z-30 bg-surface-container/90 backdrop-blur-md border-b border-outline-variant py-4">
            <div class="max-w-[1280px] mx-auto px-5 md:px-16 flex justify-center gap-2 overflow-x-auto no-scrollbar">
                <a href="#" class="px-6 py-2 rounded-full font-medium text-sm transition-colors whitespace-nowrap bg-primary text-white">All Collections</a>
                <a href="#" class="px-6 py-2 rounded-full font-medium text-sm transition-colors whitespace-nowrap bg-surface-container-lowest text-on-surface hover:bg-surface-container-high border border-outline-variant">Teas</a>
                <a href="#" class="px-6 py-2 rounded-full font-medium text-sm transition-colors whitespace-nowrap bg-surface-container-lowest text-on-surface hover:bg-surface-container-high border border-outline-variant">Powders</a>
                <a href="#" class="px-6 py-2 rounded-full font-medium text-sm transition-colors whitespace-nowrap bg-surface-container-lowest text-on-surface hover:bg-surface-container-high border border-outline-variant">Extracts</a>
            </div>
        </div>

        <!-- Grid -->
        <div class="max-w-[1280px] mx-auto px-5 md:px-16 mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product 1 -->
            <div class="bg-surface-container-lowest rounded-md overflow-hidden soft-shadow group reveal transform hover:scale-[1.02] hover:shadow-xl transition-all duration-300">
                <a href="{{ route('public.products.show', 'sacred-blue-butterfly-pea-tea') ?? '#' }}" class="block relative h-72 bg-gradient-to-t from-surface-container to-surface flex justify-center items-center p-6">
                    <img src="https://images.unsplash.com/photo-1615526674996-2b47e256b825?auto=format&fit=crop&w=400&q=80" alt="Sacred Blue Tea" class="h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-tertiary-container text-tertiary-fixed text-label-caps px-3 py-1 rounded-full">Organic</div>
                </a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-on-surface mb-2">
                        <a href="{{ route('public.products.show', 'sacred-blue-butterfly-pea-tea') ?? '#' }}" class="hover:text-primary transition-colors">Sacred Blue Butterfly Pea Tea</a>
                    </h3>
                    <p class="text-sm text-on-surface-variant mb-6 line-clamp-2">Hand-picked premium organic butterfly pea flowers, sun-dried to perfection for a magical blue infusion.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-xl font-bold text-on-surface">$32.00</span>
                        <div class="flex gap-2">
                            <button class="bg-surface-container hover:bg-surface-container-high text-on-surface w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                                <span class="material-symbols-outlined text-sm">shopping_bag</span>
                            </button>
                            <a href="https://wa.me/1234567890?text=Halo%20Clitoria,%20saya%20ingin%20memesan%20Sacred%20Blue%20Butterfly%20Pea%20Tea." target="_blank" class="bg-primary text-white hover:bg-primary-container px-4 py-2 rounded-full font-medium text-sm flex items-center gap-1 transition-colors">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-surface-container-lowest rounded-md overflow-hidden soft-shadow group reveal delay-100 transform hover:scale-[1.02] hover:shadow-xl transition-all duration-300">
                <a href="#" class="block relative h-72 bg-gradient-to-t from-surface-container to-surface flex justify-center items-center p-6">
                    <img src="https://images.unsplash.com/photo-1576402187878-974f70c890a5?auto=format&fit=crop&w=400&q=80" alt="Blue Matcha Powder" class="h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-primary text-white text-label-caps px-3 py-1 rounded-full">Best Seller</div>
                </a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-on-surface mb-2">
                        <a href="#" class="hover:text-primary transition-colors">Premium Blue Matcha Powder</a>
                    </h3>
                    <p class="text-sm text-on-surface-variant mb-6 line-clamp-2">Finely stone-milled butterfly pea powder, perfect for lattes, smoothies, and baking creations.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-xl font-bold text-on-surface">$45.00</span>
                        <div class="flex gap-2">
                            <button class="bg-surface-container hover:bg-surface-container-high text-on-surface w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                                <span class="material-symbols-outlined text-sm">shopping_bag</span>
                            </button>
                            <a href="https://wa.me/1234567890?text=Halo%20Clitoria,%20saya%20ingin%20memesan%20Premium%20Blue%20Matcha%20Powder." target="_blank" class="bg-primary text-white hover:bg-primary-container px-4 py-2 rounded-full font-medium text-sm flex items-center gap-1 transition-colors">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-surface-container-lowest rounded-md overflow-hidden soft-shadow group reveal delay-200 transform hover:scale-[1.02] hover:shadow-xl transition-all duration-300">
                <a href="#" class="block relative h-72 bg-gradient-to-t from-surface-container to-surface flex justify-center items-center p-6">
                    <img src="https://images.unsplash.com/photo-1615526674981-54a7c1b50428?auto=format&fit=crop&w=400&q=80" alt="Extract Drops" class="h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-on-surface mb-2">
                        <a href="#" class="hover:text-primary transition-colors">Butterfly Pea Extract Drops</a>
                    </h3>
                    <p class="text-sm text-on-surface-variant mb-6 line-clamp-2">Concentrated butterfly pea extract. Just a few drops turn any beverage into a vibrant blue masterpiece.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-xl font-bold text-on-surface">$28.00</span>
                        <div class="flex gap-2">
                            <button class="bg-surface-container hover:bg-surface-container-high text-on-surface w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                                <span class="material-symbols-outlined text-sm">shopping_bag</span>
                            </button>
                            <a href="https://wa.me/1234567890?text=Halo%20Clitoria,%20saya%20ingin%20memesan%20Butterfly%20Pea%20Extract%20Drops." target="_blank" class="bg-primary text-white hover:bg-primary-container px-4 py-2 rounded-full font-medium text-sm flex items-center gap-1 transition-colors">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

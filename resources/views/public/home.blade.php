@extends('layouts.public')

@section('title', 'Clitoria Digital Commerce | Where Flavor Meets Innovation')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-surface to-surface-container py-20 lg:py-32 overflow-hidden">
        <!-- Decorative blur background -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-primary opacity-20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-tertiary opacity-20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
        
        <div class="max-w-[1280px] mx-auto px-5 md:px-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
            <!-- Left Content -->
            <div class="reveal">
                <h1 class="text-4xl md:text-5xl lg:text-display-lg font-bold text-on-surface mb-6 leading-tight tracking-tight">
                    Where Flavor Meets <span class="text-primary">Innovation</span>
                </h1>
                <p class="text-lg md:text-body-lg text-on-surface-variant mb-8">
                    Discover the magical taste and wellness benefits of organic Butterfly Pea flower, meticulously crafted to elevate your daily ritual.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('public.products.index') ?? '#' }}" class="bg-primary text-white hover:bg-primary-container transition-colors px-8 py-4 rounded-full font-medium text-lg shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                        Shop Now
                    </a>
                    <a href="#benefits" class="bg-surface border border-outline-variant text-on-surface hover:bg-surface-container-low transition-colors px-8 py-4 rounded-full font-medium text-lg focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                        Learn More
                    </a>
                </div>
            </div>
            <!-- Right Content (Image) -->
            <div class="relative reveal delay-200">
                <img src="https://images.unsplash.com/photo-1594283838618-292101e4a36f?auto=format&fit=crop&w=600&q=80" alt="Clitoria Butterfly Pea Tea" class="rounded-xl shadow-premium w-full object-cover h-[400px] lg:h-[500px] floating-element">
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-24 max-w-[1280px] mx-auto px-5 md:px-16">
        <div class="text-center max-w-2xl mx-auto mb-16 reveal">
            <h2 class="text-3xl md:text-headline-md font-bold text-on-surface mb-4">The Magic of Clitoria</h2>
            <p class="text-on-surface-variant text-body-md">Sourced ethically from premium organic farms, bringing nature's best to your cup.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Benefit 1 -->
            <div class="bg-surface-container-lowest p-8 rounded-md border border-outline-variant soft-shadow hover:border-primary hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02] group reveal">
                <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors" data-icon="mood">mood</span>
                </div>
                <h3 class="text-xl font-semibold text-on-surface mb-3">Mood Booster</h3>
                <p class="text-on-surface-variant text-sm">Natural adaptogens help calm the mind and relieve everyday stress.</p>
            </div>
            <!-- Benefit 2 -->
            <div class="bg-surface-container-lowest p-8 rounded-md border border-outline-variant soft-shadow hover:border-primary hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02] group reveal delay-100">
                <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors" data-icon="shield">shield</span>
                </div>
                <h3 class="text-xl font-semibold text-on-surface mb-3">Rich in Antioxidants</h3>
                <p class="text-on-surface-variant text-sm">Packed with anthocyanins to combat free radicals and support immunity.</p>
            </div>
            <!-- Benefit 3 -->
            <div class="bg-surface-container-lowest p-8 rounded-md border border-outline-variant soft-shadow hover:border-primary hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02] group reveal delay-200">
                <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors" data-icon="leaf">leaf</span>
                </div>
                <h3 class="text-xl font-semibold text-on-surface mb-3">100% Organic</h3>
                <p class="text-on-surface-variant text-sm">Grown without pesticides, preserving pure taste and nutritional value.</p>
            </div>
            <!-- Benefit 4 -->
            <div class="bg-surface-container-lowest p-8 rounded-md border border-outline-variant soft-shadow hover:border-primary hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02] group reveal delay-300">
                <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors" data-icon="spa">spa</span>
                </div>
                <h3 class="text-xl font-semibold text-on-surface mb-3">Skin & Hair Health</h3>
                <p class="text-on-surface-variant text-sm">Promotes collagen production for glowing skin and healthier hair.</p>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-24 bg-surface-container-low">
        <div class="max-w-[1280px] mx-auto px-5 md:px-16">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 reveal">
                <div>
                    <h2 class="text-3xl md:text-headline-md font-bold text-on-surface mb-2">Curated Selections</h2>
                    <p class="text-on-surface-variant text-body-md">Our most loved products, just for you.</p>
                </div>
                <a href="{{ route('public.products.index') ?? '#' }}" class="mt-4 md:mt-0 flex items-center gap-2 text-primary font-medium hover:text-primary-container transition-colors">
                    View All Products
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Dummy Product 1 -->
                <div class="bg-surface-container-lowest rounded-md overflow-hidden soft-shadow group reveal transform hover:scale-[1.02] hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 bg-gradient-to-t from-surface-container to-surface flex justify-center items-center p-4">
                        <img src="https://images.unsplash.com/photo-1615526674996-2b47e256b825?auto=format&fit=crop&w=300&q=80" alt="Sacred Blue Butterfly Pea Tea" class="h-full object-contain group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-tertiary-container text-tertiary-fixed text-label-caps px-3 py-1 rounded-full">Organic</div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-on-surface mb-1 truncate">Sacred Blue Butterfly Pea Tea</h3>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-lg font-bold text-on-surface">$32.00</span>
                            <button class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary-container transition-colors focus:outline-none focus:ring-2 focus:ring-primary">
                                <span class="material-symbols-outlined text-sm">shopping_bag</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Dummy Product 2 -->
                <div class="bg-surface-container-lowest rounded-md overflow-hidden soft-shadow group reveal delay-100 transform hover:scale-[1.02] hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 bg-gradient-to-t from-surface-container to-surface flex justify-center items-center p-4">
                        <img src="https://images.unsplash.com/photo-1576402187878-974f70c890a5?auto=format&fit=crop&w=300&q=80" alt="Premium Blue Matcha Powder" class="h-full object-contain group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-primary text-white text-label-caps px-3 py-1 rounded-full">Best Seller</div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-on-surface mb-1 truncate">Premium Blue Matcha Powder</h3>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-lg font-bold text-on-surface">$45.00</span>
                            <button class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary-container transition-colors focus:outline-none focus:ring-2 focus:ring-primary">
                                <span class="material-symbols-outlined text-sm">shopping_bag</span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Dummy Product 3 -->
                <div class="bg-surface-container-lowest rounded-md overflow-hidden soft-shadow group reveal delay-200 transform hover:scale-[1.02] hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 bg-gradient-to-t from-surface-container to-surface flex justify-center items-center p-4">
                        <img src="https://images.unsplash.com/photo-1615526674981-54a7c1b50428?auto=format&fit=crop&w=300&q=80" alt="Butterfly Pea Extract Drops" class="h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-on-surface mb-1 truncate">Butterfly Pea Extract Drops</h3>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-lg font-bold text-on-surface">$28.00</span>
                            <button class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary-container transition-colors focus:outline-none focus:ring-2 focus:ring-primary">
                                <span class="material-symbols-outlined text-sm">shopping_bag</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Dummy Product 4 -->
                <div class="bg-surface-container-lowest rounded-md overflow-hidden soft-shadow group reveal delay-300 transform hover:scale-[1.02] hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 bg-gradient-to-t from-surface-container to-surface flex justify-center items-center p-4">
                        <img src="https://images.unsplash.com/photo-1558160074-4d7d8bdf4256?auto=format&fit=crop&w=300&q=80" alt="Botanical Infusion Set" class="h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-on-surface mb-1 truncate">Botanical Infusion Set</h3>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-lg font-bold text-on-surface">$55.00</span>
                            <button class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary-container transition-colors focus:outline-none focus:ring-2 focus:ring-primary">
                                <span class="material-symbols-outlined text-sm">shopping_bag</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-24 max-w-[1280px] mx-auto px-5 md:px-16">
        <div class="text-center max-w-2xl mx-auto mb-16 reveal">
            <h2 class="text-3xl md:text-headline-md font-bold text-on-surface mb-4">The Clitoria Lifestyle</h2>
            <p class="text-on-surface-variant text-body-md">Join our community and share your magical blue moments.</p>
        </div>
        
        <div class="columns-2 md:columns-3 gap-4 space-y-4 reveal">
            <div class="break-inside-avoid rounded-xl overflow-hidden relative group">
                <img src="https://images.unsplash.com/photo-1558160074-4d7d8bdf4256?auto=format&fit=crop&w=400&q=80" alt="Gallery Image" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="break-inside-avoid rounded-xl overflow-hidden relative group">
                <img src="https://images.unsplash.com/photo-1594283838618-292101e4a36f?auto=format&fit=crop&w=400&q=80" alt="Gallery Image" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="break-inside-avoid rounded-xl overflow-hidden relative group">
                <img src="https://images.unsplash.com/photo-1615526674996-2b47e256b825?auto=format&fit=crop&w=400&q=80" alt="Gallery Image" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="break-inside-avoid rounded-xl overflow-hidden relative group">
                <img src="https://images.unsplash.com/photo-1576402187878-974f70c890a5?auto=format&fit=crop&w=400&q=80" alt="Gallery Image" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="break-inside-avoid rounded-xl overflow-hidden relative group">
                <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?auto=format&fit=crop&w=400&q=80" alt="Gallery Image" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-surface-container-lowest border-t border-outline-variant">
        <div class="max-w-[1280px] mx-auto px-5 md:px-16 text-center reveal">
            <h2 class="text-3xl md:text-headline-md font-bold text-on-surface mb-2">Loved by Thousands</h2>
            <div class="flex justify-center text-yellow-400 mb-12">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
            </div>
            
            <div class="max-w-3xl mx-auto bg-surface-container-low p-8 md:p-12 rounded-[2rem] relative">
                <span class="material-symbols-outlined absolute top-8 left-8 text-4xl text-primary opacity-20">format_quote</span>
                <p class="text-xl md:text-2xl text-on-surface font-medium italic mb-8 relative z-10">
                    "I switched my morning coffee to Clitoria's Blue Tea and it completely changed my routine. I feel more calm, focused, and my skin is literally glowing. Plus, watching it change color with a squeeze of lemon is just pure magic!"
                </p>
                <div class="flex items-center justify-center gap-4">
                    <img src="https://ui-avatars.com/api/?name=Sarah+J&background=5B46B8&color=fff" alt="Sarah J" class="w-12 h-12 rounded-full">
                    <div class="text-left">
                        <h4 class="font-bold text-on-surface">Sarah Jenkins</h4>
                        <p class="text-sm text-on-surface-variant">Wellness Enthusiast</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact / WhatsApp Checkout Section -->
    <section class="py-24 max-w-[1280px] mx-auto px-5 md:px-16">
        <div class="bg-gradient-to-r from-primary to-secondary rounded-2xl p-8 md:p-16 text-white text-center md:text-left flex flex-col md:flex-row items-center justify-between reveal shadow-xl">
            <div class="mb-8 md:mb-0 max-w-xl">
                <h2 class="text-3xl font-bold mb-4">Personalized Concierge Service</h2>
                <p class="text-white/80 text-lg">Have questions about our products or need help placing a bulk order? Chat directly with our tea sommeliers via WhatsApp.</p>
            </div>
            <div>
                <a href="https://wa.me/1234567890?text=Hello%20Clitoria!%20I%20would%20like%20to%20know%20more%20about%20your%20products." target="_blank" class="bg-white text-primary hover:bg-surface-container-low transition-colors px-8 py-4 rounded-full font-bold text-lg flex items-center gap-2 shadow-lg hover:shadow-xl transform hover:scale-105 duration-300">
                    <span class="material-symbols-outlined">chat</span>
                    Chat via WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection

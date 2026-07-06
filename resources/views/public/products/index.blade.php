@extends('layouts.public')

@section('title', 'Shop | Clitoria Digital Commerce')

@section('content')
    <div class="bg-surface-container-low pb-24">
        <!-- Header -->
        <div class="bg-gradient-to-br from-surface to-surface-container py-16">
            <div class="max-w-[1280px] mx-auto px-5 md:px-16 text-center reveal">
                <h1 class="text-4xl md:text-display-lg font-bold text-on-surface mb-4">Produk Pilihan Clitoria</h1>
                <p class="text-lg text-on-surface-variant max-w-2xl mx-auto">Jelajahi pilihan produk selai dan jelly bunga telang organik premium kami. Temukan cita rasa unik yang menyehatkan.</p>
            </div>
        </div>

        <!-- Filters (Sticky) -->
        <div class="sticky top-[72px] md:top-[88px] z-30 bg-surface-container/90 backdrop-blur-md border-b border-outline-variant py-4">
            <div class="max-w-[1280px] mx-auto px-5 md:px-16 flex justify-center gap-2 overflow-x-auto no-scrollbar">
                <a href="#" class="px-6 py-2 rounded-full font-medium text-sm transition-colors whitespace-nowrap bg-primary text-white">Semua Produk</a>
                <a href="#" class="px-6 py-2 rounded-full font-medium text-sm transition-colors whitespace-nowrap bg-surface-container-lowest text-on-surface hover:bg-surface-container-high border border-outline-variant">Selai</a>
                <a href="#" class="px-6 py-2 rounded-full font-medium text-sm transition-colors whitespace-nowrap bg-surface-container-lowest text-on-surface hover:bg-surface-container-high border border-outline-variant">Jelly</a>
                <a href="#" class="px-6 py-2 rounded-full font-medium text-sm transition-colors whitespace-nowrap bg-surface-container-lowest text-on-surface hover:bg-surface-container-high border border-outline-variant">Lainnya</a>
            </div>
        </div>

        <!-- Grid -->
        <div class="max-w-[1280px] mx-auto px-5 md:px-16 mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($products as $product)
            <div class="bg-surface-container-lowest rounded-md overflow-hidden soft-shadow group reveal transform hover:scale-[1.02] hover:shadow-xl transition-all duration-300">
                <a href="{{ route('public.products.show', $product->slug) }}" class="block relative h-72 bg-gradient-to-t from-surface-container to-surface flex justify-center items-center p-6">
                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-on-surface mb-2">
                        <a href="{{ route('public.products.show', $product->slug) }}" class="hover:text-primary transition-colors">{{ $product->name }}</a>
                    </h3>
                    <p class="text-sm text-on-surface-variant mb-6 line-clamp-2">{{ $product->short_description }}</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-xl font-bold text-on-surface">
                            @if($product->prices->count() > 0)
                                Rp {{ number_format($product->prices->first()->price, 0, ',', '.') }}
                            @endif
                        </span>
                        <div class="flex gap-2">
                            <form action="{{ route('public.cart.add') }}" method="POST" class="inline">
                                @csrf
                                @if($product->prices->count() > 0)
                                <input type="hidden" name="product_price_id" value="{{ $product->prices->first()->id }}">
                                @endif
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="bg-surface-container hover:bg-surface-container-high text-on-surface w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                                    <span class="material-symbols-outlined text-sm">shopping_bag</span>
                                </button>
                            </form>
                            @php
                                $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
                                $waNumber = isset($settings['whatsapp_number']) ? preg_replace('/[^0-9]/', '', $settings['whatsapp_number']) : '';
                                if (str_starts_with($waNumber, '0')) {
                                    $waNumber = '62' . substr($waNumber, 1);
                                } elseif ($waNumber && !str_starts_with($waNumber, '62')) {
                                    $waNumber = '62' . $waNumber;
                                }
                                $firstPrice = $product->prices->first();
                                $rawWaText = "Halo Clitoria,\n\nSaya ingin memesan:\n\n1. " . $product->name . ($firstPrice ? " (" . $firstPrice->package_name . ")" : "") . "\n   Qty: 1\n\nTotal:\nRp " . ($firstPrice ? number_format($firstPrice->price, 0, ',', '.') : "0") . "\n\nMohon informasi pembayaran dan pengiriman.\n\nTerima kasih.";
                                $waText = rawurlencode($rawWaText);
                            @endphp
                            <a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}" target="_blank" class="bg-primary text-white hover:bg-primary-container px-4 py-2 rounded-full font-medium text-sm flex items-center gap-1 transition-colors">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="max-w-[1280px] mx-auto px-5 md:px-16 mt-12 flex justify-center">
            {{ $products->links() }}
        </div>
    </div>
@endsection
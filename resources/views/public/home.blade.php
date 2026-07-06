@extends('layouts.public')

@section('title', 'Clitoria - Where Flavor Meets Innovation')

@push('styles')
<style>
    .glass-effect {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
    .soft-shadow {
        box-shadow: 0 10px 30px -5px rgba(21, 25, 54, 0.04);
    }
    .floating-element {
        animation: floating 6s ease-in-out infinite;
    }
    @keyframes floating {
        0% { transform: translate(0, 0px) rotate(0deg); }
        50% { transform: translate(5px, -15px) rotate(2deg); }
        100% { transform: translate(0, 0px) rotate(0deg); }
    }
    .reveal {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.8s ease-out;
    }
    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
@if($hero)
<section class="relative min-h-[921px] flex items-center overflow-hidden px-6 lg:px-16 py-20 bg-gradient-to-br from-surface to-surface-container">
    <div class="max-w-[1280px] mx-auto w-full grid lg:grid-cols-2 gap-12 items-center">
        <div class="z-10 text-center lg:text-left">
            <h1 class="text-on-surface text-5xl lg:text-7xl font-bold leading-[1.1] tracking-tight mb-6">
                {!! $hero->title !!}
            </h1>
            @if($hero->subtitle)
            <p class="text-on-surface-variant text-lg lg:text-xl max-w-xl mb-10 leading-relaxed mx-auto lg:mx-0">
                {{ $hero->subtitle }}
            </p>
            @endif
            <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                @if($hero->button_text)
                <a href="{{ $hero->button_link ?? route('public.products.index') }}" class="inline-block px-8 py-4 bg-primary text-on-primary rounded-full font-bold text-lg hover:bg-primary-container transition-all hover:translate-y-[-2px] shadow-xl">
                    {{ $hero->button_text }}
                </a>
                @endif
                <a href="#benefits" class="inline-block px-8 py-4 border-2 border-outline-variant text-on-surface rounded-full font-bold text-lg hover:bg-surface-container transition-all">
                    Learn More
                </a>
            </div>
        </div>
        <!-- Floating Composition -->
        <div class="relative h-[500px] lg:h-[600px] flex items-center justify-center">
            <div class="relative z-20 w-4/5 aspect-[4/5] rounded-xl overflow-hidden soft-shadow floating-element">
                <div class="w-full h-full bg-cover bg-center" style="background-image: url('{{ Storage::url($hero->image) }}')"></div>
            </div>
            <!-- SVG Background Pulse -->
            <div class="absolute inset-0 z-0 flex items-center justify-center">
                <div class="w-[120%] h-[120%] bg-primary/5 rounded-full blur-[100px]"></div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- Benefits Section -->
@if($benefits->count() > 0)
<section class="py-24 px-6 lg:px-16 max-w-[1280px] mx-auto" id="benefits">
    <div class="text-center mb-16 reveal">
        <h2 class="text-on-surface text-4xl font-bold mb-4">The Magic of Clitoria</h2>
        <p class="text-on-surface-variant max-w-2xl mx-auto">Discover why our botanical infusions are revolutionizing the wellness ritual with scientifically backed benefits.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach($benefits as $index => $benefit)
        <div class="reveal group p-8 rounded-xl bg-surface-container-lowest border border-outline-variant hover:border-primary transition-all soft-shadow" style="transition-delay: {{ $index * 100 }}ms;">
            <div class="w-14 h-14 bg-primary-fixed rounded-full flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                @if($benefit->icon_type === 'material')
                <span class="material-symbols-outlined text-primary group-hover:text-on-primary" data-icon="{{ $benefit->icon }}">{{ $benefit->icon }}</span>
                @else
                <img src="{{ Storage::url($benefit->icon) }}" alt="{{ $benefit->title }}" class="w-8 h-8 object-contain">
                @endif
            </div>
            <h3 class="text-xl font-bold mb-3">{{ $benefit->title }}</h3>
            <p class="text-on-surface-variant text-sm leading-relaxed">{{ $benefit->description }}</p>
        </div>
        @endforeach
    </div>
</section>
@endif
<!-- Featured Products -->
@if($products->count() > 0)
<section class="py-24 bg-surface-container-low" id="shop">
    <div class="max-w-[1280px] mx-auto px-6 lg:px-16">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6 reveal">
            <div>
                <h2 class="text-on-surface text-4xl font-bold mb-4">Curated Selections</h2>
                <p class="text-on-surface-variant">Experience our award-winning botanical range.</p>
            </div>
            <a href="{{ route('public.products.index') }}" class="text-primary font-bold flex items-center gap-2 group">
                View All Products <span class="material-symbols-outlined transition-transform group-hover:translate-x-1" data-icon="arrow_forward">arrow_forward</span>
            </a>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($products as $index => $product)
            <a href="{{ route('public.products.show', $product->slug) }}" class="block reveal group" style="transition-delay: {{ $index * 100 }}ms;">
                <div class="aspect-square rounded-xl bg-white mb-6 p-8 relative overflow-hidden flex items-center justify-center border border-outline-variant hover:border-primary transition-all">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
                    <div class="w-4/5 h-4/5 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('{{ Storage::url($product->image) }}')"></div>
                </div>
                <h4 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">{{ $product->name }}</h4>
                <p class="text-on-surface-variant text-sm mb-3">{{ $product->short_description }}</p>
                <p class="text-primary font-bold">
                    @if($product->prices->count() > 0)
                        Rp {{ number_format($product->prices->first()->price, 0, ',', '.') }}
                    @endif
                </p>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- Gallery Section -->
@if($galleries->count() > 0)
<section class="py-24 px-6 lg:px-16 max-w-[1280px] mx-auto" id="gallery">
    <div class="text-center mb-16 reveal">
        <h2 class="text-on-surface text-4xl font-bold mb-4">The Clitoria Lifestyle</h2>
        <p class="text-on-surface-variant">Shared moments from our global community of enthusiasts.</p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
        @foreach($galleries as $index => $gallery)
        <div class="reveal rounded-xl overflow-hidden soft-shadow group" style="transition-delay: {{ ($index % 4) * 100 }}ms;">
            <div class="w-full bg-cover bg-center aspect-[4/5] group-hover:scale-105 transition-transform duration-700" style="background-image: url('{{ Storage::url($gallery->image) }}')" title="{{ $gallery->title }}"></div>
        </div>
        @endforeach
    </div>
</section>
@endif
<!-- Testimonials -->
@if($testimonials->count() > 0)
<section class="py-24 bg-surface-container-low overflow-hidden">
    <div class="max-w-[1280px] mx-auto px-6 lg:px-16">
        <div class="text-center mb-16 reveal">
            <h2 class="text-on-surface text-4xl font-bold mb-4">Loved by Thousands</h2>
            <div class="flex justify-center gap-1 text-primary">
                @for($i=0; $i<5; $i++)
                <span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                @endfor
            </div>
        </div>
        <div class="relative max-w-4xl mx-auto h-[450px]" x-data="{ 
            active: 0, 
            items: {{ $testimonials->count() }},
            prev() { this.active = (this.active - 1 + this.items) % this.items },
            next() { this.active = (this.active + 1) % this.items },
            init() { setInterval(() => this.next(), 4000) }
        }">
            <div class="relative h-full w-full">
                @foreach($testimonials as $index => $testimonial)
                <div class="absolute left-1/2 top-1/2 -translate-y-1/2 w-[85%] md:w-3/4 max-w-2xl bg-white p-8 md:p-12 rounded-xl soft-shadow text-center transition-all duration-500 ease-in-out cursor-pointer"
                     :class="{
                         'z-20 scale-100 opacity-100 -translate-x-1/2': active === {{ $index }},
                         'z-10 scale-90 opacity-40 -translate-x-[80%] md:-translate-x-[90%]': active === ({{ $index }} + 1) % items,
                         'z-10 scale-90 opacity-40 -translate-x-[20%] md:-translate-x-[10%]': active === ({{ $index }} - 1 + items) % items,
                         'z-0 scale-75 opacity-0 -translate-x-1/2 pointer-events-none': active !== {{ $index }} && active !== ({{ $index }} + 1) % items && active !== ({{ $index }} - 1 + items) % items
                     }"
                     @click="active = {{ $index }}">
                    <span class="material-symbols-outlined text-primary/10 text-6xl md:text-8xl absolute top-4 left-4 z-0" data-icon="format_quote">format_quote</span>
                    <p class="text-on-surface text-lg md:text-xl leading-relaxed mb-8 italic relative z-10">
                        "{{ $testimonial->content }}"
                    </p>
                    <div class="flex flex-col items-center relative z-10">
                        @if($testimonial->image)
                        <div class="w-16 h-16 rounded-full bg-cover bg-center mb-4 border-2 border-primary-fixed" style="background-image: url('{{ Storage::url($testimonial->image) }}')"></div>
                        @endif
                        <h5 class="font-bold text-base md:text-lg">{{ $testimonial->name }}</h5>
                        <p class="text-on-surface-variant text-xs md:text-sm">{{ $testimonial->role }} @if($testimonial->company) di {{ $testimonial->company }} @endif</p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Navigation Controls -->
            <button @click="prev()" class="absolute left-0 top-1/2 -translate-y-1/2 -ml-2 md:-ml-12 z-30 bg-surface shadow-md p-3 rounded-full text-on-surface hover:text-primary hover:bg-surface-container-high transition-all outline-none">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <button @click="next()" class="absolute right-0 top-1/2 -translate-y-1/2 -mr-2 md:-mr-12 z-30 bg-surface shadow-md p-3 rounded-full text-on-surface hover:text-primary hover:bg-surface-container-high transition-all outline-none">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
        </div>
    </div>
</section>
@endif
<!-- Partners Logo Cloud -->
@if($partners->count() > 0)
<section class="py-16 opacity-50 border-y border-outline-variant/30">
    <div class="max-w-[1280px] mx-auto px-6 lg:px-16 flex flex-wrap justify-around items-center gap-10 grayscale hover:grayscale-0 transition-all duration-500">
        @foreach($partners as $partner)
        @if($partner->website)
        <a href="{{ $partner->website }}" target="_blank">
            <img src="{{ Storage::url($partner->logo) }}" alt="{{ $partner->name }}" class="h-12 object-contain">
        </a>
        @else
        <img src="{{ Storage::url($partner->logo) }}" alt="{{ $partner->name }}" class="h-12 object-contain">
        @endif
        @endforeach
    </div>
</section>
@endif
<!-- Contact Section -->
<section class="py-24 px-6 lg:px-16 bg-surface" id="about">
    <div class="max-w-[1280px] mx-auto grid lg:grid-cols-2 gap-20 items-center">
        <div class="reveal active">
            <h2 class="text-4xl font-bold mb-8">Let's connect</h2>
            <p class="text-on-surface-variant mb-12 text-lg">Have questions about our botanical sourcing or want to collaborate? Our tea experts are here to help you find your perfect ritual.</p>
            <div class="space-y-6">
                @if(isset($settings['business_email']) && $settings['business_email'])
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-primary" data-icon="mail">mail</span>
                    </div>
                    <div>
                        <h6 class="font-bold">Email us</h6>
                        <p class="text-on-surface-variant">{{ $settings['business_email'] }}</p>
                    </div>
                </div>
                @endif
                @if(isset($settings['address']) && $settings['address'])
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-primary" data-icon="location_on">location_on</span>
                    </div>
                    <div>
                        <h6 class="font-bold">Visit our Flagship</h6>
                        <p class="text-on-surface-variant">{{ $settings['address'] }}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="reveal p-1 bg-gradient-to-br from-primary to-secondary rounded-xl active">
            <div class="bg-white p-12 rounded-xl text-center shadow-2xl">
                <div class="w-20 h-20 bg-[#25D366]/10 text-[#25D366] rounded-full flex items-center justify-center mx-auto mb-8">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path></svg>
                </div>
                <h4 class="text-2xl font-bold mb-4 text-on-surface">Need Instant Help?</h4>
                <p class="text-on-surface-variant mb-10">Chat with our personal tea concierges for real-time brewing advice and order support.</p>
                <a class="inline-flex items-center justify-center gap-3 w-full py-5 bg-[#25D366] text-white rounded-full font-bold text-lg hover:brightness-110 transition-all shadow-xl shadow-[#25D366]/20" href="https://wa.me/{{ isset($settings['whatsapp_number']) ? preg_replace('/[^0-9]/', '', $settings['whatsapp_number']) : '' }}">
                    Chat via WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Simple Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // Floating Micro-interactions
    document.querySelectorAll('.group').forEach(el => {
        el.addEventListener('mouseenter', () => {
            const icon = el.querySelector('.material-symbols-outlined');
            if (icon) {
                icon.style.transform = 'scale(1.2) rotate(5deg)';
                icon.style.transition = 'transform 0.3s ease';
            }
        });
        el.addEventListener('mouseleave', () => {
            const icon = el.querySelector('.material-symbols-outlined');
            if (icon) icon.style.transform = 'scale(1) rotate(0deg)';
        });
    });
</script>
@endpush

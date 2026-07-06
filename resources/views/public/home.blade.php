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
<section class="relative min-h-[921px] flex items-center overflow-hidden px-6 lg:px-16 py-20 bg-gradient-to-br from-surface to-surface-container">
<div class="max-w-[1280px] mx-auto w-full grid lg:grid-cols-2 gap-12 items-center">
<div class="z-10 text-center lg:text-left">
<h1 class="text-on-surface text-5xl lg:text-7xl font-bold leading-[1.1] tracking-tight mb-6">
                        Where Flavor <br>Meets <span class="text-primary">Innovation</span>
</h1>
<p class="text-on-surface-variant text-lg lg:text-xl max-w-xl mb-10 leading-relaxed mx-auto lg:mx-0">
                        Experience a transformative lifestyle powered by the natural brilliance of butterfly pea flower. Pure botanical science, refined for the modern ritual.
                    </p>
<div class="flex flex-wrap gap-4 justify-center lg:justify-start">
<a href="{{ route('public.products.index') ?? '#' }}" class="inline-block px-8 py-4 bg-primary text-on-primary rounded-full font-bold text-lg hover:bg-primary-container transition-all hover:translate-y-[-2px] shadow-xl">
                            Shop Now
                        </a>
<a href="#benefits" class="inline-block px-8 py-4 border-2 border-outline-variant text-on-surface rounded-full font-bold text-lg hover:bg-surface-container transition-all">
                            Learn More
                        </a>
</div>
</div>
<!-- Floating Composition -->
<div class="relative h-[500px] lg:h-[600px] flex items-center justify-center">
<!-- Central Product Image -->
<div class="relative z-20 w-4/5 aspect-[4/5] rounded-xl overflow-hidden soft-shadow floating-element">
<div class="w-full h-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBYIohJWXIuQ7UDytX_jFMaoPSLLo4UhfeVIMVcfKyzkamQW1TKPKBg_WWa0KTspX83pY9CyzY4cm8JoTDz2T1mXUxEzgIFEO-IZAdqrjkMmwaBFju52JtBiuKhjZ_4AKCID9wUStXf4_RSgXUL6bSY7ZxB2hw-G4FjJSk9LYpGb0rnx0PVZln8sdeTsN5oxFBEj3nJbNo_arGVMLJik0uIWkaCHzuI9Y4i4VQLp0E7XMfMMG-Elevi5Gu-4HzDCJ3duNpOhNzS5A')"></div>
</div>
<!-- Decorative Floating Flowers -->
<div class="absolute -top-10 -right-10 w-40 h-40 floating-element" style="animation-delay: -1s;">
<div class="w-full h-full bg-cover bg-center rounded-full opacity-60 blur-sm" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB_YzAM7wQWSEgwm2kjGULXNsPFzwW-PLI-pKPJW-SsEuF1LfTwFZnXz3n0oQIDg0iFXa83YG-rY01SHk3trV-58Tn2Jt8EMbSr1EuV5XyETZhztvtYn-0ta49HHrCaAEXXZtEZJveVIFuPtVH9Axv9sz1qxeGPMEhaQOJjhphbLViS3MPbeVRueinjFy_pG83Splnr2uprRLq6_uX7JjrCtKyBvfhVEzMk2bNP5DdU3n6BbLmoBnSQ01l4SA87TZTgWkXYMMZhdg')"></div>
</div>
<div class="absolute bottom-10 -left-10 w-32 h-32 floating-element" style="animation-delay: -3s;">
<div class="w-full h-full bg-cover bg-center rounded-full opacity-40 blur-md" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA9TGofi6dOaXZSvSXkiIt64I69NFI7nkisM6xQ38zLb27jI_Jf0WZyhOPPu49nXv0zGIUdog5tiVw7X3GdFBIQZ1gzCnbn-m3FP0DLXnhgaHSYMURAdfcOKHYM1dO4G75NyckADqkhmoeHeivO3OBs9pE6pM_1QDJX5kBBwDYrZm_PRuyopOaDsJopII5F9HcDmhyumzRbDBn0fWiSyNdD0MBwGVzZ7sb-y-osPnSjK6TRLkmao4ZzOGBMtS1MUZE62wTMrmzlYA')"></div>
</div>
<!-- SVG Background Pulse -->
<div class="absolute inset-0 z-0 flex items-center justify-center">
<div class="w-[120%] h-[120%] bg-primary/5 rounded-full blur-[100px]"></div>
</div>
</div>
</div>
</section>
<!-- Benefits Section -->
<section class="py-24 px-6 lg:px-16 max-w-[1280px] mx-auto" id="benefits">
<div class="text-center mb-16 reveal">
<h2 class="text-on-surface text-4xl font-bold mb-4">The Magic of Clitoria</h2>
<p class="text-on-surface-variant max-w-2xl mx-auto">Discover why our botanical infusions are revolutionizing the wellness ritual with scientifically backed benefits.</p>
</div>
<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- Mood -->
<div class="reveal group p-8 rounded-xl bg-surface-container-lowest border border-outline-variant hover:border-primary transition-all soft-shadow">
<div class="w-14 h-14 bg-primary-fixed rounded-full flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary" data-icon="mood">mood</span>
</div>
<h3 class="text-xl font-bold mb-3">Mood Booster</h3>
<p class="text-on-surface-variant text-sm leading-relaxed">Enhance your daily well-being naturally with brain-boosting antioxidants that support clarity and stress relief.</p>
</div>
<!-- Antioxidants -->
<div class="reveal group p-8 rounded-xl bg-surface-container-lowest border border-outline-variant hover:border-primary transition-all soft-shadow" style="transition-delay: 100ms;">
<div class="w-14 h-14 bg-primary-fixed rounded-full flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary" data-icon="shield">shield</span>
</div>
<h3 class="text-xl font-bold mb-3">Antioxidants Rich</h3>
<p class="text-on-surface-variant text-sm leading-relaxed">Packed with powerful proanthocyanidins to fight free radicals and support vibrant skin and cellular health.</p>
</div>
<!-- Natural -->
<div class="reveal group p-8 rounded-xl bg-surface-container-lowest border border-outline-variant hover:border-primary transition-all soft-shadow" style="transition-delay: 200ms;">
<div class="w-14 h-14 bg-primary-fixed rounded-full flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary" data-icon="leaf">eco</span>
</div>
<h3 class="text-xl font-bold mb-3">100% Natural</h3>
<p class="text-on-surface-variant text-sm leading-relaxed">Sustainably sourced, non-GMO botanical extracts directly from earth to your cup, without synthetic additives.</p>
</div>
<!-- Flavor -->
<div class="reveal group p-8 rounded-xl bg-surface-container-lowest border border-outline-variant hover:border-primary transition-all soft-shadow" style="transition-delay: 300ms;">
<div class="w-14 h-14 bg-primary-fixed rounded-full flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary" data-icon="magic_button">magic_button</span>
</div>
<h3 class="text-xl font-bold mb-3">Exquisite Flavor</h3>
<p class="text-on-surface-variant text-sm leading-relaxed">A delicate, earthy profile that pairs beautifully with citrus, creating a mesmerizing color-changing experience.</p>
</div>
</div>
</section>
<!-- Featured Products -->
<section class="py-24 bg-surface-container-low" id="shop">
<div class="max-w-[1280px] mx-auto px-6 lg:px-16">
<div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6 reveal">
<div>
<h2 class="text-on-surface text-4xl font-bold mb-4">Curated Selections</h2>
<p class="text-on-surface-variant">Experience our award-winning botanical range.</p>
</div>
<a href="{{ route('public.products.index') ?? '#' }}" class="text-primary font-bold flex items-center gap-2 group">
                        View All Products <span class="material-symbols-outlined transition-transform group-hover:translate-x-1" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- Product 1 -->
<a href="{{ route('public.products.show', 'blue-tea') ?? '#' }}" class="block reveal group">
<div class="aspect-square rounded-xl bg-white mb-6 p-8 relative overflow-hidden flex items-center justify-center border border-outline-variant hover:border-primary transition-all">
<div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
<div class="w-4/5 h-4/5 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD2I_Umac76VzMVsblR4lZ2H2R5uGyrVUKwvFdOkQaI2BfswkNBWm2IRHs2fo7Kq3pEOlnrD41dz79cYJWu_ZuEZ0YF9UbWhh0uQ3ZlMVNaj6Rr86mTafj7TheE91HygfuR1znsoKcPiwZg3yWwMNxnmxT3sNM-jKRgAM5-CnMAlz0Wc-kgREKPOIdGGCAWaZtCSqPgg0jLsJpWpvli0jzJVv_OTbQYzOV3kPIdc_t6yJ_zexYhjMK1of-WzQ3MogIT779SMUuAOg')"></div>
</div>
<h4 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">Blue Tea Original</h4>
<p class="text-on-surface-variant text-sm mb-3">Premium Dried Flowers</p>
<p class="text-primary font-bold">$24.00</p>
</a>
<!-- Product 2 -->
<a href="{{ route('public.products.show', 'clitoria-extract') ?? '#' }}" class="block reveal group" style="transition-delay: 100ms;">
<div class="aspect-square rounded-xl bg-white mb-6 p-8 relative overflow-hidden flex items-center justify-center border border-outline-variant hover:border-primary transition-all">
<div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
<div class="w-4/5 h-4/5 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAy33gVRvOsocIeGWUISQiS4mipja1PIra7rhm_qlrA36hTGB6xYB2IGRUhZao0fl2UO9yi5CQZu3fFpK8C1HwQQFyCdXj9VF6X0ZYcgkxyr1khnc7p4Kqvfgx7F8edongUq9EqIAg3nqPxrsVmG0VapVdXSukU5E3_WXjDf3HJgjRBbiaVJGhoxpajkjn_FiuIjO2ThUZ7cfRDLMmW0FFBpjkHIGrvoW-KVm7lmdkqwUl3ZIwQmM7I7bbmzbGFUY_6Sui5CpAWYA')"></div>
</div>
<h4 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">Clitoria Extract</h4>
<p class="text-on-surface-variant text-sm mb-3">Highly Concentrated</p>
<p class="text-primary font-bold">$38.00</p>
</a>
<!-- Product 3 -->
<a href="{{ route('public.products.show', 'sparkling-botanical') ?? '#' }}" class="block reveal group" style="transition-delay: 200ms;">
<div class="aspect-square rounded-xl bg-white mb-6 p-8 relative overflow-hidden flex items-center justify-center border border-outline-variant hover:border-primary transition-all">
<div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
<div class="w-4/5 h-4/5 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC3EknzEOSfkKc7RwNgSZwMWf7n8Js8gODhbKykXKR3JVdYt3kJovnQJ620wjrf2rU3IRKDKA9u9yL3R69ujz8J6iIPZgD4romhB7A7mJnbTyvzhKy1CcYMBqpqcQLDyE0gDJy7Pfa5wMxvspIcFUFH2a592B2fLCtVWgIibiDIdJwqbpRSIWPo5bq3Slj_ngD32Qr9tYRYiBuRmxsWowMrdyx0MtqnTCjA4XPbwgKTPAT6W42F5UgXr13qYDS5E3-tnwtasyCSOg')"></div>
</div>
<h4 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">Sparkling Botanical</h4>
<p class="text-on-surface-variant text-sm mb-3">Refreshing &amp; Fizzy</p>
<p class="text-primary font-bold">$4.50</p>
</a>
<!-- Product 4 -->
<a href="{{ route('public.products.show', 'wellness-blend') ?? '#' }}" class="block reveal group" style="transition-delay: 300ms;">
<div class="aspect-square rounded-xl bg-white mb-6 p-8 relative overflow-hidden flex items-center justify-center border border-outline-variant hover:border-primary transition-all">
<div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
<div class="w-4/5 h-4/5 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB6Rpc7RjicsfJmlYSeytVDSO5dfGGfxRmEOrP1ltXzf55yie3a_FqTFa2FovQ_8MG-bs8TE2t2EYQgnzfsy3AkAthaPVgraz2SslWNNJQ103lgqeFtZ0TdqUUVjuMhYA6PRGk3Pr_-DksAcY1UBJyaPbMKeu8Xy-i_Bamaa4wUwZxSItxMW7kL5OES637kEqxvffg3a-Dn3sNoemaGBR-_Q0TxRiYjpsakHpENJ3B9NwdyCFrBuaa_6Cx0LNfQOAYN9x7SooGv0Q')"></div>
</div>
<h4 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">Wellness Blend</h4>
<p class="text-on-surface-variant text-sm mb-3">Mixed Herbal Tea</p>
<p class="text-primary font-bold">$22.00</p>
</a>
</div>
</div>
</section>
<!-- Gallery Section -->
<section class="py-24 px-6 lg:px-16 max-w-[1280px] mx-auto" id="gallery">
<div class="text-center mb-16 reveal">
<h2 class="text-on-surface text-4xl font-bold mb-4">The Clitoria Lifestyle</h2>
<p class="text-on-surface-variant">Shared moments from our global community of enthusiasts.</p>
</div>
<div class="columns-1 sm:columns-2 lg:columns-3 gap-8 space-y-8">
<div class="reveal break-inside-avoid rounded-xl overflow-hidden soft-shadow group">
<div class="w-full bg-cover bg-center aspect-[3/4] group-hover:scale-105 transition-transform duration-700" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCHK31YHNo0uBFvjGT-_W0ilsnJHpTZkXYZJY2G2jiYJbYdCM4h2agljlRBLYWyFzYzPbcGQP0j095r3HQSw6wMYyT2RK2ug8qd9nBDmPeZUphbOPPZ0yGdtinaE_1LARy2qSaOiqtgEqKb6hmKuJkg38NEl_7vkfGPzhLRAZsigaExnhNott36fyh81mllYcS0_cHHI5xzjK0uwoz83zZ_WVzq7su1-zNoByDYEwy4MilZ5q87mEC_dFynu2j1leTcm_LFIXGOeA')"></div>
</div>
<div class="reveal break-inside-avoid rounded-xl overflow-hidden soft-shadow group" style="transition-delay: 100ms;">
<div class="w-full bg-cover bg-center aspect-square group-hover:scale-105 transition-transform duration-700" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAYEgITqf7fpSiVnE9tZSXugnc1v7fgirc-3WOs73xhD58DhKU29hnoUg_reSmbGD-SN0qaFCKRSxwGD9SLwI3nzMwYNNnLJCyG8cjxHq5h3TbLxpFBwMgxnjEtAP5dhqqFNk3efmBnJPa7XNsw9ZdlIW_n7BaBAWi6Rulwk_gLPyh1Vg35bv1qCp8H1cbNvmVHCpU4GiSMbETeJ5Pv7vpcNkK7BBFXOLLFrJibbODOwD0sMPB-6sycBZIKs9zctjxL-9fxWpZlig')"></div>
</div>
<div class="reveal break-inside-avoid rounded-xl overflow-hidden soft-shadow group" style="transition-delay: 200ms;">
<div class="w-full bg-cover bg-center aspect-[4/5] group-hover:scale-105 transition-transform duration-700" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA4pniUFLBBYL0K6fEHOGFrdf_2RVbHF1o4G_5cin2IQw03R_1M8kwXLJxirzuusoPfeQfs5jRHLyKAattXpGkuigILd_WWTcuGQnkg8I-P5sWJCoyZtTFmgM68edTI72Rf5_QF6MUqfwQJmz181TZGIL-UWWDRZeB19cfUwHre_ruaD9uZNWUkAoeumG_jgjsH5IRpzc-itX14IOf_thK72gG8upF7L-MAIKSral8aSBFjnCnHAWtZCmGs2PXG5UllDJldjKVAIg')"></div>
</div>
<div class="reveal break-inside-avoid rounded-xl overflow-hidden soft-shadow group">
<div class="w-full bg-cover bg-center aspect-[3/2] group-hover:scale-105 transition-transform duration-700" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCG77XCLjOnIblia0dMD7NgoO36iGIHgSJUgMTyvjOrG-YZHggVAE540KKdfFl2d-pbOxal0EhOOBIXSb_jy1ZxSNGvo9gcvvY8uHGbyWZ5BC7-TVHc_ODeVY7ApR1KEJlrPYDziPNVKZ-JteH1xHk2uEZen0NyJnnXkPbSAJwH9DuKTEPxHH8_OdRRmqo3BgFOPeEoGSOMZwc0B3DW9V3GC6JyA9vAB0UlMhpVGmTC1mC06mu4RBOfR1H2Espy4mRude_tEW6HZw')"></div>
</div>
<div class="reveal break-inside-avoid rounded-xl overflow-hidden soft-shadow group" style="transition-delay: 150ms;">
<div class="w-full bg-cover bg-center aspect-square group-hover:scale-105 transition-transform duration-700" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDXgyYvygiK3xx8IQuo7V-naynxQMAwupsAOc4yBHUl8piDtHae3sfemiuiBkP9alZQjQHoN5e8amV1pn-z1l2FvjiQ1B4-_A_gVkSNCW-WMxqHqZ393lPHG6aY_ss40Oajxady7c3XAZv2l0-38tBUaZYcQC0ODCQ1S_Y6rGCrBEWARp25WdAqsqxzuoY63Qd1kjGdj_hIqj9LoZKtxQJd6vBk1eo5Papx_mzLQfQn7pysWbSQGlIqVA1Dp-R9fbG6zPmzjZ0Pbg')"></div>
</div>
<div class="reveal break-inside-avoid rounded-xl overflow-hidden soft-shadow group" style="transition-delay: 300ms;">
<div class="w-full bg-cover bg-center aspect-[4/5] group-hover:scale-105 transition-transform duration-700" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAFTn2pO08AGz6CtLzgIDa9n_B43uv_wCzeA4e6Lbx56X2UNZgcWuro5ZEYKSU2O7IY_sFI78HqKjRnwZrpkEOpsInySYj6UUdwTNm2BXzUV4nR-bYqyX6XnsnTLJOTj0GjsspQLx4eouI6hGZ2KsvNC1sgBcHPD0Mep68GPHZ2RdC6nG4SBGnZdWIHsDWVh5K0LZFK5XmtzmWozwpLkI-glZD2N_1cYXAIev0GAB-CTyF1ph2OCsHHk1PWwqszvDbbUNhsCJFhaA')"></div>
</div>
</div>
</section>
<!-- Testimonials -->
<section class="py-24 bg-surface-container-low overflow-hidden">
<div class="max-w-[1280px] mx-auto px-6 lg:px-16">
<div class="text-center mb-16 reveal">
<h2 class="text-on-surface text-4xl font-bold mb-4">Loved by Thousands</h2>
<div class="flex justify-center gap-1 text-primary">
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
</div>
<div class="relative max-w-4xl mx-auto">
<!-- Carousel Placeholder Logic -->
<div class="reveal bg-white p-10 lg:p-16 rounded-xl soft-shadow text-center relative">
<span class="material-symbols-outlined text-primary/20 text-6xl absolute top-10 left-10" data-icon="format_quote">format_quote</span>
<p class="text-on-surface text-xl lg:text-2xl leading-relaxed mb-10 italic">
                            "The color-changing ritual of Clitoria tea has become the highlight of my morning. Not only is it visually stunning, but the sense of calm and mental clarity I feel throughout the day is remarkable. A true staple in my wellness routine."
                        </p>
<div class="flex flex-col items-center">
<div class="w-20 h-20 rounded-full bg-cover bg-center mb-4 border-2 border-primary-fixed" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCyGqZJjwCW9cR7tOD5-I1Ar2BjsW0kxhQ0U3bNOrqbDsKwF2s3FeQixcjsKtXjRAefzjdG_B11SPhCJjiB-g_fFG0P8X2n9sMSMx4cr1C_GsPSpwR4kTPONjpw9bXaw9zCXrLM4btDSRcqjwsYTE_y1ba459S6glbwIs8rlS07BF2LSNA8vy7YdWf-zTM0_M1WCdE9WROU0mOlQbccOUJ71CQ5pIsVm_EuSVFag6m61978n8DfLgyVzZ37iIL3bw1iXQzsD7oqEw')"></div>
<h5 class="font-bold text-lg">Elena Rostova</h5>
<p class="text-on-surface-variant text-sm">Wellness Blogger &amp; Yoga Instructor</p>
</div>
</div>
</div>
</div>
</section>
<!-- Partners Logo Cloud -->
<section class="py-16 opacity-50 border-y border-outline-variant/30">
<div class="max-w-[1280px] mx-auto px-6 lg:px-16 flex flex-wrap justify-around items-center gap-10 grayscale hover:grayscale-0 transition-all duration-500">
<span class="text-2xl font-bold tracking-tighter">VOGUE</span>
<span class="text-2xl font-bold tracking-tighter">Hypebeast</span>
<span class="text-2xl font-bold tracking-tighter">WIRED</span>
<span class="text-2xl font-bold tracking-tighter">Well+Good</span>
<span class="text-2xl font-bold tracking-tighter">Self</span>
</div>
</section>
<!-- Contact Section -->
<section class="py-24 px-6 lg:px-16 bg-surface" id="about">
<div class="max-w-[1280px] mx-auto grid lg:grid-cols-2 gap-20 items-center">
<div class="reveal active">
<h2 class="text-4xl font-bold mb-8">Let's connect</h2>
<p class="text-on-surface-variant mb-12 text-lg">Have questions about our botanical sourcing or want to collaborate? Our tea experts are here to help you find your perfect ritual.</p>
<div class="space-y-6">
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" data-icon="mail">mail</span>
</div>
<div>
<h6 class="font-bold">Email us</h6>
<p class="text-on-surface-variant">hello@clitoria.wellness</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" data-icon="location_on">location_on</span>
</div>
<div>
<h6 class="font-bold">Visit our Flagship</h6>
<p class="text-on-surface-variant">124 Botanical Drive, Silicon Valley, CA</p>
</div>
</div>
</div>
</div>
<div class="reveal p-1 bg-gradient-to-br from-primary to-secondary rounded-xl active">
<div class="bg-white p-12 rounded-xl text-center shadow-2xl">
<div class="w-20 h-20 bg-[#25D366]/10 text-[#25D366] rounded-full flex items-center justify-center mx-auto mb-8">
<svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path></svg>
</div>
<h4 class="text-2xl font-bold mb-4 text-on-surface">Need Instant Help?</h4>
<p class="text-on-surface-variant mb-10">Chat with our personal tea concierges for real-time brewing advice and order support.</p>
<a class="inline-flex items-center justify-center gap-3 w-full py-5 bg-[#25D366] text-white rounded-full font-bold text-lg hover:brightness-110 transition-all shadow-xl shadow-[#25D366]/20" href="https://wa.me/1234567890">
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

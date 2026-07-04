<header class="fixed top-0 z-50 w-full bg-surface/80 backdrop-blur-xl border-b border-outline-variant" x-data>
    <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop h-16 flex items-center justify-between">
        <div class="text-xl font-bold text-primary">
            <a href="/" class="flex items-center gap-2">
                <span class="material-symbols-outlined" data-icon="spa">spa</span>
                Clitoria Commerce
            </a>
        </div>
        
        <div class="relative flex items-center cursor-pointer text-on-surface hover:text-primary transition-colors">
            <a href="/cart" class="flex items-center">
                <span class="material-symbols-outlined text-[24px]" data-icon="shopping_bag">shopping_bag</span>
                <span 
                    x-show="$store.cart && $store.cart.count > 0"
                    x-text="$store.cart ? $store.cart.count : 0"
                    class="absolute -top-1 -right-2 bg-error text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full"
                    style="display: none;"
                ></span>
            </a>
        </div>
    </div>
</header>

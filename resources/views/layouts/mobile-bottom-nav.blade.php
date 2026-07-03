<div class="fixed bottom-0 z-50 w-full bg-surface-container-highest border-t border-outline-variant flex justify-around py-3 sm:hidden shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.05)]" x-data>
    <a href="/" class="flex flex-col items-center text-on-surface-variant hover:text-primary transition-colors">
        <span class="material-symbols-outlined text-[24px]" data-icon="home">home</span>
        <span class="text-label-caps mt-1">Home</span>
    </a>
    <a href="/cart" class="flex flex-col items-center text-on-surface-variant hover:text-primary transition-colors relative">
        <span class="material-symbols-outlined text-[24px]" data-icon="shopping_bag">shopping_bag</span>
        <span 
            x-show="$store.cart && $store.cart.count > 0"
            x-text="$store.cart ? $store.cart.count : 0"
            class="absolute -top-1 right-2 bg-error text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full"
            style="display: none;"
        ></span>
        <span class="text-label-caps mt-1">Cart</span>
    </a>
</div>

<div class="fixed bottom-0 w-full z-50 bg-surface border-t border-outline-variant md:hidden pb-safe">
    <div class="grid grid-cols-4 items-center justify-items-center h-16">
        <!-- Home -->
        <a href="{{ route('public.home') }}" class="flex flex-col items-center justify-center w-full h-full gap-1 {{ request()->routeIs('public.home') ? 'text-primary' : 'text-on-surface-variant hover:text-primary transition-colors' }}">
            <span class="material-symbols-outlined" style="font-variation-settings: {{ request()->routeIs('public.home') ? "'FILL' 1" : "'FILL' 0" }}">home</span>
            <span class="text-[10px] font-medium">Home</span>
        </a>

        <!-- Products -->
        <a href="#" class="flex flex-col items-center justify-center w-full h-full gap-1 {{ request()->routeIs('public.products.*') ? 'text-primary' : 'text-on-surface-variant hover:text-primary transition-colors' }}">
            <span class="material-symbols-outlined" style="font-variation-settings: {{ request()->routeIs('public.products.*') ? "'FILL' 1" : "'FILL' 0" }}">storefront</span>
            <span class="text-[10px] font-medium">Products</span>
        </a>

        <!-- Saved -->
        <a href="#" class="flex flex-col items-center justify-center w-full h-full gap-1 {{ request()->routeIs('public.saved.*') ? 'text-primary' : 'text-on-surface-variant hover:text-primary transition-colors' }}">
            <span class="material-symbols-outlined" style="font-variation-settings: {{ request()->routeIs('public.saved.*') ? "'FILL' 1" : "'FILL' 0" }}">favorite</span>
            <span class="text-[10px] font-medium">Saved</span>
        </a>

        <!-- Account -->
        <a href="#" class="flex flex-col items-center justify-center w-full h-full gap-1 {{ request()->routeIs('public.account.*') ? 'text-primary' : 'text-on-surface-variant hover:text-primary transition-colors' }}">
            <span class="material-symbols-outlined" style="font-variation-settings: {{ request()->routeIs('public.account.*') ? "'FILL' 1" : "'FILL' 0" }}">person</span>
            <span class="text-[10px] font-medium">Account</span>
        </a>
    </div>
</div>

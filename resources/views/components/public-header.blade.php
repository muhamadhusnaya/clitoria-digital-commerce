@props([
    'cartCount' => 0,
    'activeLink' => ''
])

<header 
    x-data="{ scrolled: false, isMobileMenuOpen: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'py-2 shadow-md border-b border-outline-variant bg-surface/95': scrolled, 'py-4 bg-surface/80': !scrolled }"
    class="fixed top-0 w-full z-50 backdrop-blur-md transition-all duration-300"
>
    <div class="max-w-[1280px] mx-auto px-5 md:px-16 flex justify-between items-center">
        <!-- Mobile Hamburger (Left) -->
        <button @click="isMobileMenuOpen = true" class="md:hidden text-on-surface hover:text-primary transition-colors focus:outline-none focus:ring-2 focus:ring-primary rounded-sm">
            <span class="material-symbols-outlined">menu</span>
        </button>

        <!-- Brand Logo (Center Mobile / Left Desktop) -->
        <a href="{{ route('public.home') }}" class="font-bold text-primary flex items-center gap-2 focus:outline-none focus:ring-2 focus:ring-primary rounded-sm">
            <span class="material-symbols-outlined" data-icon="eco">eco</span>
            <span class="text-xl tracking-tight">Clitoria</span>
        </a>

        <!-- Desktop Navigation (Center Desktop) -->
        <nav class="hidden md:flex gap-8 absolute left-1/2 -translate-x-1/2">
            <a href="#" class="text-on-surface hover:text-primary font-medium text-sm transition-colors focus:outline-none focus:ring-2 focus:ring-primary rounded-sm {{ request()->routeIs('public.products.*') || $activeLink === 'shop' ? 'text-primary' : '' }}">Shop</a>
            <a href="#" class="text-on-surface hover:text-primary font-medium text-sm transition-colors focus:outline-none focus:ring-2 focus:ring-primary rounded-sm {{ request()->routeIs('public.benefits.*') || $activeLink === 'benefits' ? 'text-primary' : '' }}">Benefits</a>
            <a href="#" class="text-on-surface hover:text-primary font-medium text-sm transition-colors focus:outline-none focus:ring-2 focus:ring-primary rounded-sm {{ request()->routeIs('public.gallery.*') || $activeLink === 'gallery' ? 'text-primary' : '' }}">Gallery</a>
            <a href="#" class="text-on-surface hover:text-primary font-medium text-sm transition-colors focus:outline-none focus:ring-2 focus:ring-primary rounded-sm {{ request()->routeIs('public.about.*') || $activeLink === 'about' ? 'text-primary' : '' }}">About</a>
        </nav>

        <!-- Actions (Right) -->
        <div class="flex items-center gap-4">
            <button class="hidden md:flex text-on-surface hover:text-primary transition-colors focus:outline-none focus:ring-2 focus:ring-primary rounded-full p-1">
                <span class="material-symbols-outlined">search</span>
            </button>
            <a href="#" class="flex items-center gap-1 bg-primary text-white hover:bg-primary-container transition-colors px-4 py-2 rounded-full font-medium text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                <span class="material-symbols-outlined text-sm">shopping_bag</span>
                <span class="hidden md:inline">Cart</span>
                <span>({{ $cartCount }})</span>
            </a>
        </div>
    </div>

    <!-- Mobile Menu Overlay (Drawer) -->
    <div 
        x-show="isMobileMenuOpen" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-40 bg-on-surface/40 backdrop-blur-sm md:hidden"
        @click="isMobileMenuOpen = false"
        style="display: none;"
    ></div>

    <!-- Mobile Drawer Panel -->
    <div 
        x-show="isMobileMenuOpen"
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed top-0 right-0 h-full w-4/5 max-w-sm bg-surface-container-highest shadow-xl z-50 md:hidden flex flex-col"
        @click.stop
        style="display: none;"
    >
        <div class="p-5 flex justify-between items-center border-b border-outline-variant">
            <span class="font-bold text-primary text-lg">Menu</span>
            <button @click="isMobileMenuOpen = false" class="text-on-surface hover:text-error transition-colors focus:outline-none focus:ring-2 focus:ring-error rounded-sm">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <nav class="flex flex-col p-5 gap-4 overflow-y-auto">
            <!-- Search Mobile -->
            <div class="relative mb-4">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                <input type="text" placeholder="Search products..." class="w-full bg-surface-container-low border border-outline text-on-surface rounded-xl pl-10 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all">
            </div>

            <a href="#" class="text-on-surface hover:text-primary font-semibold text-lg py-2 border-b border-outline-variant {{ request()->routeIs('public.products.*') || $activeLink === 'shop' ? 'text-primary' : '' }}">Shop</a>
            <a href="#" class="text-on-surface hover:text-primary font-semibold text-lg py-2 border-b border-outline-variant {{ request()->routeIs('public.benefits.*') || $activeLink === 'benefits' ? 'text-primary' : '' }}">Benefits</a>
            <a href="#" class="text-on-surface hover:text-primary font-semibold text-lg py-2 border-b border-outline-variant {{ request()->routeIs('public.gallery.*') || $activeLink === 'gallery' ? 'text-primary' : '' }}">Gallery</a>
            <a href="#" class="text-on-surface hover:text-primary font-semibold text-lg py-2 {{ request()->routeIs('public.about.*') || $activeLink === 'about' ? 'text-primary' : '' }}">About</a>
        </nav>
    </div>
</header>

<div class="flex flex-col h-full bg-surface-container-lowest">
    <!-- Sidebar Header -->
    <div class="flex items-center justify-center h-20 border-b border-outline-variant">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
            <x-application-logo class="w-10 h-10 text-primary" />
            <span class="text-xl font-bold tracking-tight text-primary">Clitoria</span>
        </a>
    </div>

    <!-- Navigation Links -->
    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">dashboard</span>
            <span>Dashboard</span>
        </a>

        <div class="pt-4 pb-2">
            <p class="px-4 text-xs font-semibold tracking-wider uppercase text-outline">Content</p>
        </div>

        <!-- Heroes -->
        <a href="{{ route('admin.heroes.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.heroes.*') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">view_carousel</span>
            <span>Heroes</span>
        </a>

        <!-- Benefits -->
        <a href="{{ route('admin.benefits.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.benefits.*') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">verified</span>
            <span>Benefits</span>
        </a>

        <!-- Galleries -->
        <a href="{{ route('admin.galleries.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.galleries.*') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">photo_library</span>
            <span>Gallery</span>
        </a>

        <!-- Testimonials -->
        <a href="{{ route('admin.testimonials.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.testimonials.*') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">forum</span>
            <span>Testimonials</span>
        </a>

        <div class="pt-4 pb-2">
            <p class="px-4 text-xs font-semibold tracking-wider uppercase text-outline">Commerce</p>
        </div>

        <!-- Products -->
        <a href="{{ route('admin.products.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.products.*') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">inventory_2</span>
            <span>Products</span>
        </a>

        <!-- Product Pricing -->
        <a href="{{ route('admin.product-prices.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.product-prices.*') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">payments</span>
            <span>Pricing</span>
        </a>

        <!-- Sales -->
        <a href="{{ route('admin.sales.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.sales.*') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">point_of_sale</span>
            <span>Sales</span>
        </a>

        <div class="pt-4 pb-2">
            <p class="px-4 text-xs font-semibold tracking-wider uppercase text-outline">Company</p>
        </div>

        <!-- Team -->
        <a href="{{ route('admin.teams.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.teams.*') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">groups</span>
            <span>Team</span>
        </a>

        <!-- Partners -->
        <a href="{{ route('admin.partners.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.partners.*') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">handshake</span>
            <span>Partners</span>
        </a>

        <!-- Settings -->
        <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.settings.*') ? 'bg-primary-container text-on-primary-container font-medium' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
            <span class="material-symbols-outlined text-[20px]">settings</span>
            <span>Settings</span>
        </a>
    </nav>
</div>

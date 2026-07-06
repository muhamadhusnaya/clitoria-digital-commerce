<!-- SideNavBar Anchor -->
<aside class="fixed left-0 top-0 h-full w-64 z-40 bg-[#f4f2ff] shadow-sm flex flex-col gap-2 p-4 border-r border-[#c9c4d5]/30">
    <div class="mb-8 px-2 flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-white p-1 flex items-center justify-center shrink-0">
            <img src="{{ asset('images/logo.png') }}" alt="Clitoria" class="w-full h-full object-contain">
        </div>
        <div>
            <h1 class="text-[24px] leading-[32px] font-bold text-[#432b9f]">Clitoria</h1>
            <p class="text-[10px] uppercase tracking-widest text-[#797584]">Botanical Wellness</p>
        </div>
    </div>
    
    <nav class="flex-1 space-y-1 overflow-y-auto no-scrollbar">
        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
           {{ request()->routeIs('admin.dashboard') 
                ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-[14px] font-medium">Dashboard</span>
        </a>

        <!-- Hero -->
        <a href="{{ route('admin.heroes.index') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
           {{ request()->routeIs('admin.heroes.*') 
                ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
            <span class="material-symbols-outlined">stars</span>
            <span class="text-[14px] font-medium">Hero</span>
        </a>

        <!-- Benefits -->
        <a href="{{ route('admin.benefits.index') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
           {{ request()->routeIs('admin.benefits.*') 
                ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
            <span class="material-symbols-outlined">health_and_safety</span>
            <span class="text-[14px] font-medium">Benefits</span>
        </a>

        <!-- Products -->
        <a href="{{ route('admin.products.index') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
           {{ request()->routeIs('admin.products.*') 
                ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
            <span class="material-symbols-outlined">shopping_bag</span>
            <span class="text-[14px] font-medium">Products</span>
        </a>

        <!-- Product Pricing -->
        <a href="{{ route('admin.product-prices.index') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
           {{ request()->routeIs('admin.product-prices.*') 
                ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
            <span class="material-symbols-outlined">payments</span>
            <span class="text-[14px] font-medium">Product Pricing</span>
        </a>

        <!-- Gallery -->
        <a href="{{ route('admin.galleries.index') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
           {{ request()->routeIs('admin.galleries.*') 
                ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
            <span class="material-symbols-outlined">collections</span>
            <span class="text-[14px] font-medium">Gallery</span>
        </a>

        <!-- Testimonials -->
        <a href="{{ route('admin.testimonials.index') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
           {{ request()->routeIs('admin.testimonials.*') 
                ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
            <span class="material-symbols-outlined">reviews</span>
            <span class="text-[14px] font-medium">Testimonials</span>
        </a>

        <!-- Team -->
        <a href="{{ route('admin.teams.index') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
           {{ request()->routeIs('admin.teams.*') 
                ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
            <span class="material-symbols-outlined">groups</span>
            <span class="text-[14px] font-medium">Team</span>
        </a>
        
        <!-- Partners -->
        <a href="{{ route('admin.partners.index') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
           {{ request()->routeIs('admin.partners.*') 
                ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
            <span class="material-symbols-outlined">handshake</span>
            <span class="text-[14px] font-medium">Partners</span>
        </a>

        <!-- Sales -->
        <a href="{{ route('admin.sales.index') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
           {{ request()->routeIs('admin.sales.*') 
                ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
            <span class="material-symbols-outlined">monitoring</span>
            <span class="text-[14px] font-medium">Sales</span>
        </a>

        <div class="mt-4 pt-4 border-t border-[#c9c4d5]/30">
            <!-- Business Settings -->
            <a href="{{ route('admin.settings.index') }}" 
               class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 
               {{ request()->routeIs('admin.settings.*') 
                    ? 'bg-[#e6deff] text-[#4931a1] font-bold scale-[0.98]' 
                    : 'text-[#484553] hover:text-[#432b9f] hover:bg-[#cbbeff]/20' }}">
                <span class="material-symbols-outlined">settings</span>
                <span class="text-[14px] font-medium">Business Settings</span>
            </a>
            
            <!-- Log Out -->
            <form method="POST" action="{{ route('admin.logout') }}" class="w-full">
                @csrf
                <button type="submit" 
                   class="w-full flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 text-[#484553] hover:text-[#ba1a1a] hover:bg-[#ffdad6]/50">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="text-[14px] font-medium">Log Out</span>
                </button>
            </form>
        </div>
    </nav>
</aside>

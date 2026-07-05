<!-- TopAppBar Anchor -->
<header class="fixed top-0 right-0 left-64 h-16 z-30 bg-[#fbf8ff]/80 backdrop-blur-xl border-b border-[#c9c4d5]/20 shadow-sm flex justify-between items-center px-6">
    <div class="flex items-center gap-4 flex-1">
        <div class="relative w-full max-w-md">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#797584] text-xl">search</span>
            <input class="w-full bg-[#f4f2ff] border-none rounded-full pl-10 pr-4 py-2 text-[16px] focus:ring-2 focus:ring-[#432b9f]/20 transition-all" placeholder="Search data or reports..." type="text"/>
        </div>
    </div>
    
    <div class="flex items-center gap-4">
        <button class="hover:bg-[#e6e6ff] text-[#484553] rounded-full p-2 transition-all hover:scale-105 active:scale-95">
            <span class="material-symbols-outlined">notifications</span>
        </button>
        <button class="hover:bg-[#e6e6ff] text-[#484553] rounded-full p-2 transition-all hover:scale-105 active:scale-95">
            <span class="material-symbols-outlined">help</span>
        </button>
        
        <div class="h-8 w-[1px] bg-[#c9c4d5]/30 mx-2"></div>
        
        <div class="flex items-center gap-3 cursor-pointer hover:bg-[#e6e6ff] p-1 pr-4 rounded-full transition-colors">
            <!-- Profile Avatar using UI Avatars -->
            <img class="w-8 h-8 rounded-full border-2 border-[#432b9f]/20 object-cover" 
                 alt="{{ Auth::user()->name ?? 'Admin Profile' }}" 
                 src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Admin') }}&color=432b9f&background=e6deff"/>
            
            <div class="hidden lg:block text-left">
                <p class="text-[14px] font-medium text-[#151936]">{{ Auth::user()->name ?? 'Admin Profile' }}</p>
                <p class="text-[10px] text-[#797584] leading-tight">{{ Auth::user()->email ?? 'Master Admin' }}</p>
            </div>
        </div>
    </div>
</header>

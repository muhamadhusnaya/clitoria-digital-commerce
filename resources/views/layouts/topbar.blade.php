<header class="flex items-center justify-between px-6 py-4 bg-surface-container-lowest border-b border-outline-variant">
    <div class="flex items-center">
        <button @click="sidebarOpen = true" class="p-2 mr-4 text-on-surface-variant rounded-full hover:bg-surface-container lg:hidden transition-colors focus:outline-none">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>

    <div class="flex items-center gap-4">
        <div class="hidden sm:flex sm:items-center">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center gap-2 p-2 text-sm font-medium text-on-surface-variant rounded-full hover:bg-surface-container transition-colors focus:outline-none">
                        <span>{{ Auth::user()->name }}</span>
                        <span class="material-symbols-outlined text-[20px]">expand_more</span>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('admin.profile.edit')" class="hover:bg-surface-container text-on-surface">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('admin.logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="hover:bg-error-container hover:text-error text-error">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</header>

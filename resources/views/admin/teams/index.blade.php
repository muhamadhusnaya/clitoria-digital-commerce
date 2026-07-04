<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Team Management') }}
            </h2>
            <a href="{{ route('admin.teams.create') }}" class="px-4 py-2 bg-[#432B9F] text-white rounded-full text-sm font-medium hover:bg-[#5B46B8] transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">person_add</span> Add Member
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (session('success'))
                <div class="mb-4 bg-[#B3F582] text-[#224C00] p-4 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @php
                        $items = $teams ?? [];
                    @endphp

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @forelse ($items as $team)
                            <div class="group relative rounded-xl overflow-hidden bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#C9C4D5] dark:border-gray-700 shadow-sm transition-all duration-300 hover:shadow-premium flex flex-col">
                                <!-- Photo -->
                                <div class="w-full h-48 bg-gray-200 overflow-hidden relative">
                                    <img src="{{ Str::startsWith($team->photo, 'http') ? $team->photo : asset('storage/' . $team->photo) }}" 
                                         alt="{{ $team->name }}" 
                                         class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                                </div>
                                
                                <!-- Content -->
                                <div class="p-4 flex-grow flex flex-col">
                                    <h3 class="font-semibold text-[#151936] dark:text-gray-100 text-lg mb-1">{{ $team->name }}</h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">{{ $team->position }}</p>
                                    
                                    <!-- Social Links -->
                                    <div class="flex gap-2 mb-4 mt-auto">
                                        @if($team->instagram)
                                            <a href="{{ $team->instagram }}" target="_blank" class="w-8 h-8 rounded-full bg-[#EADDFF] text-[#432B9F] flex items-center justify-center hover:bg-[#432B9F] hover:text-white transition-colors">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        @endif
                                        @if($team->linkedin)
                                            <a href="{{ $team->linkedin }}" target="_blank" class="w-8 h-8 rounded-full bg-[#EADDFF] text-[#432B9F] flex items-center justify-center hover:bg-[#432B9F] hover:text-white transition-colors">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        @endif
                                    </div>
                                    
                                    <!-- Actions -->
                                    <div class="flex justify-end items-center mt-2 border-t border-[#C9C4D5] dark:border-gray-600 pt-3 gap-3">
                                        <a href="{{ route('admin.teams.edit', $team->id) }}" class="text-[#432B9F] hover:text-[#5B46B8] transition-colors" title="Edit">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </a>
                                        <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" class="inline-block m-0 p-0" onsubmit="return confirm('Are you sure you want to remove this team member?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-[#BA1A1A] hover:text-[#FF5449] transition-colors flex items-center" title="Remove">
                                                <span class="material-symbols-outlined text-[18px]">person_remove</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full py-12 text-center text-gray-500">
                                <span class="material-symbols-outlined text-4xl mb-2 text-gray-300">group_off</span>
                                <p>No team members found. <a href="{{ route('admin.teams.create') }}" class="text-[#432B9F] hover:underline">Add one</a>.</p>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

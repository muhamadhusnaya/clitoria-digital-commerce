<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Partner Management') }}
            </h2>
            <a href="{{ route('admin.partners.create') }}" class="px-4 py-2 bg-[#432B9F] text-white rounded-full text-sm font-medium hover:bg-[#5B46B8] transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add_business</span> Add Partner
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
                        $items = $partners ?? [];
                    @endphp

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
                        @forelse ($items as $partner)
                            <div class="group relative rounded-xl overflow-hidden bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#C9C4D5] dark:border-gray-700 shadow-sm transition-all duration-300 hover:shadow-premium flex flex-col items-center p-4">
                                <!-- Logo -->
                                <div class="w-full h-32 flex items-center justify-center mb-4 p-2 bg-white rounded-lg shadow-inner">
                                    <img src="{{ Str::startsWith($partner->logo, 'http') ? $partner->logo : asset('storage/' . $partner->logo) }}" 
                                         alt="{{ $partner->name }}" 
                                         class="max-w-full max-h-full object-contain transition-transform duration-300 group-hover:scale-110">
                                </div>
                                
                                <!-- Content -->
                                <h3 class="font-semibold text-[#151936] dark:text-gray-100 text-center mb-1 w-full truncate" title="{{ $partner->name }}">{{ $partner->name }}</h3>
                                
                                @if($partner->website)
                                    <a href="{{ $partner->website }}" target="_blank" class="text-xs text-[#432B9F] hover:underline mb-4 truncate w-full text-center">Visit Website</a>
                                @else
                                    <span class="text-xs text-gray-400 mb-4">No Website</span>
                                @endif
                                
                                <!-- Actions -->
                                <div class="flex justify-center items-center mt-auto border-t border-[#C9C4D5] dark:border-gray-600 pt-3 gap-4 w-full">
                                    <a href="{{ route('admin.partners.edit', $partner->id) }}" class="text-[#432B9F] hover:text-[#5B46B8] transition-colors" title="Edit">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </a>
                                    <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" class="inline-block m-0 p-0" onsubmit="return confirm('Are you sure you want to remove this partner?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-[#BA1A1A] hover:text-[#FF5449] transition-colors flex items-center" title="Remove">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full py-12 text-center text-gray-500">
                                <span class="material-symbols-outlined text-4xl mb-2 text-gray-300">domain_disabled</span>
                                <p>No partners found. <a href="{{ route('admin.partners.create') }}" class="text-[#432B9F] hover:underline">Add one</a>.</p>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

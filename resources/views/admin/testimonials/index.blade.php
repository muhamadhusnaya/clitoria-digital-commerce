<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Testimonial Management') }}
            </h2>
            <a href="{{ route('admin.testimonials.create') }}" class="px-4 py-2 bg-[#432B9F] text-white rounded-full text-sm font-medium hover:bg-[#5B46B8] transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span> Add Testimonial
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
                        // Fallback empty array if $testimonials is not passed correctly during UI phase
                        $items = $testimonials ?? [];
                    @endphp

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                            <thead class="text-xs text-gray-500 dark:text-gray-400 uppercase bg-[#F4F2FF] dark:bg-[#3E3E3A] rounded-t-xl">
                                <tr>
                                    <th scope="col" class="px-6 py-4 font-semibold rounded-tl-xl">Customer</th>
                                    <th scope="col" class="px-6 py-4 font-semibold">Review & Rating</th>
                                    <th scope="col" class="px-6 py-4 font-semibold text-center">Featured</th>
                                    <th scope="col" class="px-6 py-4 font-semibold text-right rounded-tr-xl">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-[#C9C4D5] dark:divide-gray-700">
                                @forelse ($items as $testimonial)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-[#2C2C2A] transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10 relative">
                                                    @if($testimonial->photo)
                                                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Str::startsWith($testimonial->photo, 'http') ? $testimonial->photo : asset('storage/' . $testimonial->photo) }}" alt="">
                                                    @else
                                                        <div class="h-10 w-10 rounded-full bg-[#EADDFF] text-[#432B9F] flex items-center justify-center font-bold">
                                                            {{ substr($testimonial->customer_name, 0, 1) }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-[#151936] dark:text-gray-100">
                                                        {{ $testimonial->customer_name }}
                                                    </div>
                                                    <div class="text-xs text-gray-500 dark:text-gray-400">
                                                        {{ $testimonial->occupation ?? 'Customer' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center mb-1 text-[#F5C71A]">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $testimonial->rating)
                                                        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1">star</span>
                                                    @else
                                                        <span class="material-symbols-outlined text-[16px]">star</span>
                                                    @endif
                                                @endfor
                                            </div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 max-w-md">
                                                "{{ $testimonial->review }}"
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            @if($testimonial->featured)
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#EADDFF] text-[#432B9F]">
                                                    <span class="material-symbols-outlined text-[14px] mr-1">workspace_premium</span> Featured
                                                </span>
                                            @else
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-500 dark:bg-gray-700 dark:text-gray-300">
                                                    Standard
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex justify-end gap-3 items-center">
                                                <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="text-[#432B9F] hover:text-[#5B46B8] transition-colors" title="Edit">
                                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                                </a>
                                                <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" class="inline-block m-0 p-0" onsubmit="return confirm('Are you sure you want to delete this testimonial?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-[#BA1A1A] hover:text-[#FF5449] transition-colors flex items-center" title="Delete">
                                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-12 text-center text-gray-500">
                                            <span class="material-symbols-outlined text-4xl mb-2 text-gray-300">forum</span>
                                            <p>No testimonials found. <a href="{{ route('admin.testimonials.create') }}" class="text-[#432B9F] hover:underline">Add one</a>.</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    {{-- Pagination links if items is paginated --}}
                    @if(method_exists($items, 'links'))
                        <div class="mt-4">
                            {{ $items->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

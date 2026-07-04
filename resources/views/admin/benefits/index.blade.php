<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Manage Benefits') }}
            </h2>
            <a href="{{ route('admin.benefits.create') }}" class="px-4 py-2 bg-[#432B9F] text-white rounded-full text-sm font-medium hover:bg-[#5B46B8] transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span> Add New Benefit
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
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-[#F4F2FF] dark:bg-[#3E3E3A] border-b border-[#C9C4D5] dark:border-gray-600">
                                    <th class="px-4 py-3 text-sm font-semibold text-[#151936] dark:text-gray-200 w-16 text-center">Icon</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-[#151936] dark:text-gray-200">Title</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-[#151936] dark:text-gray-200 w-32">Status</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-[#151936] dark:text-gray-200 w-24 text-center">Order</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-[#151936] dark:text-gray-200 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($benefits as $benefit)
                                    <tr class="border-b border-[#C9C4D5] dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all">
                                        <td class="px-4 py-3 text-center">
                                            <div class="w-10 h-10 rounded-full bg-[#F4F2FF] dark:bg-[#3E3E3A] flex items-center justify-center mx-auto text-[#432B9F] dark:text-[#A28DFF]">
                                                <span class="material-symbols-outlined">{{ $benefit->icon }}</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 font-medium">{{ $benefit->title }}</td>
                                        <td class="px-4 py-3">
                                            @if($benefit->status === 'active')
                                                <span class="px-2 py-1 bg-[#B3F582] text-[#224C00] rounded-full text-xs font-semibold uppercase tracking-wide">Active</span>
                                            @else
                                                <span class="px-2 py-1 bg-gray-200 text-gray-600 rounded-full text-xs font-semibold uppercase tracking-wide">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 text-center text-sm font-mono text-gray-500">
                                            {{ $benefit->order_number }}
                                        </td>
                                        <td class="px-4 py-3 text-right">
                                            <a href="{{ route('admin.benefits.edit', $benefit->id) }}" class="text-[#432B9F] dark:text-[#A28DFF] hover:underline mr-3 text-sm font-medium">Edit</a>
                                            <form action="{{ route('admin.benefits.destroy', $benefit->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this benefit?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-[#BA1A1A] hover:underline text-sm font-medium">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-8 text-center text-gray-500">
                                            No benefits found. <a href="{{ route('admin.benefits.create') }}" class="text-[#432B9F] hover:underline">Create one</a>.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

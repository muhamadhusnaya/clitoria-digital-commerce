<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Manage Heroes') }}
            </h2>
            <a href="{{ route('admin.heroes.create') }}" class="px-4 py-2 bg-[#432B9F] text-white rounded-full text-sm font-medium hover:bg-[#5B46B8] transition-all">
                Add New Hero
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
                                    <th class="px-4 py-3 text-sm font-semibold text-[#151936] dark:text-gray-200">Image</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-[#151936] dark:text-gray-200">Title</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-[#151936] dark:text-gray-200">Subtitle</th>
                                    <th class="px-4 py-3 text-sm font-semibold text-[#151936] dark:text-gray-200 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($heroes as $hero)
                                    <tr class="border-b border-[#C9C4D5] dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all">
                                        <td class="px-4 py-3">
                                            @if($hero->image)
                                                <img src="{{ asset('storage/' . $hero->image) }}" alt="{{ $hero->title }}" class="w-16 h-16 object-cover rounded-lg">
                                            @else
                                                <span class="text-sm text-gray-500">No Image</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 font-medium">{{ $hero->title }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-400">{{ Str::limit($hero->subtitle, 50) }}</td>
                                        <td class="px-4 py-3 text-right">
                                            <a href="{{ route('admin.heroes.edit', $hero->id) }}" class="text-[#432B9F] dark:text-[#A28DFF] hover:underline mr-3 text-sm font-medium">Edit</a>
                                            <form action="{{ route('admin.heroes.destroy', $hero->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this hero?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-[#BA1A1A] hover:underline text-sm font-medium">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-8 text-center text-gray-500">
                                            No heroes found. <a href="{{ route('admin.heroes.create') }}" class="text-[#432B9F] hover:underline">Create one</a>.
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

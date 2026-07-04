<x-app-layout>
 <x-slot name="header">
 <div class="flex justify-between items-center">
 <h2 class="font-semibold text-xl text-on-surface leading-tight">
 {{ __('Manage Heroes') }}
 </h2>
 <a href="{{ route('admin.heroes.create') }}" class="px-4 py-2 bg-primary text-white rounded-full text-sm font-medium hover:bg-primary-container transition-all">
 Add New Hero
 </a>
 </div>
 </x-slot>

 <div class="py-12">
 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 @if (session('success'))
 <div class="mb-4 bg-tertiary-container text-on-tertiary-container p-4 rounded-md">
 {{ session('success') }}
 </div>
 @endif

 <div class="bg-surface-container-lowest dark:bg-surface-container-highest overflow-hidden shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] sm:rounded-2xl">
 <div class="p-6 text-on-surface ">
 <div class="overflow-x-auto">
 <table class="w-full text-left border-collapse">
 <thead>
 <tr class="bg-surface-container-low dark:bg-[#3E3E3A] border-b border-outline-variant ">
 <th class="px-4 py-3 text-sm font-semibold text-on-surface ">Image</th>
 <th class="px-4 py-3 text-sm font-semibold text-on-surface ">Title</th>
 <th class="px-4 py-3 text-sm font-semibold text-on-surface ">Subtitle</th>
 <th class="px-4 py-3 text-sm font-semibold text-on-surface text-right">Actions</th>
 </tr>
 </thead>
 <tbody>
 @forelse ($heroes as $hero)
 <tr class="border-b border-outline-variant hover:bg-surface-container transition-all">
 <td class="px-4 py-3">
 @if($hero->image)
 <img src="{{ asset('storage/' . $hero->image) }}" alt="{{ $hero->title }}" class="w-16 h-16 object-cover rounded-lg">
 @else
 <span class="text-sm text-on-surface-variant">No Image</span>
 @endif
 </td>
 <td class="px-4 py-3 font-medium">{{ $hero->title }}</td>
 <td class="px-4 py-3 text-sm text-on-surface-variant ">{{ Str::limit($hero->subtitle, 50) }}</td>
 <td class="px-4 py-3 text-right">
 <a href="{{ route('admin.heroes.edit', $hero->id) }}" class="text-primary dark:text-primary-fixed-dim hover:underline mr-3 text-sm font-medium">Edit</a>
 <form action="{{ route('admin.heroes.destroy', $hero->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this hero?');">
 @csrf
 @method('DELETE')
 <button type="submit" class="text-error hover:underline text-sm font-medium">Delete</button>
 </form>
 </td>
 </tr>
 @empty
 <tr>
 <td colspan="4" class="px-4 py-8 text-center text-on-surface-variant">
 No heroes found. <a href="{{ route('admin.heroes.create') }}" class="text-primary hover:underline">Create one</a>.
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

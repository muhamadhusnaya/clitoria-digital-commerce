<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Gallery Management') }}
            </h2>
            <a href="{{ route('admin.galleries.create') }}" class="px-4 py-2 bg-[#432B9F] text-white rounded-full text-sm font-medium hover:bg-[#5B46B8] transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add_photo_alternate</span> Upload Image
            </a>
        </div>
    </x-slot>

    <!-- Alpine.js Component wrapper for Gallery and Preview Modal -->
    <div x-data="{ 
            previewOpen: false, 
            previewImage: '', 
            previewTitle: '', 
            previewDesc: '',
            
            openPreview(image, title, desc) {
                this.previewImage = image;
                this.previewTitle = title;
                this.previewDesc = desc;
                this.previewOpen = true;
                document.body.classList.add('overflow-hidden');
            },
            
            closePreview() {
                this.previewOpen = false;
                document.body.classList.remove('overflow-hidden');
                
                // Allow exit animation to finish before clearing sources
                setTimeout(() => {
                    if(!this.previewOpen) {
                        this.previewImage = '';
                    }
                }, 300);
            }
        }" 
        class="py-12"
        @keydown.escape.window="closePreview()"
    >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (session('success'))
                <div class="mb-4 bg-[#B3F582] text-[#224C00] p-4 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Gallery Grid -->
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @php
                        // Since GalleryController might not be fully functional during development UI phase
                        $items = $galleries ?? [];
                    @endphp

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @forelse ($items as $gallery)
                            <div class="group relative rounded-xl overflow-hidden bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#C9C4D5] dark:border-gray-700 shadow-sm transition-all duration-300 hover:shadow-premium hover:-translate-y-1">
                                <!-- Image Thumbnail -->
                                <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200">
                                    <img src="{{ Str::startsWith($gallery->image, 'http') ? $gallery->image : asset('storage/' . $gallery->image) }}" 
                                         alt="{{ $gallery->title }}" 
                                         class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                
                                <!-- Content -->
                                <div class="p-4">
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="font-semibold text-[#151936] dark:text-gray-100 truncate pr-2">{{ $gallery->title }}</h3>
                                        @if($gallery->status)
                                            <span class="w-2.5 h-2.5 rounded-full bg-[#B3F582] flex-shrink-0 mt-1.5" title="Active"></span>
                                        @else
                                            <span class="w-2.5 h-2.5 rounded-full bg-gray-400 flex-shrink-0 mt-1.5" title="Hidden"></span>
                                        @endif
                                    </div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 line-clamp-2 mb-4">{{ $gallery->description ?? 'No description' }}</p>
                                    
                                    <!-- Actions -->
                                    <div class="flex justify-between items-center mt-2 border-t border-[#C9C4D5] dark:border-gray-600 pt-3">
                                        <!-- Preview Button trigger -->
                                        <button @click="openPreview('{{ Str::startsWith($gallery->image, 'http') ? $gallery->image : asset('storage/' . $gallery->image) }}', '{{ addslashes($gallery->title) }}', '{{ addslashes($gallery->description ?? '') }}')" 
                                                class="text-sm font-medium text-[#432B9F] dark:text-[#A28DFF] flex items-center gap-1 hover:underline focus:outline-none">
                                            <span class="material-symbols-outlined text-[16px]">visibility</span> Preview
                                        </button>
                                        
                                        <div class="flex gap-3 text-gray-400 items-center">
                                            <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="hover:text-[#432B9F] transition-colors"><span class="material-symbols-outlined text-[18px]">edit</span></a>
                                            <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" class="inline-block m-0 p-0" onsubmit="return confirm('Are you sure you want to delete this gallery image?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="hover:text-[#BA1A1A] transition-colors flex items-center"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full py-12 text-center text-gray-500">
                                <span class="material-symbols-outlined text-4xl mb-2 text-gray-300">hide_image</span>
                                <p>No gallery images found. <a href="{{ route('admin.galleries.create') }}" class="text-[#432B9F] hover:underline">Upload one</a>.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Lightbox / Preview Modal (Alpine.js) -->
        <div x-show="previewOpen" 
             style="display: none;" 
             class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
        >
            <!-- Backdrop Overlay -->
            <div class="absolute inset-0 bg-[#151936]/90 backdrop-blur-sm" @click="closePreview()"></div>

            <!-- Modal Content Panel -->
            <div class="relative w-full max-w-4xl max-h-full flex flex-col bg-transparent z-10"
                 x-transition:enter="transition ease-out duration-300 transform"
                 x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                 x-transition:leave="transition ease-in duration-200 transform"
                 x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                 x-transition:leave-end="opacity-0 translate-y-8 scale-95"
                 @click.stop
            >
                <!-- Close Button (Top Right Floating) -->
                <button @click="closePreview()" class="absolute -top-12 right-0 text-white/70 hover:text-white transition-colors focus:outline-none flex items-center gap-1 group">
                    <span class="text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity">Close</span>
                    <span class="material-symbols-outlined text-3xl">close</span>
                </button>

                <!-- Image Container -->
                <div class="w-full flex-grow overflow-hidden rounded-t-xl bg-black/50 shadow-2xl flex items-center justify-center">
                    <img :src="previewImage" :alt="previewTitle" class="max-w-full max-h-[75vh] object-contain rounded-t-xl">
                </div>

                <!-- Info Banner (Bottom) -->
                <div class="bg-white dark:bg-[#161615] p-5 rounded-b-xl shadow-premium border-t-0">
                    <h3 class="text-xl font-semibold text-[#151936] dark:text-gray-100 mb-1" x-text="previewTitle"></h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400" x-text="previewDesc ? previewDesc : 'No description provided.'"></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h1 class="text-3xl font-semibold text-[#151936] mb-2 tracking-tight">Galeri</h1>
                <p class="text-[16px] text-[#797584]">Kelola dan kurasi koleksi visual botani untuk etalase.</p>
            </div>
            <a href="{{ route('admin.galleries.create') }}" class="bg-[#5b46b8] hover:bg-[#432b9f] text-[#ffffff] px-6 py-3 rounded-full text-[14px] font-medium flex items-center gap-2 shadow-sm hover:shadow-lg hover:scale-[1.02] active:scale-[0.98] transition-all">
                <span class="material-symbols-outlined">upload</span>
                Unggah Galeri Baru
            </a>
        </div>
    </x-slot>

    @if (session('success'))
        <div class="mb-6 bg-[#b3f582] text-[#255100] p-4 rounded-xl font-medium">
            {{ session('success') }}
        </div>
    @endif

    <!-- Visual Image Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @forelse ($galleries as $gallery)
            <!-- Gallery Card -->
            <div class="gallery-card bg-[#ffffff] rounded-xl overflow-hidden shadow-sm transition-all duration-300 border border-[#c9c4d5]/30 flex flex-col group hover:-translate-y-2 hover:scale-[1.02] hover:shadow-[0_20px_25px_-5px_rgba(91,70,184,0.1),0_10px_10px_-5px_rgba(91,70,184,0.04)]">
                <div class="relative aspect-[4/5] overflow-hidden bg-[#e6deff]">
                    @if ($gallery->image)
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}"/>
                    @else
                        <div class="w-full h-full flex items-center justify-center text-[#484553]">
                            <span class="material-symbols-outlined text-5xl">image</span>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4">
                        @if ($gallery->is_published ?? true)
                            <span class="px-3 py-1 bg-[#b3f582] text-[#255100] rounded-full text-[12px] font-semibold tracking-wider shadow-sm flex items-center gap-1 uppercase">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#224c00]"></span> Dipublikasi
                            </span>
                        @else
                            <span class="px-3 py-1 bg-[#dfe0ff] text-[#484553] rounded-full text-[12px] font-semibold tracking-wider shadow-sm flex items-center gap-1 uppercase">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#797584]"></span> Draf
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="text-[20px] font-semibold text-[#151936] mb-1">{{ $gallery->title }}</h3>
                    <p class="text-[16px] text-[#797584] mb-4 line-clamp-2">{{ $gallery->description ?? '-' }}</p>
                    
                    <div class="mt-auto flex items-center justify-between border-t border-[#c9c4d5]/30 pt-4">
                        <span class="text-[12px] font-semibold text-[#797584] uppercase tracking-wider">#{{ $gallery->id }}</span>
                        <div class="flex items-center gap-1">
                            <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="p-2 text-[#484553] hover:text-[#432b9f] hover:bg-[#e6deff]/50 rounded-full transition-colors">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-[#484553] hover:text-[#ba1a1a] hover:bg-[#ffdad6]/50 rounded-full transition-colors">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <!-- Empty State -->
            <div class="col-span-full flex flex-col items-center justify-center py-24 text-[#484553]">
                <span class="material-symbols-outlined text-6xl mb-4 text-[#c9c4d5]">collections</span>
                <p class="text-[24px] font-semibold mb-2 text-[#151936]">Belum ada galeri</p>
                <p class="text-[16px] mb-6 text-center max-w-sm text-[#797584]">Mulai membangun cerita visual Anda dengan mengunggah koleksi galeri pertama Anda.</p>
                <a href="{{ route('admin.galleries.create') }}" class="bg-[#5b46b8] hover:bg-[#432b9f] text-[#ffffff] px-6 py-3 rounded-full text-[14px] font-medium flex items-center gap-2 shadow-sm hover:shadow-lg hover:scale-[1.02] active:scale-[0.98] transition-all">
                    <span class="material-symbols-outlined">add</span> Buat Galeri Pertama
                </a>
            </div>
        @endforelse
    </div>

    @if ($galleries instanceof \Illuminate\Pagination\LengthAwarePaginator && $galleries->hasMorePages())
        <!-- Pagination / Load More -->
        <div class="mt-12 flex justify-center">
            <button class="group flex flex-col items-center gap-2 hover:translate-y-[-4px] transition-transform duration-300">
                <div class="w-12 h-12 rounded-full border-2 border-[#e6deff] flex items-center justify-center text-[#432b9f] group-hover:bg-[#cabeff]/20 transition-colors">
                    <span class="material-symbols-outlined">expand_more</span>
                </div>
                <span class="text-[14px] font-medium text-[#484553]">Muat Lebih Banyak Galeri</span>
            </button>
        </div>
    @endif
</x-app-layout>

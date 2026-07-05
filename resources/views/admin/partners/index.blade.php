<x-app-layout>
    <style>
        .partner-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .partner-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(91, 70, 184, 0.08);
        }
    </style>

    @if (session('success'))
        <div class="mb-6 bg-tertiary-container text-on-tertiary-container p-4 rounded-xl border border-tertiary-fixed font-medium text-[14px]">
            {{ session('success') }}
        </div>
    @endif

    <!-- Header Section -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-6">
        <div>
            <h2 class="font-headline-md text-[32px] font-bold text-on-surface mb-2">Manajemen Mitra</h2>
            <p class="text-body-md font-body-md text-on-surface-variant text-[16px]">Awasi dan kelola kolaborasi merek botani dan mitra ritel Anda.</p>
        </div>
        <a href="{{ route('admin.partners.create') }}" class="bg-primary hover:bg-primary-container text-white px-8 py-4 rounded-full font-label-md text-[14px] font-medium flex items-center gap-2 shadow-lg hover:shadow-primary/20 transition-all active:scale-[0.98]">
            <span class="material-symbols-outlined">add</span>
            Tambah Mitra
        </a>
    </div>

    <!-- Partners Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 pb-12">
        @forelse ($partners as $partner)
        <!-- Partner Card -->
        <div class="partner-card bg-white rounded-[24px] p-6 shadow-[0_10px_30px_rgba(31,35,64,0.04)] border border-outline-variant/20 flex flex-col">
            <div class="h-20 w-full flex items-center justify-center mb-6 bg-surface-container-low rounded-xl p-4 overflow-hidden border border-outline-variant/10">
                @if($partner->logo)
                    <img class="max-h-full max-w-full object-contain" src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}">
                @else
                    <span class="material-symbols-outlined text-outline-variant text-[32px]">image</span>
                @endif
            </div>
            
            <div class="mb-4">
                <h3 class="font-headline-sm text-[20px] font-bold text-on-surface leading-tight mb-1 truncate">{{ $partner->name }}</h3>
                @if($partner->website)
                    <a class="text-label-md font-medium text-[14px] text-primary hover:underline truncate block" href="{{ $partner->website }}" target="_blank">
                        {{ str_replace(['http://', 'https://'], '', $partner->website) }}
                    </a>
                @else
                    <p class="text-label-md font-medium text-[14px] text-outline italic">Tidak ada situs web</p>
                @endif
            </div>
            
            <div class="flex items-center justify-between mt-auto pt-4 border-t border-outline-variant/10">
                <span class="inline-flex items-center px-3 py-1 rounded-full bg-tertiary/10 text-tertiary font-bold text-[12px]">
                    <span class="w-1.5 h-1.5 rounded-full bg-tertiary mr-2"></span>
                    Aktif
                </span>
                <div class="flex gap-2">
                    <a href="{{ route('admin.partners.edit', $partner->id) }}" class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary-container/10 rounded-lg transition-colors inline-flex">
                        <span class="material-symbols-outlined text-[20px]">edit</span>
                    </a>
                    <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" class="inline-flex" onsubmit="return confirm('Apakah Anda yakin ingin menghapus mitra ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-2 text-on-surface-variant hover:text-error hover:bg-error-container/10 rounded-lg transition-colors cursor-pointer">
                            <span class="material-symbols-outlined text-[20px]">delete</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <!-- Empty State / Add New Card -->
        <a href="{{ route('admin.partners.create') }}" class="partner-card border-2 border-dashed border-primary/30 rounded-[24px] p-6 flex flex-col items-center justify-center gap-4 cursor-pointer hover:bg-primary-container/5 hover:border-primary transition-all group min-h-[280px]">
            <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-primary text-[24px]">add_circle</span>
            </div>
            <p class="font-bold text-[14px] text-primary text-center">Daftarkan Mitra<br>Merek Baru</p>
        </a>
        @endforelse
    </div>
</x-app-layout>

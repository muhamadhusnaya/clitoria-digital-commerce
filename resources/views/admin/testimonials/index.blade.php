<x-app-layout>
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">
        <div>
            <h2 class="font-headline-md text-[32px] font-bold text-on-surface mb-1">Manajemen Testimoni</h2>
            <p class="text-body-md text-[16px] text-on-surface-variant">Kelola dan kurasi cerita pelanggan untuk etalase Clitoria.</p>
        </div>
        <a href="{{ route('admin.testimonials.create') }}" class="flex items-center gap-2 px-8 py-3.5 bg-primary-container text-white font-bold rounded-full hover:shadow-lg hover:shadow-primary/30 transition-all active:scale-95 text-[14px]">
            <span class="material-symbols-outlined">add</span>
            <span>Tambah Testimoni Baru</span>
        </a>
    </div>
    
    @if (session('success'))
        <div class="mb-6 bg-tertiary-container text-on-tertiary-container p-4 rounded-xl border border-tertiary-fixed font-medium text-[14px]">
            {{ session('success') }}
        </div>
    @endif

    <!-- Summary Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] border border-outline-variant/10 flex items-center gap-5">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">reviews</span>
            </div>
            <div>
                <p class="text-[14px] font-medium text-outline">Total Ulasan</p>
                <h3 class="text-[24px] font-bold text-on-surface">{{ $testimonials->count() }}</h3>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] border border-outline-variant/10 flex items-center gap-5">
            <div class="w-12 h-12 rounded-xl bg-tertiary-fixed-dim/20 flex items-center justify-center text-on-tertiary-fixed-variant">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">grade</span>
            </div>
            <div>
                <p class="text-[14px] font-medium text-outline">Rata-rata Penilaian</p>
                <h3 class="text-[24px] font-bold text-on-surface">5.0 / 5.0</h3>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] border border-outline-variant/10 flex items-center gap-5">
            <div class="w-12 h-12 rounded-xl bg-secondary-fixed-dim/20 flex items-center justify-center text-on-secondary-fixed-variant">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">verified</span>
            </div>
            <div>
                <p class="text-[14px] font-medium text-outline">Ulasan Aktif</p>
                <h3 class="text-[24px] font-bold text-on-surface">{{ $testimonials->where('status', 'published')->count() }} Aktif</h3>
            </div>
        </div>
    </div>

    <!-- Data Table Container -->
    <div class="bg-white rounded-xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] overflow-hidden border border-outline-variant/10">
        <div class="px-6 py-4 border-b border-outline-variant/20 flex items-center justify-between bg-surface-container-low/30">
            <h4 class="font-bold text-on-surface text-[16px]">Kiriman Terbaru</h4>
            <div class="flex gap-2">
                <button class="p-2 rounded-lg hover:bg-surface-container-high text-on-surface-variant transition-colors">
                    <span class="material-symbols-outlined">filter_list</span>
                </button>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-surface-container-low/10 border-b border-outline-variant/10">
                        <th class="px-6 py-4 text-[12px] font-bold tracking-widest text-outline uppercase">Pelanggan</th>
                        <th class="px-6 py-4 text-[12px] font-bold tracking-widest text-outline uppercase">Penilaian</th>
                        <th class="px-6 py-4 text-[12px] font-bold tracking-widest text-outline uppercase w-1/3">Ulasan</th>
                        <th class="px-6 py-4 text-[12px] font-bold tracking-widest text-outline uppercase">Status</th>
                        <th class="px-6 py-4 text-[12px] font-bold tracking-widest text-outline uppercase text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/10">
                    @forelse ($testimonials as $testimonial)
                    <tr class="hover:bg-surface-container-low/20 transition-colors group">
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-3">
                                @if($testimonial->image)
                                    <img class="w-10 h-10 rounded-full object-cover" src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" />
                                @else
                                    <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center border border-outline-variant/50">
                                        <span class="material-symbols-outlined text-on-surface-variant text-[20px]">person</span>
                                    </div>
                                @endif
                                <div>
                                    <p class="text-[14px] font-bold text-on-surface">{{ $testimonial->name }}</p>
                                    <p class="text-[12px] text-outline">{{ $testimonial->role }} @if($testimonial->company) di {{ $testimonial->company }} @endif</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex text-amber-400">
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1">grade</span>
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1">grade</span>
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1">grade</span>
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1">grade</span>
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1">grade</span>
                            </div>
                        </td>
                        <td class="px-6 py-5">
                            <p class="text-[16px] text-on-surface-variant line-clamp-2">"{{ $testimonial->content }}"</p>
                        </td>
                        <td class="px-6 py-5">
                            @if($testimonial->status == 'published')
                                <span class="px-3 py-1 bg-[#b3f582]/20 text-[#306600] rounded-full text-[12px] font-bold tracking-wide">AKTIF</span>
                            @else
                                <span class="px-3 py-1 bg-surface-container-high text-on-surface-variant rounded-full text-[12px] font-bold tracking-wide">DRAFT</span>
                            @endif
                        </td>
                        <td class="px-6 py-5 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="p-2 text-outline hover:text-primary hover:bg-primary/10 rounded-full transition-all">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </a>
                                <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus Testimoni ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-outline hover:text-error hover:bg-error/10 rounded-full transition-all">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-on-surface-variant">
                            <div class="flex flex-col items-center justify-center">
                                <span class="material-symbols-outlined text-4xl mb-3 text-outline-variant">forum</span>
                                <p class="text-[16px]">Belum ada testimoni.</p>
                                <a href="{{ route('admin.testimonials.create') }}" class="mt-2 text-primary hover:underline font-bold text-[14px]">Buat sekarang</a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($testimonials->count() > 0)
        <div class="px-6 py-4 border-t border-outline-variant/10 flex items-center justify-between">
            <p class="text-[14px] font-medium text-outline">Menampilkan {{ $testimonials->count() }} data</p>
        </div>
        @endif
    </div>

    <!-- Bulk Actions Footer -->
    <div class="mt-8 flex justify-end gap-4">
        <p class="flex items-center text-[14px] font-medium text-outline mr-auto">
            <span class="material-symbols-outlined mr-2 text-[18px]">info</span>
            Ulasan dengan status 'published' akan ditampilkan sebagai Unggulan.
        </p>
        <button class="px-6 py-2 rounded-full border border-outline-variant text-on-surface-variant font-bold hover:bg-surface-container-high transition-all text-[14px]" onclick="window.location.reload();">Muat Ulang Data</button>
    </div>
    
    <script>
        // Hover effect on rows
        const tableRows = document.querySelectorAll('tbody tr');
        tableRows.forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.classList.add('shadow-sm');
            });
            row.addEventListener('mouseleave', () => {
                row.classList.remove('shadow-sm');
            });
        });
    </script>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="space-y-2">
                <h2 class="text-3xl font-semibold text-[#151936] tracking-tight">Manajemen Manfaat</h2>
                <p class="text-[16px] text-[#797584] max-w-2xl">
                    Kurasi nilai-nilai utama yang mendefinisikan pengalaman Clitoria. 
                    Sesuaikan bagaimana keunggulan organik ini disajikan kepada pelanggan elit Anda.
                </p>
            </div>
            <a href="{{ route('admin.benefits.create') }}" class="bg-[#432b9f] hover:bg-[#5b46b8] text-white px-8 py-4 rounded-full font-medium text-[14px] flex items-center gap-2 shadow-lg shadow-[#432b9f]/20 transition-all hover:scale-[1.02] active:scale-[0.98]">
                <span class="material-symbols-outlined text-[20px]">add</span>
                Tambah Manfaat Baru
            </a>
        </div>
    </x-slot>

    <!-- Bento Stats Row -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
        <div class="bg-white p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] flex flex-col gap-1 border border-[#c9c4d5]/30">
            <span class="text-[#797584] uppercase text-[11px] tracking-widest font-semibold">Total Manfaat</span>
            <span class="text-3xl font-bold text-[#151936]">{{ count($benefits) }}</span>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] flex flex-col gap-1 border border-[#c9c4d5]/30">
            <span class="text-[#797584] uppercase text-[11px] tracking-widest font-semibold">Aktif</span>
            <span class="text-3xl font-bold text-[#306600]">{{ count($benefits) }}</span>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] flex flex-col gap-1 border border-[#c9c4d5]/30">
            <span class="text-[#797584] uppercase text-[11px] tracking-widest font-semibold">Tidak Aktif</span>
            <span class="text-3xl font-bold text-[#614cba]">0</span>
        </div>
        <div class="bg-[#e6deff] p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] flex items-center justify-center border border-[#432b9f]/10">
            <div class="text-center">
                <span class="material-symbols-outlined text-[#432b9f] text-4xl">energy_savings_leaf</span>
                <p class="font-medium text-[14px] text-[#432b9f] mt-1">Fokus Kesehatan Organik</p>
            </div>
        </div>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-[24px] shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] border border-[#c9c4d5]/30 overflow-hidden">
        <div class="px-8 py-6 border-b border-[#c9c4d5]/30 flex items-center justify-between bg-[#ffffff]/50">
            <h3 class="text-[20px] font-semibold text-[#151936]">Daftar Nilai Aktif</h3>
            <div class="flex items-center gap-4">
                <button class="flex items-center gap-2 text-[#484553] text-[14px] font-medium hover:text-[#432b9f] transition-colors">
                    <span class="material-symbols-outlined text-[18px]">filter_list</span>
                    Filter
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#f4f2ff]">
                        <th class="px-8 py-4 text-[#797584] uppercase tracking-widest text-[11px] font-semibold border-b border-[#c9c4d5]/30">Ikon</th>
                        <th class="px-8 py-4 text-[#797584] uppercase tracking-widest text-[11px] font-semibold border-b border-[#c9c4d5]/30">Judul & Deskripsi</th>
                        <th class="px-8 py-4 text-[#797584] uppercase tracking-widest text-[11px] font-semibold border-b border-[#c9c4d5]/30">Urutan</th>
                        <th class="px-8 py-4 text-[#797584] uppercase tracking-widest text-[11px] font-semibold border-b border-[#c9c4d5]/30 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#c9c4d5]/30">
                    @forelse($benefits as $benefit)
                    <tr class="hover:bg-[#f4f2ff]/50 transition-colors group">
                        <td class="px-8 py-6">
                            <div class="w-12 h-12 rounded-full bg-[#e6deff] flex items-center justify-center text-[#4931a1]">
                                @if($benefit->icon_type === 'image')
                                    <img src="{{ Storage::url($benefit->icon) }}" class="w-6 h-6 object-cover" alt="Icon">
                                @else
                                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">{{ $benefit->icon ?? 'eco' }}</span>
                                @endif
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex flex-col">
                                <span class="text-[16px] font-bold text-[#151936]">{{ $benefit->title }}</span>
                                <span class="text-[#797584] text-sm">{{ $benefit->description }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#306600]/10 text-[#306600] text-[12px] font-bold">
                                {{ $benefit->order_number }}
                            </span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.benefits.edit', $benefit->id) }}" class="p-2 rounded-xl text-[#484553] hover:bg-[#e6deff] hover:text-[#432b9f] transition-all">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </a>
                                <form action="{{ route('admin.benefits.destroy', $benefit->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus manfaat ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 rounded-xl text-[#484553] hover:bg-[#ffdad6] hover:text-[#ba1a1a] transition-all">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-8 py-12 text-center text-[#797584]">
                            <span class="material-symbols-outlined text-4xl mb-2 opacity-50">health_and_safety</span>
                            <p>Belum ada manfaat yang ditambahkan.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

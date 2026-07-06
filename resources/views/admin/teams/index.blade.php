<x-app-layout>
 <style>
 .card-shadow {
 box-shadow: 0 10px 30px rgba(31, 35, 64, 0.04);
 }
 .premium-button {
 transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
 }
 .premium-button:active {
 transform: scale(0.96);
 }
 </style>

 <!-- Page Header -->
 <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
 <div>
 <h2 class="text-3xl font-semibold text-[#151936] tracking-tight mb-2">Anggota Tim</h2>
 <p class="font-body-lg text-[18px] text-[#797584] max-w-2xl">
 Kelola spesialis teh organik, ahli botani, dan tim operasional Anda yang menjadikan Clitoria standar emas dalam minuman premium.
 </p>
 </div>
 <a href="{{ route('admin.teams.create') }}" class="bg-[#5b46b8] text-white px-8 py-4 rounded-xl text-[16px] font-bold premium-button flex items-center gap-2 card-shadow hover:bg-[#432b9f] transition-colors">
 <span class="material-symbols-outlined" data-icon="person_add">person_add</span>
 Tambah Anggota
 </a>
 </div>
 
 @if (session('success'))
 <div class="mb-6 bg-[#306600] text-[#a2e373] p-4 rounded-xl border border-[#b3f582] font-medium text-[14px]">
 {{ session('success') }}
 </div>
 @endif

 <!-- Dashboard Stats Row -->
 <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
 <div class="bg-white p-6 rounded-xl card-shadow flex items-center gap-4 border border-[#c9c4d5]/10">
 <div class="w-14 h-14 rounded-full bg-[#e6deff] flex items-center justify-center">
 <span class="material-symbols-outlined text-[#432b9f]" data-icon="group">group</span>
 </div>
 <div>
 <p class="text-[#797584] text-[14px] font-medium">Total Anggota</p>
 <p class="text-[24px] font-semibold text-[#151936] tracking-tight">{{ $teams->count() }} Aktif</p>
 </div>
 </div>
 </div>

 <!-- Table Container -->
 <div class="bg-white rounded-xl card-shadow overflow-hidden border border-[#edecff]">
 <div class="overflow-x-auto">
 <table class="w-full text-left">
 <thead>
 <tr class="bg-[#f4f2ff]">
 <th class="px-6 py-5 font-bold tracking-widest text-[12px] text-[#797584] uppercase">Foto</th>
 <th class="px-6 py-5 font-bold tracking-widest text-[12px] text-[#797584] uppercase">Nama</th>
 <th class="px-6 py-5 font-bold tracking-widest text-[12px] text-[#797584] uppercase">Posisi</th>
 <th class="px-6 py-5 font-bold tracking-widest text-[12px] text-[#797584] uppercase">Tautan Sosial</th>
 <th class="px-6 py-5 font-bold tracking-widest text-[12px] text-[#797584] uppercase text-right">Aksi</th>
 </tr>
 </thead>
 <tbody class="divide-y divide-surface-container">
 @forelse ($teams as $team)
 <tr class="hover:bg-[#ffffff] transition-colors group">
 <td class="px-6 py-5">
 <div class="w-12 h-12 rounded-full overflow-hidden bg-[#edecff] border border-[#c9c4d5]/30 flex items-center justify-center text-outline">
 @if($team->photo)
 <img class="w-full h-full object-cover" src="{{ asset('storage/' . $team->photo) }}" alt="{{ $team->name }}">
 @else
 <span class="material-symbols-outlined text-[24px]">person</span>
 @endif
 </div>
 </td>
 <td class="px-6 py-5">
 <div class="flex items-center gap-2">
 <p class="text-[16px] font-semibold text-[#151936]">{{ $team->name }}</p>
 <span class="w-2 h-2 rounded-full bg-[#224c00]"></span>
 </div>
 </td>
 <td class="px-6 py-5">
 <span class="px-3 py-1 bg-[#e6deff] text-[#4831a4] text-[14px] rounded-full font-medium">{{ $team->position }}</span>
 </td>
 <td class="px-6 py-5">
 <div class="flex gap-3 text-[#432b9f]/60">
 @if($team->instagram)
 <a class="hover:text-[#432b9f] transition-all text-[#797584]" href="{{ $team->instagram }}" target="_blank" title="Instagram">
 <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
 <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
 </svg>
 </a>
 @endif
 @if($team->linkedin)
 <a class="hover:text-[#432b9f] transition-all text-[#797584]" href="{{ $team->linkedin }}" target="_blank" title="LinkedIn">
 <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
 <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
 </svg>
 </a>
 @endif
 @if(!$team->instagram && !$team->linkedin)
 <span class="text-[12px] italic opacity-50 text-[#797584]">Tidak ada tautan</span>
 @endif
 </div>
 </td>
 <td class="px-6 py-5 text-right">
 <div class="flex justify-end gap-2">
 <a href="{{ route('admin.teams.edit', $team->id) }}" class="p-2 hover:bg-[#e6deff] rounded-lg text-[#797584] hover:text-[#432b9f] transition-all inline-block">
 <span class="material-symbols-outlined" data-icon="edit">edit</span>
 </a>
 <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota tim ini?');">
 @csrf
 @method('DELETE')
 <button type="submit" class="p-2 hover:bg-[#ffdad6] rounded-lg text-[#797584] hover:text-[#ba1a1a] transition-all cursor-pointer">
 <span class="material-symbols-outlined" data-icon="delete">delete</span>
 </button>
 </form>
 </div>
 </td>
 </tr>
 @empty
 <tr>
 <td colspan="5" class="px-6 py-12 text-center text-[#797584]">
 <div class="flex flex-col items-center justify-center">
 <span class="material-symbols-outlined text-4xl mb-3 text-[#c9c4d5]">groups</span>
 <p class="text-[16px]">Belum ada data anggota tim.</p>
 <a href="{{ route('admin.teams.create') }}" class="mt-2 text-[#432b9f] hover:underline font-bold text-[14px]">Tambah Anggota Sekarang</a>
 </div>
 </td>
 </tr>
 @endforelse
 </tbody>
 </table>
 </div>
 
 <!-- Pagination / Footer table -->
 @if($teams->count() > 0)
 <div class="px-6 py-4 flex items-center justify-between border-t border-[#edecff] bg-[#ffffff]">
 <p class="text-[14px] font-medium text-[#797584]">Menampilkan {{ $teams->count() }} data anggota aktif.</p>
 </div>
 @endif
 </div>

 <!-- Footer Message -->
 <div class="mt-8 flex justify-center">
 <div class="flex items-center gap-2 text-[#797584]/50 text-[14px] font-medium">
 <span class="material-symbols-outlined text-[16px]" data-icon="verified">verified</span>
 <span>Semua data tim dienkripsi dan disinkronisasi.</span>
 </div>
 </div>
</x-app-layout>

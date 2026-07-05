<x-app-layout>
 <!-- Canvas Area -->
 <div class="py-1">
 <!-- Page Header -->
 <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
 <div class="space-y-2">
 <h2 class="text-3xl font-semibold text-[#151936] tracking-tight">Manajemen Produk</h2>
 <p class="text-[16px] text-[#797584] max-w-2xl">Kelola koleksi teh botani dan detail inventaris Anda.</p>
 </div>
 <a href="{{ route('admin.products.create') }}" class="bg-[#432b9f] hover:bg-[#5b46b8] text-white px-8 py-4 rounded-full font-medium text-[14px] flex items-center gap-2 shadow-lg shadow-[#432b9f]/20 transition-all hover:scale-[1.02] active:scale-[0.98]">
 <span class="material-symbols-outlined text-[20px]">add</span>
 Tambah Produk Baru
 </a>
 </div>

 @if (session('success'))
 <div class="mb-6 bg-[#b3f582] text-[#255100] p-4 rounded-xl font-medium">
 {{ session('success') }}
 </div>
 @endif

 @php
 $totalSkus = $products->count();
 $published = $products->where('status', 'active')->count();
 @endphp

 <!-- Bento Stats Grid -->
 <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
 <div class="bg-white p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] flex flex-col gap-1 border border-[#c9c4d5]/30">
 <span class="text-[#797584] uppercase text-[11px] tracking-widest font-semibold">Total SKU</span>
 <span class="text-3xl font-bold text-[#151936]">{{ $totalSkus }}</span>
 </div>
 <div class="bg-white p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] flex flex-col gap-1 border border-[#c9c4d5]/30">
 <span class="text-[#797584] uppercase text-[11px] tracking-widest font-semibold">Diterbitkan</span>
 <span class="text-3xl font-bold text-[#306600]">{{ $published }}</span>
 </div>
 <div class="bg-white p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] flex flex-col gap-1 border border-[#c9c4d5]/30">
 <span class="text-[#797584] uppercase text-[11px] tracking-widest font-semibold">Terlaris</span>
 <span class="text-3xl font-bold text-[#151936]">-</span>
 </div>
 <div class="bg-white p-6 rounded-2xl shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] flex flex-col gap-1 border border-[#c9c4d5]/30">
 <span class="text-[#797584] uppercase text-[11px] tracking-widest font-semibold">Habis</span>
 <span class="text-3xl font-bold text-[#ba1a1a]">0</span>
 </div>
 </div>
 <p class="text-[12px] font-semibold text-[#797584] uppercase tracking-wider">Stok Menipis</p>
 <p class="text-2xl font-bold text-[#151936]">0</p>
 </div>
 </div>
 </div>

 <!-- Data Table Container -->
 <section class="bg-[#ffffff] rounded-xl shadow-[0_10px_30px_rgba(31,35,64,0.04)] overflow-hidden border border-[#c9c4d5]/20">
 <div class="p-6 border-b border-[#c9c4d5]/10 flex justify-between items-center">
 <div class="flex gap-4">
 <button class="text-[14px] font-medium text-[#432b9f] bg-[#e6deff] px-4 py-2 rounded-full">Semua Produk</button>
 <button class="text-[14px] font-medium text-[#797584] hover:bg-[#f4f2ff] px-4 py-2 rounded-full transition-colors">Kategori</button>
 <button class="text-[14px] font-medium text-[#797584] hover:bg-[#f4f2ff] px-4 py-2 rounded-full transition-colors">Inventaris</button>
 </div>
 <button class="flex items-center gap-2 text-[#797584] hover:text-[#432b9f] transition-colors">
 <span class="material-symbols-outlined text-base">filter_list</span>
 <span class="text-[14px] font-medium">Filter</span>
 </button>
 </div>
 
 <table class="w-full text-left border-collapse">
 <thead>
 <tr class="bg-[#f4f2ff]/50">
 <th class="px-6 py-4 text-[14px] text-[#797584] opacity-70">Gambar</th>
 <th class="px-6 py-4 text-[14px] text-[#797584] opacity-70">Nama Produk</th>
 <th class="px-6 py-4 text-[14px] text-[#797584] opacity-70">Slug</th>
 <th class="px-6 py-4 text-[14px] text-[#797584] opacity-70">Status</th>
 <th class="px-6 py-4 text-[14px] text-[#797584] opacity-70 text-right">Aksi</th>
 </tr>
 </thead>
 <tbody class="divide-y divide-outline-variant/10">
 @forelse ($products as $product)
 <tr class="hover:bg-[#fbf8ff] transition-colors cursor-pointer group" onclick="if(!event.target.closest('button') && !event.target.closest('a')) window.location='{{ route('admin.products.edit', $product->id) }}'">
 <td class="px-6 py-4">
 <div class="w-14 h-14 rounded-lg bg-[#e6e6ff] overflow-hidden border border-[#c9c4d5]/10">
 @if($product->image)
 <img class="w-full h-full object-cover" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" />
 @else
 <div class="w-full h-full flex items-center justify-center text-[#c9c4d5]">
 <span class="material-symbols-outlined">image</span>
 </div>
 @endif
 </div>
 </td>
 <td class="px-6 py-4">
 <div class="space-y-1">
 <p class="font-semibold text-[#151936]">{{ $product->name }}</p>
 <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-[#224c00]/10 text-[#224c00] border border-tertiary/20">ORGANIC</span>
 </div>
 </td>
 <td class="px-6 py-4">
 <code class="font-mono text-xs text-[#797584] bg-[#f4f2ff] px-2 py-1 rounded">{{ $product->slug }}</code>
 </td>
 <td class="px-6 py-4">
 @if($product->status == 'active')
 <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#b3f582] text-on-tertiary-fixed-variant">
 <span class="w-1.5 h-1.5 rounded-full bg-[#224c00]"></span>
 Diterbitkan
 </span>
 @else
 <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#e6e6ff]est text-[#797584]">
 <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
 Draf
 </span>
 @endif
 </td>
 <td class="px-6 py-4 text-right">
 <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
 <a href="{{ route('admin.products.edit', $product->id) }}" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-[#e6deff] transition-colors text-[#432b9f]" title="Edit">
 <span class="material-symbols-outlined text-lg">edit</span>
 </a>
 <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
 @csrf
 @method('DELETE')
 <button type="submit" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-[#ffdad6] transition-colors text-[#ba1a1a]" title="Delete">
 <span class="material-symbols-outlined text-lg">delete</span>
 </button>
 </form>
 </div>
 </td>
 </tr>
 @empty
 <tr>
 <td colspan="5" class="px-6 py-12 text-center text-[#797584]">
 <div class="flex flex-col items-center justify-center">
 <span class="material-symbols-outlined text-4xl mb-3 text-[#c9c4d5]">inbox</span>
 <p>Belum ada data produk.</p>
 <a href="{{ route('admin.products.create') }}" class="mt-2 text-[#432b9f] hover:underline font-medium">Buat sekarang</a>
 </div>
 </td>
 </tr>
 @endforelse
 </tbody>
 </table>
 
 @if($products->count() > 0)
 <div class="p-6 border-t border-[#c9c4d5]/10 flex justify-between items-center bg-[#f4f2ff]/30">
 <p class="text-sm text-[#797584]">Menampilkan {{ $products->count() }} produk</p>
 <div class="flex gap-2">
 <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-[#c9c4d5]/20 hover:bg-[#f4f2ff] transition-colors disabled:opacity-30" disabled>
 <span class="material-symbols-outlined">chevron_left</span>
 </button>
 <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#432b9f] text-white">1</button>
 <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-[#c9c4d5]/20 hover:bg-[#f4f2ff] transition-colors disabled:opacity-30" disabled>
 <span class="material-symbols-outlined">chevron_right</span>
 </button>
 </div>
 </div>
 @endif
 </section>
 </div>
</x-app-layout>

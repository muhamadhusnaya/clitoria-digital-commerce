<x-app-layout>
 <x-slot name="header">
 <div class="flex items-center gap-4">
 <a href="{{ route('admin.products.index') }}" class="w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#edecff] transition-colors">
 <span class="material-symbols-outlined text-[#432b9f]">arrow_back</span>
 </a>
 <div class="flex items-center gap-2">
 <span class="text-outline text-[14px]">Inventaris</span>
 <span class="text-outline text-[14px]">/</span>
 <span class="text-[#432b9f] font-semibold text-[14px]">Edit Produk</span>
 </div>
 </div>
 </x-slot>

 <!-- Form Content -->
 <div class="py-8">
 <header class="mb-10">
 <h2 class="font-headline-md text-[32px] font-bold text-on-background mb-2">Edit Produk: {{ $product->name }}</h2>
 <p class="text-[#797584] text-[16px]">Ubah detail untuk racikan botani Anda.</p>
 </header>

 @if ($errors->any())
 <div class="mb-6 p-4 bg-[#ffdad6] text-[#ba1a1a] rounded-xl text-[14px] font-medium">
 <ul class="list-disc list-inside space-y-1">
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif

 <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-10">
 @csrf
 @method('PUT')
 <!-- Left Column -->
 <div class="lg:col-span-8 space-y-8">
 <!-- Basic Info Card -->
 <div class="bg-[#ffffff] p-8 rounded-xl shadow-[0px_10px_30px_0px_rgba(91,70,184,0.08)]">
 <div class="grid grid-cols-2 gap-6">
 <div class="col-span-2">
 <label for="name" class="block text-[12px] font-semibold uppercase tracking-wider text-outline mb-2 ml-1">Nama Produk <span class="text-[#ba1a1a]">*</span></label>
 <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required
 class="w-full h-[56px] px-6 rounded-lg border-2 border-[#edecff] bg-[#fbf8ff] text-[16px] transition-all focus:border-primary focus:ring focus:ring-primary/20 outline-none" />
 </div>
 <div class="col-span-2">
 <label for="slug" class="block text-[12px] font-semibold uppercase tracking-wider text-outline mb-2 ml-1">Slug</label>
 <input type="text" name="slug" id="slug" value="{{ old('slug', $product->slug) }}"
 class="w-full h-[56px] px-6 rounded-lg border-2 border-[#edecff] bg-[#fbf8ff] text-[16px] transition-all focus:border-primary focus:ring focus:ring-primary/20 outline-none text-[#797584]" />
 </div>
 <div class="col-span-2">
 <label for="short_description" class="block text-[12px] font-semibold uppercase tracking-wider text-outline mb-2 ml-1">Deskripsi Singkat</label>
 <textarea name="short_description" id="short_description" rows="3"
 class="w-full p-6 rounded-lg border-2 border-[#edecff] bg-[#fbf8ff] text-[16px] transition-all focus:border-primary focus:ring focus:ring-primary/20 outline-none resize-none">{{ old('short_description', $product->short_description) }}</textarea>
 </div>
 </div>
 </div>

 <!-- Full Description Card -->
 <div class="bg-[#ffffff] rounded-xl shadow-[0px_10px_30px_0px_rgba(91,70,184,0.08)] overflow-hidden">
 <div class="p-8">
 <label for="description" class="block text-[12px] font-semibold uppercase tracking-wider text-outline mb-4 ml-1">Deskripsi Lengkap</label>
 <textarea name="description" id="description" rows="12"
 class="w-full p-6 rounded-lg border-2 border-[#edecff] bg-[#fbf8ff] text-[16px] transition-all focus:border-primary focus:ring focus:ring-primary/20 outline-none resize-none min-h-[300px]">{{ old('description', $product->description) }}</textarea>
 </div>
 </div>
 </div>

 <!-- Right Column -->
 <div class="lg:col-span-4 space-y-8">
 <!-- Status Card -->
 <div class="bg-[#ffffff] p-8 rounded-xl shadow-[0px_10px_30px_0px_rgba(91,70,184,0.08)]">
 <label for="status" class="block text-[12px] font-semibold uppercase tracking-wider text-outline mb-4 ml-1">Status Inventaris</label>
 <div class="space-y-4">
 <select name="status" id="status" class="w-full h-[56px] px-6 rounded-lg border-2 border-[#edecff] bg-[#fbf8ff] text-[16px] transition-all focus:border-primary focus:ring focus:ring-primary/20 outline-none appearance-none cursor-pointer">
 <option value="active" {{ old('status', $product->status ? 'active' : 'draft') == 'active' ? 'selected' : '' }}>Diterbitkan</option>
 <option value="draft" {{ old('status', $product->status ? 'active' : 'draft') == 'draft' ? 'selected' : '' }}>Draf</option>
 </select>
 <div class="flex items-center gap-3 p-4 {{ old('status', $product->status ? 'active' : 'draft') == 'active' ? 'bg-[#b3f582]/10 border-[#b3f582]' : 'bg-[#e6e6ff] border-[#c9c4d5]/30' }} border rounded-xl" id="status-indicator">
 @if(old('status', $product->status ? 'active' : 'draft') == 'active')
 <span class="material-symbols-outlined text-on-tertiary-fixed-variant" style="font-variation-settings: 'FILL' 1;">check_circle</span>
 <span class="text-on-tertiary-fixed-variant text-[14px] font-medium">Siap ditampilkan di toko</span>
 @else
 <span class="material-symbols-outlined text-outline" style="font-variation-settings: 'FILL' 1;">edit_document</span>
 <span class="text-outline text-[14px] font-medium">Disimpan sebagai draf</span>
 @endif
 </div>
 </div>
 </div>

 <!-- Image Upload Card -->
 <div class="bg-[#ffffff] p-8 rounded-xl shadow-[0px_10px_30px_0px_rgba(91,70,184,0.08)]">
 <label class="block text-[12px] font-semibold uppercase tracking-wider text-outline mb-4 ml-1">Media Produk</label>
 
 <div class="relative group border-2 border-dashed border-primary-fixed bg-[#f4f2ff] rounded-xl aspect-square flex flex-col items-center justify-center text-center p-8 transition-all hover:bg-[#e6e6ff] cursor-pointer overflow-hidden {{ $product->image ? '!p-0' : '' }}" onclick="document.getElementById('image').click()" id="dropzone">
 
 <div id="image-placeholder" class="flex flex-col items-center pointer-events-none {{ $product->image ? 'hidden' : '' }}">
 <div class="w-16 h-16 bg-[#e6deff]-dim/30 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
 <span class="material-symbols-outlined text-[#432b9f]-container text-4xl" style="font-variation-settings: 'FILL' 0, 'wght' 200;">potted_plant</span>
 </div>
 <h4 class="text-[24px] font-semibold text-[#432b9f]-container mb-2">Unggah Gambar</h4>
 <p class="text-xs text-outline leading-relaxed">
 Tarik dan lepas gambar baru.<br/>JPG atau PNG (Maks 2MB).
 </p>
 <div class="mt-6 px-6 py-2 bg-white rounded-full text-[#432b9f] font-semibold text-sm shadow-sm border border-primary-fixed">
 Pilih File
 </div>
 </div>
 
 <img id="image-preview" src="{{ $product->image ? asset('storage/' . $product->image) : '#' }}" alt="Preview" class="absolute inset-0 w-full h-full object-cover {{ $product->image ? '' : 'hidden' }}">
 <input type="file" name="image" id="image" class="hidden" accept="image/*" onchange="previewImage(this)">
 </div>
 <p class="text-xs text-[#797584] mt-4 text-center">Biarkan kosong jika tidak ingin mengubah gambar produk.</p>
 </div>
 </div>

 <!-- Sticky Bottom Bar -->
 <div class="fixed bottom-0 right-0 left-64 h-24 bg-white/80 backdrop-blur-xl border-t border-[#edecff] px-12 flex items-center justify-between z-40">
 <div class="flex items-center gap-2 text-[#c9c4d5]">
 <span class="material-symbols-outlined text-sm">info</span>
 <span class="text-xs font-medium">Data wajib diisi ditandai dengan bintang (*)</span>
 </div>
 <div class="flex items-center gap-4">
 <a href="{{ route('admin.products.index') }}" class="px-8 h-12 flex items-center justify-center rounded-full font-semibold text-[#432b9f] hover:bg-[#e6e6ff] transition-all active:scale-95">
 Batal
 </a>
 <button type="submit" class="px-10 h-12 bg-[#5b46b8] text-white rounded-full font-bold shadow-lg shadow-[#5b46b8]-container/20 hover:scale-[1.02] transition-all active:scale-95 flex items-center gap-2">
 <span class="material-symbols-outlined text-sm">save</span>
 Perbarui Produk
 </button>
 </div>
 </div>
 </form>
 </div>

 <script>
 function previewImage(input) {
 const preview = document.getElementById('image-preview');
 const placeholder = document.getElementById('image-placeholder');
 const dropzone = document.getElementById('dropzone');
 
 if (input.files && input.files[0]) {
 const reader = new FileReader();
 
 reader.onload = function(e) {
 preview.src = e.target.result;
 preview.classList.remove('hidden');
 placeholder.classList.add('hidden');
 dropzone.classList.remove('p-8');
 }
 
 reader.readAsDataURL(input.files[0]);
 }
 }

 // Status indicator update
 document.getElementById('status').addEventListener('change', function(e) {
 const indicator = document.getElementById('status-indicator');
 if (e.target.value === 'active') {
 indicator.innerHTML = `
 <span class="material-symbols-outlined text-on-tertiary-fixed-variant" style="font-variation-settings: 'FILL' 1;">check_circle</span>
 <span class="text-on-tertiary-fixed-variant text-[14px] font-medium">Siap ditampilkan di toko</span>
 `;
 indicator.className = 'flex items-center gap-3 p-4 bg-[#b3f582]/10 border border-[#b3f582] rounded-xl';
 } else {
 indicator.innerHTML = `
 <span class="material-symbols-outlined text-outline" style="font-variation-settings: 'FILL' 1;">edit_document</span>
 <span class="text-outline text-[14px] font-medium">Disimpan sebagai draf</span>
 `;
 indicator.className = 'flex items-center gap-3 p-4 bg-[#e6e6ff] border border-[#c9c4d5]/30 rounded-xl';
 }
 });
 </script>
</x-app-layout>

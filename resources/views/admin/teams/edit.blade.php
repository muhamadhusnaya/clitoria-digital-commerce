<x-app-layout>
 <style>
 .custom-shadow {
 box-shadow: 0 10px 30px -5px rgba(31, 35, 64, 0.04);
 }
 .input-focus-ring:focus {
 outline: none;
 border-color: #5b46b8;
 box-shadow: 0 0 0 4px rgba(91, 70, 184, 0.1);
 }
 </style>

 <form action="{{ route('admin.teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
 @csrf
 @method('PUT')

 <!-- Breadcrumb/Header -->
 <div class="mb-10 animate-in fade-in slide-in-from-top-4 duration-700">
 <a href="{{ route('admin.teams.index') }}" class="flex items-center gap-2 text-[#432b9f] font-medium hover:gap-3 transition-all duration-200 mb-4 group w-fit">
 <span class="material-symbols-outlined text-lg group-hover:-translate-x-1 transition-transform">arrow_back</span>
 Kembali ke Daftar
 </a>
 <h2 class="text-headline-md text-[32px] font-bold text-[#151936]">Edit Data Anggota</h2>
 <p class="text-[#797584] mt-1">Ubah informasi profesional untuk anggota tim Anda.</p>
 </div>

 @if ($errors->any())
 <div class="mb-6 p-4 bg-[#ffdad6] text-[#ba1a1a] rounded-xl text-[14px] font-medium">
 <ul class="list-disc list-inside space-y-1">
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif

 <!-- Form Layout -->
 <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 pb-32">
 <!-- Left Column: Basic Info -->
 <div class="lg:col-span-8 space-y-6">
 <div class="bg-white p-8 rounded-xl custom-shadow space-y-6 border border-[#c9c4d5]/30">
 <h3 class="text-lg font-bold border-b border-[#c9c4d5]/20 pb-4">Detail Profesional</h3>
 
 <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
 <div class="space-y-2">
 <label class="text-label-md font-semibold text-[#797584] ml-1">Nama Lengkap <span class="text-[#ba1a1a]">*</span></label>
 <input name="name" value="{{ old('name', $team->name) }}" required class="w-full h-[56px] rounded-xl border-none bg-[#f4f2ff] px-5 input-focus-ring text-body-md transition-all placeholder:text-outline/70" placeholder="mis. dr. Julianne Reed" type="text">
 </div>
 <div class="space-y-2">
 <label class="text-label-md font-semibold text-[#797584] ml-1">Posisi/Peran <span class="text-[#ba1a1a]">*</span></label>
 <input name="position" value="{{ old('position', $team->position) }}" required class="w-full h-[56px] rounded-xl border-none bg-[#f4f2ff] px-5 input-focus-ring text-body-md transition-all placeholder:text-outline/70" placeholder="mis. Ahli Botani" type="text">
 </div>
 </div>
 
 <div class="space-y-6 pt-4">
 <h3 class="text-lg font-bold border-b border-[#c9c4d5]/20 pb-4">Profil Media Sosial</h3>
 <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
 <div class="space-y-2">
 <label class="text-label-md font-semibold text-[#797584] ml-1">URL Instagram</label>
 <div class="relative">
 <svg class="absolute left-4 top-1/2 -translate-y-1/2 text-outline w-6 h-6 fill-current" viewBox="0 0 24 24" aria-hidden="true">
 <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
 </svg>
 <input name="instagram" value="{{ old('instagram', $team->instagram) }}" class="w-full h-[56px] rounded-xl border-none bg-[#f4f2ff] pl-12 pr-5 input-focus-ring text-body-md transition-all placeholder:text-outline/70" placeholder="instagram.com/akun" type="url">
 </div>
 </div>
 <div class="space-y-2">
 <label class="text-label-md font-semibold text-[#797584] ml-1">URL LinkedIn</label>
 <div class="relative">
 <svg class="absolute left-4 top-1/2 -translate-y-1/2 text-outline w-6 h-6 fill-current" viewBox="0 0 24 24" aria-hidden="true">
 <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
 </svg>
 <input name="linkedin" value="{{ old('linkedin', $team->linkedin) }}" class="w-full h-[56px] rounded-xl border-none bg-[#f4f2ff] pl-12 pr-5 input-focus-ring text-body-md transition-all placeholder:text-outline/70" placeholder="linkedin.com/in/akun" type="url">
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>

 <!-- Right Column: Profile Media -->
 <div class="lg:col-span-4">
 <div class="bg-white p-8 rounded-xl custom-shadow sticky top-24 border border-[#c9c4d5]/30">
 <h3 class="text-lg font-bold text-center mb-6">Foto Profil</h3>
 <div class="flex flex-col items-center">
 <div class="relative group cursor-pointer" onclick="document.getElementById('photo-upload').click()">
 @if($team->photo)
 <img id="image-preview" src="{{ asset('storage/' . $team->photo) }}" alt="Preview" class="w-48 h-48 rounded-full object-cover border-4 border-[#f4f2ff]">
 <div id="image-placeholder" class="hidden w-48 h-48 rounded-full border-4 border-dashed border-[#c9c4d5]/50 bg-[#edecff] flex flex-col items-center justify-center text-outline group-hover:bg-[#e6deff] transition-all duration-300 overflow-hidden relative">
 <span class="material-symbols-outlined text-5xl mb-2 group-hover:scale-110 transition-transform">add_a_photo</span>
 <p class="text-[12px] font-bold text-center px-4">Unggah Foto</p>
 <div class="absolute inset-0 bg-[#432b9f]/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
 <span class="text-[#432b9f] font-bold text-sm">Pilih File</span>
 </div>
 </div>
 @else
 <div id="image-placeholder" class="w-48 h-48 rounded-full border-4 border-dashed border-[#c9c4d5]/50 bg-[#edecff] flex flex-col items-center justify-center text-outline group-hover:bg-[#e6deff] transition-all duration-300 overflow-hidden relative">
 <span class="material-symbols-outlined text-5xl mb-2 group-hover:scale-110 transition-transform">add_a_photo</span>
 <p class="text-[12px] font-bold text-center px-4">Unggah Foto</p>
 <div class="absolute inset-0 bg-[#432b9f]/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
 <span class="text-[#432b9f] font-bold text-sm">Pilih File</span>
 </div>
 </div>
 <img id="image-preview" src="#" alt="Preview" class="hidden w-48 h-48 rounded-full object-cover border-4 border-[#f4f2ff]">
 @endif
 
 <div class="absolute bottom-2 right-2 bg-[#432b9f] text-[#ffffff] w-10 h-10 rounded-full flex items-center justify-center shadow-lg border-2 border-white pointer-events-none">
 <span class="material-symbols-outlined text-sm">edit</span>
 </div>
 </div>
 <input type="file" name="photo" id="photo-upload" class="hidden" accept="image/*" onchange="previewImage(this)">
 
 <div class="mt-8 space-y-4 w-full">
 <div class="flex items-center justify-between text-[12px] font-medium text-outline">
 <span>Maks: 5MB</span>
 <span>Ideal: 800x800px</span>
 </div>
 <div class="p-4 bg-[#f4f2ff] rounded-xl flex items-start gap-3">
 <span class="material-symbols-outlined text-[#432b9f] text-[18px]">info</span>
 <p class="text-[12px] text-[#797584] leading-relaxed">
 Biarkan kosong jika tidak ingin mengubah foto yang sudah ada. Gunakan foto potret berkualitas tinggi.
 </p>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>

 <!-- Sticky Bottom Action Bar -->
 <footer class="fixed bottom-0 right-0 left-64 h-24 bg-white/90 backdrop-blur-xl border-t border-[#c9c4d5]/20 z-40 px-8 flex items-center justify-end gap-4 shadow-[0_-4px_20px_rgba(0,0,0,0.03)]">
 <a href="{{ route('admin.teams.index') }}" class="px-8 py-3 rounded-full border border-outline text-[#797584] font-semibold hover:bg-[#f4f2ff] transition-all active:scale-95">
 Batal
 </a>
 <button type="submit" class="px-8 py-3 rounded-full bg-[#5b46b8] text-[#ffffff] font-semibold shadow-lg shadow-[#5b46b8]/20 hover:shadow-[#5b46b8]/40 hover:-translate-y-0.5 transition-all active:translate-y-0 active:scale-95 flex items-center gap-2">
 <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">save</span>
 Perbarui Anggota
 </button>
 </footer>
 </form>

 <script>
 // Form focus highlights
 const inputs = document.querySelectorAll('input, textarea');
 inputs.forEach(input => {
 input.addEventListener('focus', () => {
 input.parentElement.querySelector('label')?.classList.add('text-[#432b9f]');
 });
 input.addEventListener('blur', () => {
 input.parentElement.querySelector('label')?.classList.remove('text-[#432b9f]');
 });
 });

 // Image Preview
 function previewImage(input) {
 const preview = document.getElementById('image-preview');
 const placeholder = document.getElementById('image-placeholder');
 
 if (input.files && input.files[0]) {
 const reader = new FileReader();
 
 reader.onload = function(e) {
 preview.src = e.target.result;
 if(preview.classList.contains('hidden')) {
 preview.classList.remove('hidden');
 }
 if(placeholder) {
 placeholder.classList.add('hidden');
 }
 }
 
 reader.readAsDataURL(input.files[0]);
 }
 }
 </script>
</x-app-layout>

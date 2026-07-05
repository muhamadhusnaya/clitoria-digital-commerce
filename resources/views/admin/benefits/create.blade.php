<x-app-layout>
    <div class="max-w-[1000px] mx-auto py-10">
        <div class="flex flex-col gap-6 mb-12">
            <a class="inline-flex items-center gap-2 text-[#432b9f] font-medium group hover:text-[#614cba] transition-colors" href="{{ route('admin.benefits.index') }}">
                <span class="material-symbols-outlined group-hover:-translate-x-1 transition-transform">arrow_back</span>
                Kembali ke Daftar
            </a>
            <h2 class="text-4xl font-bold text-[#151936] tracking-tight">Buat Manfaat Baru</h2>
        </div>

        @if ($errors->any())
            <div class="mb-8 p-4 bg-[#ffdad6] rounded-xl border border-[#ba1a1a]/20">
                <ul class="list-disc list-inside text-[#ba1a1a] text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.benefits.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <div class="md:col-span-7 flex flex-col gap-8">
                    <!-- Title -->
                    <div class="flex flex-col gap-2">
                        <label class="text-[14px] font-medium text-[#484553] ml-1" for="title">Judul Manfaat</label>
                        <input name="title" value="{{ old('title') }}" required class="h-[56px] px-6 rounded-xl border-0 bg-[#f4f2ff] focus:ring-2 focus:ring-[#432b9f] focus:bg-white shadow-sm transition-all duration-300 text-[16px] placeholder:text-[#797584]" id="title" placeholder="cth. Kekuatan Antioksidan Alami" type="text"/>
                    </div>
                    
                    <!-- Status -->
                    <div class="flex flex-col gap-2">
                        <label class="text-[14px] font-medium text-[#484553] ml-1" for="status">Status</label>
                        <select name="status" id="status" class="h-[56px] px-6 rounded-xl border-0 bg-[#f4f2ff] focus:ring-2 focus:ring-[#432b9f] focus:bg-white shadow-sm transition-all duration-300 text-[16px]">
                            <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>

                    <!-- Description -->
                    <div class="flex flex-col gap-2">
                        <label class="text-[14px] font-medium text-[#484553] ml-1" for="description">Subjudul / Deskripsi Singkat</label>
                        <textarea name="description" class="px-6 py-4 rounded-xl border-0 bg-[#f4f2ff] focus:ring-2 focus:ring-[#432b9f] focus:bg-white shadow-sm transition-all duration-300 text-[16px] placeholder:text-[#797584] resize-none" id="description" placeholder="Jelaskan secara singkat manfaat ini untuk pelanggan..." rows="4">{{ old('description') }}</textarea>
                    </div>
                </div>

                <div class="md:col-span-5 flex flex-col gap-2">
                    <label class="text-[14px] font-medium text-[#484553] ml-1">Unggah Ikon (Gambar atau Nama Ikon Material)</label>
                    
                    <!-- Icon Type -->
                    <div class="mb-4">
                        <select name="icon_type" id="icon_type" class="w-full h-[56px] px-6 rounded-xl border-0 bg-[#f4f2ff] focus:ring-2 focus:ring-[#432b9f] focus:bg-white shadow-sm transition-all duration-300 text-[16px]">
                            <option value="material">Ikon Material</option>
                            <option value="image">Unggah Gambar</option>
                        </select>
                    </div>

                    <!-- Material Icon Text -->
                    <div id="material-input-group" class="mb-4">
                        <input name="icon" value="{{ old('icon', 'eco') }}" class="w-full h-[56px] px-6 rounded-xl border-0 bg-[#f4f2ff] focus:ring-2 focus:ring-[#432b9f] focus:bg-white shadow-sm transition-all duration-300 text-[16px]" placeholder="cth. eco, health_and_safety"/>
                    </div>
                    
                    <!-- Image Upload -->
                    <div id="image-upload-group" class="hidden relative group cursor-pointer h-[200px] rounded-xl border-2 border-dashed border-[#c9c4d5] bg-[#f4f2ff] hover:bg-[#e6deff]/50 hover:border-[#432b9f] transition-all duration-300 flex flex-col items-center justify-center text-center p-8 overflow-hidden">
                        <div class="flex flex-col items-center gap-4 transition-transform group-hover:scale-105 duration-300">
                            <div class="w-16 h-16 rounded-full bg-[#e6deff] flex items-center justify-center text-[#432b9f] mb-2">
                                <span class="material-symbols-outlined text-4xl">upload</span>
                            </div>
                            <div>
                                <p class="text-[14px] font-bold text-[#151936]">Klik untuk mengunggah atau seret dan lepas</p>
                            </div>
                        </div>
                        <input name="icon_file" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" type="file"/>
                    </div>

                    <div class="mt-4 p-4 rounded-xl bg-[#b3f582]/10 flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#224c00]">info</span>
                        <p class="text-xs text-[#255100] font-medium">Ikon harus berdesain minimalis dan monokromatik untuk mempertahankan estetika merek premium.</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 pt-6 border-t border-[#c9c4d5]/30 flex items-center justify-end gap-4">
                <a href="{{ route('admin.benefits.index') }}" class="px-8 py-3 rounded-full border border-[#797584] text-[#484553] font-medium hover:bg-[#e6e6ff] hover:border-[#484553] transition-all">
                    Batal
                </a>
                <button type="submit" class="px-10 py-3 rounded-full bg-[#432b9f] text-white font-bold shadow-lg shadow-[#432b9f]/20 hover:scale-[1.02] active:scale-95 transition-all">
                    Simpan Manfaat
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const iconTypeSelect = document.getElementById('icon_type');
            const materialGroup = document.getElementById('material-input-group');
            const imageGroup = document.getElementById('image-upload-group');

            iconTypeSelect.addEventListener('change', (e) => {
                if(e.target.value === 'image') {
                    materialGroup.classList.add('hidden');
                    imageGroup.classList.remove('hidden');
                } else {
                    materialGroup.classList.remove('hidden');
                    imageGroup.classList.add('hidden');
                }
            });
        });
    </script>
</x-app-layout>

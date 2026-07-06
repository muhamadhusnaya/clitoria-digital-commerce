<x-app-layout>
    <!-- Header & Breadcrumbs -->
    <x-slot name="header">
        <div class="flex items-end justify-between">
            <div>
                <h2 class="text-3xl font-semibold text-[#151936]">Pengaturan Hero</h2>
                <p class="text-[16px] text-[#797584] mt-1">Konfigurasi identitas visual utama dan ajakan bertindak dari beranda Anda.</p>
            </div>
            <div class="flex items-center gap-1.5 bg-tertiary-fixed/30 px-2.5 py-1 rounded-full">
                <span class="w-1.5 h-1.5 rounded-full bg-tertiary animate-pulse"></span>
                <span class="text-[10px] font-semibold uppercase tracking-widest text-on-tertiary-fixed-variant">Status: Aktif</span>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        @if (session('success'))
        <div class="mb-6 p-4 bg-[#b3f582] text-[#255100] rounded-xl text-[14px] font-medium">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="mb-6 p-4 bg-[#ffdad6] text-[#ba1a1a] rounded-xl text-[14px] font-medium">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ $hero->exists ? route('admin.heroes.update', $hero->id) : route('admin.heroes.store') }}" method="POST" enctype="multipart/form-data" id="hero-form">
            @csrf
            @if($hero->exists)
                @method('PUT')
            @endif
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Left Column: Hero Content -->
                <div class="lg:col-span-7">
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-[#c9c4d5]/30">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="w-10 h-10 rounded-lg bg-[#5b46b8]/10 flex items-center justify-center text-[#5b46b8]">
                                <span class="material-symbols-outlined">edit_note</span>
                            </div>
                            <h3 class="text-[24px] font-semibold text-[#151936]">Konten Hero</h3>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- Title Field -->
                            <div class="space-y-2">
                                <label class="block text-[14px] font-medium text-[#484553] px-1" for="title">Judul</label>
                                <input id="title" name="title" type="text" value="{{ old('title', $hero->title) }}" required
                                       class="w-full h-[56px] px-4 bg-[#f4f2ff] rounded-xl border-none focus:ring-2 focus:ring-[#432b9f]/20 text-[16px] text-[#151936] transition-all outline-none" />
                            </div>
                            
                            <!-- Subtitle Field -->
                            <div class="space-y-2">
                                <label class="block text-[14px] font-medium text-[#484553] px-1" for="subtitle">Subjudul</label>
                                <textarea id="subtitle" name="subtitle" rows="4" required
                                          class="w-full p-4 bg-[#f4f2ff] rounded-xl border-none focus:ring-2 focus:ring-[#432b9f]/20 text-[16px] text-[#151936] transition-all outline-none resize-none">{{ old('subtitle', $hero->subtitle) }}</textarea>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-6">
                                <!-- Button Text -->
                                <div class="space-y-2">
                                    <label class="block text-[14px] font-medium text-[#484553] px-1" for="button_text">Teks Tombol Utama</label>
                                    <input id="button_text" name="button_text" type="text" value="{{ old('button_text', $hero->button_text) }}"
                                           class="w-full h-[56px] px-4 bg-[#f4f2ff] rounded-xl border-none focus:ring-2 focus:ring-[#432b9f]/20 text-[16px] text-[#151936] transition-all outline-none" />
                                </div>
                                <!-- Button Link -->
                                <div class="space-y-2">
                                    <label class="block text-[14px] font-medium text-[#484553] px-1" for="button_link">Tautan Tombol Utama</label>
                                    <input id="button_link" name="button_link" type="text" value="{{ old('button_link', $hero->button_link) }}"
                                           class="w-full h-[56px] px-4 bg-[#f4f2ff] rounded-xl border-none focus:ring-2 focus:ring-[#432b9f]/20 text-[16px] text-[#151936] transition-all outline-none" />
                                </div>
                                <!-- Secondary Button Text -->
                                <div class="space-y-2">
                                    <label class="block text-[14px] font-medium text-[#484553] px-1" for="secondary_button_text">Teks Tombol Kedua (Opsional)</label>
                                    <input id="secondary_button_text" name="secondary_button_text" type="text" value="{{ old('secondary_button_text', $hero->secondary_button_text) }}"
                                           class="w-full h-[56px] px-4 bg-[#f4f2ff] rounded-xl border-none focus:ring-2 focus:ring-[#432b9f]/20 text-[16px] text-[#151936] transition-all outline-none" />
                                </div>
                                <!-- Secondary Button Link -->
                                <div class="space-y-2">
                                    <label class="block text-[14px] font-medium text-[#484553] px-1" for="secondary_button_link">Tautan Tombol Kedua (Opsional)</label>
                                    <input id="secondary_button_link" name="secondary_button_link" type="text" value="{{ old('secondary_button_link', $hero->secondary_button_link) }}"
                                           class="w-full h-[56px] px-4 bg-[#f4f2ff] rounded-xl border-none focus:ring-2 focus:ring-[#432b9f]/20 text-[16px] text-[#151936] transition-all outline-none" />
                                </div>
                            </div>
                            
                            <div class="p-4 bg-[#e6deff]/50 rounded-xl flex items-start gap-3 mt-4">
                                <span class="material-symbols-outlined text-[#432b9f]">info</span>
                                <p class="text-[14px] text-[#4931a1]">Perubahan ini akan memperbarui bagian hero beranda secara waktu-nyata setelah disimpan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Hero Visual -->
                <div class="lg:col-span-5">
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-[#c9c4d5]/30 h-full flex flex-col">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="w-10 h-10 rounded-lg bg-[#5b46b8]/10 flex items-center justify-center text-[#5b46b8]">
                                <span class="material-symbols-outlined">image</span>
                            </div>
                            <h3 class="text-[24px] font-semibold text-[#151936]">Visual Hero</h3>
                        </div>
                        
                        <!-- Dropzone -->
                        <div class="flex-1 flex flex-col">
                            <div class="relative group cursor-pointer border-2 border-dashed border-[#c9c4d5] rounded-xl overflow-hidden hover:border-[#432b9f] transition-colors flex-1 flex flex-col">
                                <input name="image" class="absolute inset-0 opacity-0 cursor-pointer z-10" type="file" id="image-upload" accept="image/*"/>
                                
                                <div class="flex-1 min-h-[320px] bg-[#f4f2ff] flex flex-col items-center justify-center p-6 text-center">
                                    <div class="mb-4 w-16 h-16 rounded-full bg-white flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                        <span class="material-symbols-outlined text-[#432b9f] text-3xl">cloud_upload</span>
                                    </div>
                                    <p class="font-bold text-[#151936]">Klik untuk mengunggah atau seret dan lepas</p>
                                    <p class="text-[14px] text-[#797584] mt-1">Rekomendasi: 1920x1080px (PNG, WebP)</p>
                                </div>
                                
                                <!-- Current/New Image Preview -->
                                <div class="absolute inset-0 z-0 bg-[#f4f2ff]" id="image-preview-container" style="display: {{ $hero->image ? 'block' : 'none' }}">
                                    <img id="image-preview" class="w-full h-full object-cover" src="{{ $hero->image ? Storage::url($hero->image) : '' }}" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-4">
                                        <div class="flex items-center gap-2 text-white bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-[12px] font-bold tracking-wider uppercase">
                                            <span class="material-symbols-outlined text-[14px]">check_circle</span>
                                            <span id="preview-text">Pratinjau Gambar Saat Ini</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Action Bar -->
            <div class="fixed bottom-0 right-0 left-64 h-24 bg-white/90 backdrop-blur-xl border-t border-[#c9c4d5]/30 flex items-center justify-end px-8 z-40">
                <div class="flex items-center gap-4">
                    <a href="{{ route('admin.heroes.index') }}" class="px-8 h-12 flex items-center rounded-full border border-[#797584] text-[#484553] font-bold hover:bg-[#f4f2ff] transition-all active:scale-95">
                        Batal
                    </a>
                    <button type="submit" class="px-10 h-12 rounded-full bg-[#5b46b8] text-white font-bold shadow-lg shadow-[#5b46b8]/20 hover:scale-[1.02] active:scale-95 transition-all flex items-center gap-2" id="save-btn">
                        <span class="material-symbols-outlined">save</span>
                        Simpan Pengaturan
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const imageUpload = document.getElementById('image-upload');
            const previewContainer = document.getElementById('image-preview-container');
            const previewImage = document.getElementById('image-preview');
            const previewText = document.getElementById('preview-text');

            imageUpload.addEventListener('change', function(e) {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        previewContainer.style.display = 'block';
                        previewText.textContent = 'New Image Preview';
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });

            // Form submission feedback
            document.getElementById('hero-form').addEventListener('submit', (e) => {
                const btn = document.getElementById('save-btn');
                btn.innerHTML = `<span class="material-symbols-outlined animate-spin">sync</span> Menyimpan...`;
                btn.classList.add('opacity-80', 'cursor-not-allowed');
            });
        });
    </script>
</x-app-layout>

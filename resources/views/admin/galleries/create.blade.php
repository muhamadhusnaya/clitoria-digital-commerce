<x-app-layout>
    <!-- Header -->
    <x-slot name="header">
        <div class="flex items-center gap-6">
            <a href="{{ route('admin.galleries.index') }}" class="group flex items-center gap-2 text-[#432b9f] hover:translate-x-[-4px] transition-transform duration-200">
                <span class="material-symbols-outlined font-bold">arrow_back</span>
                <span class="text-[14px] font-medium">Kembali ke Daftar</span>
            </a>
            <h2 class="text-3xl font-semibold text-[#151936]">Unggah Galeri Baru</h2>
        </div>
    </x-slot>

    <!-- Form Content -->
    <div class="py-6">
        <form class="grid grid-cols-12 gap-6 items-start" id="gallery-form"
              action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
            <div class="col-span-12 p-4 bg-[#ffdad6] text-[#ba1a1a] rounded-xl text-[14px] font-medium">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Left Column: Metadata -->
            <section class="col-span-12 lg:col-span-5 space-y-8">
                <div class="p-8 bg-white rounded-lg shadow-sm border border-[#c9c4d5]/30 space-y-8">
                    <h3 class="text-[24px] font-semibold text-[#484553] flex items-center gap-2">
                        <span class="material-symbols-outlined text-[#432b9f]">edit_note</span>
                        Detail Galeri
                    </h3>
                    <!-- Gallery Title -->
                    <div class="space-y-2">
                        <label class="block text-[14px] font-medium text-[#484553] px-1" for="title">Judul Galeri</label>
                        <input id="title" name="title" value="{{ old('title') }}" required
                               class="w-full h-[56px] px-6 rounded-xl bg-[#f4f2ff] border-none focus:ring-2 focus:ring-[#432b9f]/50 transition-all text-[16px] text-[#151936] placeholder:text-[#c9c4d5]"
                               placeholder="cth. Infus Panen Musim Panas" type="text"/>
                    </div>
                    <!-- Description -->
                    <div class="space-y-2">
                        <label class="block text-[14px] font-medium text-[#484553] px-1" for="description">Deskripsi</label>
                        <textarea id="description" name="description" rows="6"
                                  class="w-full p-6 rounded-xl bg-[#f4f2ff] border-none focus:ring-2 focus:ring-[#432b9f]/50 transition-all text-[16px] text-[#151936] placeholder:text-[#c9c4d5] resize-none"
                                  placeholder="Ceritakan kisah di balik koleksi galeri ini...">{{ old('description') }}</textarea>
                    </div>
                    <!-- Status Dropdown -->
                    <div class="space-y-2">
                        <label class="block text-[14px] font-medium text-[#484553] px-1" for="is_published">Status Publikasi</label>
                        <div class="relative">
                            <select id="is_published" name="is_published"
                                    class="w-full h-[56px] px-6 rounded-xl bg-[#f4f2ff] border-none focus:ring-2 focus:ring-[#432b9f]/50 transition-all text-[16px] text-[#151936] appearance-none cursor-pointer">
                                <option value="0" {{ old('is_published') == '0' ? 'selected' : '' }}>Draf</option>
                                <option value="1" {{ old('is_published', '1') == '1' ? 'selected' : '' }}>Dipublikasi</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-[#797584]">expand_more</span>
                        </div>
                    </div>
                </div>
                <!-- Organic Certification Badge -->
                <div class="flex items-center gap-3 p-4 bg-[#224c00]/5 rounded-xl border border-[#224c00]/10">
                    <span class="material-symbols-outlined text-[#224c00]" style="font-variation-settings: 'FILL' 1;">eco</span>
                    <p class="text-[14px] font-medium text-[#224c00]">Semua aset dalam galeri ini akan secara otomatis ditandai dengan 'Bersertifikat Organik'.</p>
                </div>
            </section>

            <!-- Right Column: Media -->
            <section class="col-span-12 lg:col-span-7">
                <div class="p-8 bg-white rounded-lg shadow-sm border border-[#c9c4d5]/30">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-[24px] font-semibold text-[#484553] flex items-center gap-2">
                            <span class="material-symbols-outlined text-[#432b9f]">image</span>
                            Unggah Media
                        </h3>
                        <span class="px-3 py-1 bg-[#432b9f]/10 text-[#432b9f] rounded-full text-[12px] font-bold">UNGGAH TUNGGAL (MVP)</span>
                    </div>
                    <!-- Hidden file input -->
                    <input type="file" name="image" id="file-input" accept="image/*" class="hidden" required />
                    <!-- Dropzone -->
                    <div class="border-2 border-dashed border-[#432b9f]/30 bg-[#fbf8ff] min-h-[420px] rounded-lg flex flex-col items-center justify-center p-12 group hover:bg-[#5b46b8]/5 transition-all cursor-pointer" id="dropzone">
                        <div class="w-20 h-20 rounded-full bg-[#e6deff] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-[#432b9f] text-[40px]">cloud_upload</span>
                        </div>
                        <h4 class="text-[24px] font-semibold text-[#151936] mb-2">Klik untuk mengunggah atau seret dan lepas</h4>
                        <p class="text-[16px] text-[#484553] text-center max-w-sm">
                            Fotografi botani resolusi tinggi. Mendukung JPG, PNG, WEBP (Maks 2MB).
                        </p>
                        <!-- Preview (hidden initially) -->
                        <div class="mt-10 w-full max-w-md hidden" id="preview-container">
                            <div class="aspect-[4/3] bg-[#e6e6ff] rounded-lg flex items-center justify-center overflow-hidden">
                                <img id="preview-image" src="#" alt="Pratinjau" class="w-full h-full object-cover" />
                            </div>
                        </div>
                    </div>
                    <!-- Preview Hint -->
                    <div class="mt-8 pt-8 border-t border-[#c9c4d5]/30">
                        <div class="flex items-center gap-4 text-[#484553]">
                            <span class="material-symbols-outlined">info</span>
                            <p class="text-[16px]">Gambar yang diunggah akan otomatis dioptimalkan dengan efek infus blur latar 20px untuk pratinjau toko.</p>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <!-- Sticky Action Bar -->
    <footer class="fixed bottom-0 md:left-64 left-0 right-0 h-24 bg-white/90 backdrop-blur-2xl border-t border-[#c9c4d5]/30 z-40">
        <div class="h-full flex items-center justify-end gap-6 px-6 max-w-[1280px] mx-auto w-full">
            <a href="{{ route('admin.galleries.index') }}"
               class="px-8 py-3 rounded-full text-[14px] font-medium text-[#484553] hover:bg-[#f4f2ff] transition-colors border border-[#c9c4d5]">
                Batal
            </a>
            <button class="px-10 py-4 rounded-full text-[14px] font-medium bg-[#5b46b8] text-white shadow-lg shadow-[#5b46b8]/20 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center gap-3"
                    form="gallery-form" type="submit" id="save-btn">
                <span class="material-symbols-outlined">save</span>
                Simpan Galeri
            </button>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropzone = document.getElementById('dropzone');
            const fileInput = document.getElementById('file-input');
            const previewContainer = document.getElementById('preview-container');
            const previewImage = document.getElementById('preview-image');

            dropzone.addEventListener('dragover', (e) => {
                e.preventDefault();
                dropzone.classList.add('bg-[#5b46b8]/5');
            });

            dropzone.addEventListener('dragleave', () => {
                dropzone.classList.remove('bg-[#5b46b8]/5');
            });

            dropzone.addEventListener('drop', (e) => {
                e.preventDefault();
                dropzone.classList.remove('bg-[#5b46b8]/5');
                handleFiles(e.dataTransfer.files);
            });

            dropzone.addEventListener('click', () => {
                fileInput.click();
            });

            fileInput.addEventListener('change', () => {
                handleFiles(fileInput.files);
            });

            function handleFiles(files) {
                if (!files || files.length === 0) return;
                const file = files[0];
                if (!file.type.startsWith('image/')) return;
                
                // Also update the input if it came from drag and drop
                if (fileInput.files !== files) {
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    fileInput.files = dataTransfer.files;
                }

                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }

            // Form submission feedback
            document.getElementById('gallery-form').addEventListener('submit', (e) => {
                if (!fileInput.files || fileInput.files.length === 0) {
                    e.preventDefault();
                    alert('Silakan pilih gambar untuk diunggah.');
                    return;
                }
                const btn = document.getElementById('save-btn');
                btn.innerHTML = `<span class="material-symbols-outlined animate-spin">sync</span> Menyimpan...`;
                btn.classList.add('opacity-80');
            });
        });
    </script>
</x-app-layout>

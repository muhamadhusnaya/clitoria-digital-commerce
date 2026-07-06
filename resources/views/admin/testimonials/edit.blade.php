<x-app-layout>
    <style>
        .star-active {
            font-variation-settings: 'FILL' 1;
            color: #FFB800;
        }
    </style>

    <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <!-- Breadcrumbs & Header -->
        <div class="mb-10 flex flex-col items-start gap-4">
            <a href="{{ route('admin.testimonials.index') }}" class="flex items-center text-primary font-semibold hover:translate-x-[-4px] transition-transform duration-200 group text-[14px]">
                <span class="material-symbols-outlined mr-2 group-hover:mr-3 transition-all text-[18px]">arrow_back</span>
                Kembali ke Daftar
            </a>
            <h2 class="font-headline-md text-[32px] font-bold text-on-surface">Edit Testimoni</h2>
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

        <!-- Form Content Grid -->
        <div class="grid grid-cols-12 gap-6">
            <!-- Left Column: Main Form -->
            <div class="col-span-12 lg:col-span-8">
                <section class="bg-surface-container-lowest rounded-xl p-8 shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] border border-outline-variant/30">
                    <div class="grid grid-cols-2 gap-6">
                        
                        <div class="col-span-2 md:col-span-1">
                            <label class="block font-medium text-[14px] text-on-surface-variant mb-2">Nama Pelanggan <span class="text-error">*</span></label>
                            <input name="name" value="{{ old('name', $testimonial->name) }}" required class="w-full h-[56px] rounded-xl border-outline-variant bg-surface-container-low px-4 text-on-surface focus:ring-2 focus:ring-primary transition-all placeholder:text-outline text-[16px]" placeholder="Sarah Jenkins" type="text">
                        </div>
                        
                        <div class="col-span-2 md:col-span-1">
                            <label class="block font-medium text-[14px] text-on-surface-variant mb-2">Pekerjaan/Peran</label>
                            <input name="role" value="{{ old('role', $testimonial->role) }}" class="w-full h-[56px] rounded-xl border-outline-variant bg-surface-container-low px-4 text-on-surface focus:ring-2 focus:ring-primary transition-all placeholder:text-outline text-[16px]" placeholder="Wellness Coach" type="text">
                        </div>
                        
                        <div class="col-span-2">
                            <label class="block font-medium text-[14px] text-on-surface-variant mb-2">Perusahaan (Opsional)</label>
                            <input name="company" value="{{ old('company', $testimonial->company) }}" class="w-full h-[56px] rounded-xl border-outline-variant bg-surface-container-low px-4 text-on-surface focus:ring-2 focus:ring-primary transition-all placeholder:text-outline text-[16px]" placeholder="Mis. Google, Meta" type="text">
                        </div>
                        
                        <div class="col-span-2">
                            <label class="block font-medium text-[14px] text-on-surface-variant mb-2">Rating</label>
                            <div class="flex items-center space-x-2 bg-surface-container-low h-[56px] px-4 rounded-xl w-fit border border-outline-variant/50">
                                <span class="material-symbols-outlined star-active cursor-pointer text-[24px]">star</span>
                                <span class="material-symbols-outlined star-active cursor-pointer text-[24px]">star</span>
                                <span class="material-symbols-outlined star-active cursor-pointer text-[24px]">star</span>
                                <span class="material-symbols-outlined star-active cursor-pointer text-[24px]">star</span>
                                <span class="material-symbols-outlined star-active cursor-pointer text-[24px]">star</span>
                                <input type="hidden" name="rating" id="rating-input" value="{{ old('rating', $testimonial->rating) }}">
                                <span class="ml-4 text-[14px] font-semibold text-on-surface-variant" id="rating-text">{{ old('rating', $testimonial->rating) }}.0 / 5.0</span>
                            </div>
                        </div>
                        
                        <div class="col-span-2">
                            <label class="block font-medium text-[14px] text-on-surface-variant mb-2">Ulasan <span class="text-error">*</span></label>
                            <textarea name="content" required class="w-full rounded-xl border-outline-variant bg-surface-container-low p-4 text-on-surface focus:ring-2 focus:ring-primary transition-all placeholder:text-outline resize-none text-[16px]" placeholder="Tulis ulasan pelanggan di sini..." rows="6">{{ old('content', $testimonial->content) }}</textarea>
                        </div>
                        
                        <div class="col-span-2 pt-4">
                            <div class="flex items-center justify-between p-4 bg-primary-fixed/30 rounded-xl border border-primary-fixed">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
                                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-on-surface text-[14px]">Testimoni Unggulan</p>
                                        <p class="text-[12px] text-on-surface-variant">Tampilkan ulasan ini di beranda</p>
                                    </div>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="hidden" name="status" value="draft">
                                    <input type="checkbox" name="status" value="active" class="sr-only peer" {{ old('status', $testimonial->status) == 'published' ? 'checked' : '' }}>
                                    <div class="w-14 h-7 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[4px] after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-6 after:transition-all peer-checked:bg-primary"></div>
                                </label>
                            </div>
                        </div>
                        
                    </div>
                </section>
            </div>
            
            <!-- Right Column: Profile Media -->
            <div class="col-span-12 lg:col-span-4 space-y-6">
                <section class="bg-surface-container-lowest rounded-xl p-8 shadow-[0_10px_30px_-5px_rgba(31,35,64,0.04)] border border-outline-variant/30">
                    <label class="block font-medium text-[14px] text-on-surface-variant mb-6">Foto Pelanggan</label>
                    
                    <div class="relative group cursor-pointer border-2 border-dashed border-outline-variant rounded-xl p-10 flex flex-col items-center justify-center space-y-6 hover:border-primary transition-colors bg-surface-container-low/50 overflow-hidden" onclick="document.getElementById('image-upload').click()">
                        @if($testimonial->image)
                            <img id="image-preview" src="{{ asset('storage/' . $testimonial->image) }}" alt="Preview" class="absolute inset-0 w-full h-full object-cover rounded-xl">
                            <div id="image-placeholder" class="hidden flex flex-col items-center justify-center pointer-events-none space-y-6">
                                <div class="w-32 h-32 rounded-full bg-surface-container-highest flex items-center justify-center text-outline group-hover:text-primary group-hover:bg-primary-fixed transition-all shadow-inner overflow-hidden">
                                    <span class="material-symbols-outlined text-6xl">account_circle</span>
                                </div>
                                <div class="text-center">
                                    <p class="font-semibold text-on-surface text-[14px]">Klik untuk mengunggah</p>
                                    <p class="text-[12px] text-on-surface-variant mt-1">SVG, PNG, JPG (maks. 2MB)</p>
                                </div>
                            </div>
                        @else
                            <div id="image-placeholder" class="flex flex-col items-center justify-center pointer-events-none space-y-6">
                                <div class="w-32 h-32 rounded-full bg-surface-container-highest flex items-center justify-center text-outline group-hover:text-primary group-hover:bg-primary-fixed transition-all shadow-inner overflow-hidden">
                                    <span class="material-symbols-outlined text-6xl">account_circle</span>
                                </div>
                                <div class="text-center">
                                    <p class="font-semibold text-on-surface text-[14px]">Klik untuk mengunggah</p>
                                    <p class="text-[12px] text-on-surface-variant mt-1">SVG, PNG, JPG (maks. 2MB)</p>
                                </div>
                            </div>
                            <img id="image-preview" src="#" alt="Preview" class="hidden absolute inset-0 w-full h-full object-cover rounded-xl">
                        @endif
                        
                        <div class="absolute inset-0 bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="bg-primary text-on-primary px-4 py-2 rounded-full text-xs font-bold shadow-lg scale-90 group-hover:scale-100 transition-transform">PILIH FILE</div>
                        </div>
                    </div>
                    <input type="file" name="image" id="image-upload" class="hidden" accept="image/*" onchange="previewImage(this)">
                    
                    <div class="mt-10 p-6 rounded-xl bg-surface-bright border border-outline-variant/30 flex items-start space-x-4">
                        <span class="material-symbols-outlined text-secondary">info</span>
                        <div>
                            <h4 class="text-[14px] font-bold text-on-surface">Tips Foto</h4>
                            <p class="text-[12px] text-on-surface-variant leading-relaxed mt-1">Biarkan kosong jika tidak ingin mengubah foto yang sudah ada. Rasio ideal 1:1.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Sticky Bottom Action Bar -->
        <footer class="fixed bottom-0 right-0 left-64 bg-surface/90 backdrop-blur-xl border-t border-outline-variant/30 py-4 px-12 z-30 shadow-[0_-10px_30px_rgba(0,0,0,0.02)]">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 text-on-surface-variant">
                    <span class="material-symbols-outlined text-[18px]">info</span>
                    <span class="text-[12px] font-medium">Jangan lupa menyimpan perubahan.</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('admin.testimonials.index') }}" class="px-8 py-3 rounded-xl font-bold text-on-surface-variant hover:bg-surface-container-high transition-colors text-[14px]">
                        Batal
                    </a>
                    <button type="submit" class="bg-primary text-on-primary px-10 py-3 rounded-xl font-bold shadow-lg hover:shadow-primary/20 hover:scale-[1.02] transition-all active:scale-95 flex items-center space-x-2 text-[14px]">
                        <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">save</span>
                        <span>Perbarui Testimoni</span>
                    </button>
                </div>
            </div>
        </footer>
    </form>

    <script>
        // Micro-interactions for Star Rating
        const ratingInput = document.getElementById('rating-input');
        
        // Setup initial stars based on old input
        const initialRating = parseInt(ratingInput.value) || 5;
        const initialStars = document.querySelectorAll('.material-symbols-outlined.cursor-pointer');
        const initialText = document.getElementById('rating-text');
        
        if (initialStars.length > 0) {
            initialStars.forEach((s, i) => {
                if (i < initialRating) {
                    s.classList.add('star-active');
                    s.classList.remove('text-outline');
                    s.style.fontVariationSettings = "'FILL' 1";
                    s.style.color = "#FFB800";
                } else {
                    s.classList.remove('star-active');
                    s.classList.add('text-outline');
                    s.style.fontVariationSettings = "'FILL' 0";
                    s.style.color = "";
                }
            });
            if(initialText) initialText.textContent = initialRating.toFixed(1) + ' / 5.0';
        }

        document.querySelectorAll('.material-symbols-outlined.cursor-pointer').forEach((star, index) => {
            star.addEventListener('click', function() {
                const container = this.parentElement;
                const stars = container.querySelectorAll('.material-symbols-outlined.cursor-pointer');
                const text = container.querySelector('#rating-text');
                const value = index + 1;
                
                if (ratingInput) ratingInput.value = value;
                
                stars.forEach((s, i) => {
                    if (i <= index) {
                        s.classList.add('star-active');
                        s.classList.remove('text-outline');
                        s.style.fontVariationSettings = "'FILL' 1";
                        s.style.color = "#FFB800";
                    } else {
                        s.classList.remove('star-active');
                        s.classList.add('text-outline');
                        s.style.fontVariationSettings = "'FILL' 0";
                        s.style.color = "";
                    }
                });
                
                text.textContent = value.toFixed(1) + ' / 5.0';
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

<x-app-layout>
    <style>
        .glass-card { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(20px); border: 1px solid rgba(224, 224, 255, 0.5); }
        .input-focus-effect:focus-within { border-color: #432b9f; box-shadow: 0 0 0 4px rgba(67, 43, 159, 0.1); }
    </style>

    <div class="pb-32">
        <!-- Header -->
        <header class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
            <div class="flex flex-col">
                <nav class="flex gap-2 text-[14px] font-medium text-on-surface-variant/60 mb-2">
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-primary transition-colors">Admin</a>
                    <span>/</span>
                    <span class="text-primary font-bold">Umum & SEO</span>
                </nav>
                <h2 class="font-headline-md text-[32px] font-bold text-on-surface tracking-tight">Pengaturan</h2>
            </div>
        </header>

        @if (session('success'))
            <div class="mb-6 bg-tertiary-container text-on-tertiary-container p-4 rounded-xl border border-tertiary-fixed font-medium text-[14px] flex items-center gap-2">
                <span class="material-symbols-outlined">check_circle</span>
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 bg-[#FFDAD6] text-error p-4 rounded-xl shadow-sm">
                <ul class="list-disc pl-5 font-medium text-[14px]">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mt-4">
            
            <!-- Business Identity Column -->
            <section class="space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">business_center</span>
                    </div>
                    <h3 class="font-headline-sm text-[24px] font-bold text-on-surface">Identitas Bisnis</h3>
                </div>
                
                <form action="{{ route('admin.settings.update') }}" method="POST" class="glass-card rounded-xl p-8 shadow-[0_10px_30px_rgba(31,35,64,0.04)] space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <!-- WhatsApp -->
                    <div class="relative mt-2">
                        <label class="absolute -top-2 left-4 bg-white px-2 text-[12px] font-bold tracking-widest uppercase text-primary z-10">Nomor WhatsApp</label>
                        <div class="flex items-center border border-outline-variant rounded-xl px-4 py-2 input-focus-effect bg-white/50 transition-all">
                            <span class="material-symbols-outlined text-on-surface-variant mr-3">call</span>
                            <span class="text-on-surface-variant font-medium mr-1">+62</span>
                            <input name="whatsapp_number" class="w-full bg-transparent border-none focus:ring-0 text-[16px] text-on-surface outline-none" placeholder="81234567890" type="tel" value="{{ old('whatsapp_number', get_setting('whatsapp_number')) }}">
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="relative mt-4">
                        <label class="absolute -top-2 left-4 bg-white px-2 text-[12px] font-bold tracking-widest uppercase text-primary z-10">Email Bisnis</label>
                        <div class="flex items-center border border-outline-variant rounded-xl px-4 py-2 input-focus-effect bg-white/50 transition-all">
                            <span class="material-symbols-outlined text-on-surface-variant mr-3">mail</span>
                            <input name="business_email" class="w-full bg-transparent border-none focus:ring-0 text-[16px] text-on-surface outline-none" placeholder="halo@clitoria.com" type="email" value="{{ old('business_email', get_setting('business_email')) }}">
                        </div>
                    </div>
                    
                    <!-- Instagram -->
                    <div class="relative mt-4">
                        <label class="absolute -top-2 left-4 bg-white px-2 text-[12px] font-bold tracking-widest uppercase text-primary z-10">URL Instagram</label>
                        <div class="flex items-center border border-outline-variant rounded-xl px-4 py-2 input-focus-effect bg-white/50 transition-all">
                            <span class="material-symbols-outlined text-on-surface-variant mr-3">camera_alt</span>
                            <span class="text-on-surface-variant font-medium mr-1">https://</span>
                            <input name="instagram_url" class="w-full bg-transparent border-none focus:ring-0 text-[16px] text-on-surface outline-none" placeholder="instagram.com/clitoria" type="text" value="{{ old('instagram_url', str_replace('https://', '', get_setting('instagram_url'))) }}">
                        </div>
                    </div>
                    
                    <!-- Address -->
                    <div class="relative mt-4">
                        <label class="absolute -top-2 left-4 bg-white px-2 text-[12px] font-bold tracking-widest uppercase text-primary z-10">Alamat Fisik</label>
                        <div class="flex items-start border border-outline-variant rounded-xl px-4 py-4 input-focus-effect bg-white/50 transition-all">
                            <span class="material-symbols-outlined text-on-surface-variant mr-3 mt-1">location_on</span>
                            <textarea name="address" class="w-full bg-transparent border-none focus:ring-0 text-[16px] text-on-surface resize-none outline-none" placeholder="Masukkan alamat lengkap" rows="3">{{ old('address', get_setting('address')) }}</textarea>
                        </div>
                    </div>

                    <!-- Google Maps Embed -->
                    <div class="relative mt-4">
                        <label class="absolute -top-2 left-4 bg-white px-2 text-[12px] font-bold tracking-widest uppercase text-primary z-10">Google Maps Embed (HTML)</label>
                        <div class="flex items-start border border-outline-variant rounded-xl px-4 py-4 input-focus-effect bg-white/50 transition-all">
                            <span class="material-symbols-outlined text-on-surface-variant mr-3 mt-1">code</span>
                            <textarea name="google_maps_embed" class="w-full bg-transparent border-none focus:ring-0 text-[14px] font-mono text-on-surface-variant resize-none outline-none" placeholder="<iframe src='...'></iframe>" rows="4">{{ old('google_maps_embed', get_setting('google_maps_embed')) }}</textarea>
                        </div>
                        <p class="text-[12px] text-on-surface-variant mt-2 pl-2">Tempel kode iframe HTML yang dihasilkan oleh Google Maps.</p>
                    </div>

                    <div class="flex justify-end pt-4 border-t border-outline-variant/30 mt-6">
                        <button type="submit" class="px-8 py-3 rounded-full bg-primary text-white font-bold shadow-lg shadow-primary/20 hover:shadow-primary/40 hover:-translate-y-0.5 transition-all active:scale-[0.98] text-[14px] flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">save</span> Simpan Profil
                        </button>
                    </div>
                </form>
            </section>

            <!-- SEO & Social Column -->
            <section class="space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-tertiary-fixed flex items-center justify-center text-tertiary">
                        <span class="material-symbols-outlined">language</span>
                    </div>
                    <h3 class="font-headline-sm text-[24px] font-bold text-on-surface">Visibilitas SEO & Sosial</h3>
                </div>
                
                <form action="{{ route('admin.settings.seo.update') }}" method="POST" enctype="multipart/form-data" class="glass-card rounded-xl p-8 shadow-[0_10px_30px_rgba(31,35,64,0.04)] space-y-6" x-data="seoForm()">
                    @csrf
                    @method('PUT')
                    
                    <!-- Meta Title -->
                    <div class="relative mt-2">
                        <div class="flex justify-between items-center mb-1 px-1">
                            <label class="text-[12px] font-bold tracking-widest uppercase text-primary absolute -top-2 left-4 bg-white px-2 z-10">Meta Judul</label>
                            <span class="text-[10px] font-bold text-on-surface-variant/40 absolute -top-1 right-2" :class="{'text-error': metaTitle.length > 60}" x-text="`${metaTitle.length} / 60`"></span>
                        </div>
                        <div class="flex items-center border border-outline-variant rounded-xl px-4 py-3 input-focus-effect bg-white/50 transition-all mt-3">
                            <input name="seo_meta_title" x-model="metaTitle" class="w-full bg-transparent border-none focus:ring-0 text-[16px] text-on-surface outline-none" type="text" placeholder="Clitoria | Teh Bunga Telang Premium">
                        </div>
                    </div>
                    
                    <!-- Meta Description -->
                    <div class="relative mt-5">
                        <div class="flex justify-between items-center mb-1 px-1">
                            <label class="text-[12px] font-bold tracking-widest uppercase text-primary absolute -top-2 left-4 bg-white px-2 z-10">Meta Deskripsi</label>
                            <span class="text-[10px] font-bold text-on-surface-variant/40 absolute -top-1 right-2" :class="{'text-error': metaDesc.length > 160}" x-text="`${metaDesc.length} / 160`"></span>
                        </div>
                        <div class="flex items-start border border-outline-variant rounded-xl px-4 py-3 input-focus-effect bg-white/50 transition-all mt-3">
                            <textarea name="seo_meta_description" x-model="metaDesc" class="w-full bg-transparent border-none focus:ring-0 text-[16px] text-on-surface resize-none outline-none" rows="3" placeholder="Deskripsi singkat mengenai situs Anda..."></textarea>
                        </div>
                    </div>
                    
                    <!-- Meta Keywords -->
                    <div class="relative mt-5">
                        <label class="absolute -top-2 left-4 bg-white px-2 text-[12px] font-bold tracking-widest uppercase text-primary z-10">Meta Kata Kunci</label>
                        <div class="flex items-center border border-outline-variant rounded-xl px-4 py-3 input-focus-effect bg-white/50 transition-all">
                            <input name="seo_meta_keywords" class="w-full bg-transparent border-none focus:ring-0 text-[16px] text-on-surface outline-none" type="text" value="{{ old('seo_meta_keywords', get_setting('seo_meta_keywords')) }}" placeholder="teh, bunga telang, clitoria, organik (pisahkan dengan koma)">
                        </div>
                    </div>
                    
                    <!-- Open Graph Image -->
                    <div class="relative mt-6">
                        <label class="text-[12px] font-bold tracking-widest uppercase text-primary block mb-3 px-1">Pratinjau Berbagi Sosial (Open Graph)</label>
                        
                        <div class="border-2 border-dashed border-outline-variant rounded-xl p-6 flex flex-col items-center justify-center bg-surface-container-low/30 hover:bg-surface-container-low transition-colors relative overflow-hidden group">
                            
                            <template x-if="imageUrl">
                                <div class="w-full h-40 rounded-lg overflow-hidden mb-4 shadow-sm relative">
                                    <img :src="imageUrl" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                                        <span class="bg-white text-primary px-4 py-2 rounded-full font-bold text-[14px] shadow-lg pointer-events-none">Ubah Gambar</span>
                                    </div>
                                </div>
                            </template>
                            
                            <template x-if="!imageUrl">
                                <div class="w-full h-40 rounded-lg overflow-hidden mb-4 shadow-sm bg-surface-container flex flex-col items-center justify-center text-outline-variant group-hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-[48px] mb-2">image</span>
                                    <span class="font-medium text-[14px]">Belum ada gambar (Opsional)</span>
                                </div>
                            </template>

                            <!-- Actual Input -->
                            <input type="file" name="seo_og_image" accept="image/png, image/jpeg, image/webp" @change="fileChosen" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20">
                            
                            <p class="text-[14px] text-on-surface-variant font-medium relative z-10 text-center">Klik atau seret untuk mengganti gambar</p>
                            <p class="text-[10px] text-on-surface-variant/50 mt-1 uppercase tracking-widest relative z-10 text-center">Rekomendasi: 1200 x 630 px (Maks 2MB)</p>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4 border-t border-outline-variant/30 mt-6">
                        <button type="submit" class="px-8 py-3 rounded-full bg-primary text-white font-bold shadow-lg shadow-primary/20 hover:shadow-primary/40 hover:-translate-y-0.5 transition-all active:scale-[0.98] text-[14px] flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">language</span> Simpan SEO
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>

    <!-- Alpine.js logic for SEO Form -->
    <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('seoForm', () => ({
            metaTitle: @json(old('seo_meta_title', get_setting('seo_meta_title')) ?? ''),
            metaDesc: @json(old('seo_meta_description', get_setting('seo_meta_description')) ?? ''),
            imageUrl: @json(get_setting('seo_og_image') ? asset('storage/' . get_setting('seo_og_image')) : null),
            
            fileChosen(event) {
                const file = event.target.files[0];
                if (file) {
                    this.imageUrl = URL.createObjectURL(file);
                }
            }
        }));
    });
    </script>
</x-app-layout>

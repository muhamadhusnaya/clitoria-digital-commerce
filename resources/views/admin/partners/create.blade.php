<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.partners.index') }}" class="p-2 bg-surface-container-high rounded-full hover:bg-surface-container-highest transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">arrow_back</span>
            </a>
            <h2 class="font-semibold text-xl text-on-surface leading-tight">
                {{ __('Add New Partner') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-16">
            <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Left Column: Form Fields -->
                    <div class="lg:col-span-2 space-y-6 bg-surface-container-lowest p-8 rounded-2xl shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] border border-outline-variant/30">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name -->
                            <div class="md:col-span-2">
                                <label for="name" class="block text-sm font-medium text-on-surface mb-2">Partner Name <span class="text-error">*</span></label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                    class="w-full h-[56px] px-4 rounded-xl border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring focus:ring-primary/20 transition-all" placeholder="e.g. Google, Amazon">
                                @error('name') <span class="text-error text-xs mt-1">{{ $message }}</span> @enderror
                            </div>

                            <!-- Website -->
                            <div class="md:col-span-2">
                                <label for="website" class="block text-sm font-medium text-on-surface mb-2">Website URL</label>
                                <input type="url" name="website" id="website" value="{{ old('website') }}"
                                    class="w-full h-[56px] px-4 rounded-xl border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring focus:ring-primary/20 transition-all" placeholder="https://example.com">
                                @error('website') <span class="text-error text-xs mt-1">{{ $message }}</span> @enderror
                            </div>
                        </div>

                    </div>

                    <!-- Right Column: Logo Upload -->
                    <div class="space-y-6">
                        <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] border border-outline-variant/30">
                            <label class="block text-sm font-medium text-on-surface mb-4">Partner Logo <span class="text-error">*</span></label>
                            
                            <div class="relative w-full aspect-video rounded-2xl border-2 border-dashed border-outline-variant bg-surface-container hover:bg-surface-container-high transition-colors flex flex-col items-center justify-center cursor-pointer overflow-hidden group mx-auto p-4" onclick="document.getElementById('logo').click()">
                                <div id="image-placeholder" class="flex flex-col items-center justify-center pointer-events-none text-center">
                                    <span class="material-symbols-outlined text-4xl text-outline-variant mb-2 group-hover:text-primary transition-colors">cloud_upload</span>
                                    <span class="text-xs text-on-surface-variant">Upload Logo</span>
                                </div>
                                <img id="image-preview" src="#" alt="Preview" class="hidden absolute inset-4 max-w-[calc(100%-2rem)] max-h-[calc(100%-2rem)] object-contain">
                                <input type="file" name="logo" id="logo" class="hidden" accept="image/*" required onchange="previewImage(this)">
                            </div>
                            <p class="text-xs text-on-surface-variant mt-4 text-center">Recommended: SVG or PNG with transparent background.</p>
                            @error('logo') <span class="text-error text-xs mt-2 block text-center">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Sticky Footer -->
                <div class="fixed bottom-0 left-0 lg:left-64 right-0 p-6 bg-surface-container-lowest border-t border-outline-variant/30 shadow-[0_-4px_20px_rgba(0,0,0,0.05)] z-10 flex justify-end gap-4">
                    <a href="{{ route('admin.partners.index') }}" class="px-6 py-2.5 bg-surface-container-high text-on-surface-variant rounded-full text-sm font-medium hover:bg-surface-container transition-all">
                        Cancel
                    </a>
                    <button type="submit" class="px-8 py-2.5 bg-primary text-white rounded-full text-sm font-medium hover:bg-primary-container transition-all shadow-md">
                        Save Partner
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script for Image Preview -->
    <script>
        function previewImage(input) {
            const preview = document.getElementById('image-preview');
            const placeholder = document.getElementById('image-placeholder');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                }
                
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.classList.add('hidden');
                placeholder.classList.remove('hidden');
            }
        }
    </script>
</x-app-layout>

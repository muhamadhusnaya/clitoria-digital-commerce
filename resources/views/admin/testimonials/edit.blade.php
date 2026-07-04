<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Testimonial') }}
            </h2>
            <a href="{{ route('admin.testimonials.index') }}" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-all">
                Cancel
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @if ($errors->any())
                        <div class="mb-4 bg-[#FFDAD6] text-[#BA1A1A] p-4 rounded-md">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                            <!-- Left Column: Details -->
                            <div class="lg:col-span-2 space-y-6">
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="customer_name" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Customer Name <span class="text-[#BA1A1A]">*</span></label>
                                        <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', $testimonial->customer_name) }}" required class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none">
                                    </div>
                                    <div>
                                        <label for="occupation" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Occupation</label>
                                        <input type="text" name="occupation" id="occupation" value="{{ old('occupation', $testimonial->occupation) }}" class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-2">Rating <span class="text-[#BA1A1A]">*</span></label>
                                    <div class="flex items-center gap-2 rating-selector" x-data="{ rating: {{ old('rating', $testimonial->rating) }} }">
                                        <template x-for="i in 5">
                                            <button type="button" @click="rating = i" class="focus:outline-none transition-transform hover:scale-110">
                                                <span class="material-symbols-outlined text-3xl" 
                                                      :class="rating >= i ? 'text-[#F5C71A]' : 'text-gray-300 dark:text-gray-600'"
                                                      :style="rating >= i ? 'font-variation-settings: \'FILL\' 1;' : ''">star</span>
                                            </button>
                                        </template>
                                        <input type="hidden" name="rating" x-model="rating">
                                    </div>
                                </div>

                                <div>
                                    <label for="review" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Review <span class="text-[#BA1A1A]">*</span></label>
                                    <textarea name="review" id="review" rows="5" required class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none">{{ old('review', $testimonial->review) }}</textarea>
                                </div>
                                
                                <div>
                                    <label class="flex items-center gap-3 cursor-pointer p-4 border border-[#C9C4D5] dark:border-gray-600 rounded-xl bg-gray-50 dark:bg-[#2C2C2A]">
                                        <div class="relative flex items-center">
                                            <input type="checkbox" name="featured" id="featured" value="1" class="peer sr-only" {{ old('featured', $testimonial->featured) ? 'checked' : '' }}>
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#432B9F]"></div>
                                        </div>
                                        <div>
                                            <div class="font-medium text-[#151936] dark:text-gray-200 flex items-center gap-1">Mark as Featured <span class="material-symbols-outlined text-sm text-[#F5C71A]" style="font-variation-settings: 'FILL' 1;">workspace_premium</span></div>
                                            <div class="text-xs text-gray-500">Featured testimonials will be prominently displayed on the homepage.</div>
                                        </div>
                                    </label>
                                </div>

                            </div>

                            <!-- Right Column: Avatar/Photo -->
                            <div class="lg:col-span-1">
                                <label class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-2">Update Photo (Optional)</label>
                                <p class="text-xs text-gray-500 mb-4">Leave empty if you don't want to change the current photo.</p>
                                
                                <div class="mt-1 flex flex-col items-center p-6 border-2 border-[#797584] dark:border-gray-600 border-dashed rounded-xl bg-[#F4F2FF] dark:bg-[#3E3E3A] relative group hover:border-[#432B9F] transition-colors" id="drop-zone">
                                    <div class="space-y-4 text-center relative z-10 w-full {{ $testimonial->photo ? 'hidden' : '' }}" id="upload-prompt">
                                        <div class="w-32 h-32 mx-auto bg-gray-200 dark:bg-gray-600 rounded-full flex items-center justify-center overflow-hidden border-4 border-white shadow-sm">
                                            <span class="material-symbols-outlined text-5xl text-gray-400 group-hover:text-[#432B9F] transition-colors">account_circle</span>
                                        </div>
                                        <div class="flex flex-col text-sm text-gray-600 dark:text-gray-300 justify-center">
                                            <label for="photo" class="relative cursor-pointer rounded-md font-medium text-[#432B9F] hover:text-[#5B46B8] focus-within:outline-none">
                                                <span>Upload a new photo</span>
                                                <input id="photo" name="photo" type="file" class="sr-only" accept="image/jpeg, image/png, image/jpg, image/webp">
                                            </label>
                                            <p class="mt-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG up to 2MB</p>
                                    </div>
                                    
                                    <!-- Image Preview -->
                                    <div id="image-preview-container" class="absolute inset-0 rounded-xl overflow-hidden bg-black/5 flex flex-col items-center justify-center p-4 {{ $testimonial->photo ? '' : 'hidden' }}">
                                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-md relative">
                                            <img id="image-preview" src="{{ $testimonial->photo ? (Str::startsWith($testimonial->photo, 'http') ? $testimonial->photo : asset('storage/' . $testimonial->photo)) : '#' }}" alt="Preview" class="w-full h-full object-cover">
                                        </div>
                                        <button type="button" id="remove-image" class="mt-4 px-4 py-2 bg-white text-[#BA1A1A] rounded-full text-sm font-medium shadow hover:bg-gray-100 focus:outline-none flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">close</span> Change
                                        </button>
                                        <div class="absolute bottom-2 left-2 bg-black/70 text-white text-xs px-2 py-1 rounded" id="preview-label">Current Photo</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-5 border-t border-[#C9C4D5] dark:border-gray-700 flex justify-end">
                            <button type="submit" class="px-6 py-3 bg-[#432B9F] text-white rounded-full font-medium hover:bg-[#5B46B8] transition-all shadow-md flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">save</span> Save Changes
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
    <!-- Image Preview Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('photo');
            const previewContainer = document.getElementById('image-preview-container');
            const previewImage = document.getElementById('image-preview');
            const uploadPrompt = document.getElementById('upload-prompt');
            const removeBtn = document.getElementById('remove-image');
            const dropZone = document.getElementById('drop-zone');
            const previewLabel = document.getElementById('preview-label');

            // Handle file selection
            fileInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    showPreview(this.files[0]);
                }
            });

            // Handle remove image
            removeBtn.addEventListener('click', function() {
                fileInput.value = '';
                previewContainer.classList.add('hidden');
                uploadPrompt.classList.remove('hidden');
            });

            // Drag and drop support
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                dropZone.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, unhighlight, false);
            });

            function highlight(e) {
                dropZone.classList.add('border-[#432B9F]', 'bg-[#EADDFF]', 'dark:bg-[#4A4458]');
            }

            function unhighlight(e) {
                dropZone.classList.remove('border-[#432B9F]', 'bg-[#EADDFF]', 'dark:bg-[#4A4458]');
            }

            dropZone.addEventListener('drop', handleDrop, false);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                
                if(files.length) {
                    fileInput.files = files;
                    showPreview(files[0]);
                }
            }

            function showPreview(file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    if(previewLabel) previewLabel.textContent = 'New Selected Photo';
                    previewContainer.classList.remove('hidden');
                    uploadPrompt.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app-layout>

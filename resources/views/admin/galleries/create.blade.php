<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Upload Gallery Image') }}
            </h2>
            <a href="{{ route('admin.galleries.index') }}" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-all">
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

                    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Form Inputs -->
                            <div class="space-y-6">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Image Title <span class="text-[#BA1A1A]">*</span></label>
                                    <input type="text" name="title" id="title" value="{{ old('title') }}" required class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none" placeholder="e.g. Harvest 2026">
                                </div>

                                <div>
                                    <label for="description" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Description</label>
                                    <textarea name="description" id="description" rows="4" class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none" placeholder="Provide a brief description...">{{ old('description') }}</textarea>
                                </div>

                                <div>
                                    <label for="status" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Visibility Status <span class="text-[#BA1A1A]">*</span></label>
                                    <select name="status" id="status" required class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none">
                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active (Visible on public gallery)</option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive (Hidden)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Image Upload Area -->
                            <div>
                                <label class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Upload Photo <span class="text-[#BA1A1A]">*</span></label>
                                
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-[#797584] dark:border-gray-600 border-dashed rounded-xl bg-[#F4F2FF] dark:bg-[#3E3E3A] relative group hover:border-[#432B9F] transition-colors" id="drop-zone">
                                    <div class="space-y-2 text-center relative z-10" id="upload-prompt">
                                        <span class="material-symbols-outlined text-5xl text-gray-400 group-hover:text-[#432B9F] transition-colors">cloud_upload</span>
                                        <div class="flex text-sm text-gray-600 dark:text-gray-300 justify-center">
                                            <label for="image" class="relative cursor-pointer rounded-md font-medium text-[#432B9F] hover:text-[#5B46B8] focus-within:outline-none">
                                                <span>Upload a file</span>
                                                <input id="image" name="image" type="file" class="sr-only" required accept="image/jpeg, image/png, image/jpg, image/webp">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG, WEBP up to 2MB</p>
                                    </div>
                                    
                                    <!-- Image Preview -->
                                    <div id="image-preview-container" class="hidden absolute inset-0 rounded-xl overflow-hidden bg-black/10 flex items-center justify-center p-2">
                                        <img id="image-preview" src="#" alt="Preview" class="max-h-full max-w-full object-contain rounded-lg shadow-sm">
                                        <button type="button" id="remove-image" class="absolute top-4 right-4 bg-white text-[#BA1A1A] rounded-full w-8 h-8 flex items-center justify-center shadow hover:bg-gray-100 focus:outline-none">
                                            <span class="material-symbols-outlined text-sm">close</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-5 border-t border-[#C9C4D5] dark:border-gray-700 flex justify-end">
                            <button type="submit" class="px-6 py-3 bg-[#432B9F] text-white rounded-full font-medium hover:bg-[#5B46B8] transition-all shadow-md flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">upload</span> Upload to Gallery
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
            const fileInput = document.getElementById('image');
            const previewContainer = document.getElementById('image-preview-container');
            const previewImage = document.getElementById('image-preview');
            const uploadPrompt = document.getElementById('upload-prompt');
            const removeBtn = document.getElementById('remove-image');
            const dropZone = document.getElementById('drop-zone');

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
                    previewContainer.classList.remove('hidden');
                    uploadPrompt.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app-layout>

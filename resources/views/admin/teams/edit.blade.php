<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Team Member') }}
            </h2>
            <a href="{{ route('admin.teams.index') }}" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-all">
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

                    <form action="{{ route('admin.teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Left Column: Details -->
                            <div class="space-y-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Name <span class="text-[#BA1A1A]">*</span></label>
                                    <input type="text" name="name" id="name" value="{{ old('name', $team->name) }}" required class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none">
                                </div>
                                
                                <div>
                                    <label for="position" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Position / Role <span class="text-[#BA1A1A]">*</span></label>
                                    <input type="text" name="position" id="position" value="{{ old('position', $team->position) }}" required class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none">
                                </div>

                                <div>
                                    <label for="instagram" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Instagram URL</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fa-brands fa-instagram text-gray-400"></i>
                                        </div>
                                        <input type="url" name="instagram" id="instagram" value="{{ old('instagram', $team->instagram) }}" class="w-full pl-10 bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none">
                                    </div>
                                </div>

                                <div>
                                    <label for="linkedin" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">LinkedIn URL</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fa-brands fa-linkedin text-gray-400"></i>
                                        </div>
                                        <input type="url" name="linkedin" id="linkedin" value="{{ old('linkedin', $team->linkedin) }}" class="w-full pl-10 bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none">
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column: Photo -->
                            <div>
                                <label class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Update Photo (Optional)</label>
                                <p class="text-xs text-gray-500 mb-3">Leave blank if you don't want to change the current photo.</p>
                                
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-[#797584] dark:border-gray-600 border-dashed rounded-xl bg-[#F4F2FF] dark:bg-[#3E3E3A] relative group hover:border-[#432B9F] transition-colors" id="drop-zone" style="min-height: 280px;">
                                    <div class="space-y-2 text-center relative z-10 hidden flex-col justify-center" id="upload-prompt">
                                        <span class="material-symbols-outlined text-5xl text-gray-400 group-hover:text-[#432B9F] transition-colors">add_a_photo</span>
                                        <div class="flex text-sm text-gray-600 dark:text-gray-300 justify-center">
                                            <label for="photo" class="relative cursor-pointer rounded-md font-medium text-[#432B9F] hover:text-[#5B46B8] focus-within:outline-none">
                                                <span>Upload a photo</span>
                                                <input id="photo" name="photo" type="file" class="sr-only" accept="image/jpeg, image/png, image/jpg, image/webp">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">Portrait recommended (PNG, JPG up to 2MB)</p>
                                    </div>
                                    
                                    <!-- Image Preview -->
                                    <div id="image-preview-container" class="absolute inset-0 rounded-xl overflow-hidden bg-black/10 flex items-center justify-center p-2">
                                        <img id="image-preview" src="{{ Str::startsWith($team->photo, 'http') ? $team->photo : asset('storage/' . $team->photo) }}" alt="Preview" class="max-h-full max-w-full object-contain rounded-lg shadow-sm">
                                        <button type="button" id="remove-image" class="absolute top-4 right-4 bg-white text-[#BA1A1A] rounded-full w-8 h-8 flex items-center justify-center shadow hover:bg-gray-100 focus:outline-none">
                                            <span class="material-symbols-outlined text-sm">close</span>
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
                uploadPrompt.classList.add('flex'); // Add flex back since it was hidden
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
                    uploadPrompt.classList.remove('flex');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app-layout>

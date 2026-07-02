<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-on-surface leading-tight">
                {{ __('Edit Product: ') }} {{ $product->name }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-surface-container-lowest overflow-hidden shadow-premium sm:rounded-lg">
                <div class="p-6 text-on-surface">
                    <form method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Left Column: Text Inputs -->
                            <div class="md:col-span-2 space-y-6">
                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $product->name)" required autofocus />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Slug -->
                                <div>
                                    <x-input-label for="slug" :value="__('Slug')" />
                                    <x-text-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug', $product->slug)" required />
                                    <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                                </div>

                                <!-- Short Description -->
                                <div>
                                    <x-input-label for="short_description" :value="__('Short Description')" />
                                    <textarea id="short_description" name="short_description" rows="3" class="block mt-1 w-full border-outline-variant focus:border-primary focus:ring-primary rounded-xl shadow-sm">{{ old('short_description', $product->short_description) }}</textarea>
                                    <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
                                </div>

                                <!-- Description -->
                                <div>
                                    <x-input-label for="description" :value="__('Description')" />
                                    <textarea id="description" name="description" rows="5" class="block mt-1 w-full border-outline-variant focus:border-primary focus:ring-primary rounded-xl shadow-sm">{{ old('description', $product->description) }}</textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>
                            </div>
                            
                            <!-- Right Column: Image & Status -->
                            <div class="space-y-6">
                                <!-- Status -->
                                <div class="bg-surface-container rounded-xl p-4">
                                    <label for="status" class="inline-flex items-center">
                                        <input id="status" type="checkbox" class="rounded border-outline-variant text-primary shadow-sm focus:ring-primary" name="status" value="1" {{ old('status', $product->status) ? 'checked' : '' }}>
                                        <span class="ms-2 text-sm text-on-surface">{{ __('Published') }}</span>
                                    </label>
                                    <p class="text-xs text-on-surface-variant mt-1">Check to make the product visible on the public site.</p>
                                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                                </div>
                                
                                <!-- Image -->
                                <div class="bg-surface-container rounded-xl p-4">
                                    <x-input-label for="image" :value="__('Product Image')" class="mb-2" />
                                    
                                    @if($product->image)
                                        <div class="mb-4">
                                            <p class="text-xs text-on-surface-variant mb-1">Current Image:</p>
                                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-full h-auto rounded-lg object-cover">
                                        </div>
                                    @endif

                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-outline-variant border-dashed rounded-xl relative hover:bg-surface-container-high transition">
                                        <div class="space-y-1 text-center">
                                            <span class="material-symbols-outlined text-3xl text-on-surface-variant">add_photo_alternate</span>
                                            <div class="flex text-sm text-on-surface-variant justify-center">
                                                <label for="image" class="relative cursor-pointer bg-transparent rounded-md font-medium text-primary hover:text-primary-container focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary">
                                                    <span>{{ $product->image ? 'Replace file' : 'Upload a file' }}</span>
                                                    <input id="image" name="image" type="file" class="sr-only" accept="image/*">
                                                </label>
                                            </div>
                                            <p class="text-xs text-on-surface-variant">PNG, JPG, GIF up to 2MB</p>
                                        </div>
                                    </div>
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6 pt-4 border-t border-outline-variant">
                            <a href="{{ route('admin.products.index') }}" class="inline-flex items-center px-4 py-2 bg-surface-container border border-transparent rounded-md font-semibold text-xs text-on-surface uppercase tracking-widest hover:bg-surface-container-high focus:outline-none transition ease-in-out duration-150 mr-3">
                                Cancel
                            </a>
                            <x-primary-button>
                                {{ __('Update Product') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Only generate slug automatically if it hasn't been manually edited.
        // For edit view, it's safer to let the user change it manually if needed.
        let nameInput = document.getElementById('name');
        let slugInput = document.getElementById('slug');
        let originalName = nameInput.value;
        
        nameInput.addEventListener('input', function(e) {
            // Only update slug if user hasn't modified it manually from original
            let expectedSlug = originalName.toLowerCase().replace(/[^\w\s-]/g, '').replace(/[\s_-]+/g, '-').replace(/^-+|-+$/g, '');
            if(slugInput.value === expectedSlug || slugInput.value === '') {
                let slug = e.target.value.toLowerCase().replace(/[^\w\s-]/g, '').replace(/[\s_-]+/g, '-').replace(/^-+|-+$/g, '');
                slugInput.value = slug;
            }
        });
    </script>
</x-app-layout>

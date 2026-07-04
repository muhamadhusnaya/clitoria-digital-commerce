<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SEO Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-800">
                <div class="p-6 md:p-8">
                    
                    <div class="mb-8 border-b border-gray-200 dark:border-gray-700 pb-5">
                        <h3 class="text-xl font-bold text-[#151936] dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-[#432B9F]">search_insights</span> 
                            Search Engine Optimization
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">
                            Optimize how your storefront appears on search engines like Google and when shared on social media platforms like Facebook or Twitter.
                        </p>
                    </div>

                    @if (session('success'))
                        <div class="mb-8 bg-[#B3F582] text-[#224C00] p-4 rounded-xl flex items-center gap-3 shadow-sm border border-[#9DE06A]">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span class="font-medium">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('admin.settings.seo.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- General SEO Section -->
                        <div class="space-y-6">
                            
                            <!-- Meta Title -->
                            <div>
                                <x-input-label for="seo_meta_title" :value="__('Meta Title')" class="text-gray-700 dark:text-gray-300 font-medium" />
                                <x-text-input id="seo_meta_title" name="seo_meta_title" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 focus:ring-[#432B9F] focus:border-[#432B9F] rounded-lg" :value="old('seo_meta_title', get_setting('seo_meta_title'))" placeholder="Clitoria - Best Digital Commerce" />
                                <p class="mt-1 text-xs text-gray-500">Recommended length is 50-60 characters for optimal display on search engines.</p>
                                <x-input-error class="mt-2" :messages="$errors->get('seo_meta_title')" />
                            </div>

                            <!-- Meta Description -->
                            <div>
                                <x-input-label for="seo_meta_description" :value="__('Meta Description')" class="text-gray-700 dark:text-gray-300 font-medium" />
                                <textarea id="seo_meta_description" name="seo_meta_description" rows="3" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 focus:border-[#432B9F] focus:ring-[#432B9F] rounded-lg shadow-sm" placeholder="Discover the best digital products at Clitoria. We provide high-quality items for your needs.">{{ old('seo_meta_description', get_setting('seo_meta_description')) }}</textarea>
                                <p class="mt-1 text-xs text-gray-500">A brief summary of your site. Recommended length is 150-160 characters.</p>
                                <x-input-error class="mt-2" :messages="$errors->get('seo_meta_description')" />
                            </div>

                            <!-- Meta Keywords -->
                            <div>
                                <x-input-label for="seo_meta_keywords" :value="__('Meta Keywords')" class="text-gray-700 dark:text-gray-300 font-medium" />
                                <x-text-input id="seo_meta_keywords" name="seo_meta_keywords" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 focus:ring-[#432B9F] focus:border-[#432B9F] rounded-lg" :value="old('seo_meta_keywords', get_setting('seo_meta_keywords'))" placeholder="ecommerce, clitoria, digital products, store" />
                                <p class="mt-1 text-xs text-gray-500">Separate keywords with a comma (e.g., store, digital, products).</p>
                                <x-input-error class="mt-2" :messages="$errors->get('seo_meta_keywords')" />
                            </div>
                        </div>

                        <!-- Social Media Graph Section -->
                        <div class="mt-10 border-t border-gray-200 dark:border-gray-700 pt-8 space-y-6">
                            
                            <h4 class="text-lg font-bold text-[#151936] dark:text-white mb-2">Social Sharing (Open Graph)</h4>
                            
                            <!-- Open Graph Image -->
                            <div>
                                <x-input-label for="seo_og_image" :value="__('Open Graph Image')" class="text-gray-700 dark:text-gray-300 font-medium mb-2" />
                                
                                @if(get_setting('seo_og_image'))
                                    <div class="mb-4">
                                        <p class="text-sm text-gray-500 mb-2">Current Image:</p>
                                        <div class="rounded-xl overflow-hidden border border-gray-200 shadow-sm inline-block" style="max-width: 300px;">
                                            <img src="{{ asset('storage/' . get_setting('seo_og_image')) }}" alt="Open Graph Preview" class="w-full h-auto object-cover">
                                        </div>
                                    </div>
                                @endif

                                <div class="mt-1 flex items-center gap-4">
                                    <input id="seo_og_image" name="seo_og_image" type="file" accept="image/png, image/jpeg, image/webp" class="block w-full text-sm text-gray-500 dark:text-gray-400
                                      file:mr-4 file:py-2.5 file:px-4
                                      file:rounded-full file:border-0
                                      file:text-sm file:font-semibold
                                      file:bg-[#F4F2FF] file:text-[#432B9F]
                                      hover:file:bg-[#EADDFF] transition-colors
                                      border border-gray-200 dark:border-gray-700 rounded-full" />
                                </div>
                                <p class="mt-2 text-xs text-gray-500">This image will appear when you share your link on WhatsApp, Facebook, or Twitter. Recommended size: 1200 x 630 pixels. (Max: 2MB).</p>
                                <x-input-error class="mt-2" :messages="$errors->get('seo_og_image')" />
                            </div>

                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-end mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <button type="submit" class="px-6 py-3 bg-[#432B9F] text-white rounded-full font-bold hover:bg-[#5B46B8] focus:ring-4 focus:ring-[#EADDFF] transition-all flex items-center gap-2 shadow-md">
                                <span class="material-symbols-outlined text-[20px]">save</span> 
                                {{ __('Save SEO Settings') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

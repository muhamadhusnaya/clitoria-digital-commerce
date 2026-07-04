<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Business Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-800">
                <div class="p-6 md:p-8">
                    
                    <div class="mb-8 border-b border-gray-200 dark:border-gray-700 pb-5">
                        <h3 class="text-xl font-bold text-[#151936] dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-[#432B9F]">storefront</span> 
                            Company Information
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">
                            Update your business details. This information will be displayed to customers on the main storefront and used for direct contact.
                        </p>
                    </div>

                    @if (session('success'))
                        <div class="mb-8 bg-[#B3F582] text-[#224C00] p-4 rounded-xl flex items-center gap-3 shadow-sm border border-[#9DE06A]">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span class="font-medium">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Contact Information Section -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <!-- WhatsApp Number -->
                            <div>
                                <x-input-label for="whatsapp_number" :value="__('WhatsApp Number')" class="text-gray-700 dark:text-gray-300 font-medium" />
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm font-medium">+62</span>
                                    </div>
                                    <x-text-input id="whatsapp_number" name="whatsapp_number" type="tel" class="mt-1 block w-full pl-12 border-gray-300 dark:border-gray-700 dark:bg-gray-900 focus:ring-[#432B9F] focus:border-[#432B9F] rounded-lg" :value="old('whatsapp_number', get_setting('whatsapp_number'))" placeholder="81234567890" />
                                </div>
                                <p class="mt-1 text-xs text-gray-500">Without leading zero or country code (e.g., 812...)</p>
                                <x-input-error class="mt-2" :messages="$errors->get('whatsapp_number')" />
                            </div>

                            <!-- Business Email -->
                            <div>
                                <x-input-label for="business_email" :value="__('Business Email')" class="text-gray-700 dark:text-gray-300 font-medium" />
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="material-symbols-outlined text-gray-400 text-lg">mail</span>
                                    </div>
                                    <x-text-input id="business_email" name="business_email" type="email" class="mt-1 block w-full pl-10 border-gray-300 dark:border-gray-700 dark:bg-gray-900 focus:ring-[#432B9F] focus:border-[#432B9F] rounded-lg" :value="old('business_email', get_setting('business_email'))" placeholder="hello@clitoria.com" />
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('business_email')" />
                            </div>

                            <!-- Instagram URL -->
                            <div class="md:col-span-2">
                                <x-input-label for="instagram_url" :value="__('Instagram Link')" class="text-gray-700 dark:text-gray-300 font-medium" />
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">https://</span>
                                    </div>
                                    <x-text-input id="instagram_url" name="instagram_url" type="url" class="mt-1 block w-full pl-16 border-gray-300 dark:border-gray-700 dark:bg-gray-900 focus:ring-[#432B9F] focus:border-[#432B9F] rounded-lg" :value="old('instagram_url', get_setting('instagram_url'))" placeholder="instagram.com/clitoriastore" />
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('instagram_url')" />
                            </div>
                        </div>

                        <!-- Location Information Section -->
                        <div class="mt-10 border-t border-gray-200 dark:border-gray-700 pt-8 space-y-6">
                            
                            <!-- Address -->
                            <div>
                                <x-input-label for="address" :value="__('Physical Address')" class="text-gray-700 dark:text-gray-300 font-medium" />
                                <textarea id="address" name="address" rows="3" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 focus:border-[#432B9F] focus:ring-[#432B9F] rounded-lg shadow-sm" placeholder="Enter full business address">{{ old('address', get_setting('address')) }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('address')" />
                            </div>

                            <!-- Google Maps Embed -->
                            <div>
                                <x-input-label for="google_maps_embed" :value="__('Google Maps Embed Code (HTML)')" class="text-gray-700 dark:text-gray-300 font-medium" />
                                <textarea id="google_maps_embed" name="google_maps_embed" rows="4" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 focus:border-[#432B9F] focus:ring-[#432B9F] rounded-lg shadow-sm font-mono text-sm text-gray-600 dark:text-gray-400" placeholder='<iframe src="https://www.google.com/maps/embed?pb=..." width="600" height="450" ...></iframe>'>{{ old('google_maps_embed', get_setting('google_maps_embed')) }}</textarea>
                                <p class="mt-1 text-xs text-gray-500">Paste the HTML iframe code generated by Google Maps to display the interactive map on the contact page.</p>
                                <x-input-error class="mt-2" :messages="$errors->get('google_maps_embed')" />
                            </div>

                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-end mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <button type="submit" class="px-6 py-3 bg-[#432B9F] text-white rounded-full font-bold hover:bg-[#5B46B8] focus:ring-4 focus:ring-[#EADDFF] transition-all flex items-center gap-2 shadow-md">
                                <span class="material-symbols-outlined text-[20px]">save</span> 
                                {{ __('Save Changes') }}
                            </button>
                        </div>
                    </form>

                    <div class="mt-12 mb-8 border-b border-gray-200 dark:border-gray-700 pb-5">
                        <h3 class="text-xl font-bold text-[#151936] dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-[#432B9F]">search_insights</span> 
                            Search Engine Optimization
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">
                            Optimize how your storefront appears on search engines like Google and when shared on social media platforms like Facebook or Twitter.
                        </p>
                    </div>

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

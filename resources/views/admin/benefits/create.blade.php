<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create New Benefit') }}
            </h2>
            <a href="{{ route('admin.benefits.index') }}" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-all">
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

                    <form action="{{ route('admin.benefits.store') }}" method="POST">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Form Inputs -->
                            <div class="space-y-6">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Benefit Title <span class="text-[#BA1A1A]">*</span></label>
                                    <input type="text" name="title" id="title" value="{{ old('title') }}" required class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none" placeholder="e.g. 100% Organic">
                                </div>

                                <div>
                                    <label for="icon" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Google Material Symbol Icon <span class="text-[#BA1A1A]">*</span></label>
                                    <div class="relative">
                                        <input type="text" name="icon" id="icon" value="{{ old('icon') }}" required class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 pl-12 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none font-mono text-sm" placeholder="e.g. leaf, mood, shield">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-500">
                                            <span class="material-symbols-outlined text-xl" id="icon-preview">star</span>
                                        </div>
                                    </div>
                                    <p class="mt-1 text-xs text-gray-500">Use standard icon names from Google Fonts Material Symbols Outlined.</p>
                                </div>

                                <div>
                                    <label for="status" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Status <span class="text-[#BA1A1A]">*</span></label>
                                    <select name="status" id="status" required class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none">
                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="order_number" class="block text-sm font-medium text-[#151936] dark:text-gray-200 mb-1">Display Order</label>
                                    <input type="number" name="order_number" id="order_number" value="{{ old('order_number') }}" class="w-full bg-[#F4F2FF] dark:bg-[#3E3E3A] border border-[#797584] dark:border-gray-600 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none" placeholder="e.g. 1, 2, 3">
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-5 border-t border-[#C9C4D5] dark:border-gray-700 flex justify-end">
                            <button type="submit" class="px-6 py-3 bg-[#432B9F] text-white rounded-full font-medium hover:bg-[#5B46B8] transition-all shadow-md">
                                Save Benefit
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const iconInput = document.getElementById('icon');
            const iconPreview = document.getElementById('icon-preview');
            
            iconInput.addEventListener('input', function() {
                const val = this.value.trim();
                iconPreview.textContent = val ? val : 'star';
            });
            
            // Trigger initially
            if(iconInput.value) {
                iconPreview.textContent = iconInput.value.trim();
            }
        });
    </script>
</x-app-layout>

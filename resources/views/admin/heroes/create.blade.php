<x-app-layout>
 <x-slot name="header">
 <div class="flex justify-between items-center">
 <h2 class="font-semibold text-xl text-on-surface leading-tight">
 {{ __('Create New Hero') }}
 </h2>
 <a href="{{ route('admin.heroes.index') }}" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-on-surface rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-all">
 Cancel
 </a>
 </div>
 </x-slot>

 <div class="py-12">
 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 <div class="bg-surface-container-lowest dark:bg-surface-container-highest overflow-hidden shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] sm:rounded-2xl">
 <div class="p-6 text-on-surface ">
 
 @if ($errors->any())
 <div class="mb-4 bg-[#FFDAD6] text-error p-4 rounded-md">
 <ul class="list-disc pl-5">
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif

 <form action="{{ route('admin.heroes.store') }}" method="POST" enctype="multipart/form-data">
 @csrf
 
 <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
 <!-- Left Column: Text Inputs -->
 <div class="space-y-6">
 <div>
 <label for="title" class="block text-sm font-medium text-on-surface mb-1">Headline Title <span class="text-error">*</span></label>
 <input type="text" name="title" id="title" value="{{ old('title') }}" required class="w-full bg-surface-container-low dark:bg-[#3E3E3A] border border-[#797584] rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none" placeholder="e.g. Where Flavor Meets Innovation">
 </div>

 <div>
 <label for="subtitle" class="block text-sm font-medium text-on-surface mb-1">Subtitle</label>
 <textarea name="subtitle" id="subtitle" rows="3" class="w-full bg-surface-container-low dark:bg-[#3E3E3A] border border-[#797584] rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none" placeholder="A short description...">{{ old('subtitle') }}</textarea>
 </div>

 <div>
 <label for="button_text" class="block text-sm font-medium text-on-surface mb-1">Button Text</label>
 <input type="text" name="button_text" id="button_text" value="{{ old('button_text') }}" class="w-full bg-surface-container-low dark:bg-[#3E3E3A] border border-[#797584] rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none" placeholder="e.g. Shop Now">
 </div>

 <div>
 <label for="button_link" class="block text-sm font-medium text-on-surface mb-1">Button Link</label>
 <input type="text" name="button_link" id="button_link" value="{{ old('button_link') }}" class="w-full bg-surface-container-low dark:bg-[#3E3E3A] border border-[#797584] rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#432B9F] focus:border-[#432B9F] transition-all outline-none" placeholder="e.g. /products">
 </div>
 </div>

 <!-- Right Column: Image Upload -->
 <div>
 <label class="block text-sm font-medium text-on-surface mb-1">Hero Image <span class="text-error">*</span></label>
 <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed border-outline-variant rounded-xl bg-surface-container-low dark:bg-[#3E3E3A]">
 <div class="space-y-1 text-center">
 <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
 <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
 </svg>
 <div class="flex text-sm text-[#706f6c] justify-center">
 <label for="image" class="relative cursor-pointer bg-surface-container-lowest dark:bg-surface-container-highest rounded-md font-medium text-primary dark:text-primary-fixed-dim hover:underline focus-within:outline-none px-1">
 <span>Upload a file</span>
 <input id="image" name="image" type="file" class="sr-only" required accept="image/*">
 </label>
 </div>
 <p class="text-xs text-[#706f6c] ">
 PNG, JPG, WEBP up to 2MB
 </p>
 </div>
 </div>
 </div>
 </div>

 <div class="mt-8 pt-5 border-t border-outline-variant flex justify-end">
 <button type="submit" class="px-6 py-3 bg-primary text-white rounded-full font-medium hover:bg-primary-container transition-all shadow-md">
 Save Hero
 </button>
 </div>
 </form>

 </div>
 </div>
 </div>
 </div>
</x-app-layout>

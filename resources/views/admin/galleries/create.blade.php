<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-on-surface leading-tight">
            { __('Create Gallery') }
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-surface-container-lowest overflow-hidden shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] sm:rounded-2xl border border-outline-variant/30 p-8">
                <form action="{ route('admin.galleries.store') }" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-8 p-4 bg-primary-fixed/20 border border-primary-fixed rounded-xl text-on-primary-fixed text-sm">
                        <span class="material-symbols-outlined align-middle mr-2 text-[20px]">info</span>
                        This is a dynamically generated placeholder form. (Fields should be added here based on schema)
                    </div>
                    
                    <div class="flex items-center gap-4 pt-4 border-t border-outline-variant/30">
                        <button type="submit" class="px-6 py-2.5 bg-primary text-white rounded-full text-sm font-medium hover:bg-primary-container transition-all shadow-md">
                            Save Changes
                        </button>
                        <a href="{ route('admin.galleries.index') }" class="px-6 py-2.5 bg-surface-container-high text-on-surface-variant rounded-full text-sm font-medium hover:bg-surface-container transition-all border border-outline-variant/50">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

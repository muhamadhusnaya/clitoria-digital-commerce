<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-on-surface leading-tight">
                { __('Manage Product Prices') }
            </h2>
            <a href="{ route('admin.product-prices.create') }" class="px-4 py-2 bg-primary text-white rounded-full text-sm font-medium hover:bg-primary-container transition-all shadow-[0_4px_14px_0_rgba(67,43,159,0.39)]">
                Add New Product Price
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-6 bg-tertiary-container text-on-tertiary-container p-4 rounded-xl border border-tertiary-fixed font-medium">
                    { session('success') }
                </div>
            @endif

            <div class="bg-surface-container-lowest overflow-hidden shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] sm:rounded-2xl border border-outline-variant/30">
                <div class="p-0">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-low border-b border-outline-variant/50">
                                    <th class="px-6 py-4 text-xs tracking-wider uppercase font-semibold text-on-surface-variant">ID</th>
                                    <th class="px-6 py-4 text-xs tracking-wider uppercase font-semibold text-on-surface-variant">Package Name</th>
                                    <th class="px-6 py-4 text-xs tracking-wider uppercase font-semibold text-on-surface-variant">Type</th>
                                    <th class="px-6 py-4 text-xs tracking-wider uppercase font-semibold text-on-surface-variant">Price</th>

                                    <th class="px-6 py-4 text-xs tracking-wider uppercase font-semibold text-on-surface-variant text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($product-prices as $product_price)
                                    <tr class="border-b border-outline-variant/30 hover:bg-surface-container-low/50 transition-all duration-200">
                                        <td class="px-6 py-4 font-medium text-primary">#{ $product_price->id }</td>
                                                                                <td class="px-6 py-4 text-sm text-on-surface-variant">Data...</td>
                                        <td class="px-6 py-4 text-sm text-on-surface-variant">Data...</td>
                                        <td class="px-6 py-4 text-sm text-on-surface-variant">Data...</td>

                                        <td class="px-6 py-4 text-right">
                                            <a href="{ route('admin.product-prices.edit', $product_price->id) }" class="inline-flex items-center justify-center w-8 h-8 mr-2 bg-primary-fixed text-on-primary-fixed rounded-full hover:bg-primary-fixed-dim transition-colors" title="Edit">
                                                <span class="material-symbols-outlined text-[18px]">edit</span>
                                            </a>
                                            <form action="{ route('admin.product-prices.destroy', $product_price->id) }" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this Product Price?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center justify-center w-8 h-8 bg-error-container text-on-error-container rounded-full hover:bg-error transition-colors hover:text-white" title="Delete">
                                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-12 text-center text-on-surface-variant">
                                            <div class="flex flex-col items-center justify-center">
                                                <span class="material-symbols-outlined text-4xl mb-3 text-outline-variant">inbox</span>
                                                <p>No data found.</p>
                                                <a href="{ route('admin.product-prices.create') }" class="mt-2 text-primary hover:underline font-medium">Create one now</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

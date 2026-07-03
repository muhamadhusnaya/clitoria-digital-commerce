<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Sales Records') }}
            </h2>
            <a href="{{ route('admin.sales.create') }}" class="px-4 py-2 bg-[#432B9F] text-white rounded-full text-sm font-medium hover:bg-[#5B46B8] transition-all flex items-center gap-1 shadow-sm">
                <span class="material-symbols-outlined text-sm">add</span> Add New Sale
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @if (session('success'))
                        <div class="mb-6 bg-[#B3F582] text-[#224C00] p-4 rounded-md flex items-center gap-2">
                            <span class="material-symbols-outlined">check_circle</span>
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Desktop View -->
                    <div class="hidden md:block overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-[#C9C4D5] dark:border-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    <th class="py-3 px-4">Date</th>
                                    <th class="py-3 px-4">Customer</th>
                                    <th class="py-3 px-4">Total Amount</th>
                                    <th class="py-3 px-4">Recorded By</th>
                                    <th class="py-3 px-4 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sales as $sale)
                                    <tr class="border-b border-gray-100 dark:border-gray-800 hover:bg-[#F4F2FF] dark:hover:bg-[#2C2C2A] transition-colors">
                                        <td class="py-3 px-4">
                                            {{ \Carbon\Carbon::parse($sale->sale_date)->format('d M Y') }}
                                        </td>
                                        <td class="py-3 px-4 font-medium text-[#151936] dark:text-gray-200">
                                            {{ $sale->customer_name ?: 'N/A' }}
                                        </td>
                                        <td class="py-3 px-4 text-[#432B9F] dark:text-[#EADDFF] font-semibold">
                                            Rp {{ number_format($sale->total_amount, 0, ',', '.') }}
                                        </td>
                                        <td class="py-3 px-4">
                                            <div class="flex items-center gap-2">
                                                <div class="w-6 h-6 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-600">
                                                    {{ strtoupper(substr($sale->creator->name ?? '?', 0, 1)) }}
                                                </div>
                                                <span class="text-sm">{{ $sale->creator->name ?? 'System' }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-4 text-center">
                                            <a href="{{ route('admin.sales.show', $sale->id) }}" class="inline-flex items-center gap-1 px-3 py-1 bg-[#EADDFF] text-[#432B9F] rounded-full text-xs font-medium hover:bg-[#D0BCFF] transition-colors">
                                                <span class="material-symbols-outlined text-[16px]">visibility</span> View
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-8 text-center text-gray-500">
                                            No sales records found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Mobile View -->
                    <div class="md:hidden space-y-4">
                        @forelse ($sales as $sale)
                            <div class="bg-[#F4F2FF] dark:bg-[#2C2C2A] p-4 rounded-xl border border-[#C9C4D5] dark:border-gray-700">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <div class="text-xs text-gray-500 mb-1">{{ \Carbon\Carbon::parse($sale->sale_date)->format('d M Y') }}</div>
                                        <div class="font-medium text-[#151936] dark:text-gray-200">{{ $sale->customer_name ?: 'Unknown Customer' }}</div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-[#432B9F] dark:text-[#EADDFF] font-semibold">Rp {{ number_format($sale->total_amount, 0, ',', '.') }}</div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-3 border-t border-[#C9C4D5] dark:border-gray-700 flex justify-between items-center">
                                    <div class="text-xs text-gray-500 flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">person</span>
                                        {{ $sale->creator->name ?? 'System' }}
                                    </div>
                                    <a href="{{ route('admin.sales.show', $sale->id) }}" class="inline-flex items-center gap-1 px-3 py-1 bg-[#432B9F] text-white rounded-full text-xs font-medium hover:bg-[#5B46B8]">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="py-8 text-center text-gray-500 bg-[#F4F2FF] dark:bg-[#2C2C2A] rounded-xl border border-dashed border-[#797584]">
                                No sales records found.
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $sales->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

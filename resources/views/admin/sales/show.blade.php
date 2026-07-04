<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Transaction Detail') }}
            </h2>
            <a href="{{ route('admin.sales.index') }}" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-all flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">arrow_back</span> Back to Sales
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-lg sm:rounded-2xl border border-gray-100 dark:border-gray-800">
                
                <!-- Receipt Header -->
                <div class="bg-[#432B9F] p-6 text-white rounded-t-2xl">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-2xl font-bold mb-1">Receipt #{{ str_pad($sale->id, 5, '0', STR_PAD_LEFT) }}</h3>
                            <p class="text-[#D0BCFF] flex items-center gap-1 text-sm">
                                <span class="material-symbols-outlined text-sm">calendar_month</span>
                                {{ \Carbon\Carbon::parse($sale->sale_date)->format('F d, Y') }}
                            </p>
                        </div>
                        <div class="text-right">
                            <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-[#B3F582] text-[#224C00]">
                                Paid
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 md:p-8">
                    <!-- Info Summary Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 pb-8 border-b border-gray-200 dark:border-gray-700">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Customer Name</p>
                            <p class="font-semibold text-lg text-[#151936] dark:text-white">
                                {{ $sale->customer_name ?: 'N/A' }}
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Recorded By</p>
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-[#EADDFF] flex items-center justify-center text-sm font-bold text-[#432B9F]">
                                    {{ strtoupper(substr($sale->creator->name ?? '?', 0, 1)) }}
                                </div>
                                <span class="font-medium text-[#151936] dark:text-white">{{ $sale->creator->name ?? 'System' }}</span>
                            </div>
                        </div>
                        @if($sale->notes)
                        <div class="md:col-span-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Internal Notes</p>
                            <p class="text-sm text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-[#2C2C2A] p-3 rounded-lg border border-gray-100 dark:border-gray-700">
                                {{ $sale->notes }}
                            </p>
                        </div>
                        @endif
                    </div>

                    <!-- Items Table -->
                    <h4 class="text-lg font-bold text-[#151936] dark:text-white mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[#432B9F]">shopping_bag</span> Purchased Items
                    </h4>
                    
                    <div class="overflow-x-auto rounded-xl border border-gray-200 dark:border-gray-700 mb-8">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-gray-50 dark:bg-[#2C2C2A]">
                                <tr class="text-sm font-medium text-gray-500 dark:text-gray-400 border-b border-gray-200 dark:border-gray-700">
                                    <th class="py-3 px-4">Product</th>
                                    <th class="py-3 px-4 text-right">Price</th>
                                    <th class="py-3 px-4 text-center">Qty</th>
                                    <th class="py-3 px-4 text-right">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sale->items as $item)
                                    <tr class="border-b border-gray-100 dark:border-gray-800 last:border-0 hover:bg-[#F4F2FF] dark:hover:bg-[#3E3E3A] transition-colors">
                                        <td class="py-4 px-4 font-medium text-[#151936] dark:text-gray-200">
                                            {{ $item->product_name }}
                                            @if($item->product_id)
                                                <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-blue-100 text-blue-800">
                                                    Linked
                                                </span>
                                            @endif
                                        </td>
                                        <td class="py-4 px-4 text-right text-gray-600 dark:text-gray-300">
                                            Rp {{ number_format($item->price, 0, ',', '.') }}
                                        </td>
                                        <td class="py-4 px-4 text-center font-medium text-[#151936] dark:text-white">
                                            {{ $item->qty }}
                                        </td>
                                        <td class="py-4 px-4 text-right font-semibold text-[#151936] dark:text-white">
                                            Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Grand Total -->
                    <div class="flex justify-end">
                        <div class="w-full md:w-1/2 bg-[#F4F2FF] dark:bg-[#2C2C2A] rounded-xl p-5 border border-[#C9C4D5] dark:border-gray-700">
                            <div class="flex justify-between items-center text-gray-600 dark:text-gray-400 mb-2">
                                <span>Subtotal Items</span>
                                <span>{{ $sale->items->sum('qty') }}</span>
                            </div>
                            <div class="flex justify-between items-center mt-3 pt-3 border-t border-[#C9C4D5] dark:border-gray-600">
                                <span class="text-lg font-bold text-[#151936] dark:text-white">Grand Total</span>
                                <span class="text-2xl font-black text-[#432B9F] dark:text-[#D0BCFF]">
                                    Rp {{ number_format($sale->total_amount, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

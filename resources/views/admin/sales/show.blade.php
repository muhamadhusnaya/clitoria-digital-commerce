<x-app-layout>
 <x-slot name="header">
 <div class="flex justify-between items-center">
 <h2 class="font-semibold text-xl text-on-surface leading-tight">
 {{ __('Transaction Detail') }}
 </h2>
 <a href="{{ route('admin.sales.index') }}" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-on-surface rounded-full text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600 transition-all flex items-center gap-1">
 <span class="material-symbols-outlined text-sm">arrow_back</span> Back to Sales
 </a>
 </div>
 </x-slot>

 <div class="py-12">
 <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
 <div class="bg-surface-container-lowest dark:bg-surface-container-highest overflow-hidden shadow-lg sm:rounded-2xl border border-outline-variant ">
 
 <!-- Receipt Header -->
 <div class="bg-primary p-6 text-white rounded-t-2xl">
 <div class="flex justify-between items-start">
 <div>
 <h3 class="text-2xl font-bold mb-1">Receipt #{{ str_pad($sale->id, 5, '0', STR_PAD_LEFT) }}</h3>
 <p class="text-primary-fixed-dim flex items-center gap-1 text-sm">
 <span class="material-symbols-outlined text-sm">calendar_month</span>
 {{ \Carbon\Carbon::parse($sale->sale_date)->format('F d, Y') }}
 </p>
 </div>
 <div class="text-right">
 <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-tertiary-container text-on-tertiary-container">
 Paid
 </div>
 </div>
 </div>
 </div>

 <div class="p-6 md:p-8">
 <!-- Info Summary Grid -->
 <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 pb-8 border-b border-outline-variant ">
 <div>
 <p class="text-sm text-on-surface-variant mb-1">Customer Name</p>
 <p class="font-semibold text-lg text-on-surface ">
 {{ $sale->customer_name ?: 'N/A' }}
 </p>
 </div>
 <div>
 <p class="text-sm text-on-surface-variant mb-1">Recorded By</p>
 <div class="flex items-center gap-2">
 <div class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-sm font-bold text-primary">
 {{ strtoupper(substr($sale->creator->name ?? '?', 0, 1)) }}
 </div>
 <span class="font-medium text-on-surface ">{{ $sale->creator->name ?? 'System' }}</span>
 </div>
 </div>
 @if($sale->notes)
 <div class="md:col-span-2">
 <p class="text-sm text-on-surface-variant mb-1">Internal Notes</p>
 <p class="text-sm text-gray-700 bg-surface-container dark:bg-surface-container-highest p-3 rounded-lg border border-outline-variant ">
 {{ $sale->notes }}
 </p>
 </div>
 @endif
 </div>

 <!-- Items Table -->
 <h4 class="text-lg font-bold text-on-surface mb-4 flex items-center gap-2">
 <span class="material-symbols-outlined text-primary">shopping_bag</span> Purchased Items
 </h4>
 
 <div class="overflow-x-auto rounded-xl border border-outline-variant mb-8">
 <table class="w-full text-left border-collapse">
 <thead class="bg-surface-container dark:bg-surface-container-highest">
 <tr class="text-sm font-medium text-on-surface-variant border-b border-outline-variant ">
 <th class="py-3 px-4">Product</th>
 <th class="py-3 px-4 text-right">Price</th>
 <th class="py-3 px-4 text-center">Qty</th>
 <th class="py-3 px-4 text-right">Subtotal</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($sale->items as $item)
 <tr class="border-b border-outline-variant last:border-0 hover:bg-surface-container-low dark:hover:bg-[#3E3E3A] transition-colors">
 <td class="py-4 px-4 font-medium text-on-surface ">
 {{ $item->product_name }}
 @if($item->product_id)
 <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-blue-100 text-blue-800">
 Linked
 </span>
 @endif
 </td>
 <td class="py-4 px-4 text-right text-on-surface-variant ">
 Rp {{ number_format($item->price, 0, ',', '.') }}
 </td>
 <td class="py-4 px-4 text-center font-medium text-on-surface ">
 {{ $item->qty }}
 </td>
 <td class="py-4 px-4 text-right font-semibold text-on-surface ">
 Rp {{ number_format($item->subtotal, 0, ',', '.') }}
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>

 <!-- Grand Total -->
 <div class="flex justify-end">
 <div class="w-full md:w-1/2 bg-surface-container-low dark:bg-surface-container-highest rounded-xl p-5 border border-outline-variant ">
 <div class="flex justify-between items-center text-on-surface-variant mb-2">
 <span>Subtotal Items</span>
 <span>{{ $sale->items->sum('qty') }}</span>
 </div>
 <div class="flex justify-between items-center mt-3 pt-3 border-t border-outline-variant ">
 <span class="text-lg font-bold text-on-surface ">Grand Total</span>
 <span class="text-2xl font-black text-primary dark:text-primary-fixed-dim">
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

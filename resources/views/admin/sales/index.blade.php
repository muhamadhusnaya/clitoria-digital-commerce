<x-app-layout>
 <x-slot name="header">
 <div class="flex justify-between items-center">
 <h2 class="font-semibold text-xl text-on-surface leading-tight">
 {{ __('Sales Records') }}
 </h2>
 <a href="{{ route('admin.sales.create') }}" class="px-4 py-2 bg-primary text-white rounded-full text-sm font-medium hover:bg-primary-container transition-all flex items-center gap-1 shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)]">
 <span class="material-symbols-outlined text-sm">add</span> Add New Sale
 </a>
 </div>
 </x-slot>

 <div class="py-12">
 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 <div class="bg-surface-container-lowest dark:bg-surface-container-highest overflow-hidden shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] sm:rounded-2xl">
 <div class="p-6 text-on-surface ">
 
 @if (session('success'))
 <div class="mb-6 bg-tertiary-container text-on-tertiary-container p-4 rounded-md flex items-center gap-2">
 <span class="material-symbols-outlined">check_circle</span>
 {{ session('success') }}
 </div>
 @endif

 <!-- Desktop View -->
 <div class="hidden md:block overflow-x-auto">
 <table class="w-full text-left border-collapse">
 <thead>
 <tr class="border-b border-outline-variant text-sm font-medium text-on-surface-variant ">
 <th class="py-3 px-4">Date</th>
 <th class="py-3 px-4">Customer</th>
 <th class="py-3 px-4">Total Amount</th>
 <th class="py-3 px-4">Recorded By</th>
 <th class="py-3 px-4 text-center">Action</th>
 </tr>
 </thead>
 <tbody>
 @forelse ($sales as $sale)
 <tr class="border-b border-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest transition-colors">
 <td class="py-3 px-4">
 {{ \Carbon\Carbon::parse($sale->sale_date)->format('d M Y') }}
 </td>
 <td class="py-3 px-4 font-medium text-on-surface ">
 {{ $sale->customer_name ?: 'N/A' }}
 </td>
 <td class="py-3 px-4 text-primary font-semibold">
 Rp {{ number_format($sale->total_amount, 0, ',', '.') }}
 </td>
 <td class="py-3 px-4">
 <div class="flex items-center gap-2">
 <div class="w-6 h-6 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-on-surface-variant">
 {{ strtoupper(substr($sale->creator->name ?? '?', 0, 1)) }}
 </div>
 <span class="text-sm">{{ $sale->creator->name ?? 'System' }}</span>
 </div>
 </td>
 <td class="py-3 px-4 text-center">
 <a href="{{ route('admin.sales.show', $sale->id) }}" class="inline-flex items-center gap-1 px-3 py-1 bg-primary-fixed text-primary rounded-full text-xs font-medium hover:bg-[#D0BCFF] transition-colors">
 <span class="material-symbols-outlined text-[16px]">visibility</span> View
 </a>
 </td>
 </tr>
 @empty
 <tr>
 <td colspan="5" class="py-8 text-center text-on-surface-variant">
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
 <div class="bg-surface-container-low dark:bg-surface-container-highest p-4 rounded-xl border border-outline-variant ">
 <div class="flex justify-between items-start mb-2">
 <div>
 <div class="text-xs text-on-surface-variant mb-1">{{ \Carbon\Carbon::parse($sale->sale_date)->format('d M Y') }}</div>
 <div class="font-medium text-on-surface ">{{ $sale->customer_name ?: 'Unknown Customer' }}</div>
 </div>
 <div class="text-right">
 <div class="text-primary font-semibold">Rp {{ number_format($sale->total_amount, 0, ',', '.') }}</div>
 </div>
 </div>
 <div class="mt-4 pt-3 border-t border-outline-variant flex justify-between items-center">
 <div class="text-xs text-on-surface-variant flex items-center gap-1">
 <span class="material-symbols-outlined text-[14px]">person</span>
 {{ $sale->creator->name ?? 'System' }}
 </div>
 <a href="{{ route('admin.sales.show', $sale->id) }}" class="inline-flex items-center gap-1 px-3 py-1 bg-primary text-white rounded-full text-xs font-medium hover:bg-primary-container">
 View Details
 </a>
 </div>
 </div>
 @empty
 <div class="py-8 text-center text-on-surface-variant bg-surface-container-low dark:bg-surface-container-highest rounded-xl border border-dashed border-[#797584]">
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

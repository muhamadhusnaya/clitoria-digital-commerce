<x-app-layout>
 <x-slot name="header">
 <h2 class="font-semibold text-xl text-on-surface leading-tight">
 {{ __('Reports') }}
 </h2>
 </x-slot>

 <div class="py-12">
 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
 
 <!-- Filters & Export -->
 <div class="bg-surface-container-lowest dark:bg-surface-container-highest overflow-hidden shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] sm:rounded-2xl border border-outline-variant p-6">
 <form action="{{ route('admin.reports.index') }}" method="GET" class="flex flex-col md:flex-row gap-4 items-end">
 <div class="w-full md:w-1/3">
 <label class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
 <input type="date" name="start_date" value="{{ $startDate }}" class="w-full rounded-md border-gray-300 shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] focus:border-[#432B9F] focus:ring-[#432B9F]">
 </div>
 <div class="w-full md:w-1/3">
 <label class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
 <input type="date" name="end_date" value="{{ $endDate }}" class="w-full rounded-md border-gray-300 shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] focus:border-[#432B9F] focus:ring-[#432B9F]">
 </div>
 <div class="flex gap-2 w-full md:w-auto">
 <button type="submit" class="px-4 py-2 bg-surface-container-low text-primary rounded-lg border border-primary-fixed-dim hover:bg-primary-fixed transition-colors">
 Filter
 </button>
 <a href="{{ route('admin.reports.export', ['start_date' => $startDate, 'end_date' => $endDate]) }}" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-container transition-colors">
 Export CSV
 </a>
 </div>
 </form>
 </div>

 <!-- Summary -->
 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
 <div class="bg-surface-container-lowest dark:bg-surface-container-highest p-6 rounded-2xl border border-outline-variant ">
 <p class="text-sm text-on-surface-variant mb-1">Total Revenue</p>
 <h3 class="text-xl font-bold ">{{ $report['summary']['revenue']['formatted_total_revenue'] ?? 'Rp 0' }}</h3>
 </div>
 <div class="bg-surface-container-lowest dark:bg-surface-container-highest p-6 rounded-2xl border border-outline-variant ">
 <p class="text-sm text-on-surface-variant mb-1">Total Sales</p>
 <h3 class="text-xl font-bold ">{{ $report['summary']['sales']['sales_count'] ?? 0 }}</h3>
 </div>
 <div class="bg-surface-container-lowest dark:bg-surface-container-highest p-6 rounded-2xl border border-outline-variant ">
 <p class="text-sm text-on-surface-variant mb-1">Average Order Value</p>
 <h3 class="text-xl font-bold ">{{ $report['summary']['revenue']['formatted_average_order_value'] ?? 'Rp 0' }}</h3>
 </div>
 <div class="bg-surface-container-lowest dark:bg-surface-container-highest p-6 rounded-2xl border border-outline-variant ">
 <p class="text-sm text-on-surface-variant mb-1">Items Sold</p>
 <h3 class="text-xl font-bold ">{{ $report['summary']['sales']['total_items_sold'] ?? 0 }}</h3>
 </div>
 </div>

 <!-- Transactions List -->
 <div class="bg-surface-container-lowest dark:bg-surface-container-highest overflow-hidden shadow-[0_10px_30px_-10px_rgba(31,35,64,0.04)] sm:rounded-2xl border border-outline-variant p-6">
 <h3 class="text-lg font-bold mb-4 ">Transactions</h3>
 
 <div class="overflow-x-auto">
 <table class="w-full text-left">
 <thead>
 <tr class="border-b text-sm text-on-surface-variant">
 <th class="py-2">Date</th>
 <th class="py-2">Customer</th>
 <th class="py-2 text-right">Amount</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($report['transactions'] ?? [] as $transaction)
 <tr class="border-b last:border-0 text-sm">
 <td class="py-3 ">{{ \Carbon\Carbon::parse($transaction->sale_date)->format('Y-m-d') }}</td>
 <td class="py-3 font-medium ">{{ $transaction->customer_name ?: 'N/A' }}</td>
 <td class="py-3 text-right ">Rp {{ number_format($transaction->total_amount, 0, ',', '.') }}</td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </div>

 </div>
 </div>
</x-app-layout>

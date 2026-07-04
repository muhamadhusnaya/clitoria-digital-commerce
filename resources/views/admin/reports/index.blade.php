<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reports') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Filters & Export -->
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-800 p-6">
                <form action="{{ route('admin.reports.index') }}" method="GET" class="flex flex-col md:flex-row gap-4 items-end">
                    <div class="w-full md:w-1/3">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Start Date</label>
                        <input type="date" name="start_date" value="{{ $startDate }}" class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm focus:border-[#432B9F] focus:ring-[#432B9F]">
                    </div>
                    <div class="w-full md:w-1/3">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">End Date</label>
                        <input type="date" name="end_date" value="{{ $endDate }}" class="w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm focus:border-[#432B9F] focus:ring-[#432B9F]">
                    </div>
                    <div class="flex gap-2 w-full md:w-auto">
                        <button type="submit" class="px-4 py-2 bg-[#F4F2FF] text-[#432B9F] rounded-lg border border-[#D0BCFF] hover:bg-[#EADDFF] transition-colors">
                            Filter
                        </button>
                        <a href="{{ route('admin.reports.export', ['start_date' => $startDate, 'end_date' => $endDate]) }}" class="px-4 py-2 bg-[#432B9F] text-white rounded-lg hover:bg-[#5B46B8] transition-colors">
                            Export CSV
                        </a>
                    </div>
                </form>
            </div>

            <!-- Summary -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-[#161615] p-6 rounded-2xl border border-gray-100 dark:border-gray-800">
                    <p class="text-sm text-gray-500 mb-1">Total Revenue</p>
                    <h3 class="text-xl font-bold dark:text-white">{{ $report['summary']['revenue']['formatted_total_revenue'] ?? 'Rp 0' }}</h3>
                </div>
                <div class="bg-white dark:bg-[#161615] p-6 rounded-2xl border border-gray-100 dark:border-gray-800">
                    <p class="text-sm text-gray-500 mb-1">Total Sales</p>
                    <h3 class="text-xl font-bold dark:text-white">{{ $report['summary']['sales']['sales_count'] ?? 0 }}</h3>
                </div>
                <div class="bg-white dark:bg-[#161615] p-6 rounded-2xl border border-gray-100 dark:border-gray-800">
                    <p class="text-sm text-gray-500 mb-1">Average Order Value</p>
                    <h3 class="text-xl font-bold dark:text-white">{{ $report['summary']['revenue']['formatted_average_order_value'] ?? 'Rp 0' }}</h3>
                </div>
                <div class="bg-white dark:bg-[#161615] p-6 rounded-2xl border border-gray-100 dark:border-gray-800">
                    <p class="text-sm text-gray-500 mb-1">Items Sold</p>
                    <h3 class="text-xl font-bold dark:text-white">{{ $report['summary']['sales']['total_items_sold'] ?? 0 }}</h3>
                </div>
            </div>

            <!-- Transactions List -->
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-800 p-6">
                <h3 class="text-lg font-bold mb-4 dark:text-white">Transactions</h3>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b dark:border-gray-700 text-sm text-gray-500">
                                <th class="py-2">Date</th>
                                <th class="py-2">Customer</th>
                                <th class="py-2 text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($report['transactions'] ?? [] as $transaction)
                                <tr class="border-b dark:border-gray-800 last:border-0 text-sm">
                                    <td class="py-3 dark:text-gray-300">{{ \Carbon\Carbon::parse($transaction->sale_date)->format('Y-m-d') }}</td>
                                    <td class="py-3 font-medium dark:text-gray-200">{{ $transaction->customer_name ?: 'N/A' }}</td>
                                    <td class="py-3 text-right dark:text-white">Rp {{ number_format($transaction->total_amount, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

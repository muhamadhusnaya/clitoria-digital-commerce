<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- KPI Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- 1. Total Revenue Card -->
                <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-800 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Total Revenue</p>
                                <h3 class="text-2xl font-black text-[#432B9F] dark:text-[#EADDFF]">
                                    Rp {{ number_format($totalRevenue ?? 0, 0, ',', '.') }}
                                </h3>
                            </div>
                            <div class="w-12 h-12 rounded-xl bg-[#EADDFF] text-[#432B9F] dark:bg-[#432B9F] dark:text-[#EADDFF] flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-2xl">account_balance_wallet</span>
                            </div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                            <span class="text-green-500 flex items-center"><span class="material-symbols-outlined text-[14px]">trending_up</span></span>
                            <span>Recorded from all sales</span>
                        </div>
                    </div>
                </div>

                <!-- 2. Total Sales Card -->
                <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-800 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Total Sales</p>
                                <h3 class="text-2xl font-black text-[#151936] dark:text-white">
                                    {{ number_format($totalSales ?? 0, 0, ',', '.') }}
                                </h3>
                            </div>
                            <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 dark:bg-blue-900/40 dark:text-blue-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-2xl">shopping_cart</span>
                            </div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                            <span>Total successful transactions</span>
                        </div>
                    </div>
                </div>

                <!-- 3. Total Products Card -->
                <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-800 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Active Products</p>
                                <h3 class="text-2xl font-black text-[#151936] dark:text-white">
                                    {{ number_format($totalProducts ?? 0, 0, ',', '.') }}
                                </h3>
                            </div>
                            <div class="w-12 h-12 rounded-xl bg-orange-100 text-orange-600 dark:bg-orange-900/40 dark:text-orange-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-2xl">inventory_2</span>
                            </div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                            <span>Ready to be sold</span>
                        </div>
                    </div>
                </div>

                <!-- 4. Total Partners Card -->
                <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-800 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Partners</p>
                                <h3 class="text-2xl font-black text-[#151936] dark:text-white">
                                    {{ number_format($totalPartners ?? 0, 0, ',', '.') }}
                                </h3>
                            </div>
                            <div class="w-12 h-12 rounded-xl bg-pink-100 text-pink-600 dark:bg-pink-900/40 dark:text-pink-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-2xl">handshake</span>
                            </div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                            <span>Collaborators & Suppliers</span>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Welcome/Quick Actions Panel -->
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-800 mt-8">
                <div class="p-8">
                    <h3 class="text-xl font-bold text-[#151936] dark:text-white mb-2">
                        Welcome back, {{ Auth::user()->name ?? 'Admin' }}! 👋
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Here's what's happening with your store today. Use the quick actions below to manage your digital commerce seamlessly.
                    </p>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('admin.sales.create') }}" class="px-5 py-2.5 bg-[#432B9F] text-white rounded-full font-medium hover:bg-[#5B46B8] transition-all flex items-center gap-2 shadow-md hover:shadow-lg">
                            <span class="material-symbols-outlined text-[20px]">add_circle</span> New Sale
                        </a>
                        <a href="{{ route('admin.products.index') }}" class="px-5 py-2.5 bg-[#F4F2FF] text-[#432B9F] rounded-full font-medium hover:bg-[#EADDFF] border border-[#D0BCFF] transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">inventory</span> Manage Products
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recent Sales Widget -->
            <div class="bg-white dark:bg-[#161615] overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100 dark:border-gray-800 mt-8">
                <div class="p-6 md:p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold text-[#151936] dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-[#432B9F]">receipt_long</span> Recent Sales
                        </h3>
                        <a href="{{ route('admin.sales.index') }}" class="text-sm font-medium text-[#432B9F] dark:text-[#D0BCFF] hover:underline flex items-center gap-1">
                            View All <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-200 dark:border-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    <th class="py-3 px-4">Order ID</th>
                                    <th class="py-3 px-4">Date</th>
                                    <th class="py-3 px-4">Customer</th>
                                    <th class="py-3 px-4 text-right">Total Amount</th>
                                    <th class="py-3 px-4 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($recentSales ?? [] as $sale)
                                    <tr class="border-b border-gray-100 dark:border-gray-800 last:border-0 hover:bg-[#F4F2FF] dark:hover:bg-[#2C2C2A] transition-colors">
                                        <td class="py-3 px-4 font-medium text-[#432B9F] dark:text-[#EADDFF]">
                                            #{{ str_pad($sale->id, 5, '0', STR_PAD_LEFT) }}
                                        </td>
                                        <td class="py-3 px-4 text-sm text-gray-600 dark:text-gray-300">
                                            {{ \Carbon\Carbon::parse($sale->sale_date)->format('d M Y') }}
                                        </td>
                                        <td class="py-3 px-4 font-medium text-[#151936] dark:text-gray-200">
                                            {{ $sale->customer_name ?: 'N/A' }}
                                        </td>
                                        <td class="py-3 px-4 text-right font-semibold text-[#151936] dark:text-white">
                                            Rp {{ number_format($sale->total_amount, 0, ',', '.') }}
                                        </td>
                                        <td class="py-3 px-4 text-center">
                                            <a href="{{ route('admin.sales.show', $sale->id) }}" class="inline-flex items-center justify-center w-8 h-8 bg-[#EADDFF] text-[#432B9F] rounded-full hover:bg-[#D0BCFF] transition-colors" title="View Details">
                                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-8 text-center text-gray-500 bg-gray-50 dark:bg-[#2C2C2A] rounded-xl border border-dashed border-gray-300 dark:border-gray-600">
                                            No recent sales found. Wait for new transactions!
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

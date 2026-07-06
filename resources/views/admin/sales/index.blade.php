<x-app-layout>
    <style>
        .ambient-shadow {
            box-shadow: 0px 10px 30px rgba(31, 35, 64, 0.04);
        }
    </style>
    
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @if (session('success'))
        <div class="mb-6 bg-tertiary-container text-on-tertiary-container p-4 rounded-xl border border-tertiary-fixed font-medium text-[14px]">
            {{ session('success') }}
        </div>
    @endif

    <!-- Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
        <div>
            <nav class="flex items-center gap-2 text-on-surface-variant font-medium text-[14px] mb-2">
                <a class="hover:text-primary transition-colors" href="{{ route('admin.dashboard') ?? '#' }}">Dashboard</a>
                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                <span class="text-on-surface">Ringkasan Penjualan</span>
            </nav>
            <h2 class="font-headline-md text-[32px] font-bold text-on-surface">Ringkasan Penjualan</h2>
        </div>
        <a href="{{ route('admin.sales.create') }}" class="px-8 py-4 bg-primary-container text-on-primary-container rounded-full font-bold text-[14px] flex items-center gap-2 hover:scale-[1.02] active:scale-95 transition-all ambient-shadow">
            <span class="material-symbols-outlined">add_circle</span>
            Catat Penjualan Baru
        </a>
    </section>

    <!-- Bento Grid: Analytics -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
        <!-- Revenue Chart Card -->
        <div class="lg:col-span-2 bg-surface-container-lowest rounded-xl p-8 ambient-shadow border border-surface-container">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="font-headline-sm text-[24px] font-bold text-on-surface">Pendapatan Penjualan Bulanan</h3>
                    <p class="font-body-md text-[16px] text-on-surface-variant">Lintasan pertumbuhan untuk tahun fiskal berjalan</p>
                </div>
                <div class="flex items-center gap-2 bg-tertiary-fixed/30 text-on-tertiary-fixed-variant px-3 py-1 rounded-full font-bold text-[12px]">
                    <span class="material-symbols-outlined text-[14px]">trending_up</span>
                    +14.2%
                </div>
            </div>
            <div class="relative h-[300px] w-full">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>

        <!-- Top Selling Products Card -->
        <div class="bg-surface-container-lowest rounded-xl p-8 ambient-shadow border border-surface-container">
            <h3 class="font-headline-sm text-[24px] font-bold text-on-surface mb-2">Produk Teratas</h3>
            <p class="font-body-md text-[16px] text-on-surface-variant mb-8">Teh paling populer</p>
            
            <div class="space-y-6">
                @forelse($topProducts as $product)
                <div class="flex items-center justify-between group cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-surface-container overflow-hidden group-hover:scale-105 transition-transform flex items-center justify-center text-outline">
                            <span class="material-symbols-outlined text-[24px]">local_cafe</span>
                        </div>
                        <div>
                            <p class="font-bold text-[14px] text-on-surface">{{ $product->product_name ?: 'Tidak Diketahui' }}</p>
                            <p class="text-[12px] text-on-surface-variant">{{ number_format($product->total_qty, 0, ',', '.') }} terjual</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-[14px] text-primary">Rp {{ number_format($product->total_revenue, 0, ',', '.') }}</p>
                    </div>
                </div>
                @empty
                <div class="text-center py-4 text-on-surface-variant text-[14px]">
                    Belum ada data penjualan produk.
                </div>
                @endforelse
            </div>
            <button class="w-full mt-10 py-3 rounded-xl border border-primary text-primary font-bold text-[14px] hover:bg-primary/5 transition-colors">
                Lihat Laporan Inventaris
            </button>
        </div>
    </section>

    <!-- Sales History Table Section -->
    <section class="bg-surface-container-lowest rounded-xl ambient-shadow border border-surface-container overflow-hidden">
        <div class="px-8 py-6 flex justify-between items-center border-b border-surface-container">
            <h3 class="font-headline-sm text-[24px] font-bold text-on-surface">Riwayat Transaksi</h3>
            <div class="flex gap-2">
                <button class="p-2 rounded-lg hover:bg-surface-container text-on-surface-variant transition-colors">
                    <span class="material-symbols-outlined">filter_list</span>
                </button>
                <button class="p-2 rounded-lg hover:bg-surface-container text-on-surface-variant transition-colors">
                    <span class="material-symbols-outlined">download</span>
                </button>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-surface-container-low/50">
                    <tr>
                        <th class="px-8 py-4 font-bold tracking-widest text-[12px] text-on-surface-variant uppercase">Tanggal Transaksi</th>
                        <th class="px-8 py-4 font-bold tracking-widest text-[12px] text-on-surface-variant uppercase">Nama Pelanggan</th>
                        <th class="px-8 py-4 font-bold tracking-widest text-[12px] text-on-surface-variant uppercase">Total (Rp)</th>
                        <th class="px-8 py-4 font-bold tracking-widest text-[12px] text-on-surface-variant uppercase">Dicatat Oleh</th>
                        <th class="px-8 py-4 font-bold tracking-widest text-[12px] text-on-surface-variant uppercase text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    @forelse ($sales as $sale)
                    <tr class="hover:bg-surface-container-low/30 transition-colors">
                        <td class="px-8 py-5 text-[16px] text-on-surface whitespace-nowrap">
                            {{ \Carbon\Carbon::parse($sale->sale_date)->translatedFormat('d M Y') }}
                        </td>
                        <td class="px-8 py-5 text-[16px] text-on-surface font-medium">
                            {{ $sale->customer_name ?: 'Tidak Diketahui' }}
                        </td>
                        <td class="px-8 py-5 text-[16px] font-bold text-primary whitespace-nowrap">
                            Rp {{ number_format($sale->total_amount, 0, ',', '.') }}
                        </td>
                        <td class="px-8 py-5 text-[16px] text-on-surface-variant">
                            {{ $sale->creator->name ?? 'Sistem' }}
                        </td>
                        <td class="px-8 py-5 text-right space-x-2 whitespace-nowrap">
                            <a href="{{ route('admin.sales.show', $sale->id) }}" class="inline-block p-2 text-outline hover:text-primary hover:bg-primary-container/10 rounded-lg transition-colors" title="Lihat">
                                <span class="material-symbols-outlined">visibility</span>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-12 text-center text-on-surface-variant">
                            Belum ada riwayat transaksi penjualan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="px-8 py-4 bg-surface-container-low/30 flex items-center justify-between border-t border-surface-container">
            <div class="w-full">
                {{ $sales->links() }}
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Sales Revenue Chart
            const ctx = document.getElementById('revenueChart').getContext('2d');
            const gradient = ctx.createLinearGradient(0, 0, 0, 300);
            gradient.addColorStop(0, 'rgba(91, 70, 184, 0.2)');
            gradient.addColorStop(1, 'rgba(91, 70, 184, 0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'],
                    datasets: [{
                        label: 'Pendapatan (Rp)',
                        data: {!! json_encode(array_values($monthlyRevenue)) !!},
                        borderColor: '#5B46B8',
                        borderWidth: 3,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#5B46B8',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        tension: 0.4,
                        fill: true,
                        backgroundColor: gradient
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: '#151936',
                            padding: 12,
                            titleFont: { size: 14, family: 'Inter' },
                            bodyFont: { size: 14, family: 'Inter' },
                            cornerRadius: 8,
                            displayColors: false,
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed.y !== null) {
                                        label += new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(context.parsed.y);
                                    }
                                    return label;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#edecff',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#797584',
                                font: { size: 12, family: 'Inter' },
                                callback: function(value, index, values) {
                                    return value / 1000000 + ' Jt';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: '#797584',
                                font: { size: 12, family: 'Inter' }
                            }
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>

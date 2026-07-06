<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ReportService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExportController extends Controller
{
    protected ReportService $reportService;

    public function __construct(ReportService $reportService)
    {
        $this->reportService = $reportService;
    }

    public function exportCsv(Request $request)
    {
        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');

        $report = $this->reportService->getFullReport($startDate, $endDate);
        $transactions = $report['transactions'] ?? [];

        $fileName = 'sales_report_' . date('Y-m-d_H-i-s') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];

        return new StreamedResponse(function () use ($transactions) {
            $handle = fopen('php://output', 'w');
            
            // Add BOM for UTF-8 support in Excel
            fputs($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            // Header row
            fputcsv($handle, [
                'ID Transaksi',
                'Tanggal',
                'Nama Pelanggan',
                'Item Terjual',
                'Total Revenue (Rp)',
                'Dibuat Oleh'
            ], ';');

            // Data rows
            foreach ($transactions as $transaction) {
                fputcsv($handle, [
                    $transaction->id,
                    $transaction->sale_date,
                    $transaction->customer_name ?? 'N/A',
                    $transaction->items->sum('qty'),
                    $transaction->total_amount,
                    $transaction->creator ? $transaction->creator->name : 'System'
                ], ';');
            }

            fclose($handle);
        }, 200, $headers);
    }
}

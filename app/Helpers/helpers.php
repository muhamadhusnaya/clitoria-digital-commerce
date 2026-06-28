<?php

if (!function_exists('format_rupiah')) {
    /**
     * Format number to Rupiah currency format.
     *
     * @param float|int $angka
     * @return string
     */
    function format_rupiah($angka): string
    {
        return 'Rp ' . number_format($angka, 0, ',', '.');
    }
}

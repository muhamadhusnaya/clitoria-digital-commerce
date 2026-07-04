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

if (!function_exists('get_setting')) {
    /**
     * Get a setting value by its key.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function get_setting(string $key, $default = null)
    {
        $setting = \App\Models\Setting::where('key', $key)->first();

        return $setting ? $setting->value : $default;
    }
}

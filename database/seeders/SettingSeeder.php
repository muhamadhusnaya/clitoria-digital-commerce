<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'whatsapp_number' => '',
            'business_email' => '',
            'instagram_url' => '',
            'address' => '',
            'google_maps_embed' => '',
            'seo_meta_title' => '',
            'seo_meta_description' => '',
            'seo_meta_keywords' => '',
            'seo_og_image' => '',
        ];

        foreach ($settings as $key => $value) {
            \App\Models\Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}

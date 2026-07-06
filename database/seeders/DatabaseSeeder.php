<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Default Admin Account for Deployment
        User::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@clitoria.id')],
            [
                'name' => env('ADMIN_NAME', 'Administrator'),
                'password' => bcrypt(env('ADMIN_PASSWORD', 'secret')),
                'email_verified_at' => now(),
            ]
        );

        $this->call([
            SettingSeeder::class,
        ]);
    }
}

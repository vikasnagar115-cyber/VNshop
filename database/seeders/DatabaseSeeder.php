<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
        ]);

        User::updateOrCreate(
            ['email' => 'vikas.nagar115@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('vicky@2000'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );
    }
}

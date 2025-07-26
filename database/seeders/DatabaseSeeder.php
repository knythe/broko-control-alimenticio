<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'anthonykvite',
            'email' => 'anthonykvite@admin.com',
            'password' => bcrypt('admin2025@'),

        ]);

        // Asignar el rol de admin al usuario creado
        $user->assignRole('admin');
    }
}

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
        // User::factory(10)->create();
        \App\Models\User::create([
        'name' => 'Administrador',
        'email' => 'admin@empresa.com',
        'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
        ]);

        
        \App\Models\User::create([
        'name' => 'Professor',
        'email' => 'Professor@empresa.com',
        'password' => \Illuminate\Support\Facades\Hash::make('prof123456'),
        ]);
    }
}
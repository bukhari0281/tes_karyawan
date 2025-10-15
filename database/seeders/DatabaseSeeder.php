<?php

namespace Database\Seeders;
use App\Models\Employee;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 50 data employee menggunakan factory
        Employee::factory()->count(50)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademicYear::insert([
            [
                'name' => '2024 - 2025',
                'active' => true
            ],
            [
                'name' => '2025 - 2026',
                'active' => false
            ],
        ]);
    }
}

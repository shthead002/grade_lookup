<?php

namespace Database\Seeders;

use App\Models\Examination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExaminationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Examination::insert([
            ['name' => 'Midterm Examination'],
            ['name' => 'Final Examination'],
        ]);
    }
}

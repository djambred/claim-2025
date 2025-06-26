<?php

namespace Database\Seeders;

use App\Models\TestimonialSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestimonialSection::updateOrCreate(
            ['id' => 1],
            [
                'title' => 'Apa Kata Klien Kami',
                'description' => 'Kepuasan mereka adalah prioritas utama kami.',
            ]
        );
    }
}

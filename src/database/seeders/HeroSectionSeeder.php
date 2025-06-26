<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroSection::create([
            'title' => 'Selamat Datang di Website Kami',
            'subtitle' => 'Kami menyediakan solusi modern dan efisien untuk kebutuhan bisnis digital Anda.',
        ]);
    }
}

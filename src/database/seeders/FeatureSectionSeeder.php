<?php

namespace Database\Seeders;

use App\Models\FeatureSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeatureSection::firstOrCreate([
            'title' => 'Kenapa Memilih ClaimTech?',
            'description' => 'Platform kami dibangun dengan pilar-pilar keunggulan.',
        ]);
    }
}

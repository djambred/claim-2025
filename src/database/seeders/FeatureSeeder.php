<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::create([
            'icon' => 'heroicon-o-cog',
            'title' => 'Fleksibel & Terukur',
            'description' => 'Solusi yang dapat disesuaikan dengan skala dan kebutuhan unik bisnis Anda.',
        ]);
    }
}

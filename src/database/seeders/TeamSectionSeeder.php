<?php

namespace Database\Seeders;

use App\Models\TeamSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamSection::firstOrCreate([
            'title' => 'Tim Kami',
            'description' => 'orang-orang terbaik dibelakang layar'
        ]);
    }
}

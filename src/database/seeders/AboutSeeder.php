<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::firstOrCreate([
            'logo' => '',
            'title' => 'Claim Tech',
            'description' => 'ClaimTech didirikan pada tahun 2020 dengan misi untuk memberdayakan bisnis melalui transformasi digital. Kami percaya bahwa teknologi yang tepat dapat menjadi katalisator pertumbuhan yang luar biasa. Tim kami terdiri dari para ahli berpengalaman di bidang pengembangan perangkat lunak, keamanan siber, dan analisis data, yang berdedikasi untuk memberikan solusi inovatif dan berkualitas tinggi kepada klien kami.',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::firstOrCreate([
            'jargon' => 'Hak Cipta © 2025 - Seluruh hak cipta dilindungi oleh ClaimTech',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\ContactSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactSection::updateOrCreate(
            ['id' => 1],
            [
                'title' => 'Hubungi Kami',
                'description' => 'Kami siap mendengar dari Anda!',
            ]
        );
    }
}

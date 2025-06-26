<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'Titan CRM',
                'description' => 'Manajemen hubungan pelanggan yang intuitif.',
                'image' => '',
                'button_text' => 'Beli Sekarang',
                'button_url' => '#',
            ],
            [
                'title' => 'Helios Analytics',
                'description' => 'Platform analisis data untuk keputusan cerdas.',
                'image' => '',
                'button_text' => 'Beli Sekarang',
                'button_url' => '#',
            ],
            [
                'title' => 'Aegis Security',
                'description' => 'Solusi keamanan siber terintegrasi.',
                'image' => '',
                'button_text' => 'Beli Sekarang',
                'button_url' => '#',
            ],
            [
                'title' => 'Orion Projects',
                'description' => 'Aplikasi manajemen proyek kolaboratif.',
                'image' => '',
                'button_text' => 'Beli Sekarang',
                'button_url' => '#',
            ],
        ];

        foreach ($products as $item) {
            Product::create($item);
        }
    }
}

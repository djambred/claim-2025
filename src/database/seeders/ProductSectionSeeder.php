<?php

namespace Database\Seeders;

use App\Models\ProductSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSection::updateOrCreate([
            'id' => 1,
        ], [
            'title' => 'Produk Unggulan',
            'description' => 'Jelajahi rangkaian produk terlaris kami.',
        ]);
    }
}

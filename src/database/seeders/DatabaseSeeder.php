<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SeoSeeder::class,
            HeroSectionSeeder::class,
            AboutSeeder::class,
            TeamSectionSeeder::class,
            TeamSeeder::class,
            FeatureSectionSeeder::class,
            FeatureSeeder::class,
            ProductSectionSeeder::class,
            ProductSeeder::class,
            TestimonialSeeder::class,
            TestimonialSectionSeeder::class,
            ContactInfoSeeder::class,
            ContactMessageSeeder::class,
            ContactSectionSeeder::class,
            FooterSeeder::class,
        ]);
    }
}

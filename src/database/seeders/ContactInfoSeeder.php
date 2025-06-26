<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactInfo::updateOrCreate(
            ['id' => 1],
            [
                'address' => 'Jl. Inovasi No. 123, Jakarta, Indonesia',
                'email' => 'hello@claimtech.id',
                'phone' => '(021) 555-0123',
            ]
        );
    }
}

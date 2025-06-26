<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactMessage::create([
            'name' => 'Andi Saputra',
            'email' => 'andi@example.com',
            'message' => 'Saya tertarik dengan layanan ClaimTech. Bisa kirimkan info lebih lanjut?',
        ]);
    }
}

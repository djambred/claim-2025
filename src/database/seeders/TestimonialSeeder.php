<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'content' => 'Sejak menggunakan Helios Analytics, pengambilan keputusan kami menjadi 90% lebih cepat dan akurat. Sangat direkomendasikan!',
                'author_name' => 'Budi Santoso',
                'author_position' => 'CEO, Maju Jaya Group',
                'author_photo' => 'https://source.unsplash.com/100x100/?man,face,professional',
            ],
            [
                'content' => 'Implementasi Titan CRM sangat mulus. Tim support ClaimTech sangat responsif dan membantu kami di setiap langkah.',
                'author_name' => 'Citra Lestari',
                'author_position' => 'Manager Operasional, Sinar Abadi',
                'author_photo' => 'https://source.unsplash.com/100x100/?woman,face,business',
            ],
            [
                'content' => 'Aegis Security memberikan kami ketenangan pikiran. Sistem keamanan kami jauh lebih kuat dari sebelumnya.',
                'author_name' => 'David Wijaya',
                'author_position' => 'IT Director, Cipta Karya',
                'author_photo' => 'https://source.unsplash.com/100x100/?person,tech,professional',
            ],
        ];

        foreach ($testimonials as $data) {
            Testimonial::create($data);
        }
    }
}

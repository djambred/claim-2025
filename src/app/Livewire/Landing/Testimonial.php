<?php

namespace App\Livewire\Landing;

use App\Models\Testimonial as ModelsTestimonial;
use App\Models\TestimonialSection;
use Livewire\Component;

class Testimonial extends Component
{
    public string $title = 'Apa Kata Klien Kami';
    public string $description = 'Kepuasan mereka adalah prioritas utama kami';
    public $testimonials;

    public function mount()
    {
        $section = TestimonialSection::first();
        $this->title = $section->title ?? $this->title;
        $this->description = $section->description ?? $this->description;

        $this->testimonials = ModelsTestimonial::all();
    }
    public function render()
    {
        return view('livewire.landing.testimonial');
    }
}

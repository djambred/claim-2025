<?php

namespace App\Livewire\Landing;

use App\Models\HeroSection;
use Livewire\Component;

class Hero extends Component
{
    public $hero;

    public function mount()
    {
        $this->hero = HeroSection::first(); // Ambil data pertama
    }
    public function render()
    {
        return view('livewire.landing.hero');
    }
}

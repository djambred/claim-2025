<?php

namespace App\Livewire\Landing;

use App\Models\About as ModelsAbout;
use Livewire\Component;

class About extends Component
{
    public ?ModelsAbout $about = null;

    public function mount()
    {
        $this->about = ModelsAbout::first();
    }
    public function render()
    {
        return view('livewire.landing.about');
    }
}

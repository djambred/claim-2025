<?php

namespace App\Livewire\Landing;

use App\Models\FeatureSection;
use Livewire\Component;
use App\Models\Feature as ModelFeature;

class Feature extends Component
{

    public string $title = 'Kenapa Memilih Kami?';
    public string $description = '';
    public $features;

    public function mount()
    {
        $section = FeatureSection::first();
        $this->title = $section->title ?? $this->title;
        $this->description = $section->description ?? '';
        $this->features = ModelFeature::all();
    }
    public function render()
    {
        return view('livewire.landing.feature');
    }
}

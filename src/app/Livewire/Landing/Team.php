<?php

namespace App\Livewire\Landing;

use App\Models\TeamSection;
use Livewire\Component;
use App\Models\Team as ModelTeam;

class Team extends Component
{

    public string $title = 'Tim Profesional Kami';
    public string $description = 'Orang-orang di balik inovasi ClaimTech.';
    public $teams;

    public function mount()
    {
        $section = TeamSection::first();
        $this->title = $section->title ?? $this->title;
        $this->description = $section->description ?? $this->description;
        $this->teams = ModelTeam::all();
    }
    public function render()
    {
        return view('livewire.landing.team');
    }
}

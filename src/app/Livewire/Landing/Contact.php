<?php

namespace App\Livewire\Landing;

use App\Models\ContactInfo;
use App\Models\ContactMessage;
use App\Models\ContactSection;
use Livewire\Component;

class Contact extends Component
{
    public $title = 'Hubungi Kami';
    public $description = 'Kami siap mendengar dari Anda!';
    public $info;

    public $name, $email, $message;

    public function mount()
    {
        $section = ContactSection::first();
        $this->title = $section->title ?? $this->title;
        $this->description = $section->description ?? $this->description;

        $this->info = ContactInfo::first();
    }

    public function send()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        ContactMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Pesan Anda telah terkirim!');

        $this->reset(['name', 'email', 'message']);
    }
    public function render()
    {
        return view('livewire.landing.contact');
    }
}

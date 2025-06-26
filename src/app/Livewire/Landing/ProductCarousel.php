<?php

namespace App\Livewire\Landing;

use App\Models\Product as ModelProduct;
use App\Models\ProductSection;
use Livewire\Component;

class ProductCarousel extends Component
{

    public string $title = 'Produk Unggulan';
    public string $description = 'Jelajahi rangkaian produk terlaris kami';
    public $products;

    public function mount()
    {
        $section = ProductSection::first();
        $this->title = $section->title ?? $this->title;
        $this->description = $section->description ?? $this->description;

        $this->products = ModelProduct::all();
    }

    public function render()
    {
        return view('livewire.landing.product-carousel');
    }
}

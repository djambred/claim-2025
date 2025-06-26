<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['id'];

    public function getImageUrlAttribute()
    {
        return $this->image
            ? Storage::url($this->image)
            : asset('images/product.png');
    }
}

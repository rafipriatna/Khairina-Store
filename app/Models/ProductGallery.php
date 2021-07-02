<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $fillable = [
        'photos', 'products_id', 'color', 'description'
    ];

    protected $hidden = [
    ];
    
      public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');

    }
}

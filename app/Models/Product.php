<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'price', 'stock', 'categories_id'];
    // protected $guarded = []; tambein podemos usar esto pero no es recomnedado
    public function categories()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}

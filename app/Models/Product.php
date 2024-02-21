<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['name', 'description', 'img', 'slug', 'category_id', 'brand_id', 'content', 'price', 'code', 'quantity', 'sold_quantity'];

    public function category() {
        return $this->belongsTo("App\Models\Category");
    }

    public function brand() {
        return $this->belongsTo("App\Models\Brand");
    }
}

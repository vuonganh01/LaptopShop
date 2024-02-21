<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;
    protected $table = 'Vuong_Anh-project-itplus.order_items';
    protected $fillable = ['order_id', 'product_id', 
    'product_name', 'product_image', 'product_price', 
    'product_quantity'];

    public function product() {
        return $this->belongsTo("App\Models\Product");
    }

    public function order() {
        return $this->belongsTo("App\Models\Order");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'Vuong_Anh-project-itplus.orders';
    use HasFactory;
    protected $fillable = ['customer_id', 'customer_name', 
    'customer_phone', 'customer_email', 'customer_address', 
    'payment_method', 'total_money', 'total_product', 'status', 'code'];

    public function customer() {
        return $this->belongsTo("App\Models\Customer");
    }

    public function order_items() {
        return $this->hasMany("App\Models\Order_item");
    }
}

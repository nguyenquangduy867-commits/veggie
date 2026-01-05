<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
       protected $fillable = [
        'user_id',
        'total_price',
        'status',
        'shipping_address_id',
    ];

    // Mỗi Order có nhiều OrderItem
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Order thuộc về 1 User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //
    public function shippingAddress(){

        return $this->belongsTo(ShippingAddress::class);
    }
    //
    public function payment(){

        return $this->hasOne(Payment::class);
    }
    //
        public function orderStatusHistory()
    {
        return $this->hasMany(OrderStatusHistory::class);
    }


}

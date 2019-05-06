<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'order_number',
        'payer_id',
        'product_id',
        'supplier_id',
        'city_id',
        'deliver_longitude',
        'deliver_latitude',
        'from_date',
        'to_date',
        'from_time',
        'to_time',
        'amount',
        'online_payment',
        'status',
        'is_updated',
        'is_canceled',
        'total',
        'tax',
        'total_after_tax',
        'canceled_at',
        'address'
    ];
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class);
    }
}

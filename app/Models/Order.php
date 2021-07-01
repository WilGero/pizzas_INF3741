<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = [
        'user_id',
        'customer_id',
        'state'

    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('amount');
    }
}

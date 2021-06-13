<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = "stocks";
    protected $fillable = [
        'supplie_id',
        'product_id'
    ];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    public function supplie()
    {
        return $this->belongsTo('App\Supplie');
    }
}

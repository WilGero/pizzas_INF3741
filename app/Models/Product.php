<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        'name',
        'price',
        'type_id'
    ];
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }
}

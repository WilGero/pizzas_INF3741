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
        'description'
    ];
    public function supplies()
    {
        return $this->belongsToMany('App\Models\Supplie');
    }
    public function orders()
    {
    return $this->belongsToMany('App\Models\Order');
    }
}

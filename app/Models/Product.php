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
        return $this->belongsToMany(Supplie::class)->withPivot('amount');
    }
    public function orders()
    {
    return $this->belongsToMany(Order::class)->withPivot('amount');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplie extends Model
{
    use HasFactory;
    protected $table = "supplies";
    protected $fillable = [
        'name',
        'price',
        'description',
    ];
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}

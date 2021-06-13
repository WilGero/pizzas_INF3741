<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'direction'
    ];
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}

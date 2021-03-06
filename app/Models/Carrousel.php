<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrousel extends Model
{
    protected $fillable = ['title','description','urlimage'];
    use HasFactory;
}

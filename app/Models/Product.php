<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
=======
        'id_distributor',
>>>>>>> fb6f8d9 (modul 4)
        'name',
        'price',
        'category',
        'description',
        'image'
    ];
}

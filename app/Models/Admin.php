<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
use Illuminate\Auth\Middleware\Authenticate;
=======
>>>>>>> fb6f8d9 (modul 4)
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'username', 'email', 'password'
    ];
<<<<<<< HEAD
}
=======
}
>>>>>>> fb6f8d9 (modul 4)

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
=======
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
>>>>>>> fb6f8d9 (modul 4)

class AdminController extends Controller
{
    public function dashboard()
    {
        $products = Product::count();
        $users = User::count();

        return view('pages.admin.index', compact('products', 'users'));
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> fb6f8d9 (modul 4)

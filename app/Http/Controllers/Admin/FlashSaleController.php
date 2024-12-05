<?php

<<<<<<< HEAD
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FlashSale;
use App\Models\Product;
=======
namespace App\Http\Controllers;

>>>>>>> fb6f8d9 (modul 4)
use Illuminate\Http\Request;

class FlashSaleController extends Controller
{
<<<<<<< HEAD
    public function create()
    {
        $products = Product::all();
        return view('pages.admin.flash-sale.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'discounted_price' => 'required|numeric',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
        ]);

        FlashSale::create($request->all());

        return redirect()->route('flash-sale.create')->with('success', 'Flash Sale berhasil ditambahkan!');
    }
}

=======
    //
}
>>>>>>> fb6f8d9 (modul 4)

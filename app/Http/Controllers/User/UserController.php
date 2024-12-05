<?php

namespace App\Http\Controllers\User;

<<<<<<< HEAD
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
=======
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
>>>>>>> fb6f8d9 (modul 4)
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
<<<<<<< HEAD
    /**
     * Menampilkan halaman utama dengan daftar produk.
     *
     * @return \Illuminate\View\View
     */
=======
>>>>>>> fb6f8d9 (modul 4)
    public function index()
    {
        $products = Product::all();

        return view('pages.user.index', compact('products'));
    }

<<<<<<< HEAD
    /**
     * Menampilkan detail produk berdasarkan ID.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function detail_product($id)
    {
        // Mencari produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Menampilkan halaman detail produk
        return view('pages.user.detail', compact('product'));
    }

    /**
     * Melakukan pembelian produk oleh user.
     *
     * @param int $productId
     * @param int $userId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function purchase($productId, $userId)
    {
        // Mencari produk dan pengguna berdasarkan ID
        $product = Product::findOrFail($productId);
        $user = User::findOrFail($userId);

        // Mengecek apakah user memiliki poin yang cukup untuk membeli produk
        if ($user->point >= $product->price) {
            // Mengurangi poin pengguna
            $totalPoints = $user->point - $product->price;

            // Memperbarui poin pengguna di database
=======
    public function fs()
    {
        $products = Product::where('discount', '>', 0)->get(); // Get products with discounts

        return view('pages.user.fs', compact('products'));
    }

    public function detail_product($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.user.detail', compact('product'));
    }

    public function purchase($productId, $userId)
    {
        $product = Product::findOrFail($productId);
        $user = User::findOrFail($userId);

        if ($user->point > $product->price) {
            $totalPoints = $user->point - $product->price;

>>>>>>> fb6f8d9 (modul 4)
            $user->update([
                'point' => $totalPoints,
            ]);

<<<<<<< HEAD
            // Menampilkan pesan sukses
            Alert::success('Berhasil!', 'Produk berhasil dibeli!');
            return redirect()->back();
        } else {
            // Menampilkan pesan error jika poin tidak cukup
            Alert::error('Gagal!', 'Poin Anda tidak cukup!');
            return redirect()->back();
        }
    }
}
=======
            Alert::success('Berhasil!', 'Produk berhasil dibeli!');
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Point anda tidak cukup!');
            return redirect()->back();
        }
    }
}
>>>>>>> fb6f8d9 (modul 4)

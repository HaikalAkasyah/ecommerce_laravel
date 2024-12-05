<?php

namespace App\Http\Controllers\Admin;

<<<<<<< HEAD
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Menampilkan daftar produk.
     */
    public function index()
    {
        $products = Product::all();
        confirmDelete('Hapus Data', 'Apakah anda yakin ingin menghapus data ini');
        return view('pages.admin.product.index', compact('products'));
    }

    /**
     * Menampilkan form untuk menambah produk.
     */
    public function create()
    {
        return view('pages.admin.product.create');
    }

    /**
     * Menampilkan detail produk berdasarkan ID.
     */
    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.admin.product.detail', compact('product'));
    }

    /**
     * Menyimpan data produk baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
=======
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $data = DB::table('distributors')
        ->join('products', 'distributors.id', '=', 'products.id_distributor')
        ->select('distributors.*', 'products.*')
        ->get();

        confirmDelete('Hapus Data!', 'Apakah anda yakin ingin menghapus data ini?');

        return view('pages.admin.product.index', compact('data'));
    }

    public function create()
    {
        $distributor = Distributor::all();

        return view('pages.admin.product.create', compact('distributor'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_distributor' => 'required|numeric',
>>>>>>> fb6f8d9 (modul 4)
            'name' => 'required',
            'price' => 'numeric|required',
            'category' => 'required',
            'description' => 'required',
<<<<<<< HEAD
            'image' => 'required|mimes:png,jpeg,jpg'
        ]);

        // Jika validasi gagal, tampilkan pesan error
        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Proses upload gambar jika ada
=======
            'image' => 'required|image|mimes:PNG,png,jpeg,jpg',
            'discount' => 'nullable|numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back();
        }

>>>>>>> fb6f8d9 (modul 4)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/', $imageName);
<<<<<<< HEAD

            // Menyimpan data produk baru ke database
            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'category' => $request->category,
                'description' => $request->description,
                'image' => $imageName
            ]);

            // Jika produk berhasil ditambahkan, tampilkan pesan sukses
            if ($product) {
                Alert::success('Berhasil!', 'Produk berhasil ditambahkan!');
                return redirect()->route('admin.product');
            }
        }

        // Jika gagal, tampilkan pesan error
        Alert::error('Gagal!', 'Produk gagal ditambahkan!');
        return redirect()->back();
    }

    /**
     * Menampilkan form untuk mengedit produk.
     */
    public function edit($id)
    {
        // Menemukan produk berdasarkan ID
        $product = Product::findOrFail($id);
        return view('pages.admin.product.edit', compact('product'));
    }

    /**
     * Mengupdate data produk.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'numeric|required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpeg,jpg'
        ]);

        // Jika validasi gagal, tampilkan pesan error
        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Menemukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            // Menghapus gambar lama jika ada
            $oldPath = public_path("images/{$product->image}");
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            // Menyimpan gambar baru
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/', $imageName);
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $imageName = $product->image;
        }

        // Memperbarui data produk
        $product->update([
=======
        }

        $product = Product::create([
            'id_distributor' => $request->id_distributor,
>>>>>>> fb6f8d9 (modul 4)
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $imageName,
<<<<<<< HEAD
        ]);

        // Menampilkan pesan berhasil atau gagal
=======
            'discount' => $request->discount ?? 0,
        ]);

        if ($product) {
            Alert::success('Berhasil!', 'Produk berhasil ditambahkan!');
            return redirect()->route('admin.product');
        } else {
            Alert::error('Gagal', 'Produk gagal ditambahkan');
            return redirect()->back();
        }
    }

    public function detail($id)
    {
        $data = DB::table('distributors')
        ->join('products', 'distributors.id', '=', 'products.id_distributor')
        ->select('products.*', 'distributors.*')
        ->where('products.id', '=', $id)
        ->first();

        return view('pages.admin.product.detail', compact('data'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $distributor = Distributor::all();

        return view('pages.admin.product.edit', compact('product', 'distributor'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_distributor' => 'required|numeric',
            'name' => 'required',
            'price' => 'numeric|required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpeg,jpg',
            'discount' => 'nullable|numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back();
        }

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $oldPath = public_path('images/' . $product->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/', $imageName);
        } else {
            $imageName = $product->image;
        }

        $product->update([
            'id_distributor' => $request->id_distributor,
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $imageName,
            'discount' => $request->discount ?? 0,
        ]);

>>>>>>> fb6f8d9 (modul 4)
        if ($product) {
            Alert::success('Berhasil!', 'Produk berhasil diperbarui!');
            return redirect()->route('admin.product');
        } else {
            Alert::error('Gagal!', 'Produk gagal diperbarui!');
            return redirect()->back();
        }
    }

<<<<<<< HEAD
    /**
     * Menghapus data produk berdasarkan ID.
     */
    public function delete($id)
    {
        // Menemukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Menghapus gambar lama jika ada
        $oldPath = public_path('images/' . $product->image);
        if (File::exists($oldPath)) {
            File::delete($oldPath);
        }

        // Menghapus produk dari database
        $productDeleted = $product->delete();
        if ($productDeleted) {
            Alert::success('Berhasil!', 'Produk berhasil dihapus!');
=======
    public function delete($id)
    {

        $product = Product::findOrFail($id);
        $product->delete();

        if ($product) {
            Alert::success('Berhasil', 'Produk berhasil dihapus!');
>>>>>>> fb6f8d9 (modul 4)
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Produk gagal dihapus!');
            return redirect()->back();
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> fb6f8d9 (modul 4)

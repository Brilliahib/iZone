<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        // $product = Product::find($id);
        
        if (!$product) {
            abort(404); // Produk tidak ditemukan, tampilkan halaman 404
        }
        
        // Ambil posting lainnya kecuali posting yang sedang ditampilkan
        $otherProduct = Product::where('id', '!=', $product->id)
                            ->orderBy('created_at', 'desc')
                            ->take(6)
                            ->latest()
                            ->get();

        return view('productdetail', [
            "title" => $product->nama,
            "product" => $product,
            "otherProducts" => $otherProduct
        ]);
    }
}

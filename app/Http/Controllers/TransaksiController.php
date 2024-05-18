<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransaksiController extends Controller
{
    public function index(Product $product){
        return view('transaksi', [
            'product'=>$product
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'product_id' => 'required',
            'alamat' => 'required',
            'no_seluler' => 'required',
            'metode_pembayaran' => 'required',
        ]);
    
        $validatedData['no_pembayaran'] = Str::random(8);
    
        Transaksi::create($validatedData);
    
        // Dapatkan data pemesanan yang baru saja dibuat
        $pemesanan = Transaksi::latest()->first();
    
        // Tampilkan halaman pembayaran dengan menggunakan metode show() dari PaymentController
        return view('home');
    }
}

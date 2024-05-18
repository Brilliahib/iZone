<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Mengambil produk terbaru
    $latestProducts = Product::latest()->take(6)->get();

    // Mengambil kategori berdasarkan nama
    $guitarCategory = Category::where('name', 'guitar')->first();
    $drumCategory = Category::where('name', 'drum')->first();
    $soundCategory = Category::where('name', 'sound')->first();

    // Mengambil produk berdasarkan kategori jika kategori ditemukan
    $guitarProducts = $guitarCategory ? Product::where('category_id', $guitarCategory->id)->latest()->take(6)->get() : collect();
    $drumProducts = $drumCategory ? Product::where('category_id', $drumCategory->id)->latest()->take(6)->get() : collect();
    $soundProducts = $soundCategory ? Product::where('category_id', $soundCategory->id)->latest()->take(6)->get() : collect();

    return view('home', [
        "title" => "Brilliahib",
        'latestProducts' => $latestProducts,
        'guitarProducts' => $guitarProducts,
        'drumProducts' => $drumProducts,
        'soundProducts' => $soundProducts
    ]);
});
Route::get('product/{product:id}', [ProductController::class, 'show']);
Route::resource('product/{product:id}/checkout', TransaksiController::class);
// Route::get('product/{product:id}/checkout', [TransaksiController::class, 'checkout']);


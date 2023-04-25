<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $categories = Categories::all();
    $products = Products::with('users')->paginate(6);
    return view('welcome',['title'=>'Calonbuku'],compact('categories','products',));
});

Route::get('/dashboard', function () {
    return view('dashboard',['title'=>'Dashboard']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::resource('account',ProfileController::class);
    Route::put('account/update_profile/{id}',[ProfileController::class,'update_profile'])->name('account.update_profile');
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductsController::class);
    Route::get('marketplace',[MarketplaceController::class,'index'])->name('marketplace.index');
    Route::get('cart',[CartController::class,'index'])->name('cart.index');
    Route::post('cart/add_to_cart',[CartController::class,'add_to_cart'])->name('cart.store');
    Route::delete('cart/{id}',[CartController::class,'destroy'])->name('cart.destroy');
    Route::get('load_cart',[CartController::class,'load_cart'])->name('load_cart');
    Route::post('tambah_count_cart',[CartController::class,'tambah_count_cart'])->name('tambah_count_cart');
    Route::post('kurang_count_cart',[CartController::class,'kurang_count_cart'])->name('kurang_count_cart');
    Route::get('checkout',[CartController::class,'checkout'])->name('checkout');
});

require __DIR__.'/auth.php';

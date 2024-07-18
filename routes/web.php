<?php

use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\ProductController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('index', [ProductController::class, 'index'])->name('home');

Route::get('/detail/{id}', function ($id) {
    $products = DB::table('products')
        ->where('id', $id)
        ->first();

    return view('detail', compact('products'));
})->name('detail');
Route::get('products/{cate_id}', function ($cate_id) {
    $products = DB::table('products')
    ->join('categories', 'category_id', '=', 'categories.id')
        ->where('category_id', '=', $cate_id)
        ->get();
// dd($books);
    return view('productbycate', compact('products'));
})->name('product-cate');
// Route::get('/about', function () {
//     return view('about');
// });
Route::prefix('category')->group(function(){
    Route::get('/list',[ProductController::class,'index']) ->name('category.index');
});

// tìm kiếm sản phẩm 
Route::post('/search', [ProductController::class, 'search'])->name('category.search');


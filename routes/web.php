<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::get('/', function () {
   // return view('home.index');
//});


Route::get('/', [HomeController::class,'home']);

Route::get('/dashboard', [HomeController::class,'login_home'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/menu_order', [HomeController::class,'menu_order'])
->middleware(['auth', 'verified']);

//Route::get('/dashboard', function () {
    //return view('home.index');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard', [HomeController::class,'index'])
-> middleware(['auth','admin']);

route::get('view_kategori', [AdminController::class,'view_kategori'])
-> middleware(['auth','admin']);

route::post('add_kategori', [AdminController::class,'add_kategori'])
-> middleware(['auth','admin']);

route::get('delete_kategori/{id}', [AdminController::class,'delete_kategori'])
-> middleware(['auth','admin']);

route::get('edit_kategori/{id}', [AdminController::class,'edit_kategori'])
-> middleware(['auth','admin']);

route::post('update_kategori/{id}', [AdminController::class,'update_kategori'])
-> middleware(['auth','admin']);

route::get('add_produk', [AdminController::class,'add_produk'])
-> middleware(['auth','admin']);

route::post('upload_produk', [AdminController::class,'upload_produk'])
-> middleware(['auth','admin']);

route::get('view_produk', [AdminController::class,'view_produk'])
-> middleware(['auth','admin']);

route::get('delete_produk/{id}', [AdminController::class,'delete_produk'])
-> middleware(['auth','admin']);

route::get('update_produk/{id}', [AdminController::class,'update_produk'])
-> middleware(['auth','admin']);

route::post('edit_produk/{id}', [AdminController::class,'edit_produk'])
-> middleware(['auth','admin']);

route::get('cari_produk', [AdminController::class,'cari_produk'])
-> middleware(['auth','admin']);

route::get('produk_detail/{id}', [HomeController::class,'produk_detail']);

route::get('add_keranjang/{id}', [HomeController::class,'add_keranjang'])
->middleware(['auth', 'verified']);

route::get('menu_keranjang', [HomeController::class,'menu_keranjang'])
->middleware(['auth', 'verified']);




route::post('confirm_order', [HomeController::class,'confirm_order'])
->middleware(['auth', 'verified']);

route::get('view_pesanan', [AdminController::class,'view_pesanan'])
->middleware(['auth', 'admin']);

route::get('otw/{id}', [AdminController::class,'otw'])
->middleware(['auth', 'admin']);

route::get('dikirim/{id}', [AdminController::class,'dikirim'])
->middleware(['auth', 'admin']);
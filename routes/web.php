<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminDashboardController;



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});


Route::get('login',function(){
    return view('login');
});
Route::get('dashboard',function(){
    return view('dashboard');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


 Route::get('/admin/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');

 Route::get('/admin/user', function () {
     return view('user');
 })->name('user');


// home & produk
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin/product', [ProductController::class, 'index'])->name('product');

Route::post('/bayar', [HomeController::class, 'pay'])->name('bayar');
Route::get('/bayar/sukses/{snap_token}', [HomeController::class, 'pay_success'])->name('bayar_sukses');

//home fitur
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\UserMachineController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ForumController;

//tentangkami
Route::get('/tentangkami', [TentangKamiController::class, 'index'])->name('tentangkami');
//kontak admin
Route::get('/contact', [AdminController::class, 'dashboard'])->name('contact');
//kontak pengguna
Route::get('/kontak', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
//alat mesin
Route::get('/alatmesin', [UserMachineController::class, 'alatmesin'])->name('alatmesin');
Route::get('/tabelalatmesin', [UserMachineController::class, 'index'])->name('tabelalatmesin');
Route::get('/machines/{id}', [MachineController::class, 'show'])->name('machines.show');
Route::get('/machines/1', [MachineController::class, 'show'])->name('machines.show');

Route::resource('machines', MachineController::class);
//book
  Route::get('/book', [AdminController::class, 'book'])->name('book');
Route::get('/tabelbook', [AdminController::class, 'index'])->name('tabelbook');
Route::resource('books', BookController::class);
//forum

Route::get('/forumdiskusi', [UserMachineController::class, 'forum'])->name('forumdiskusi');
Route::get('/detail.detailmesinbubut', [UserMachineController::class, 'detail'])->name('detail.detailmesinbubut');


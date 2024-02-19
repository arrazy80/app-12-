<?php

use App\Http\Controllers\RegisterController;
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

Route::get('dashboardAdmin', function () {
    return view('dashboardAdmin');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('register', function () {
    return view('auth.register');
});


Route::get('partial.table', function () {
    return view('partial.table');
});

Route::get('partial.edit', function () {
    return view('partial.edit');
});

Route::get('partial.create', function () {
    return view('partial.create');
});

Route::get('kategori.table', function () {
    return view('kategori.table');
});

Route::get('kategori.create', function () {
    return view('kategori.create');
});
Route::get('kategori.edit', function () {
    return view('kategori.edit');
});

Route::get('buku.detail', function () {
    return view('buku.detail');
});

Route::get('buku.ulasan', function () {
    return view('buku.ulasan');
});
Route::get('buku.buku', function () {
    return view('buku.buku');
});

Route::get('peminjaman.table', function () {
    return view('peminjaman.table');
});

Route::get('koleksi.table', function () {
    return view('koleksi.table');
});

Route::get('dashboardPeminjam', function () {
    return view('dashboardPeminjam');
});

Route::get('dashboardPetugas', function () {
    return view('dashboardPetugas');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::view('home', 'home')-> name('home');


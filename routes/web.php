<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RedirectController;
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

Route::get('login', function () {
    return view('auth.login');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('welcome', function () {
    return view('welcome');
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





// Route::get('auth/login', [AuthControllerroller::class, 'login'])->name('auth.login')->middleware('guest');

// Route::post('auth/login', [AuthController::class, 'authenticate'])->name('auth.authenticate')->middleware('guest');

// Route::get('auth/register', [AuthController::class, 'register'])->name('auth.register')->middleware('guest');

// Route::post('auth/register', [AuthController::class, 'store'])->name('auth.store')->middleware('guest');

Route::group(['middleware' => 'guest'], function () {
    Route::get('auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('auth/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    Route::get('auth/register', [AuthController::class, 'register'])->name('auth.login');
    Route::post('auth/regist', [AuthController::class, 'regist'])->name('register.action');
});

Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dasboard');
});


Route::get('/', [HomeController::class, 'index']);










// Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('guest');



// Route::get('/register', [RegisterController::class, 'create'])->name('register');
// Route::post('/register', [RegisterController::class, 'store']);

// Route::view('home', 'home')-> name('home');

// Route::post('/logout', function () {
//     auth()->logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();

//     return redirect('/');

// })->name('logout');

// // Route::get('/login', [RegisterController::class, 'login'])->name('login');

// Route::post('/login', [LoginController::class, 'authenicate'])->name('login');

// Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register')->middleware('guest');
// Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register')->middleware('guest');
// Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
// Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('login')->middleware('guest');


// Route::post('/logout', function () {
//     auth()->logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();

//     return redirect('/');
// })->name('logout')->middleware('auth');
// Route::view('/home', 'home')->name('home')->middleware('auth');

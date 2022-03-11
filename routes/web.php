<?php

use App\Models\User;
use App\Models\DetailPemesanan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BestSellerController;
use App\Http\Controllers\DaftarBukuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DataAnggotaController;
use App\Http\Controllers\DataKategoriController;
use App\Http\Controllers\DataPeminjamanController;
use App\Http\Controllers\DetailPemesananController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\PopularController;
use App\Models\Buku;
use App\Models\Peminjaman;

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
    return view('utama.index');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('admin.index-dash', [
        'title' => 'Home' ,
        'users' => User::latest()->get(),
        'user_count' => User::all()->count(),
        'buku_count' => Buku::all()->count(),
        'peminjaman_count' => Peminjaman::where('status', 'Belum Dikembalikan')->count(),
        'pengembalian_count' => Peminjaman::where('status', 'Sudah Dikembalikan')->count()

    ]);
})->middleware('auth');

Route::resource('/buku', BukuController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/user', UserController::class);
Route::resource('/peminjaman', PeminjamanController::class);

Route::get('/profile', function () {
    return view('admin.profile', [
        'title' => 'Profile' ,
        'user' => User::latest()->get()
    ]);
});

Route::get('/pengembalian', [PengembalianController::class, 'index'])->middleware('auth');



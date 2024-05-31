<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\SisController;
use App\Http\Controllers\SiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('template2', function () {
    return view('admin.template');
});


Route::prefix('admin')->controller(SisController::class)->group(function () {
	Route::get('/coba', 'index');
    Route::get('/tabel', 'tabel');
});

Route::get('tampilan/{nilai}', function ($nilai) {
    return 'nilai saya adalah '.$nilai;
});

Route::get('penjumlahan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil Penjumlahan : '. $nilai1 + $nilai2;
});

Route::get('pengurangan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil Pengurangan : '. $nilai1 - $nilai2;
});

Route::get('perkalian/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil Perkalian : '. $nilai1 * $nilai2;
});

Route::get('pembagian/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil Pembagian : '. $nilai1 / $nilai2;
});

Route::get('/bahasa', function (Request $request) {
    $bahasapemrograman = ['php', 'java', 'c', 'javascript', 'dart'];
    return $bahasapemrograman;
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/tabel', function (Request $request) {
    $data = ['bakwan','tempe','tahu','mendoan','kentang'];
    return view('table', compact('data'));
});

Route::get('/index', function () {
    return view('tpmdua.index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function ()  {
    return view('register');
});

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);
Route::resource('post', PostsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

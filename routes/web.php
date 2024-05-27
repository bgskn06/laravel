<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return "ini laravel saya";
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

Route::get('/bahasa', function () {
    $bahasapemrograman = ['php', 'java', 'c', 'javascript', 'dart'];
    $String = implode(', ',$bahasapemrograman);
    return "Beberapa bahasa pemrograman antara lain : " . $String;
});
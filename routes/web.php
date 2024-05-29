<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return view('coba');
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

Route::get('/table', function (Request $request) {
    $data = ['bakwan','tempe','tahu','mendoan','kentang'];
    return view('table', compact('data'));
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
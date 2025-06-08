<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin-dashboard', function () {
    return view('dashboard-admin');
})->name('dashboardAdmin');

Route::get('/admin-hewan', function () {
    return view('admin.hewan.index');
})->name('hewanAdmin');

Route::get('/admin-kategori', function () {
    return view('admin.kategori.index');
})->name('kategoriAdmin');

Route::get('/admin-shelter', function () {
    return view('admin.shelter.index');
})->name('shelterAdmin');

Route::get('/login', function () {
    return view('login');
});
Route::get('/kucing', function () {
    return view('kucing.index');
})->name('kucing');

Route::get('/anjing', function () {
    return view('anjing.index');
})->name('anjing');

Route::get('/shelter_rescue', function () {
    return view('shelter_rescue.index');
})->name('shelter_rescue');


Route::get('/kelinci', function () {
    return view('kelinci.index');
})->name('kelinci');


Route::get('/marmut', function () {
    return view('marmut.index');
})->name('marmut');



Route::get('/hamster', function () {
    return view('hamster.index');
})->name('hamster');


Route::get('/tips-memilih-hewan-peliharaan', function () {
    return view('tips.tips-memilih-hewan-peliharaan');
})->name('tips-memilih-hewan-peliharaan');


Route::get('/tips-merawat-anak-kucing', function () {
    return view('tips.tips-merawat-anak-kucing');
})->name('tips-merawat-anak-kucing');

Route::get('/tips-memilih-shelter', function () {
    return view('tips.tips-memilih-shelter');
})->name('tips-memilih-shelter');

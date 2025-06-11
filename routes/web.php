<?php

use App\Http\Controllers\anjingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\kelinciController;
use App\Http\Controllers\kucingController;
use App\Http\Controllers\marmutController;
use App\Http\Controllers\ShelterController;
use App\Http\Controllers\shelterhomeController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'role:admin'])->group(function () {
    
Route::get('/admin-dashboard', [DashboardController::class, 'admin'])->name('dashboardAdmin');

Route::get('/home', [DashboardController::class, 'home'])->name('home');

Route::resource('kategoriAdmin', kategoriController::class);

Route::resource('shelterAdmin', ShelterController::class);

Route::resource('hewanAdmin', HewanController::class);


});

Route::middleware(['auth', 'role:admin,customer'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'customer']);
    
   Route::resource('kucing', kucingController::class);

     Route::resource('anjing', anjingController::class);

    Route::resource('kelinci', kelinciController::class);

     Route::resource('marmut', marmutController::class);

    Route::resource('hamster', marmutController::class);

  Route::resource('shelters', shelterhomeController::class);


    Route::get('/tips-memilih-hewan-peliharaan', function () {
        return view('tips.tips-memilih-hewan-peliharaan');
    })->name('tips-memilih-hewan-peliharaan');

    Route::get('/tips-merawat-anak-kucing', function () {
        return view('tips.tips-merawat-anak-kucing');
    })->name('tips-merawat-anak-kucing');

    Route::get('/tips-memilih-shelter', function () {
        return view('tips.tips-memilih-shelter');
    })->name('tips-memilih-shelter');
});

// Auth Routes
Route::middleware('guest')->group(function () {
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get('/', function () {
    return view('welcome');
});

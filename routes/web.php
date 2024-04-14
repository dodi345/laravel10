<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function () {
    return view('pages.admin.index', [
        'title' => 'Admin'
    ]);
})->middleware('auth');

Route::get('/', function () {
    return view('pages.user.index', [
        'title' => 'Home'
    ]);
});

Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index'])->name('index');

Route::get('/admin/dosen', [DosenController::class, 'index'])->name('index');
Route::get('/admin/dosen/detail/{dosen:username}', [DosenController::class, 'show']);

Route::get('/admin/about', [AboutController::class, 'index'])->name('index');
Route::get('/admin/contact', [ContactController::class, 'index'])->name('index');

Route::controller(CustomAuthController::class)->group(function(){
    Route::get('/login', [CustomAuthController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login', [CustomAuthController::class, 'credentials'])->name('credentials');
    Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');
    Route::get('/register', [CustomAuthController::class, 'register'])->name('register')->middleware('guest');
    Route::post('/register', [CustomAuthController::class, 'store'])->name('store');
});

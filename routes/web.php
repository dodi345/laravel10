<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function(){
    return view('pages.admin.index',[
        'title' => 'Admin'
    ]);
});
Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index'])->name('index');
Route::get('/admin/dosen', [DosenController::class, 'index'])->name('index');

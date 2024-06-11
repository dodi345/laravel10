<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MahasiswaDashboardController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\MatkulDashboardController;
use App\Http\Controllers\ProdiController;

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



// Route::get('/admin', function () {
//     return view('pages.admin.index', [
//         'title' => 'Admin'
//     ]);
// })->middleware('auth');

// Route::get('/', function () {
//     return view('pages.user.index', [
//         'title' => 'Home'
//     ]);
// });
Route::controller(PagesController::class)->group(function(){
    Route::get('/admin', [PagesController::class, 'dashboard'])->name('dashboard')->middleware('auth');
    Route::get('/', [PagesController::class, 'users'])->name('users');

});

Route::get('/invoice', [InvoiceController::class, 'index'])->name('index');
Route::get('/invoice/pdf', [InvoiceController::class, 'downloadPDF'])->name('invoice.pdf');

Route::get('/admin/dosens/checkslug', [DashboardDosenController::class, 'checkSlug']);
Route::resources([
    'admin/matkuls' => MatkulController::class,
    'admin/dosens' => DashboardDosenController::class,
    'admin/mahasiswa' => MahasiswaDashboardController::class,
    'admin/prodi' => ProdiController::class,
    'admin/major' => MajorController::class
]);

Route::get('/admin/about', [AboutController::class, 'index'])->name('index');
Route::get('/admin/contact', [ContactController::class, 'index'])->name('index');

Route::controller(CustomAuthController::class)->group(function(){
    Route::get('/login', [CustomAuthController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login', [CustomAuthController::class, 'credentials'])->name('credentials');
    Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');
    Route::get('/register', [CustomAuthController::class, 'register'])->name('register')->middleware('guest');
    Route::post('/register', [CustomAuthController::class, 'store'])->name('store');
});



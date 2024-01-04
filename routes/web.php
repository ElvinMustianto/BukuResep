<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPastryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PastryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrasiController;
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

Route::get('/', [PastryController::class, 'index']);
Route::get('/pastrys', [PastryController::class, 'index']);
Route::get('/pastry/{pastry:slug}', [PastryController::class, 'show']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
Route::get('/penulis', [UserController::class, 'index']);
Route::get('/penulis/{user:username}', [UserController::class, 'show']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [RegistrasiController::class, 'index'])->middleware('guest');
Route::get('/dashboard/pastry/checkSlug', [DashboardPastryController::class, 'checkSlug']);


Route::post('/register', [RegistrasiController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('/dashboard/pastry', DashboardPastryController::class);
});
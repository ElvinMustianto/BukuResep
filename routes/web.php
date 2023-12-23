<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PastryController;
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
Route::get('/home', [PastryController::class, 'index']);
Route::get('/pastry/{pastry:slug}', [PastryController::class, 'show']);
Route::get('/category', [CategoryController::class, 'index']);
<?php
use App\Http\Controllers\PartiesController;
use App\Http\Controllers\ProductController;
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
Route::get('products', [ProductController::class,'index']);
Route::get('products/store', [ProductController::class,'create']);
Route::get('parties', [PartiesController::class,'index']);
Route::get('parties/create', [PartiesController::class,'create']);
Route::get('/', function () {
    return view('welcome');
});

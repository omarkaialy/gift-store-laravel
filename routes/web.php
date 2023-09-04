<?php

use App\Http\Controllers\CategoryController;
use App\Models\Party;
use App\Http\Controllers\PartyController;
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
Route::get('parties', [PartyController::class, 'index']);
Route::post('parties/store', [PartyController::class, 'store']);
Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories/store', [CategoryController::class, 'store']);

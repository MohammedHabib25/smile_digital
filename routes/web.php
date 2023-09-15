<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ItemeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WorkController;
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



Route::resource('product' , ProductController::class);
Route::resource('iteme' , ItemeController::class);
Route::resource('work' , WorkController::class);
Route::get('front.index' , [FrontController::class , 'index'])->name('front.index');
Route::get('front.about' , [FrontController::class , 'aboute'])->name('front.about');
Route::get('front.serves' , [FrontController::class , 'serves'])->name('front.serves');
//Route::get('front.worke' , [FrontController::class , 'worke'])->name('front.worke');

<?php

use App\Http\Controllers\AdditorController;
use App\Http\Controllers\CategoyController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ItemeController;
use App\Http\Controllers\ProdController;
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
    return view('front.index');
});



Route::resource('product' , ProductController::class);
Route::resource('prod' , ProdController::class);
Route::resource('iteme' , ItemeController::class);
Route::resource('additor' , AdditorController::class);
Route::resource('work' , WorkController::class);
Route::get('front.index' , [FrontController::class , 'index'])->name('front.index');
Route::get('front.about' , [FrontController::class , 'aboute'])->name('front.about');
Route::get('front.serves' , [FrontController::class , 'serves'])->name('front.serves');
Route::get('front.policy' , [FrontController::class , 'policy'])->name('front.policy');
Route::get('front.terms' , [FrontController::class , 'terms'])->name('front.terms');
Route::get('work.graf' , [FrontController::class , 'graf'])->name('work.graf');
Route::get('work.prog' , [FrontController::class , 'prog'])->name('work.prog');
Route::get('work.mark' , [FrontController::class , 'mark'])->name('work.mark');
Route::get('en.index' , [CategoyController::class , 'index'])->name('en.index');
Route::get('en.about' , [CategoyController::class , 'about'])->name('en.about');
Route::get('en.terms' , [CategoyController::class , 'terms'])->name('en.terms');
Route::get('en.policy' , [CategoyController::class , 'policy'])->name('en.policy');
Route::get('en.serves' , [CategoyController::class , 'serves'])->name('en.serves');
Route::get('en.work' , [CategoyController::class , 'work'])->name('en.work');
Route::get('en.graf' , [CategoyController::class , 'graf'])->name('en.graf');
Route::get('en.prog' , [CategoyController::class , 'prog'])->name('en.prog');
Route::get('en.mark' , [CategoyController::class , 'mark'])->name('en.mark');


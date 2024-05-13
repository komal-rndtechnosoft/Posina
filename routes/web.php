<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\USPController;
use App\Http\Controllers\WCSController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServeController;









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
    return view('Frontend.index');
});
Route::get('/products', [MainController::class,'products'])->name('products');
Route::get('/aboutus', [MainController::class,'aboutus'])->name('aboutus');
Route::get('/blogs', [MainController::class,'blogs'])->name('blogs');
Route::get('/contactus', [MainController::class,'contact'])->name('contactus');
Route::get('/blog-details', [MainController::class,'blogdetails'])->name('blogdetails');
Route::get('/productsdetails', [MainController::class,'productsdetails'])->name('productsdetails');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/banner',BannerController::class);
Route::resource('/brands',BrandController::class);
Route::resource('/usp',USPController::class);
Route::resource('/wcs',WCSController::class);
Route::resource('/About',AboutController::class);
Route::resource('/serve',ServeController::class);


Route::get('/show1', [App\Http\Controllers\USPController::class, 'show1'])->name('show1');
Route::post('/update1', [App\Http\Controllers\USPController::class, 'update1'])->name('update1');
Route::get('/show2', [App\Http\Controllers\WCSController::class, 'show2'])->name('show2');
Route::post('/update2', [App\Http\Controllers\WCSController::class, 'update2'])->name('update2');
Route::get('/show3', [App\Http\Controllers\ServeController::class, 'show3'])->name('show3');
Route::post('/update3', [App\Http\Controllers\ServeController::class, 'update3'])->name('update3');




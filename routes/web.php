<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\USPController;
use App\Http\Controllers\WCSController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServeController;
use App\Http\Controllers\WhoweareController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HeaderController;
















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
Route::resource('/whoweare',WhoweareController::class);
Route::resource('/Blog',BlogController::class);
Route::resource('/testimonials',TestimonialController::class);
Route::resource('/Certificate',CertificateController::class);
Route::resource('/category',CategoryController::class);
Route::resource('/menu',MenuController::class);
Route::resource('/header',HeaderController::class);








Route::get('/show1', [App\Http\Controllers\USPController::class, 'show1'])->name('show1');
Route::post('/update1', [App\Http\Controllers\USPController::class, 'update1'])->name('update1');
Route::get('/show2', [App\Http\Controllers\WCSController::class, 'show2'])->name('show2');
Route::post('/update2', [App\Http\Controllers\WCSController::class, 'update2'])->name('update2');
Route::get('/show3', [App\Http\Controllers\ServeController::class, 'show3'])->name('show3');
Route::post('/update3', [App\Http\Controllers\ServeController::class, 'update3'])->name('update3');
Route::get('/show4', [App\Http\Controllers\BlogController::class, 'show4'])->name('show4');
Route::post('/update4', [App\Http\Controllers\BlogController::class, 'update4'])->name('update4');
Route::get('/show5', [App\Http\Controllers\TestimonialController::class, 'show5'])->name('show5');
Route::post('/update5', [App\Http\Controllers\TestimonialController::class, 'update5'])->name('update5');
Route::get('/show6', [App\Http\Controllers\CertificateController::class, 'show6'])->name('show6');
Route::post('/update6', [App\Http\Controllers\CertificateController::class, 'update6'])->name('update6');
Route::get('/show7', [App\Http\Controllers\CategoryController::class, 'show7'])->name('show7');
Route::post('/update7', [App\Http\Controllers\CategoryController::class, 'update7'])->name('update7');





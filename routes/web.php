<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('master', function () {
//    return view('master');
//});
Route::get('master', [\App\Http\Controllers\MasterController::class,'index']);
Route::get('index', [\App\Http\Controllers\IndexController::class,'index']);
Route::get('about',[\App\Http\Controllers\AboutController::class,'index']);
Route::get('contact', [\App\Http\Controllers\ContactController::class,'index']);

//admin
Route::get('admin_index', [\App\Http\Controllers\MasterAdmController::class, 'index']);

//product
Route::post('product-store', [\App\Http\Controllers\ProductController::class, 'store']);

Route::get('checkout', [\App\Http\Controllers\CheckoutController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', 'App\Http\Controllers\ProductController@index')->name('products');
Route::get('/product', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/admin', function (){
    return view('admin.layout');
});

Route::get('/confirm', 'App\Http\Controllers\BasketController@confirm')->name('confirm');

//Route::get('/admin', [AuthenticatedSessionController::class, 'create'])
//    ->middleware('guest')
//    ->name('login');
//
//Route::post('/admin', [AuthenticatedSessionController::class, 'store'])
//    ->middleware('guest');
Route::get('/admin', function () {
   return redirect()->route('login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
//    Route::get('/', function (){
//       return view('admin.products.index');
//    });
    Route::resource('products', 'App\Http\Controllers\Admin\ProductController');
});

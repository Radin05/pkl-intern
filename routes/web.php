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

use App\Http\Controllers\UserController;
// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//  Route::resource('user', UserController::class)->middleware(Role::class);
//  Route::get('/', function () {
//   return view('user');
//  });
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth', Role::class]], function () {
 Route::get('/', function () {
  return view('produk.index');
 });
 // untuk Route Backend Lainnya
 Route::resource('user', App\Http\Controllers\UsersController::class);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use App\Http\Controllers\ProdukController;
Route::resource('produk', ProdukController::class);

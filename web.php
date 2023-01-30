<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products' ,[productcontroller::class, 'makeProductArray']);
Route::get('/products/{id}' ,[productcontroller::class, 'getProductWithId']);


Route::post('/products/store' ,[productcontroller::class, 'addNewProduct']);

Route::put('/updateproducts/{id}',[productcontroller::class, 'updateProductWithId'])->name('product.update');


Route::delete('deleteproducts/{id}',[productcontroller::class, 'deleteProductWithId'])->name('product.delete');
 
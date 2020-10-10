<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);


// Route::get('/products','ProductController');


Route::get('products/{id}','ProductController');

Route::get('/update-product','ProductController@update')->name('products.update');

Route::get('products/edit/{id}','Productcontroller@updateForm');

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

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

Auth::routes();

Route::livewire('/', 'home')->name('home');
Route::livewire('/products', 'product-index')->name('products');
Route::livewire('/products/liga/{ligaId}', 'product-liga')->name('products.liga');
Route::livewire('/products/{id}', 'product-detail')->name('products.detail');
Route::livewire('/keranjang', 'keranjang')->name('keranjang');
Route::livewire('/checkout', 'checkout')->name('checkout');
Route::livewire('/history', 'history')->name('history');

Route::livewire('/shopproducts', 'shopping1')->name('shopping1');
Route::livewire('/shopproducts/shopcat/{shopcatId}', 'shopping2')->name('shopping2');
Route::livewire('/shopproducts/shopsub/{shopsubId}', 'shopping3')->name('shopping3');
Route::livewire('/shopproducts/{id}', 'shopping4')->name('shopping4');
Route::livewire('/shopping5', 'shopping5')->name('shopping5');
Route::livewire('/shopping6', 'shopping6')->name('shopping6');
Route::livewire('/shopping7', 'shopping7')->name('shopping7');
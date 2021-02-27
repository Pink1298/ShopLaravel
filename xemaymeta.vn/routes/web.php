<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');
Route::get('/product/{id}', 'Frontend\FrontendController@productDetail')->name('frontend.productDetail');
Route::get('/cart/add/{id}', 'Frontend\FrontendController@addToCart')->name('frontend.addCart');
Route::post('/cart/update/', 'Frontend\FrontendController@updateCart')->name('frontend.updateCart');
Route::get('/cart/delete/{id}', 'Frontend\FrontendController@deleteCart')->name('frontend.deleteCart');
Route::get('/payment/', 'Frontend\FrontendController@payment')->name('frontend.payment');
Route::get('/cart/', 'Frontend\FrontendController@loadCart')->name('frontend.loadCart');
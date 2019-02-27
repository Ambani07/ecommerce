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

Route::post('/submitdata', 'TestController@testfunction');



// Route::get('/', 'LandingPageController@index')->name('home');
// Route::get('/login', 'LandingPageController@index')->name('login');
// Route::get('/logout', 'LandingPageController@index')->name('logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@index')->name('login');
Route::get('/logout', 'HomeController@index')->name('logout');
Route::get('/contact', 'HomeController@contact')->name('contact');

//************************** SHOP ***************************************/

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
//************************** END SHOP ***************************************/


//************************** CART ***************************************/

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

//************************** END CART ***************************************/

//************************** CHECKOUT ***************************************/

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');

Route::post('/checkout/confirmation', 'CheckoutController@create')->name('checkout.create')->middleware('auth');

//************************** END CHECKOUT ***************************************/


Route::post('/coupons', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupons', 'CouponsController@destroy')->name('coupon.destroy');


Route::get('/test', function(){
    return view('test');
});


Route::get('empty', function(){
    Cart::destroy();
});

Route::post('/submitdata', 'TestController@testfunction');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();



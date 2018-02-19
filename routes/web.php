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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
function()
{
    Route::get('/', 'MainController@index');

    Route::get('/admin', function() {
        return view('layouts.admin');
    });

    Route::get('/cart', function() {
        return view('cart');
    });

    Route::get('/check-out', function() {
        return view('check-out');
    });

    Route::get('/search', 'MainController@search');

    Route::get('/create', function() {
        return view('create');
    });
    
    Route::get('/payment', 'PaymentController@payment');

    Route::get('/pay', 'PaymentController@pay');
    
    Route::get('/payment-info', function() {
        return view('payment-info');
    });
    
    Route::get('/terms', function() {
        return view('terms');
    });

    Route::get('/signup', function() {
        return view('signup');
    });
});

Route::get('/subscribe', 'MainController@subscribeUser');
Route::post('/getCart', 'CartController@get');
Route::post('/createOrder', 'Admin\OrderController@create');
Route::post('/searchProduct', 'MainController@searchAjax');

// iframes
Route::get('/iframe/subscribe', function() {
    return view('iframes.subscribe');
});
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

//App::singleton('App\Billing\Stripe',function(){
//   return  new App\Billing\Stripe(config('services.stripe.secret'));
//});
//$stripe = App::make('App\Billing\Stripe');
dd(resolve('App\Billing\Stripe'));
Route::get('/injection','AdminController@dashboard');
Route::get('/', function () {

    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
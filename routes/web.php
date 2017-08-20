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

Route::get('/', function () {
    return view('welcome');
});

// root 'static#home'

// Route::get('/login', `SessionsController@new`)
// Route::post('/login', `SessionsController@create`)
// Route::get('/logout', `SessionsController@destroy`)
//
//   #omniauth
//   Route::get('/auth/facebook/callback', `SessionsController@create`)
//   Route::get('/auth/failure', function () {
//     return redirect()->route('/')
//   })

  // Other Rails routes
  // resources :users do
  //   resources :games
  // end
  //
  // resources :games
  // resources :locations

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

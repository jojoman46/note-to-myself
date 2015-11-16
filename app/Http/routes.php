<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


//Content routes...
Route::get('/', [
    'middleware' => 'auth',
    'uses' => 'user_content_controller@index'
]);

//Updating records
Route::post('/update/{id}', [
    'middleware' => 'auth',
    'uses' => 'user_content_controller@update'
]);

//Route::any( '{catchall}', function ( $page ) {
//    if (Auth::guest())
//        return  view( 'auth/login' ) ;
//    else
//        if ( view()->exists( $page ) )
//            return view( $page );
//        else
//            return view( 'home' );
//
//} )->where('catchall', '(.*)');
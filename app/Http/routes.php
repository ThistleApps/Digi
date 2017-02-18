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

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
   return view('welcome');

});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/offers', function () {
    return view('offers');

});

Route::get('/admin', function() {
    return view('admin.index');

});

Route::resource('admin/users', 'AdminUsersController');
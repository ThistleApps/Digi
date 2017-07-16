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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/orders', 'EagleController@show_order_list');

Route::get('/customers', 'EagleController@show_customer_list');

Route::get('/contacts', 'EagleController@show_contact_list');

Route::get('api/contacts', 'ContactsApiController@index');

Route::get('api/contact', 'ContactsApiController@showContact');

Route::get('api/contactlist', 'ContactsApiController@showContactList');

Route::resource('admin/users', 'AdminUsersController');


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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::group(['prefix' => 'users'], function () {

        Route::get('/', 'UsersController@index')->name('users.index');
        Route::get('/action/{id}/{type}', 'UsersController@updateuser')->name('users.updateuser');



    });
    Route::post('/user-add', 'UsersController@store')->name('users.store');
    Route::post('/user-edit', 'UsersController@edit')->name('users.edit');



    Route::group(['prefix' => 'customer'], function () {
        Route::get('/', 'CustomersController@index')->name('customers.index');
        Route::get('/action/{id}/{type}', 'CustomersController@updatecustomer')->name('customers.updatecustomer');
         Route::post('/add','CustomersController@store');
         Route::post('/edit','CustomersController@edit');
    });
    Route::get('customer-edit-{id}', 'CustomersController@updatepage')->name('customers.updatepage');


    Route::group(['prefix' => 'forfait'], function () {

        Route::get('/', 'ForfaitController@index')->name('forfait.index');
        Route::post('/store', 'ForfaitController@store')->name('forfait.store');
        Route::get('/{package}/trash', 'ForfaitController@trash')->name('forfait.trash');
        Route::patch('/{package}/update', 'ForfaitController@update')->name('forfait.update');


    });

    Route::group(['prefix' => 'tickets'], function () {
        Route::post('/store', 'TicketsController@store')->name('tickets.store');
        Route::get('/{ticket}/trash', 'TicketsController@trash')->name('tickets.trash');
    });

    Route::get('tickets-view-{ticket}', 'TicketsController@show')->name('tickets.show');
    Route::post('tickets-view-{ticket}', 'TicketsController@answer');

    Route::group(['prefix' => 'support'], function () {
        Route::get('/', 'SupportController@index')->name('support.index');

        Route::get('/update-{type}-{id}', 'SupportController@update')->name('support.update');

    });

});



Route::get('/subscription', 'ForfaitController@subscription')->name('forfait.subscription');
Route::post('/subscription-add', 'ForfaitController@subscriptionAdd')->name('forfait.subscriptionadd');
Route::get('/actionsub/{id}/{type}', 'ForfaitController@actionsub')->name('forfait.actionsub');
Route::get('souscription-valide-{id}', 'ForfaitController@validesouscription')->name('forfait.validesouscription');



Route::get('/logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

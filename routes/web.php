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

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/clientlogin', function () {
    return view('clientlogin');
});

Route::post('/postClientLogin', 'ClientController@login');

Route::post('/postArtistLogin', 'ArtistController@login');

Route::get('/clientlogout','ClientController@logout');

Route::get('/clientregister', function () {
    return view('clientregister');
})->middleware('guest');

Route::post('/postuserregister', 'ClientController@clientRegister');

Route::get('/clienthome', function(){
    return view('clienthome');
});

Route::get('/artistlogin', function () {
    return view('artistlogin');
});

Route::get('/artistregister', function () {
    return view('artistregister');
});

Route::post('/postartistregister', 'ArtistController@artistRegister');

Route::get('/commissionlist/{typeid}', 'CommissionListController@showList');

Route::get('/commissionlist/{typeid}/commission/{commissionid}', 'CommissionListController@showDetailedCommissionInfo');
Auth::routes();

Route::get('/commission/history', 'HiredCommissionHistoryController@index');

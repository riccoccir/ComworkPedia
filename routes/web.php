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


//route untuk client dan guest
Route::get('/home', function () {
    return view('homepage');
});

Route::get('/clientlogin', function () {
    return view('clientlogin');
});

Route::post('/postClientLogin', 'ClientController@login');


Route::get('/clientregister', function () {
    return view('clientregister');
})->middleware('guest');

Route::post('/postuserregister', 'ClientController@clientRegister');

Auth::routes();

//route untuk client
Route::group(['guard' => 'artist'], function(){
    Route::get('/clientlogout','ClientController@logout');
    
    Route::get('/clienthome', function(){
        return view('clienthome');
    });
    Route::get('/commissionlist/{typeid}', 'CommissionListController@showList');
    
    Route::get('/commissionlist/{typeid}/commission/{commissionid}', 'CommissionListController@showDetailedCommissionInfo');
    
    Route::get('/commission/history', 'HiredCommissionHistoryController@index');

});

Route::get('/artistlogin', function () {
    return view('artistlogin');
});

Route::post('/postArtistLogin', 'ArtistController@login');

Route::get('/artistregister', function () {
    return view('artistregister');
});

Route::post('/postartistregister', 'ArtistController@artistRegister');



//route untuk artist
Route::group(['guard' => 'client'], function(){
    Route::get('/artist/dashboard', 'ArtistDashboardController@showPage');
    
    Route::post('/artist/newcommission', 'ArtistDashboardController@createNewCommission');
    
    Route::get('/artist/logout', 'ArtistController@logout');
});
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
})->middleware('guest');

Route::get('/clientlogin', function () {
    return view('clientlogin');
})->middleware('guest');

Route::post('/postClientLogin', 'ClientController@login')->middleware('guest');


Route::get('/clientregister', function () {
    return view('clientregister');
})->middleware('guest');

Route::post('/postuserregister', 'ClientController@clientRegister');

Auth::routes();

//route untuk client

    Route::get('/clientlogout','ClientController@logout')->middleware('auth:client');
    
    Route::get('/clienthome', function(){
        return view('clienthome');
    })->middleware('auth:client');
    Route::get('/commissionlist/{typeid}', 'CommissionListController@showList')->middleware('auth:client');
    
    Route::get('/commissionlist/{typeid}/commission/{commissionid}', 'CommissionListController@showDetailedCommissionInfo')->middleware('auth:client');
    
    Route::get('/commission/history', 'HiredCommissionHistoryController@index')->middleware('auth:client');

    Route::get('/commission/accept/{id}', 'HiredCommissionHistoryController@acceptCommissionResult')->middleware('auth:client');

    Route::get('/commission/revision/{id}', 'HiredCommissionHistoryController@askForRevision')->middleware('auth:client');

    Route::get('/hire/{typeid}/hire-commission/{commissionid}','HireController@index')->middleware('auth:client');

    

Route::get('/artistlogin', function () {
    return view('artistlogin');
})->middleware('guest');

Route::post('/postArtistLogin', 'ArtistController@login')->middleware('guest');

Route::get('/artistregister', function () {
    return view('artistregister');
})->middleware('guest');

Route::post('/postartistregister', 'ArtistController@artistRegister')->middleware('guest');



//route untuk artist

    Route::get('/artist/dashboard', 'ArtistDashboardController@showPage')->middleware('auth:artist');
    
    Route::post('/artist/newcommission', 'ArtistDashboardController@createNewCommission')->middleware('auth:artist');
    
    Route::get('/artist/logout', 'ArtistController@logout')->middleware('auth:artist');

    Route::get('/artist/dashboard/delete/{id}', 'ArtistDashboardController@deleteCommission')->middleware('auth:artist');

    Route::put('/artist/dashboard/delete/{id}', 'ArtistDashboardController@editCommission')->middleware('auth:artist');

    Route::get('/artist/dashboard/{postId}/status/{status}', 'ArtistDashboardController@acceptOrRejectOffer')->middleware('auth:artist');

    Route::post('/artist/submit/image/{id}', 'ArtistDashboardController@submitLinkImage')->middleware('auth:artist');
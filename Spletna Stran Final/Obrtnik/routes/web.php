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


Route::get('/', 'PagesController@Pindex');
    
Route::get('/prijava', 'PagesController@Plog');

Route::get('/registracija', 'PagesController@Preg');


Route::post('/registracija', 'RegController@Register');

Route::post('/prijava', 'LoginController@Login');

Route::post('/', 'SearchController@IndexSearch');

Route::resource('/iskanje','IskanjeController');
Route::resource('/storitve','StoritevController');
Route::resource('/narocila','NarocilaController');
Route::get('/profile','ProfileController@index');


/*
Route::get('/iskanje', function(){
    return view('pages.iskanje');
});

Route::get('/prijava', function(){
    return view('pages.prijava');
});

Route::get('/registracija', function(){
    return view('pages.registracija');
});

*/


Auth::routes();

Route::get('/', 'HomeController@index');


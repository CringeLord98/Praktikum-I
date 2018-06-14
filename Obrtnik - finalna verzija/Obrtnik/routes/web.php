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


Route::resource('/iskanje','IskanjeController');
Route::resource('/storitve','StoritevController')->names([
    'store' => 'store',
    'update' => 'update',
    'destroy'=> 'destroy'
]);//->name('StoritveRoute');
Route::get('/narocila','NarocilaController@index')->name('n_index');
Route::get('/narocila/{id}', 'NarocilaController@show');
Route::post('/narocila/{id}/o', 'NarocilaController@zavrni')->name('zavrni');
Route::post('/narocila/{id}/z', 'NarocilaController@odobri')->name('odobri');
Route::post('/narocila', 'NarocilaController@razvrsti')->name('razvrsti');
Route::get('/profile','ProfileController@profile');
Route::post('/profile/d','ProfileController@destroy')->name('u_destroy');
Route::get('/profileSettings','ProfileController@index');
Route::post('/profileSettings','ProfileController@update')->name('update2');
Route::post('/iskanje','IskanjeController@iskanje')->name('IskanjeMain');
Route::post('/storitve/{id}/o', 'StoritevController@oceni')->name('oceni');
Route::post('/storitve/{id}/k', 'StoritevController@komentiraj')->name('komentiraj');

Route::get('/storitve/{id}/narocilo', 'StoritevController@narocilo');
Route::post('/storitve/{id}/narocilo', 'StoritevController@naroci')->name('naroci');
/* Temp Routes*/
Route::get('/narocilo',function(){
    return view('user.narocilo');
});

Route::get('/objava',function(){
    return view('pages.objava');
});




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


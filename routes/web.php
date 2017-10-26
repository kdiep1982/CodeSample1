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

/*
 * Controller for user access
 */

Route::get('/','MediasController@index');

//Route::post('/login/{id?}','UsersController@login');
Route::post('/login/','UsersController@login');

Route::get('/login/{id?}',function($id=null){
    return view('pages.login')->with('media_id',$id);
});
Route::get('/logout',function(){
   \Auth::logout();
   return view('pages.login')->with('media_id',null);
});
Route::get('/profile','UsersController@profile');

Route::get('/watchlist/{id}','UsersController@watchlist');
/*
 * Controller for the media files
*/

//Route::get('/dashboard','MediasController@index');
Route::get('/detail/{id}' ,'MediasController@detail')->name('detail');
Route::get('/newArrival', 'MediasController@newArrival');
Route::get('/topRated', 'MediasController@topRated');
Route::get('/upcoming', 'MediasController@upcoming');
Route::get('/airingTodayTVShow', 'MediasController@airingToday');
Route::get('/topRatedTV', 'MediasController@topRatedTV');
Route::get('/popularTV', 'MediasController@popularTV');


/*
 * Get user review info
 */

Route::post('/review','ReviewsController@review');

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

Route::resource('admin/team', 'TeamController')->middleware('auth');
Route::resource('admin/blog', 'BlogController')->middleware('auth');
Route::resource('admin/streaming', 'StrimingController')->middleware('auth');
Route::resource('admin/about-contact', 'AboutContactController')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/logout', function(){
    auth()->logout();
    echo "Logout success";
    return redirect()->to('/login');
});

// Route::get('/', function () {
//     return view('landing');
// });

Route::get('/', 'ClientSideController@home');
Route::get('/events', 'ClientSideController@allEvents');
Route::get('/event/{id}', 'ClientSideController@singleEvent');
Route::get('/team', 'ClientSideController@allTeam');
Route::get('/show-team/{id}', 'ClientSideController@singleTeam');
Route::get('/about', 'ClientSideController@about');
Route::get('/join-with-us', 'ClientSideController@joinWithUs');


// Auth::routes(['register' => false]);
Auth::routes();
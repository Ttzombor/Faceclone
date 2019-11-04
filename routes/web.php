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

Route::get('/home', 'UserController@index')->middleware('verified');

Route::get('/', 'HomeController@index');

$group_data = [
    'prefix' => 'user'];
Route::group($group_data, function () {

    $methods = ['index', 'update', 'store', 'edit', 'create', 'destroy', 'show'];
    Route::resource('user', 'UserController')
        ->only($methods)
        ->names('user')
        ->middleware('verified');
});


Auth::routes(['verify' => true]);




Route::get('/index', function () {
    return view('layouts.found.index');
});

Route::get('/profile', function () {
    return view('layouts.found.profile');
});

Route::get('/template', function () {
    return view('layouts.found.template');
});



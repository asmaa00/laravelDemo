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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listUsers', 'user@llist');
Route::get('/listGroups', 'group@llist');


/*
Route::get('/listUsers', function () {
    return view('user.list');
});

Route::get('/listGroups', function () {
    return view('group.list');
});*/

//Route::get('/', 'controller@func');
/*Route::get('asmaa', function () {
    return 'hello asmaa';
});*/

Route::auth();

Route::get('/home', 'HomeController@index');

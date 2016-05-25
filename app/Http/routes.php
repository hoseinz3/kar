<?php
//mohsen.com
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

Route::get('/contactUs',function(){
    return 'contactUs';
});


Route::resource('/product','JoinController');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('/employee','EmployeeController');
Route::resource('/employer','EmployerController');

Route::post('/employee/{id}','EmployeeController@save');
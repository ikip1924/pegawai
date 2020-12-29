<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/', 'EmployeeController@index');




Route::get('/employees', 'EmployeeController@detail');
Route::get('/employees/create', 'EmployeeController@create');
Route::get('/employees/{employee}', 'EmployeeController@show');
Route::post('/employees', 'EmployeeController@store');
Route::delete('/employees/{employee}', 'EmployeeController@destroy');
Route::get('/employees/{employee}/edit', 'EmployeeController@edit');
Route::put('/employees/{employee}', 'EmployeeController@update');

//  Route::resource('employees', 'EmployeeController');
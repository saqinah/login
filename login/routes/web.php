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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MainController@index')->name('home');

Auth::routes();
Route::get('/home', 'MainController@index')->name('home');;

//get panic data
Route::get('panicdata','MainController@getPanicData');
Route::post('respond','MainController@addRespond');
Route::get('getrespond','MainController@getRespond');

Route::get('datatables', 'MainController@datatablesList')->name('datatables.index');

Route::get('reports.individual/{id}', 'MainController@reportIndividual')->name('reportsIndividual.generate');
Route::get('pdf.generate/{id}','MainController@genReportIndividual')->name('pdf.generate/{id}');


// Route::get('reports', 'MainController@reports')->name('users.index');

Route::get('dashboard', 'MainController@dashboard');

Route::get('main','MainController@main');

Route::get('startistic','MainController@getStatistic');



// Route::get('test', 'TestingController@index')->name('test');

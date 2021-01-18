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

Route::get('/', 'App\Http\Controllers\LoginController@login');
Route::post('/checklogin','App\Http\Controllers\LoginController@checklogin');
Route::get('/logout','App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('/list','App\Http\Controllers\CompanyController@list')->name('list_company');
Route::get('/form/{id?}','App\Http\Controllers\CompanyController@form')->name('company_form');
Route::post('/save','App\Http\Controllers\CompanyController@save')->name('save_company');
Route::get('/view/{id?}','App\Http\Controllers\CompanyController@view')->name('view_company');
Route::get('/delete/{id?}','App\Http\Controllers\CompanyController@delete')->name('delete_company');


Route::get('/home','App\Http\Controllers\RatioController@search')->name('search_company');
Route::get('/details','App\Http\Controllers\RatioController@getData')->name('getCompanyData');



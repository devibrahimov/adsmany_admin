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

Route::get('/giris', function () {
    return view('welcome');
})->name('logincontroller');

Route::post('/giris','AuthController@logincontroll');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/cixis','AuthController@logout')->name('logout');
    Route::get('/','GeneralController@dashboard')->name('admin');

    Route::get('/dillerin-idaresi','LanguagesController@languages')->name('languagesSetting');
    Route::get('/yeni-dil-elave-et','LanguagesController@create')->name('newLang');
    Route::post('/yeni-dil-elave-et','LanguagesController@store');



});

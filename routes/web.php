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
    Route::get('/dil-edit-et/{id}','LanguagesController@edit')->name('LangEdit');
    Route::post('/dil-edit-et/{id}','LanguagesController@update');

    Route::get('/olkeler','CountriesController@countries')->name('countries');
    Route::get('/yeni-olke-elave-et','CountriesController@create')->name('newCountry');
    Route::post('/yeni-olke-elave-et','CountriesController@store');
    Route::get('/olke-redakte-et/{id}','CountriesController@edit')->name('CountryEdit');
    Route::post('/olke-redakte-et/{id}','CountriesController@update');

    Route::get('/olke-sil/{id}','CountriesController@delete');
});

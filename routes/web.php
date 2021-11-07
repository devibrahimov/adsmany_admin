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
    Route::get('/api-documentation','ApiDocsController@index')->name('ApiDocsController');

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

   Route::get('/tv-kanallar','TvCannelController@dashborad')->name('tv_channels');
   Route::get('/yeni-tv-kanallar','TvCannelController@create')->name('newChannels');
   Route::post('/yeni-tv-kanallar','TvCannelController@store');
   Route::get('/tv-kanal-redakte-et/{id}','TvCannelController@edit')->name('ChannelEdit');
   Route::post('/tv-kanal-redakte-et/{id}','TvCannelController@update');

   Route::get('/programlar','ProgramsSerialsController@dashborad')->name('programs');
   Route::get('/yeni-programlar','ProgramsSerialsController@create')->name('newProgram');
   Route::post('/yeni-programlar','ProgramsSerialsController@store');
   Route::get('/program-redakte-et/{id}','ProgramsSerialsController@edit')->name('ProgramEdit');
   Route::post('/program-redakte-et/{id}','ProgramsSerialsController@update');


    Route::get('/contact','ContactController@index')->name('contact.index');
    Route::get('/yeni-contact-elave-et','ContactController@create')->name('contact.create');
    Route::post('/yeni-contact-elave-et','ContactController@store')->name('contact.store');
    Route::get('/contact-redakte-et/{id}','ContactController@edit')->name('contact.edit');
    Route::post('/contact-redakte-et/{id}','ContactController@update')->name('contact.update');
    Route::get('/contact-sil/{id}','ContactController@delete')->name('contact.delete');
});

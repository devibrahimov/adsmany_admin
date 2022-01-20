<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\LanguagesController;
use App\Http\Controllers\Back\CountriesController;
use App\Http\Controllers\Back\TVController;
use App\Http\Controllers\Back\ProgramsController;
use App\Http\Controllers\Back\ContactController;

/*
Route::get('/giris', function () {
    return view('welcome');
})->name('logincontroller'); */

//Route::post('/giris','AuthController@logincontroll');

Route::group(['middleware'=>'auth'],function(){
    //Route::get('/cixis','AuthController@logout')->name('logout');
    //Route::get('/','GeneralController@dashboard')->name('admin');
    Route::get('/api-documentation','ApiDocsController@index')->name('ApiDocsController');

    //Route::get('/dillerin-idaresi','LanguagesController@languages')->name('languagesSetting');
    //Route::get('/yeni-dil-elave-et','LanguagesController@create')->name('newLang');
    //Route::post('/yeni-dil-elave-et','LanguagesController@store');
    //Route::get('/dil-edit-et/{id}','LanguagesController@edit')->name('LangEdit');
    //Route::post('/dil-edit-et/{id}','LanguagesController@update');

    //Route::get('/olkeler','CountriesController@countries')->name('countries');
    //Route::get('/yeni-olke-elave-et','CountriesController@create')->name('newCountry');
    //Route::post('/yeni-olke-elave-et','CountriesController@store');
    //Route::get('/olke-redakte-et/{id}','CountriesController@edit')->name('CountryEdit');
    //Route::post('/olke-redakte-et/{id}','CountriesController@update');

    //Route::get('/olke-sil/{id}','CountriesController@delete');

   //Route::get('/tv-kanallar','TvCannelController@dashborad')->name('tv_channels');
   //Route::get('/yeni-tv-kanallar','TvCannelController@create')->name('newChannels');
   //Route::post('/yeni-tv-kanallar','TvCannelController@store');
   //Route::get('/tv-kanal-redakte-et/{id}','TvCannelController@edit')->name('ChannelEdit');
   //Route::post('/tv-kanal-redakte-et/{id}','TvCannelController@update');

   //Route::get('/programlar','ProgramsSerialsController@dashborad')->name('programs');
   //Route::get('/yeni-programlar','ProgramsSerialsController@create')->name('newProgram');
   //Route::post('/yeni-programlar','ProgramsSerialsController@store');
   //Route::get('/program-redakte-et/{id}','ProgramsSerialsController@edit')->name('ProgramEdit');
   //Route::post('/program-redakte-et/{id}','ProgramsSerialsController@update');


    //Route::get('/contact','ContactController@index')->name('contact.index');
    //Route::get('/yeni-contact-elave-et','ContactController@create')->name('contact.create');
    //Route::post('/yeni-contact-elave-et','ContactController@store')->name('contact.store');
    //Route::get('/contact-redakte-et/{id}','ContactController@edit')->name('contact.edit');
    //Route::post('/contact-redakte-et/{id}','ContactController@update')->name('contact.update');
    //Route::get('/contact-sil/{id}','ContactController@delete')->name('contact.delete');
});

################################################# BACK #########################################



Route::group(['middleware'=>'girisOlubsa'],function(){
    Route::redirect('/','/giris');
    Route::get('/giris',[AuthController::class,'index'])->name('admin.login.index');
    Route::post('/giris',[AuthController::class,'login'])->name('admin.login');
    
});
Route::group(['middleware'=>'girisOlmuyubsa'],function(){
    Route::get('/cixis',[AuthController::class,'logout'])->name('admin.logout');
    Route::get('/home',[AuthController::class,'home'])->name('admin.home');

    ##################### DILLER ######################
    Route::get('/dillerin-idaresi',[LanguagesController::class,'index'])->name('admin.language');
    Route::get('/yeni-dil-elave-et',[LanguagesController::class,'store'])->name('admin.language.store');
    Route::post('/yeni-dil-elave-et',[LanguagesController::class,'create'])->name('admin.language.create');
    Route::get('/dil-edit-et/{id}',[LanguagesController::class,'edit'])->name('admin.language.edit');
    Route::post('/dil-edit-et/{id}',[LanguagesController::class,'update'])->name('admin.language.update');

    ##################### OLKELER ######################
    Route::get('/olkeler',[CountriesController::class,'index'])->name('admin.country');
    Route::get('/yeni-olke-elave-et',[CountriesController::class,'store'])->name('admin.country.store');
    Route::post('/yeni-olke-elave-et',[CountriesController::class,'create'])->name('admin.country.create');
    Route::get('/olke-redakte-et/{id}',[CountriesController::class,'edit'])->name('admin.country.edit');
    Route::post('/olke-redakte-et/{id}',[CountriesController::class,'update'])->name('admin.country.update');
    Route::get('/olke-sil-/{id}',[CountriesController::class,'delete'])->name('admin.country.delete');

    ##################### KANALLAR ######################
    Route::get('/tv-kanallar',[TVController::class,'index'])->name('admin.tv');
    Route::get('/yeni-tv-kanallar',[TVController::class,'store'])->name('admin.tv.store');
    Route::post('/yeni-tv-kanallar',[TVController::class,'create'])->name('admin.tv.create');
    Route::get('/tv-kanal-redakte-et/{id}',[TVController::class,'edit'])->name('admin.tv.edit');
    Route::post('/tv-kanal-redakte-et/{id}',[TVController::class,'update'])->name('admin.tv.update');


    ##################### PROQRAMLAR ######################
    Route::get('/proqramlar',[ProgramsController::class,'index'])->name('admin.program');
    Route::get('/yeni-programlar',[ProgramsController::class,'store'])->name('admin.program.store');
    Route::post('/yeni-programlar',[ProgramsController::class,'create'])->name('admin.program.create');
    Route::get('/program-redakte-et/{id}',[ProgramsController::class,'edit'])->name('admin.program.edit');
    Route::post('/program-redakte-et/{id}',[ProgramsController::class,'update'])->name('admin.program.update');
   


    ##################### CONTACT ######################
    Route::get('/contact',[ContactController::class,'index'])->name('admin.contact');
    Route::get('/yeni-contact-elave-et',[ContactController::class,'store'])->name('admin.contact.store');
    Route::post('/yeni-contact-elave-et',[ContactController::class,'create'])->name('admin.contact.create');
    Route::get('/contact-redakte-et/{id}',[ContactController::class,'edit'])->name('admin.contact.edit');
    Route::post('/contact-redakte-et/{id}',[ContactController::class,'update'])->name('admin.contact.update');
    Route::get('/contact-delete/{id}',[ContactController::class,'delete'])->name('admin.contact.delete');
});

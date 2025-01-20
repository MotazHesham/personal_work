<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('work/{id}', 'HomeController@work')->name('work');
    Route::get('thread/{id}', 'HomeController@thread')->name('thread');

    Route::get('threads', 'HomeController@threads')->name('threads');
    Route::get('works', 'HomeController@works')->name('works');
    Route::get('services', 'HomeController@services')->name('services');
    Route::get('about', 'HomeController@about')->name('about');
    Route::get('contact', 'HomeController@contact')->name('contact');
    Route::post('contact', 'HomeController@contact_store')->name('contact.store');

});
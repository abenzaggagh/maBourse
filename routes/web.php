<?php

/* Main Pages */

// Index
Route::get('/', 'IndexController@index')->name('index');

// Bourses


// Candidature
Route::get('/candidature', 'CandidatureController@index')->name('candidature');


Route::get('/candidature-1', 'CandidatureController@information')->name('information')/*->middleware('auth')*/;
Route::get('/candidature-2', 'CandidatureController@index')->name('bourse');
Route::get('/candidature-3', 'CandidatureController@index')->name('formulaire');

Route::get('/informations', 'CandidatureController@index')->name('formulaire');

// Authentication
Route::post('/candidature-login', 'CandidatureController@login')->name('candidature-login');
Route::post('/candidature-register', 'CandidatureController@register')->name('candidature-register');

Route::get('/logout', 'CandidatureController@logout')->name('logout');


// Mail
Route::get('/mail', 'MailController@index');
Route::get('/mail/sendVerification', 'MailController@home');





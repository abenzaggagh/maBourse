<?php

/* Main Pages */

// Index
Route::get('/', 'IndexController@index');

// Bourses


// Candidature
Route::get('/candidature', 'CandidatureController@index')->name('candidature');
Route::post('/candidature-login', 'CandidatureController@login')->name('candidature-login');
Route::post('/candidature-register', 'CandidatureController@register')->name('candidature-register');

Route::get('/candidature-1', 'CandidatureController@index')->name('information-personnelle');
Route::get('/candidature-2', 'CandidatureController@index')->name('bourse');
Route::get('/candidature-3', 'CandidatureController@index')->name('formulaire');

Route::get('/informations', 'CandidatureController@index')->name('formulaire');

// Authentication
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@logout')->name('logout');


// Mail
Route::get('/mail', 'MailController@index');
Route::get('/mail/sendVerification', 'MailController@home');





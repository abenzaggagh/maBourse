<?php

/* Main Pages */

// Index
Route::get('/', 'IndexController@index')->name('index');
Route::get('/lang/{locale}', 'IndexController@locale')->name('locale');

// Bourses
Route::get('/bourse','BourseController@index');
Route::get('/detail_programme','BourseController@detail_programme');

Auth::routes();

// Candidature
Route::get('/candidature', 'CandidatureController@index')->name('candidature');

Route::post('/information', 'CandidatureController@information')->name('information');

// Authentication
// TODO: Rename the routes with simple names.
Route::post('/login', 'CandidatureController@login')->name('login');
Route::post('/candidature-register', 'CandidatureController@register')->name('candidature-register');

Route::get('/logout', 'CandidatureController@logout')->name('logout');


// Mail
Route::get('/mail', 'MailController@index');
Route::get('/mail/sendVerification', 'MailController@home');





<?php

/* Main Pages */

// Index
Route::get('/', 'IndexController@index')->name('index');
// TODO: Add Closure
Route::get('/lang/{locale}', 'IndexController@locale')->name('locale');

// Authentication
Route::post('/login', 'AuthenticationController@login')->name('login');
Route::post('/register', 'AuthenticationController@register')->name('register');
Route::get('/logout', 'AuthenticationController@logout')->name('logout');

// Candidature
Route::get('/candidature', 'CandidatureController@index');
// ADD SECURITY - SESSION VERIFICATION AND TOKEN
Route::post('/candidature', 'CandidatureController@candidature');
Route::post('/information', 'CandidatureController@information');
Route::post('/cursus', 'CandidatureController@cursus');
Route::post('/documents', 'CandidatureController@documents');


// Bourses
Route::get('/bourse','BourseController@index');
Route::get('/detail_programme','BourseController@detail_programme');


// TODO: TO BE MOVED TO THE API
Route::get('/disciplines/{programme_id}', 'CandidatureController@disciplinesByProgrammeID')->name('programmes');
Route::get('/discipline/{discipline_id}', 'CandidatureController@disciplines')->name('disciplines');
Route::get('/typeBacalaureats/{type_bac_id}', 'CandidatureController@typeBacalaureats')->name('typeBacalaureats');


// Mail
Route::get('/mail', 'MailController@index');
Route::get('/mail/sendVerification', 'MailController@sendValidation');






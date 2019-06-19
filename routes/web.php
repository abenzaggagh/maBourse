<?php

/* Main Pages */

// Index
Route::get('/', 'IndexController@index');

// Bourses


// Candidature
Route::get('/candidature', 'CandidatureController@index');



// Mail
Route::get('/mail', 'MailController@index');
Route::get('/mail/sendVerification', 'MailController@home');


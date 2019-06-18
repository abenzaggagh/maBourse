<?php

// Index
Route::get('/', 'IndexController@index');





// Mail
Route::get('/mail', 'MailController@index');
Route::post('/send/validation', 'MailController@sendValidationEmail');


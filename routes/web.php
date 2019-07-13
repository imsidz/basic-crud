<?php

//Methods Read
Route::get('/', 'WelcomeController@index');


//Method Create
Route::post('/', 'WelcomeController@post');

Route::get('/{id}', 'WelcomeController@editForm');

//Method Update
Route::post('/{id}', 'WelcomeController@editPost');

//Method Delete
Route::delete('/{id}', 'WelcomeController@deletePost');
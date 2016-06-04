<?php

Route::get('/', function () {
    return view('welcome');
});

Route::any('/webhook', 'ConversationController@conversation');

Route::group(['middleware' => 'auth'], function () {

	Route::get('/add-bot', function() {
		//Ask for page access token and verify access token
	});
	
});

Route::auth();
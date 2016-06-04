<?php

Route::get('/', function () {
    return view('welcome');
});

Route::any('/webhook', 'ConversationController@conversation');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('bots', 'BotsController');
	Route::resource('bots/{id}/qna', 'QuestionsAndAnswerController');
});

Route::auth();
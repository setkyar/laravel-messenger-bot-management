<?php

Route::get('/', function () {
    return view('welcome');
});

Route::any('/webhook', 'ConversationController@conversation');

use App\Answer;

Route::group(['middleware' => 'auth'], function () {
	Route::get('/addqa', function() {
		Answer::truncate();

		$data = [
			['command' => 'hi', 'answer' => 'hello', 'user_id' => 1],
			['command' => 'how are you?', 'answer' => 'I am fine thanks. And you?', 'user_id' => 1],
			['command' => 'i am fine too', 'answer' => 'Gland to hear that.', 'user_id' => 1],
			['command' => 'i am sick', 'answer' => 'Health is the most important thing in the lief, please take care', 'user_id' => 1],
			['command' => 'shit', 'answer' => 'Umm, I don\'t like it', 'user_id' => 1],
			['command' => 'fuck', 'answer' => 'Umm, Rudey :/', 'user_id' => 1],
			['command' => 'bye', 'answer' => 'Bye, one important things, please don\'t miss to chat with me again', 'user_id' => 1],
			['command' => 'you are quite fun', 'answer' => 'You are welcome, BTW, tht\'s my job yeah!', 'user_id' => 1],
			['command' => 'how it\'s the weather today', 'answer' => 'I can\'t help you with this may be my friend Poncho [https://www.facebook.com/hiponcho] can help it to you.', 'user_id' => 1],
			['command' => 'life is too short', 'answer' => 'We all know yeah', 'user_id' => 1],
			['command' => 'haha', 'answer' => 'It is funny?', 'user_id' => 1],
		];

		if(Answer::insert($data)) {
			return 'Successfully added Q&A';
		}
	});

	Route::get('/add-bot', function() {
		//Ask for page access token and verify access token
	});
});

Route::auth();
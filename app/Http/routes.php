<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('/webhook', 'ConversationController@conversation');

use App\Answer;

Route::get('/add', function() {
	// Answer::create(['command' => 'hi', 'answer' => 'hello', 'user_id' => 1]);
	
	$data = [
		// ['command' => 'hi', 'answer' => 'hello', 'user_id' => 1],
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

	Answer::create($data);
});

<?php namespace App\Messenger\Helpers;

use pimax\FbBotApp;
use pimax\Messages\Message;
use pimax\Messages\ImageMessage;
use pimax\UserProfile;
use pimax\Messages\MessageButton;
use pimax\Messages\StructuredMessage;
use pimax\Messages\MessageElement;
use pimax\Messages\MessageReceiptElement;
use pimax\Messages\Address;
use pimax\Messages\Summary;
use pimax\Messages\Adjustment;

class Messenger
{
	protected $verify_token;
	protected $token;
	protected $bot;

	function __construct() {
		$this->verify_token = env('verify_token');
		$this->token = env('token');
		
		// $this->bot = new FbBotApp($token);
	}

	public function hello() {
		return 'hello';
	}
}
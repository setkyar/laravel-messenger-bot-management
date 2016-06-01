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
		
		$this->bot = new FbBotApp($this->token);
	}

	public function reciveConversation() {
		if (!empty($_REQUEST['hub_mode']) && $_REQUEST['hub_mode'] == 'subscribe' && $_REQUEST['hub_verify_token'] == $this->verify_token) {
			//if verification checking
			echo $_REQUEST['hub_challenge'];
		} else {
			// Other event
		    $data = json_decode(file_get_contents("php://input"), true, 512, JSON_BIGINT_AS_STRING);
		   	// Log::info($data);
		    if (!empty($data['entry'][0]['messaging'])) {
		        foreach ($data['entry'][0]['messaging'] as $message) {
		            // Skipping delivery messages
		            if (!empty($message['delivery'])) {
		                continue;
		            }
		            $command = "";

		            // When bot receive message from user
		            if (!empty($message['message'])) {
		                $command = $message['message']['text'];
		            // When bot receive button click from user
		            } else if (!empty($message['postback'])) {
		                $command = $message['postback']['payload'];
		            }

		            // Handle command
		            $bot_answer = Answers::where('command', '=', strtolower($command))->first();

		            if ($bot_answer) {
		            	$bot->send(new Message($message['sender']['id'], $bot_answer->answer));
		            } else {
		            	//Default
		            	$bot->send(new Message($message['sender']['id'], 'Sorry. I don’t understand you.'));
		            }
		        }
		    }
		}
	}
}
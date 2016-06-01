<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConversationController extends Controller
{
    public function conversation()
    {
    	return Messenger::startConversation();
    }
}

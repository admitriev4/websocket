<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSend;
//use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request) {
        /*$message = $request->input('message', '');
        if (strlen($message)) {
            event(new MessageSend($message));
        }*/
        return view('chat.message', ['title' => "чат",]);
    }
}

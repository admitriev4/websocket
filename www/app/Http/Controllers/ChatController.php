<?php

namespace App\Http\Controllers;


use App\Events\MessageSend;




class ChatController extends Controller
{
    public function index() {
        return view('chat.message');
    }


}

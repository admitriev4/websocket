<?php

namespace App\Http\Controllers;


use App\Events\MessageSend;
use Redis;



class ChatController extends Controller
{
    public function index($id) {
        return view('chat.message', ['id' => $id]);
    }


}

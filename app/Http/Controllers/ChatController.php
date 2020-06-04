<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function enviar_mensagem(Request $request, Chat $chat=null)
    {

        $request->validate([
           'mensagem'=>['required'],
        ]);

        if (!$chat){
          $chat =  Auth::user()->chats()->create();
        }

        $chat->mensagens()->create(['mensagem'=>$request->mensagem]);
    }

}

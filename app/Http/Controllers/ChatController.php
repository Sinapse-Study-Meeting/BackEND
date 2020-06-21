<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Events\EventoEnvioMensagem;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function enviar_mensagem(Request $request, Chat $chat = null)
    {

        $request->validate([
            'mensagem' => ['required'],
        ]);

        if (!$chat) {
            $chat =  Auth::user()->chats()->create();

            if (isset($request->user)) {
                $destinatario = User::find($request->user);

                if ($destinatario) {
                    $chat->users()->attach($destinatario);
                } else {
                    abort(404);
                }
            }
        }

        $chat->mensagens()->create(['mensagem' => $request->mensagem, 'user_id' => Auth::id()]);

        event(new EventoEnvioMensagem($request->mensagem, 7));

        return redirect()->back()->with('status', 'Mensagem enviada com sucesso');
    }

    public function chat()
    {
        return view('chat_completo');
    }

    public function conversas()
    {
        $UsuarioConversas = Auth::user()->chats()->get();
        for($i=0; $i<count($UsuarioConversas); $i++){
            $UsuarioConversas[$i]->mensagens = $UsuarioConversas[$i]->mensagens()->latest()->first();
        }
        $user_id = Auth::id();
        for ($i = 0; $i < count($UsuarioConversas); $i++) {
            $UsuarioConversas[$i]->users = $UsuarioConversas[$i]->users()->where('users.id', '<>', $user_id)->get();
        }
        return response()->json(json_encode($UsuarioConversas));
    }

    public function mensagens_chat(Chat $chat){
        return response()->json(json_encode($chat->mensagens));
    }
}


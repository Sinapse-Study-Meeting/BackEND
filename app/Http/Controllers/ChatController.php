<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Events\EventoEnvioMensagem;
use App\User;
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

        $mensagens = DB::table('mensagens')->select('mensagens.mensagem', 'chat_id', DB::raw('MAX(created_at) as mensagem_created_at'))->groupBy('chat_id');

        $UsuarioConversas =
            Auth::user()->chats()->select(
                'mensagens_chat.mensagem',
                'chats.id as chat_id',
                'users.name',
                'mensagens_chat.mensagem_created_at'
            )
            ->with('users')
            ->join('users', 'users.id', '=', 'chat_user.user_id')
            ->joinSub($mensagens, 'mensagens_chat', function ($join) {
                $join->on('chats.id', '=', 'mensagens_chat.chat_id');
            })->get();

        $user_id = Auth::id();
        for ($i = 0; $i < count($UsuarioConversas); $i++) {
            for ($j = 0; $j < count($UsuarioConversas[$i]->users); $j++) {
                if ($UsuarioConversas[$i]->users[$j]->id == $user_id) {
                    unset($UsuarioConversas[$i]->users[$j]);
                }
            }
        }
        return response()->json(json_encode($UsuarioConversas));
    }
}

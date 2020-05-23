<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Grupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GruposController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //verificacao para usuario logado (o usuario so pode fazer qualquer acao no sistema se estiver logado)

    public function criargrupo(Request $request)
    {
        $request->validate([
            'nome' => ['required'],
            'descricao' => ['required']
        ]);

        //validacao dos campos necessarios

        $grupocriado= Grupo::create([
           'nome'=>$request->nome,
           'descricao'=>$request->descricao,
        ]);
        //criando grupo

        $grupocriado->users()->attach(Auth::user(),['papel'=>'administrador']);
        //adicionando usuario no grupo como adm

       return redirect("/grupo/$grupocriado->id");
    }

    public function grupo(Grupo $grupo)
    {
        return view('grupo', compact('grupo'));
    }

    public function  editar(Request $request, Grupo $grupo){

        $request->validate([
            'nome' => ['required'],
            'descricao' => ['required']
        ]);

        $grupo->update(['nome'=>$request->nome, 'descricao' => $request->descricao]);

        return redirect()->back()->with('status', 'Grupo atualizado com sucesso');

    }

    public function apagar(Grupo $grupo) {
        $grupo->users()->detach();
        $grupo->delete();
        return redirect()->route('home')->with('status', 'Grupo deletado com sucesso');
    }

}

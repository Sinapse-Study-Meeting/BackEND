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
        //validacao dos campos necessarios
        $request->validate([
            'nome' => ['required'],
            'descricao' => ['required'],
            'areas_estudo' => ['required']
        ]);

        //separar as areas em um array
        $areas_estudo = explode(',', $request->areas_estudo);

        //criando grupo
        $grupocriado= Grupo::create([
           'nome'=>$request->nome,
           'descricao'=>$request->descricao,
        ]);

        //adicionar as areas no grupo
        foreach($areas_estudo as $area) {
            $grupocriado->areas_estudo()->create([
                'area'=> trim($area)
            ]);
        }

        //adicionando usuario no grupo como adm
        $grupocriado->users()->attach(Auth::user(),['papel'=>'administrador']);

       return redirect("/meus-grupos/$grupocriado->id");
    }

    public function grupo(Grupo $grupo)
    {
        return response()->json($grupo->with('areas_estudo')->get());
    }

    public function meusgrupos(Grupo $grupo = null){
        $grupos = Auth::user()->grupos;
        return view('grupos_perfil', ['grupos'=>$grupos, 'grupoAtivo'=> $grupo ? $grupo: $grupos[0]]);
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
        if(Auth::user()->grupos->count() > 0)
            return redirect('/meus-grupos')->with('status', 'Grupo deletado com sucesso');
        return redirect()->route('home')->with('status', 'Grupo deletado com sucesso');
    }

}

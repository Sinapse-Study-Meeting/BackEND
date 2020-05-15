<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Interesse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class InteresseController extends Controller
{
    public function create (Request $request)
    {
        $request->validate([
            'interesse' => ['required'],
            'categoria' => ['required', 'exists:categorias,nome'],
            'nivel' => ['required', Rule::in(['basico', 'intermediario', 'avancado'])],
        ]);
        $InteresseExiste = Interesse::where('assunto', $request->interesse)->first();

        if ((bool)$InteresseExiste) {
            Auth::user()->interesses()->attach($InteresseExiste, ['nivel_conhecimento' => $request->nivel]);
        } else {

            $categoria = Categoria::where('nome', $request->categoria)->first();

            $InteresseCriado = $categoria->interesses()->create([
                'assunto' => $request->interesse
            ]);

            Auth::user()->interesses()->attach($InteresseCriado, ['nivel_conhecimento' => $request->nivel]);

        }
    }
        public function interesses(){

        $ListarInteresses = Auth::user()->interesses()->get();

        return view('interesses', ['ListarInteresses' => $ListarInteresses]);

    }



}

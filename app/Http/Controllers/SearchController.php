<?php

namespace App\Http\Controllers;

use App\Grupo;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $busca = $request->query('field');
        $grupos = Grupo::where('nome', 'like', "%$busca%")->get();
        $usuarios = User::where('name', 'like', "%$busca%")->get();
        return view('pages.search', [
            'grupos' => $grupos,
            'usuarios' => $usuarios,
            'busca' => $busca
        ]);
    }

    public function searchUserByName(Request $request)
    {
        $busca = $request->query('nome');
        $usuarios = User::where('name', 'like', "%$busca%")->limit(10)->get();
        return $usuarios;
    }
}

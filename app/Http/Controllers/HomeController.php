<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Interesse;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $cat = Categoria::all();

        $int = Interesse::all();

        $usuario = Auth::user();

        $usuarioint = $usuario->interesses()->first();

        return view('home', [
            'categorias' => $cat,
            'interesses' => $int,
            'teminteresses' => $usuarioint
        ]);
    }
}

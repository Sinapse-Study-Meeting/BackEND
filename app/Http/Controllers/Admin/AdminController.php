<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Relatorio_users;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index() {
       
        $relatorio = '';
        try{
            $relatorio = Relatorio_users::all();
        }
        catch(QueryException $exception) {
            throw $exception;
            $relatorio = $this->gerar_relatorio_user();
        }
        return view('admin.index', ['relatorio' => $relatorio]);
    }

    public function atualizar_relatorio_user() {
        $this->gerar_relatorio_user();
        return redirect()->route('admin.index');
    }

    public function gerar_relatorio_user() {
        $relatorio = new Relatorio_users();
        $relatorio->generate();
        return $relatorio->all();
    }

}

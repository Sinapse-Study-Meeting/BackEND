@extends('layouts.base')
@section('title',"Sinapse - Admin")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

@endsection
@section('content')
@include("layouts.navbar")

<div class="admin-principal">
    <div class="admin">
        <div class="inicio">
            <table>
                <tr class="colInicio">
                    <th>Usuarios</th>
                    <th>Interesses</th>
                    <th>Mensagens</th>
                </tr>
                @foreach (DB::table('relatorio_geral')->get() as $item)
                <tr class="colInicio">
                    <td>{{$item->qtd_usuarios}}</td>
                    <td>{{$item->qtd_interesses}}</td>
                    <td>{{$item->qtd_mensagens}}</td>
                </tr>
                @endforeach

            </table>
            <form action="{{route('admin.atualizar_relatorio_user')}}" method="POST">
                @csrf
                <button type="submit">Atualizar Relatório</button>
            </form>
        </div>
        <div class="admin-conteudo">
            <h2 class="h1-size">Usuários do Sistema</h2>
            <table class="listagem">
                <tr class="col-principal">
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                </tr>
                @foreach ($relatorio as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->state}}</td>
                    <td>{{$item->city}}</td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>


@section('scripts')
<script src="{{asset('js/search-bar.js')}}"></script>
<script src="{{asset('js/toggle.js')}}"></script>
@endsection
@endsection
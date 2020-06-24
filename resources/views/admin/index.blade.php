@extends('layouts.base')
@section('title',"Sinapse - Admin")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/home.min.css')}}">


@endsection
@section('content')
@include("layouts.navbar")

<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
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
<br>
<form action="{{route('admin.atualizar_relatorio_user')}}" method="POST">
    @csrf
    <button type="submit">ATUALIZAR RELATÓRIO</button>
</form>

<hr>
<table>
    <tr>
        <th>Quantidade de usuarios</th>
        <th>Quantidade de interesses</th>
        <th>Quantidade de mensagens</th>
    </tr>
    @foreach (DB::table('relatorio_geral')->get() as $item)
        <tr>
            <td>{{$item->qtd_usuarios}}</td>
            <td>{{$item->qtd_interesses}}</td>
            <td>{{$item->qtd_mensagens}}</td>
        </tr>
    @endforeach

</table>



@section('scripts')
<script src="{{asset('js/search-bar.js')}}"></script>
<script src="{{asset('js/toggle.js')}}"></script>
@endsection
@endsection

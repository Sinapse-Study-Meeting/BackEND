@extends('layouts.base')
@section('title',"Sinapse - Home")
@section('metas')
<meta name="description" content="Resultado da busca por {{ $busca }}">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/search.min.css')}}">
@endsection

@section('content')
@include("layouts.navbar")
@include("layouts.search-bar")

<main class="container">
    <h1>Grupos</h1>
    @foreach ($grupos as $grupo)
        <div>
        {{$grupo}}
        </div>
    @endforeach
    <h1>Usuários</h1>
    @foreach ($usuarios as $usuario)
    <div>
        {{$usuario}}
    </div>
    @endforeach
</main>

@section('scripts')
<script src="{{asset('js/search-bar.js')}}"></script>
<script src="{{asset('js/toggle.js')}}"></script>
@endsection
@endsection
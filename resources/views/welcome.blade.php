@extends('layouts.base')
@section('title',"Bem-vindo Sinapse")
@section('metas')
    <meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
    <meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/welcome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
@endsection

@section('content')
<header class="navbar__home">
    <a href="{{ route('home') }}" class="logo">
        <h1 class="logo__replacement__white">Sinapse</h1>
    </a>
    <nav class="navbar__menu__home">
        @if(Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if(Route::has('register'))
                        <a href="{{ route('register') }}">Cadastrar</a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>
</header>
<div class="content">
    <div class="conteudo-home">
        <div class="title m-b-md">
            Adquira e compartilhe conhecimento!
        </div>
        <div class="homebutton">
            <a href="{{ route('register') }}" class="botaoinicio">Começar agora</a>
            <a href="{{ route('login') }}" class="botaosaiba">Já faço parte</a>
        </div>

    </div>
</div>
<!-- <footer class="footer-inicial">

</footer> -->
@endsection
@section('scripts')
<script src="{{ asset('js/toggle.js') }}"></script>
<script src="{{ asset('js/mostrarsenha.js') }}"></script>
@endsection

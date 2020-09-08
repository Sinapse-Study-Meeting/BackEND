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
<div class="corpohome">
    <div class="titulomotivos">
        <h1 class="hazul h1-size">Motivos do porquê aprender com a Sinapse?</h1>
    </div>
    <div class="motivos">
        <div class="conteudomotivos">
            <img src="{{  asset('img/verde.svg') }}" class="porquesinapse">
            <p>Aprendizagem personalizada e colaborativa<p>
        </div>
    
        <div class="conteudomotivos">
            <img src="{{  asset('img/vermelho.svg') }}" class="porquesinapse">
            <p>Ferramentas que facitam aprendizado<p>
    </div>
    </div>
    <div class="motivos">
    <div class="conteudomotivos">
        <img src="{{  asset('img/amarelo.svg') }}" class="porquesinapse">
        <p>A qualquer hora, em qualquer lugar<p>
    </div>
    <div class="conteudomotivos">
        <img src="{{  asset('img/azul.svg') }}" class="porquesinapse">
        <p>Abrange matérias e conteúdos diversificados<p>
    </div>
</div>
    <div class="recomendacao">
        <h2 class="hazul h2-size">Receba recomendações para melhorar o aprendizado.</h2>
        <a href="{{ route('register') }}" class="btn--primary">Inscreva-se</a>
    </div>
    <div>
        <h1 class="hazul h1-size">Como funciona?</h1>
        <hr>
    </div>
    <div>
        <h1 class="hazul h1-size">Principais categoria acessadas</h1>
        <p>Transforme sua vida por meio da educação e deixe a Sinapse te ajudar nisso.</p>
        <hr>
    </div>

<div>
    <h1 class="hazul h1-size">Depoimentos</h1>
</div>
</div>

<footer class="footer-inicial">
    <div class="conteudofooter">
        <div class="leftfooter alinha">
            <a href="{{ route('home') }}" class="logo lfooter">
                <h1 class="logo__replacement__white">Sinapse</h1>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <ul class="menufooter alinha">
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Mapa do site</a></li>
            <li><a href="#">Entre em contato</a></li>
        </ul>

        <div class="linkcontatos alinha">
            <h3 class="h3-size">Fique conectado !</h3>
            <ul>
                <li><a href="#"><img src="{{  asset('img/google-logo-24.png') }}"></a></li>
                <li><a href="#"><img src="{{  asset('img/twitter-logo-24.png') }}"></a></li>
                <li><a href="#"><img src="{{  asset('img/instagram-alt-logo-24.png') }}"></a></li>
                <li><a href="#"><img src="{{  asset('img/facebook-logo-24.png') }}"></a></li>
            </ul>
        </div>
    </div>
    <small class="copyright">Copyright © 2020 </small>
</footer>
@endsection
@section('scripts')
<script src="{{ asset('js/toggle.js') }}"></script>
<script src="{{ asset('js/mostrarsenha.js') }}"></script>
@endsection

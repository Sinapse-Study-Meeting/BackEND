@extends('layouts.base')

@section('title',"Sinapse - Home")
@section('metas')
    <meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
    <meta name="keywords" content="Sinapse, estudar, grupos, login">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/chat_completo.min.css')}}">

@endsection
@section('content')
    @include("layouts.navbar")
    <main class="mainchat container l-content-aside">
        @csrf
        <aside class="historico l-content-aside__chat">
            <div class="menu_mensagem">
                <h2 class="">Conversas</h2>
                <img src="{!! asset('img/dots-vertical.png')!!}" class="imgmenu">
            </div>
            <div class="pesquisar-chat">
                <input type="text" placeholder="Pesquisar.."> 
                <div class="icones">
                    <img src="{{  asset('img/search-alt-regular-180.png') }}">
                </div>
            </div>
            <div class="messaging">
                <div class="inbox_msg">
                    <div class="inbox_people">
                        <div class="inbox_chat">
                            <input type="hidden" id="user_id" value="{{Auth::id()}}">
                            <a href="#" class="toggle-nav btn-nav">Teste</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <article class="mensagem-individual l-content-aside__conversa">
            <div class="menu_chat">
                <img src="{{asset('img/seta-voltar.png')}}" class="navbar__trigger toggle-nav" alt="Menu" title="Menu">
                <img src="{{ asset('img/coruja-perfil.svg')}}" class="imgchat_inicio">
                <h2 class="menu-chat__user-name">Nome completo</h2>
                <div class="imgmenuchat">
                    <img src="{{ asset('img/dots-vertical.png')}}" class="confchat">
                    <img src="{{asset('img/search-alt.png')}}" class="pesquisarchat">
                </div>
            </div>

            <div class="mesgs">
                <div class="msg_history"></div>
            </div>
            <div class="boxtexto">
                <div class="form-group">
                    <div class="inputchat">
                        <form method="POST" id="enviar-mensagem-form">
                            <input type="text" class="adicionarinpult" name="mensagem" placeholder="Mensagens..">
                            <button class="enviarmsg"><img src="{{asset('img/navigation-solid-180.png')}}"></button>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection

@section('scripts')
    <script src="{{asset('js/chat.js')}}"></script>
    
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('24c8c9f5c522d5df5fde', {
            cluster: 'mt1'
        });
        var channel = pusher.subscribe('mensagens');
        channel.bind('mensagem-enviada', function(data) {
            var mensagens = document.getElementById('mensagens')
            p = document.createElement('p')
            p.textContent = ' Nova mensagem recebida: ' + data.message
            mensagens.appendChild(p)
        });
    </script>
@endsection

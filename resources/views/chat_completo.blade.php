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
                <img src="{!! asset('img/dots-vertical.png')!!}" class="imgmenu">
            </div>
            <div class="messaging">
                <div class="inbox_msg">
                    <div class="inbox_people">
                        <div class="inbox_chat">

                            <input type="hidden" id="user_id" value="{{Auth::id()}}">


                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <article class="mensagem-individual l-content-aside__conversa">
            <div class="menu_chat">
                <img src="{{asset('img/seta-voltar.png')}}" class="navbar__trigger" alt="Menu" title="Menu">
                <img src="{{ asset('img/coruja-perfil.svg')}}" class="imgchat_inicio">
                <h2 class="menu-chat__user-name">Nome completo</h2>
                <div class="imgmenuchat">
                    <img src="{{ asset('img/dots-vertical.png')}}" class="confchat">
                    <img src="{{asset('img/search-alt.png')}}" class="pesquisarchat">
                </div>
            </div>

            <div class="mesgs">
                <div class="msg_history">
                    
                </div>
            </div>
            <div class="boxtexto">
                <div class="form-group">
                   <!--  <div class="form-group adicionardoc">
                        <label for="fupload" class="control-label"><img src="{!! asset('img/plus-regular-180.png')!!}"
                                                                        id="trocarfoto"></label>
                        <input type="file" id="fupload" name="fupload" class="upload fupload form-control "/>
                    </div> -->
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
@endsection

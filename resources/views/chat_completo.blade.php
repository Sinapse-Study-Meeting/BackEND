@extends('layouts.base')

@section('title',"Sinapse - Home")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/chat_completo.min.css')}}">

@endsection
@section('content')
@include("layouts.navbar")
<main class="container l-content-aside">
    <aside class="l-content-aside__chat">
        <div class="menu_mensagem">
            <img src="{!! asset('img/dots-vertical.png')!!}" class="imgmenu">
        </div>
    </aside>
    <article class="l-content-aside__main">
        <div class="menu_chat">
            <img src="{!! asset('img/coruja-perfil.svg')!!}" class="imgchat_inicio">
            <h2>Nome completo</h2>
            <div class="imgmenuchat">
                <img src="{!! asset('img/dots-vertical.png')!!}">
                <img src="{!! asset('img/search-alt.png')!!}">
            </div>
        </div>
        <div class="content_chat">
          
            <div class="boxtexto">
                <div class="form-group">
                    <div class="input-field">
                        <input type="text" id="email" name="email" value="Mensagens..">
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>
@endsection
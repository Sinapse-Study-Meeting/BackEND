@extends('layouts.base')
@section('title',"Sinapse - Home")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/home.min.css')}}">

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
        p.textContent = ' Nova mensagem recebida: ' +data.message
        mensagens.appendChild(p)
    });




</script>

@endsection
@section('content')
@include("layouts.navbar")
@include("layouts.search-bar")

<main class="container l-content-aside">
    <article class="l-content-aside__main">
        @if(!$teminteresses)
        <section class="interesses">
            <form class="home-adicionar-interesse" action="{{route('criarinteresse')}}" method="post">
                @csrf
                <div class="home-adicionar-interesse__fields">
                    <div class="form-group home-interesse-form-group">
                        <h1 class="hformat">Grupos que eu participo</h1>
                        <label for="interesse-field">No que você tem interesse em estudar?</label>
                        <input class="form-field" id="interesse-field" list="interesse" name="interesse">
                        @error('interesse')
                        <p class="">{{$message}}</p>
                        @enderror
                        <datalist id="interesse">
                            @foreach ($interesses as $item)
                            <option>{{$item->assunto}}</option>
                            @endforeach
                        </datalist>
                    </div>
                    <div class="form-group home-interesse-form-group">
                        <label for="categoria_field">Área de interesse</label>
                        <input class="form-field" id="categoria_field" list="categoria" name="categoria">
                        @error('categoria')
                        <span class="form-group__error">{{$message}}</span>
                        @enderror
                        <datalist id="categoria">
                            @foreach ($categorias as $item)
                            <option>{{$item->nome}}</option>
                            @endforeach
                        </datalist>
                    </div>
                    <div class="form-group home-interesse-form-group">
                        <label for="nivel">Quanto você conhece a respeito</label>
                        <select class="form-field" name="nivel" id="nivel" class="">
                            <option disabled selected></option>
                            <option value="basico">Básico</option>
                            <option value="intermediario">Intermediário</option>
                            <option value="avancado">Avançado</option>
                        </select>
                        @error('nivel')
                        <span class="form-group__error">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn--primary"> Adicionar </button>
            </form>
        </section>
        @endif


            <div class="grupospessoais">
            <h1 class="hclaro h1-size">Grupos que eu participo</h1>
            <div class="gruposparticipo">
                <img src="{!! asset('img/estudos.png')!!}" class="participoimg">
                <h1 class="hclaro h1-size">Programação PP</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p><br>
                <button type="submit" class="btn--primary"><img src="{!! asset('img/group-solid.png')!!}"> Ver grupo </button>
                <button type="submit" class="btn--primary"><img src="{!! asset('img/message-add.png')!!}"> Abrir Chat </button>
            </div>
            <div class="notgrupo">
                <img src="{!! asset('img/coruja-triste.svg')!!}">
                <h2 class="hclaro h2-size">Você não participa de nenhum grupo de estudos</h2>
                <h3 class="hclaro h3-size"> Você pode</h3>
                <button type="submit" class="btn--primary btmbig"><img src="{!! asset('img/plus-circle.png')!!}"> Criar um grupo </button>
                <button type="submit" class="btn--primary btmbig"><img src="{!! asset('img/search-white.png')!!}"> Encontrar um grupo </button>
            </div>
        </div>
        <br>

    </article>

    <aside class="l-content-aside__aside">
        <div class="box-aside">
            <div class="online"><img src="{!! asset('img/circle-solid-24.png')!!}" alt="">Online Agora</div>
            <div class="pessoas-online"><img src="{!! asset('img/coruja-perfil.svg')!!}" alt=""><a href="">Nome completo</a></div>
            <div class="pessoas-online"><img src="{!! asset('img/coruja-perfil.svg')!!}" alt=""><a href="">Nome completo</a></div>
            <div class="pessoas-online"><img src="{!! asset('img/coruja-perfil.svg')!!}" alt=""><a href="">Nome completo</a></div>
            <div class="pessoas-online"><img src="{!! asset('img/coruja-perfil.svg')!!}" alt=""><a href="">Nome completo</a></div>
        </div>
        <div class="box-aside">
            <div class="post"><img src="{!! asset('img/news-regular-24.png')!!}" alt="">Post</div>
            <div class="box-post"><img src="{!! asset('img/image-regular-240.png')!!}">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="box-post"><img src="{!! asset('img/image-regular-240.png')!!}">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </aside>
    <div class="chat">
        <a href="" class="button-chat"><i class='bx bxs-chat'></i> Chat</a>
        <a href="" class="button-chatCompleto"><img src="{!! asset('img/arrow-from-left.png')!!}"> Chat Completo</a>
    </div>
</main>
@section('scripts')
<script src="{{asset('js/search-bar.js')}}"></script>
<script src="{{asset('js/toggle.js')}}"></script>
@endsection
@endsection

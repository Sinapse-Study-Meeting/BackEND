@extends('layouts.base')

@section('title',"Sinapse - Home")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/home.min.css')}}">

@endsection
@section('content')
@include("layouts.navbar")
@include("layouts.search-bar")

@if(session('status'))
<p>{{session('status')}}</p>
@endif
<main class="container l-content-aside">
    <article class="l-content-aside__main">
        @if(!$teminteresses)
        <section class="interesses">
            <form class="home-adicionar-interesse" action="{{route('criarinteresse')}}" method="post">
                @csrf
                <div class="home-adicionar-interesse__fields">
                    <div class="form-group home-interesse-form-group">
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
                        <label for="nivel">O que você sabe a respeito disso?</label>
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
            <h1 class="hpadrão h1-size">Grupos que eu participo</h1>
            <div class="gruposparticipo">
                <img src="{!! asset('img/estudos.png')!!}">
                <h3>Programação</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <button type="submit" class="btn--primary"> Ver grupo </button>
                <button type="submit" class="btn--primary"> Abrir Chat </button>
            </div>
        </div>

            <br>

        <form action="">
@csrf

            <label for="user"> Selecione os usuários: </label>


            <select name="usuarios" id="users">

     @foreach(\App\User::all() as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach


            </select>
            <br>
            Mensagem:
            <br>
            <textarea>

            </textarea>

            <input type="submit" value="Submit">

        </form>

    </article>

    <aside class="l-content-aside__aside">
        <div class="box-aside">
            <div class="online"><img src="{!! asset('img/circle-solid-24.png')!!}" alt="">Online Agora</div>
            <div class="pessoas-online"><img src="{!! asset('img/user.png')!!}" alt=""><a href="">Nome completo</a></div>
            <div class="pessoas-online"><img src="{!! asset('img/user.png')!!}" alt=""><a href="">Nome completo</a></div>
            <div class="pessoas-online"><img src="{!! asset('img/user.png')!!}" alt=""><a href="">Nome completo</a></div>
            <div class="pessoas-online"><img src="{!! asset('img/user.png')!!}" alt=""><a href="">Nome completo</a></div>
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
        <div class="chat">
            <a href="" class="button-chat"><i class='bx bxs-chat'></i> Chat</a>
            <a href="" class="button-chatCompleto"><img src="{!! asset('img/arrow-from-left.png')!!}"> Chat</a>
        </div>
    </aside>

</main>
@section('scripts')
<script src="{{asset('js/search-bar.js')}}"></script>
<script src="{{asset('js/toggle.js')}}"></script>
@endsection
@endsection

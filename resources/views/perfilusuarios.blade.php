@extends('layouts.base')
@section('title',"Sinapse Grupo de Estudos")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/perfilusuarios.min.css') }}">
@endsection
@section('content')
@include('layouts.navbar')

<main class="container l-content-aside perfiluser">
    <article class="l-content-aside__main">
        <div class="divisaoperfil">
            <div class="image-perfil">
                <img src="{!! asset('img/coruja-perfil.svg')!!}" alt="usuario" id="imagemusuario">
            </div>
            <div class="infoperfil">
                <h1 class="hazul h1-size">Janaina Silva Rapanelli</h1>
                <div class="paragrafos">
                    <p>Email</p>
                    <p>Cidade</p>
                    <p>Estado</p>
                </div>
                <button type="submit" class="btn--primary">Seguir</button>
                <button type="submit" class="btn--secondary">Mensagem</button>
            </div>
            <hr>
            <div class="infototal">
                <p class="hazul">120 Amigos</p>
                <p class="hazul">3 Grupos</p>
            </div>
        </div>
    <div class="divisaoperfil">
        <h2 class="hazul h3-size">Assuntos que interessa</h2>
    </div>
</article>
<aside class="l-content-aside__aside">
    <div class="divisaoperfil">
        <h3 class="hazul h3-size">Amigos em comum</h3>
        {{-- <div class="d-flex justify-content-start icones-membros-grupos">
            <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
            <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
            <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
            <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
        </div> --}}
        <p class="descricao-membros">Thaís, Janaína e outras 2 pessoas são membros. (Aqui mostra somente os seus amigos que estão nesse grupo)</p>
        <button type="submit" class="btn--primary"><i class="fas fa-search"></i>Visualizar tudo </button>
    </div>
    <div class="grupospessoais">
        <h1 class="hclaro h3-size">Grupos que eu participo</h1>
        <div class="divisaoperfil">
            <h1 class="hazul h3-size">Nome do grupo</h1>
           {{--  <a href="" class="btn--primary"><img src="{{ asset('img/group-solid.png')}}"> Ver grupo </a>
            <button type="submit" class="btn--primary"><img src="{{ asset('img/message-add.png')}}"> Abrir Chat </button> --}}
        </div>
    </div>
</aside>
</main>
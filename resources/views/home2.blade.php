@extends('layouts.base')

@section('title',"Sinapse - Home")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/home2.min.css')}}">
@endsection

@section('content')

@include("layouts.navbar")
@include("layouts.search-bar")

<aside>
    <div class="box-aside">
        <div class="online"><img src="{!! asset('img/circle-solid-24.png')!!}"> Online Agora </div>
        <div class="pessoas-online"><img src="{{asset('img/coruja-perfil.svg')}}" alt="Sua foto de perfil">Nome completo</div>
        <div class="pessoas-online"><img src="{{asset('img/coruja-perfil.svg')}}" alt="Sua foto de perfil">Nome completo</div>
        <div class="pessoas-online"><img src="{{asset('img/coruja-perfil.svg')}}" alt="Sua foto de perfil">Nome completo</div>
        <div class="pessoas-online"><img src="{{asset('img/coruja-perfil.svg')}}" alt="Sua foto de perfil">Nome completo</div>
    </div>

    <div class="box-aside">
        <div class="post"><img src="{!! asset('img/news-regular-24.png')!!}"> Posts</div>
        <div class="show-post"><img src="{{asset('img/image-regular-240.png')}}" alt="imagem do post">Conteudo</div>
    </div>
</aside>

@endsection
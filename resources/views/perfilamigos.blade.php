@extends('layouts.base')
@section('title',"Perfil")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/perfilamigos.min.css')}}">
@endsection
@section('content')
@include("layouts.navbar")
    <div class="perfilcompleto">
        <div class="blocoperfil">
            <div class="avatar">
                <div class="image-circle">
                    <img src="{{ asset('img/coruja-perfil.svg') }}" alt="usuario" id="imagemusuario">
                </div>
                <div class="form-group">
                    <label for="fupload" class="control-label label-bordered"><img src="{!!  asset('img/camera-solid-180.png') !!}" id="trocarfoto"></label>
                    <input type="file" accept="image/*" id="fupload" name="fupload" class="upload fupload form-control" />
                </div>
            </div>
            <h1 class="h1-size hazul">Nome Usuario</h1>
            <p>E-mail:</p>
            <p>Cidade:</p>
            <p>Estado:</p>
            <p class="hazul">350 Amigos</p>
            <p class="hazul">4 Grupos</p>
            <button type="submit" class="btn--primary"><i class="fas fa-plus"></i>Adicionar</button>
        </div>
        <div class="mural blocoperfil">
            <h3 class="h3-size hclaro">Bibliografia</h3>
            <p>Lorem ipsum dictum per aenean eget dui commodo habitant etiam semper, bibendum ac adipiscing litora convallis commodo gravida taciti lectus.</p>
        </div>
        <div class="blocoperfil">
            <h3 class="hazul">Amigos em comum</h3>
            <img src="{{ asset('img/coruja-perfil.svg')}}" class="pessoas-gruposmargin-usuarios">
            <img src="{{ asset('img/coruja-perfil.svg')}}" class="pessoas-grupos">
            <img src="{{ asset('img/coruja-perfil.svg')}}" class="pessoas-grupos">
            <img src="{{ asset('img/coruja-perfil.svg')}}" class="pessoas-grupos">
        </div>
        <h2 class="h2-size hclaro"> Interesses</h2>
        <div class="blocoperfil">
            <h3 class="hazul h3-size">Javascript</h3>
            <p>Categoria: </p>
            <p>Nivel de Conhecimento:</p>
        </div>
    </div>
@section('scripts')
<script src="{{asset('js/search-bar.js')}}"></script>
<script src="{{asset('js/toggle.js')}}"></script>
@endsection
@endsection
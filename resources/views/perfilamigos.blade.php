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
    <div class="mainperfil">
    <div class="perfilcompleto">
        <div class="blocoperfil">
            <div class="avatar">
                <div class="image-circle">
                    <img src="{{ asset('img/coruja-perfil.svg') }}" alt="usuario" id="imagemusuario">
                </div>
                <div class="form-group trocarfoto">
                    <label for="fupload" class="control-label label-bordered"><img src="{!!  asset('img/camera-solid-180.png') !!}" id="trocarfoto"></label>
                    <input type="file" accept="image/*" id="fupload" name="fupload" class="upload fupload form-control" />
                </div>
            </div>
            <div class="conteudoperfil">
                <h1 class="h1-size hazul">Janaina Silva Rapanelli</h1>
                <button type="submit" class="btn--primary"><i class="fas fa-plus"></i>Adicionar</button>
                <div class="sobreuser">
                    <p>E-mail: janaina1234s@gmail.com</p>
                    <p>Cidade: Presidente Prudente</p>
                    <p>Estado: São Paulo</p>
                </div>
                <div class="sobreperfil">
                    <p class="hclaro">350 Amigos</p>
                    <p class="hclaro">4 Grupos</p>
                </div>
            </div>
        </div>
        <div class="alinharinf">
            <div class="ladoesquerdo">
            <div class="mural blocoperfil">
                <h3 class="h3-size hclaro">Bibliografia</h3>
                <p>Lorem ipsum dictum per aenean eget dui commodo habitant etiam semper, bibendum ac adipiscing litora convallis commodo gravida taciti lectus.</p>
            </div>
            <div class="amigosemcomum blocoperfil ">
                <h3 class="hazul">Em comum - 20 Amigos</h3>
                <img src="{{ asset('img/coruja-perfil.svg')}}" class="pessoas-grupos">
                <img src="{{ asset('img/coruja-perfil.svg')}}" class="pessoas-grupos margin-usuarios">
                <img src="{{ asset('img/coruja-perfil.svg')}}" class="pessoas-grupos">
                <img src="{{ asset('img/coruja-perfil.svg')}}" class="pessoas-grupos margin-usuarios">
                <p class="descricao-amigosemcomum">Thaís e Janaína são amigos em comum entre vocês</p>
                <button type="submit" class="btn--primary"><i class="fas fa-search"></i>Visualizar tudo</button>
            </div>
        </div>
        <div class="ladodireito">
            <div class="blocoperfil">
                <h2 class="h2-size hclaro"> Interesses</h2>
                <h3 class="hazul h3-size">Javascript</h3>
                <p>Categoria: Tecnologia</p>
                <p>Nivel de Conhecimento: Básico</p>
                <h3 class="hazul h3-size">Direito Penal</h3>
                <p>Categoria: Direito</p>
                <p>Nivel de Conhecimento: intermediário</p>
            </div>
        </div>
        </div>
    </div>
</div>
@section('scripts')
<script src="{{asset('js/search-bar.js')}}"></script>
<script src="{{asset('js/toggle.js')}}"></script>
@endsection
@endsection
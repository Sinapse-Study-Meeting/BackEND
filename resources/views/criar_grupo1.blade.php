@extends('layouts.base')


@section('title', 'Criar Grupos')


@section('css')

<link rel="stylesheet" href="{{asset('css/criar_grupo.min.css')}}">

@endsection

@section('content')
@include('layouts.navbar')

<section class="register-section">
    <div class="register-section__item">
        <form action="home.html">
            <h1 class="welcome-info">Nome do Grupo</h1>
            <div class="center">
                <div class="image-circle">
                    <img src="{!! asset('img/grupoperfil.png')!!}" alt="grupo" id="imagemusuario">
                </div>
                <div class="form-group">
                    <label for="fupload" class="control-label label-bordered"><img src="{!! asset('img/pencil-regular-36.png')!!}"></label>
                    <input type="file" onclick="trocarFoto()" id="fupload" name="fupload" class="fupload form-control" />
                </div>
            </div>
            <h2 class="welcome-sub-info"> Informa a localização caso queira encontrar pessoas proximas!</h2>
            <div class="input-field">
                <input type="text" id="localizacao" name="localizacao">
                <label for="localizacao">Localização</label>
                <div class="icones">
                    <img src="{{asset('img/bxs-location.svg')}}">
                </div>
            </div>
            <br>
            <input class="submit-entrar" type="submit" value="CRIAR GRUPO">

        </form>
    </div>
    <div class="register-section__item">
        <img class="coruja-selection" src="{!! asset('img/coruja-checkbox.svg')!!}" />
    </div>
</section>
@endsection
@extends('layouts.base')
@include('vendor.bootstrap')
@section('title',"Sinapse Grupo de Estudos")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/base.min.css') }}">
@endsection
@section('content')
@include('layouts.navbar')

<main>
    <section class="register-section">
        <div class="register-section__item">
            <h1 class="welcome-info">Enviado codigo de seguraça no e-mail informado</h1><br>
            <div class="social-login">
                <a href="" class="submit-g">Reenviar e-mail</a>
            </div>
            <form action="home.html">

                <div class="input-field">
                    <input type="text" id="codigo" name="codigo" required="required">
                    <label for="email">Código de Seguraça</label>
                    <div class="icones">
                        <img src="{{  asset('img/bx-check-shield.svg') }}">
                    </div>
                </div>
                <div class="input-field">
                    <input type="password" class="novasenha" id="novasenha" name="novasenha" required="required">
                    <label for="senha">Nova Senha</label>
                    <div class="mostrarsenha" onclick="mostrarSenha1()"><img src="{{ asset('img/bxs-show.svg') }}" alt="Mostrar senha"></div>
                    <div class="icones">
                        <img src="{{  asset('img/key.svg') }}">
                    </div>
                </div>
                <div class="input-field">
                    <input type="password" class="confirmarsenha" id="confirmarsenha" name="confirmarsenha" required="required">
                    <label for="senha">Confirmar Senha</label>
                    <div class="mostrarsenha" onclick="mostrarSenha2()"><img src="{{ asset('img/bxs-show.svg') }}" alt="Mostrar senha"></div>
                    <div class="icones">
                        <img src="{{  asset('img/key.svg') }}">
                    </div>
                </div>
                <input class="submit-entrar " type="submit" value="CONFIRMAR">
            </form>
        </div>
        <div class="register-section__item">
            <img class="coruja" src="{{  asset('img/coruja-prof.png') }}">
        </div>
    </section>
</main>
@endsection
@section('scripts')
<script src="{{asset('js/mostrarsenha.js') }}"></script>
@endsection
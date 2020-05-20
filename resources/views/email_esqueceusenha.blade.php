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
            <h1 class="welcome-info">Informe o e-mail para redefinir a senha</h1><br>
            <div class="input-field">
                <input type="text" id="email" name="email" required="required">
                <label for="email">E-mail</label>
                <div class="icones">
                    <img src="{{  asset('img/mail-send.svg') }}">
                </div>
            </div>
            <br>
            <div class="bt">
                <a href="esqueceusenha.html" class="button-proximo">PRÓXIMO </a>
            </div>
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
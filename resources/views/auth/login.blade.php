@extends('layouts.base')
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
         <h1 class="welcome-info">Seja bem-vindo de volta ao SINAPSE!</h1>
         <h2 class="welcome-sub-info">Faça seu login usando o endereço de e-mail e senha abaixo:</h2>
         <hr>
         <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="input-field">
               <input type="text" id="email" name="email" required="required" class="@error('email') is-invalid @enderror">
               <label for="email">E-mail</label>
               <div class="icones">
                  <img src="{{asset('img/mail-send.svg')}}">
               </div>
            </div>
            <div class="input-field">
               <input type="password" class="senha" id="senha" name="password" required="required">
               <label for="senha">Senha</label>
               <div class="mostrarsenha" onclick="mostrarSenha()"><img src="{{ asset('img/bxs-show.svg') }}" alt="Mostrar senha"></div>
               <div class="icones">
                  <img src="{{asset('img/key.svg')}}">
               </div>
            </div>
            @error('email')
            <span class="alert alert-danger d-block" role="alert">
               {{ $message }}
            </span>
            @enderror
            <br>
            {{-- <div class="custom-control custom-switch">
               <input type="checkbox" name="remember" class="custom-control-input" id="lembrar">
               <label class="custom-control-label" for="lembrar">Lembre de mim</label>
            </div> --}}
               <div class="loginlink">
               <a href="{{ route('password.request') }}" class="negrito link loginlink">Esqueceu senha?</a>
               <a href="{{ route('register') }}" class="negrito link">Cadastre-se</a>
               </div>
            <input class="submit-entrar " type="submit" value="Entrar">
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
</div>
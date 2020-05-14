@extends('layouts.base')


@section('title', 'Criar Grupos')


@section('css')
    <link rel="stylesheet" href="{{asset('css/criar_grupo.min.css')}}">
@endsection

@section('content')
@include('layouts.navbar')
<section class="register-section">
    <div class="register-section__item">
        <h1 class="welcome-info">Crie grupos para se conectar com pessoas de mesmo interesse!</h1>
        <form action="home.html">
            <div class="input-field">
                <input type="text" id="email" name="email" required="required">
                <label for="email">Nome do grupo</label>
            </div>
            <div class="icones">
                <img src="{!! asset('img/bxs-group.svg')!!}" />
            </div>
            <br>
            <h2 class="welcome-sub-info"> Agora selecione se deseja criar um grupo público ou privado</h2>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="grupo" id="grupopublico" value="grupopublico" checked>
                <label class="form-check-label" for="grupopublico">
                    <span class="cor_titulogrupo">Grupo público</span> - permite que somente pessoas que qualquer pessoa que tenha o mesmo interesse que você adentre no seu grupo.
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="grupo" id="grupoprivado" value="grupoprivado">
                <label class="form-check-label" for="grupoprivado">
                    <span class="cor_titulogrupo">Grupo privado</span> - permite que somente pessoas que você adicionar tenha acesso ao seu grupo. Qualquer pessoa que queira adentrar no seu grupo terá que solicitar permissão.
                </label>
            </div>
            <br>
            <div class="bt">
                <a href="criargrupo1.html" class="button-proximo">PRÓXIMO </a>

            </div>

        </form>
    </div>
    <div class="register-section__item">
        <img class="grupodeestudos" src="{!! asset('img/coruja-checkbox.svg')!!}" />
    </div>
    </div>
</section>
@endsection
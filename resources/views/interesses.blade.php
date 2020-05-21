@extends('layouts.base')


@section('title', 'Interesses')

@section('css')

<link rel="stylesheet" href="{{asset('css/interesses.min.css')}}">

@endsection


@section('content')

@include('layouts.navbar')



@forelse($ListarInteresses as $interesse)

<div>
    <p> Interesse: {{$interesse->assunto}} </p>
    <p> Nível conhecimento: {{$interesse->pivot->nivel_conhecimento}} </p>
    <p> Categoria: {{$interesse->categorias->first()->nome}} </p>
    <br>
</div>

@empty
<p>Você não possui interesses</p>
@endforelse

{{-- <main id="interesses">
        <div class="container d-flex d-wrap d-row">
            <section class="register-section--flex ">
                <div class="register-section__item--flex" >
                    <h1 class="welcome-info--flex">Cadastre seu interesse e respectiva categoria</h1>
                    <form>
                        <div class="form-group">
                            <label for="categoria" class="titleform-section">Categoria</label>
                            <select class="form-control" id="categoria">
                            <option disabled selected>Selecione</option>
                            <option value="matematica">Matematica</option>
                        </select>
                        </div>

                        <div class="input-field">
                            <input type="text" id="assunto" name="assunto" required="required">
                            <label for="assunto">Assunto </label>
                            <div class="icones">
                            <img src="imagens/icones/bxs-book-open.svg">
                        </div>
                        </div>
    

                        <br>

                        <div class="form-group">
                            <label for="nivel" class="titleform-section">Nível de Conhecimento</label>
                            <select class="form-control" id="nivel">
                                <option disabled selected>Selecione</option>
                                <option value="0">Básico</option>
                                <option value="1">Básico a Intermediário</option>
                                <option value="2">Intermediário a Avançado</option>
                                <option value="3">Especialista</option>
                            </select>
                        </div>

                        <div class="progress">
                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;">25%</div>

                        </div>

                        <br>

                        <label for="descricao" class="titleform-section">Descrição</label><br>

                        <textarea name="descricao"></textarea>

                        <a href="criargrupo.html"><input class="submit-entrar" type="submit" value="CONFIRMAR"></a>

                    </form>
                </div>


                    <!--  imagem comentada-->
                    <!-- deixar responsiva -->

                    <!--<div class="image-section__item--flex ">
                        <img class="coruja-livro" src="{{  asset('img/coruja-livro.svg') }}" >
</div>-->


</section>
</div>
</main> --}}

@endsection
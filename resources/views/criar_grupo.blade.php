@extends('layouts.base')
@include('vendor.bootstrap')

@section('title', 'Criar Grupos')

@section('bootstrap_css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
@endsection

@section('css')

<link rel="stylesheet" href="{{asset('css/criar_grupo.min.css')}}">

@endsection

@section('content')
@include('layouts.navbar')
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<main>
    <a href="#" data-toggle="modal" data-target="#grupoModal">Criar Grupo </a>
    <div>
        <!-- The Modal -->
        <div class="modal" id="grupoModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <h1 class="welcome-info">Crie o seu grupo!</h1>
                        <div class="form-group">
                            <h2 class="welcome-sub-info">Preencha o campo a seguir</h2>
                            <div class="input-field">
                                <input type="text" class="nome" id="nome" name="nome" required="required">
                                <label for="nome">Nome do grupo</label>
                                <div class="icones">
                                    <img src="{{  asset('img/bxs-group.svg') }}">
                                </div>
                            </div>
                            <div class=" ">
                                <label for="categoria">Categoria</label>
                                <select class="form-control" id="categoria">
                                    <option disabled selected>Selecione</option>
                                    <option value="matematica">Matematica</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <input type="text" id="assunto" name="assunto" required="required">
                                <label for="assunto">Assunto </label>
                                <div class="icones">
                                    <img src="{{  asset('img/bxs-book-open.svg') }}">
                                </div>
                            </div>
                            <div class="">
                            <label for="nivel">Nível de Conhecimento</label>
                            <select class="form-control" id="nivel">
                                <option disabled selected>Selecione</option>
                                <option value="0">Básico</option>
                                <option value="1">Básico a Intermediário</option>
                                <option value="2">Intermediário a Avançado</option>
                                <option value="3">Especialista</option>
                            </select>
                            </div>
                        </div>
                        <input class="submit-entrar" type="submit" value="PROXIMO">
                    </div>
                    <div>
                        <img src="{{  asset('img/coruja-asas.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

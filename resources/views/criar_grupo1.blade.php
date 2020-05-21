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
                    <div class="form-group">
                        <div class="fundo-perfil text-center">
                            <h2 class="welcome-sub-info">Nome do grupo</h2>
                            <div class="image-circle">
                                <img src="{!! asset('img/coruja-perfil.svg')!!}" alt="usuario" id="imagemusuario">
                            </div>
                                <label for="fupload" class="control-label label-bordered"><img src="{!! asset('img/pencil-regular-36.png')!!}" id="trocarfoto"></label>
                                <input type="file" accept="image/*" id="fupload" name="fupload" class="upload fupload form-control" />
                            </div>
                            <div class="input-field">
                                <input type="text" class="nome" id="nome" name="nome" required="required">
                                <label for="nome">Descrição do grupo</label>
                                <div class="icones">
                                    <img src="{{  asset('img/bxs-group.svg') }}">
                                </div>
                            </div>
                            <label for="estado">Estados</label>
                            <select class="form-control" id="estado" >
                                <option disabled selected>Selecione</option>
                            </select>
                            <label for="cidade">Cidades</label>
                            <select class="form-control" id="cidade" name="city" >
                                <option disabled selected>Selecione o estado primeiro</option>
                            </select>
                        </div>
                        <input class="submit-entrar" type="submit" value="CRIAR">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection
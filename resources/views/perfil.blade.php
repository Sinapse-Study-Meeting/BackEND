@extends('layouts.base')
@include('vendor.bootstrap')
@section('title',"Sinapse Grupo de Estudos")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('bootstrap_css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/perfil.min.css') }}">
@endsection
@section('content')
@include('layouts.navbar')

@if(session('status'))
<p>{{session('status')}}</p>
@endif

@foreach($ListarInteresses as $interesse)

<form action="{{url("/perfil/interesses/$interesse->id/editar")}}" method="post">
    @csrf
    Interesse: <input type="text" value="{{$interesse->assunto}}" name="interesse"> <br>
    Nível conhecimento: <input name="nivel" type="text" value="{{$interesse->nivel_conhecimento}}"> <br>
    Categoria: <input type="text" value="{{$interesse->categorias->first()->nome}}" name="categoria"> <br>

    <input type="submit"><br>

    <br>
</form>

<form action="{{url("/perfil/interesses/$interesse->id/apagar")}}" method="POST">
    @csrf
    <button type="submit">EXCLUIR</button>
</form>
@endforeach

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<main>
    <div class="container d-flex flex-row justify-content-around flex-wrap">
        <div class="information">
            <div class="fundo-perfil text-center">
                <div class="image-circle">
                    <img src="{!! asset('img/coruja-perfil.svg')!!}" alt="usuario" id="imagemusuario">
                </div>
                <div class="form-group">
                    <label for="fupload" class="control-label label-bordered"><img src="{!! asset('img/pencil-regular-36.png')!!}" id="trocarfoto"></label>
                    <input type="file" accept="image/*" id="fupload" name="fupload" class="upload fupload form-control" />
                </div>
                <h5>Nome do Usuario</h5><br>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="perfil.html"><i class='bx bxs-user-rectangle left-button-icon user-options-icon'></i>Perfil</a>
                </li>
                
                <li class="list-group-item">
                    <a href="perfilgruposcriado.html"><i class='fas fa-users left-button-icon user-options-icon'></i>Grupos</a>
                </li>
                <li class="list-group-item">
                    <a href="#" data-toggle="modal" data-target="#myModal"><i class='bx bxs-key left-button-icon user-options-icon'></i>Redefinir Senha </a>
                </li>
            </ul>

        </div>
        <div class="dados-pessoais-perfil">
            <form class="form-perfil">
                <h1 class="welcome-info">Cadastre seu interesse abaixo!</h1>
                <div class="form-group">
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
                        <img src="{!! asset('img/bxs-book-open.svg')!!}">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="nivel">Nível de Conhecimento</label>
                    <select class="form-control" id="nivel">
                        <option disabled selected>Selecione</option>
                        <option value="0">Básico</option>
                        <option value="1">Básico a Intermediário</option>
                        <option value="2">Intermediário a Avançado</option>
                        <option value="3">Especialista</option>


                    </select>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <br>


                <a href="criargrupo.html"><input class="submit-entrar" type="submit" value="CONFIRMAR"></a>

            </form>
        </div>

        <div>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Redefinir Senha</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="input-field">
                                <input type="password" class="senha" id="senha" name="senha" required="required">
                                <label for="senha">Senha</label>
                                <div class="mostrarsenha" onclick="mostrarSenha()"><img src="{{ asset('img/bxs-show.svg') }}" alt="Mostrar senha"></div>
                                <div class="icones">
                                    <img src="{{  asset('img/key.svg') }}">
                                </div>
                            </div>
                            <div class="input-field">
                                <input type="password" id="novasenha" name="novasenha" required="required">
                                <label for="novasenha">Nova Senha </label>
                                <div class="mostrarsenha" onclick="mostrarSenha1()"><img src="{{ asset('img/bxs-show.svg') }}" alt="Mostrar senha"></div>
                                <div class="icones">
                                    <img src="{{  asset('img/key.svg') }}">
                                </div>
                            </div>
                            <div class="input-field">
                                <input type="password" id="confirmarsenha" name="confirmarsenha" required="required">
                                <label for="confirmarsenha">Confirmar Senha </label>
                                <div class="mostrarsenha" onclick="mostrarSenha2()"><img src="{{ asset('img/bxs-show.svg') }}" alt="Mostrar senha"></div>
                                <div class="icones">
                                    <img src="{{  asset('img/key.svg') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
@section('scripts')
<script src="{{asset('js/navbar.js') }}"></script>
<script src="{{asset('js/mostrarsenha.js') }}"></script>
<script src="{{asset('js/trocarfoto.js') }}"></script>
@endsection

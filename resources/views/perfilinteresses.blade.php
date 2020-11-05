@extends('layouts.base')
@section('title', 'Sinapse Grupo de Estudos')
@section('metas')
    <meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
    <meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/perfil.min.css') }}">
@endsection
@section('content')
    @include('layouts.navbar')

    <div class="container">
        <main class="perfil-layout">
            <aside class="perfil-layout__aside">
                <div class="user-information">
                    <div class="image-circle">
                        <img src="{{ asset('img/coruja-perfil.svg') }}" alt="usuario" id="imagemusuario">
                    </div>
                    <div class="form-group">
                        <label for="fupload" class="control-label label-bordered"><img
                                src="{!!  asset('img/camera-solid-180.png') !!}" id="trocarfoto"></label>
                        <input type="file" accept="image/*" id="fupload" name="fupload"
                            class="upload fupload form-control" />
                    </div>
                    <h5>Nome do Usuario</h5>
                </div>
                <div class="data-list-edit">
                    <ul class="data-list-edit__data">
                        <li>Email@gmail.com</li>
                        <li>Cidade </li>
                        <li>Estado</li>
                    </ul>
                    <div class="data-list-edit__btn-edit">
                        <a href="perfileditar.html"><img src="{!!  asset('img/pencil-regular-36.png') !!}"
                                class="botaowhite"></a>
                    </div>
                </div>
                <a href="#" class="rpassaword" data-toggle="modal" data-target="#myModal">
                    <i class='bx bxs-key left-button-icon'></i> Redefinir Senha 
                </a>
            </aside>

            <section class="interesses-cadastrados">
                <a href="#" class="btn--primary toggle buttonadicionar"
                    data-target="interesseModal">Adicionar</a>
                <h2>Meus interesses</h2>
                <div class="todosinteresses">
                    @forelse($ListarInteresses as $interesse)
                        <div class="editar">
                            <form action="{{ url("/perfil/interesses/$interesse->id/apagar") }}" method="POST">
                                @csrf
                                <button type="submit" class="button-excluir"><img
                                        src="{!!  asset('img/trash-solid-180.png') !!} " class="botaowhite"></button>
                            </form>
                            <a href="perfilInteresses.html"><img src="{{ asset('img/pencil-regular-36.png') }}"
                                    class="botaowhite"></a>
                            <h3> {{ $interesse->assunto }}</h3>
                            <p>Categoria: {{ $interesse->categorias->first()->nome }} </p>
                            <p>Nivel de Conhecimento: {{ $interesse->nivel_conhecimento }}</p>
                        </div>
                    </div>
                @empty
                    <p class="alert">Você não tem interesse!
                    <p>
                    @endforelse
            </section>
        </main>
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
                            <div class="mostrarsenha" onclick="mostrarSenha()"><img src="{{ asset('img/bxs-show.svg') }}"
                                    alt="Mostrar senha"></div>
                            <div class="icones">
                                <img src="{{ asset('img/key.svg') }}">
                            </div>
                        </div>
                        <div class="input-field">
                            <input type="password" id="novasenha" name="novasenha" required="required">
                            <label for="novasenha">Nova Senha </label>
                            <div class="mostrarsenha" onclick="mostrarSenha1()"><img src="{{ asset('img/bxs-show.svg') }}"
                                    alt="Mostrar senha"></div>
                            <div class="icones">
                                <img src="{{ asset('img/key.svg') }}">
                            </div>
                        </div>
                        <div class="input-field">
                            <input type="password" id="confirmarsenha" name="confirmarsenha" required="required">
                            <label for="confirmarsenha">Confirmar Senha </label>
                            <div class="mostrarsenha" onclick="mostrarSenha2()"><img src="{{ asset('img/bxs-show.svg') }}"
                                    alt="Mostrar senha"></div>
                            <div class="icones">
                                <img src="{{ asset('img/key.svg') }}">
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn--primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modalinteresse')

    @section('scripts')
        <script src="{{ asset('js/toggle.js') }}"></script>
        <script src="{{ asset('js/mostrarsenha.js') }}"></script>
    @endsection

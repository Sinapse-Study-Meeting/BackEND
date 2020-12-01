@extends('layouts.base')
@section('title',"Sinapse Grupo de Estudos")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/grupos_perfil.min.css') }}">
@endsection
@section('content')
@include('layouts.navbar')

<main class="l-content-aside main-grupo">
    <aside class="l-content-aside__perquisargrupo">
        <div class="lateral-grupo">
            <div class="input-pesquisar-grupos">
                <div class="input-field">
                    <input type="text" placeholder="Pesquisar grupos">
                    <div class="icones">
                        <img src="{{asset('img/bx-search-alt.svg')}}">
                     </div>
                </div>
            </div>
            <hr>
            <h1 class="d-flex justify-content-start h3-size hclaro">Seus grupos</h1>
            @forelse($grupos as $grupo)
           <div class="d-flex justify-content-between">
                <div class="group-wrapper">
                    <div class="group-content">
                        <img src="{{ asset('img/estudos.png')}}" class="image-grupo">
                    <h3 class="hazul "><a href="{{url("/meus-grupos/$grupo->id")}}">{{$grupo->nome}}</a></h3>
                </div>

                <div class="organizar-button">
                <form action="{{url("/grupo/$grupo->id/apagar")}}" method="post">
                        @csrf
                      <button type="submit"><img src="{!! asset('img/trash-solid-180.png')!!} " class="botaowhite"></button>
                    </form>
                    <a data-target="EditagrupoModal" data-id="{{$grupo->id}}" class="toggle clickEditar"><img src="{!! asset('img/pencil-regular-36.png')!!}" class="botaowhite"></a>
                </div>
            </div>
        </div>
            <hr>
           
            @empty
                <div class="notgrupo">
                    <div class="justify-content-center">
                        <img src="{{ asset('img/coruja-triste.svg')}}" class="img-notgrupo">
                    </div>
                    <h3 class="hclaro h3-size ml-2 ">Você não participa de nenhum grupo de estudos</h3>
                    <div class="group-profile-buttons">
                        <h3 class="hazul">Você pode tentar:</h3>
                        <button type="submit" class="buttons"><i class="fas fa-plus"></i>Criar um grupo </button>
                        <button type="submit" class="buttons"><i class="fas fa-search"></i>Encontrar um grupo </button>
                    </div>
                </div>
            @endforelse

        </div>
    </aside>
    <article class="conteudo-grupo l-content-aside__main">
        <div class="cabecalhoperfil">
            <h1 class="h1-size hclaro">Informação do grupo</h1>
            <div class="nomegrupo">
                <img src="{{ asset('img/estudos.png')}}" class="perfil-gropoimg">
                <h4 class=" hazul align-self-center"> {{$grupoAtivo->nome}} </h4>
                <div class="group-wrapper">
                    <div class="convidar">
                        <a href="#" class="btn--primary toggle "
                        data-target="convidarGrupo">Convidar +</a>
                    </div>
                </div>
            </div>

            <hr>
            <div class="menu-grupos">
                <a href="">Sobre</a>
                <a href="">Postagens</a>
                <a href="">Arquivos</a>
                <a href="">Midia</a>

            </div>
        </div>
            <div class="perfilesquerdo">
            <div class="pensando-grupo">
                <div class="input-pesquisar-grupos pesquisar-grupos">
                    <div class="input-field">
                        <img src="{{ asset('img/coruja-perfil.svg')}}" class="pessoas-grupos">
                        <input type="text" placeholder="No que você está pensando? ">
                    </div>
                    <div class="">
                        <a href=""><i class="fas fa-images "></i><span>Foto/video</span></a>
                        <a href=""><i class="fas fa-user-check "></i><span>Marcar </span></a>
                    </div>
                </div>

                <div class="box-aside">
                    <div class="hclaro"><img src="{{ asset('img/news-claro-24.png')}}" alt="">Post</div>
                    <div class="box-post"><img src="{{ asset('img/bx-image.svg')}}">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="box-post"><img src="{{ asset('img/bx-image.svg')}}">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="perfildireito">
            <div class="sobre-grupo">
                <div class="informacao-grupo">
                    <h3 class=" hazul">Sobre o grupo</h3>

                    <!-- <div class="texto-sobre-grupos">
                        <span><i class="fas fa-lock"></i> Privado</span> <br>
                        <p>Somente membros do grupo podem ver as postagens do grupo e visualizar os participantes</p>
                        <span><i class="fas fa-eye-slash"></i> Oculto </span> <br>
                        <p>Somente membros do grupo podem encontrar o grupo na barra de pesquisa</p>
                    </div> -->

                    <div class="texto-sobre-grupos">
                        <p>Descrição do grupo - {{$grupoAtivo->descricao}}.</p>
                    </div>

                </div>

                <div class="membros">
                    <h3 class="hazul">Membros - 43 pessoas</h3>
                    <div class="d-flex justify-content-start icones-membros-grupos">
                        <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
                        <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
                        <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
                        <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
                    </div>
                    <p class="descricao-membros">Thaís, Janaína e outras 2 pessoas são membros. (Aqui mostra somente os seus amigos que estão nesse grupo)</p>

                    <div class="d-flex justify-content-start icones-membros-grupos">
                        <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
                        <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
                        <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
                        <img src="{{ asset('img/coruja-perfil.svg')}}" class="membros-grupos">
                    </div>
                    <p class="descricao-membros">Thaís e Janaína são administradores. João e Safira são moderadores.</p>
                    <div class="group-profile-buttons d-flex justify-content-center">
                        <button type="submit" class="buttons"><i class="fas fa-search"></i>Visualizar tudo </button>
                    </div>
                </div>
            </div>

    </article>
</main>

<div class="toggle-target__modal modal toggle-close-when-out" id="EditagrupoModal">
    <span class='bx bx-x modal-close toggle' data-target="EditargrupoModal"></span>
    <form action="" method="post" id="editar-grupo-form">
        @csrf
        <div class="form-group">
            <label for="editar-nome">Nome do grupo</label>
            <input class="form-field" id="editar-nome" type="text" name="nome">
            @error('nome')
            <p class="">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="editar-interesse">Áreas de estudo do grupo </label>
            <input class="form-field" id="editar-interesse" name="areas_estudo">
            <span class="field-helper">Separe as áreas por vírgula</span>
            @error('interesse')
            <span class="form-group__error">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="editar-descricao">Crie uma descrição marcante para seu grupo</label>
            <textarea name="descricao" class="form-field" id="editar-descricao"></textarea>
            @error('descricao')
            <span class="form-group__error">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn--primary"> Enviar </button>
    </form>
</div>
@include('modalConvidarGrupo')
    @section('scripts')
        <script src="{{asset('js/toggle.js')}}"></script>
        <script src="{{asset('js/grupo.js')}}"></script>
    @endsection
   
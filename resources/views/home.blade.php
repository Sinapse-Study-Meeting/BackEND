@extends('layouts.base')

@section('title',"Sinapse - Home")
@section('metas')
   <meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
   <meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/home.min.css')}}">
@endsection

@section('content')
    @include("layouts.navbar")

    <section class="search-bar">
        <div class="container">
            <a role="button" class="search-bar__trigger">
                <i class='bx bx-search search-bar-icon'></i>
            </a>
            <form action="#" class="search-bar__form">
                <label for="search" class="search-bar__label">Busque por usuários ou grupos</label>
                <input type="search" placeholder="Digite aqui sua busca">
                <button type="submit">buscar</button>
            </form>
        </div>
    </section>

@if(!$teminteresses)
<br>
<br>
    <form action="{{route('criarinteresse')}}" method="post">
        @csrf

        Informe seu interesse:
        <input list="interesse" name="interesse">
         @error('interesse')
        <p>{{$message}}</p>
        @enderror

        <datalist id="interesse">

            @foreach ($interesses as $item)
                <option value="{{$item->assunto}}">{{$item->assunto}}</option>
            @endforeach


        </datalist>

        Informe a categoria:
        <select name="categoria">
            <option disabled selected></option>
            @foreach ($categorias as $item)
                <option value="{{$item->nome}}">{{$item->nome}}</option>
            @endforeach
        </select>

        @error('categoria')
        <p>{{$message}}</p>
        @enderror





        Nível
        <select name="nivel">
            <option disabled selected></option>
            <option value="basico">Básico</option>
            <option value="intermediario">Intermediário</option>
            <option value="avancado">Avançado</option>
        </select>
        @error('nivel')
        <p>{{$message}}</p>
        @enderror

        <button type="submit"> Enviar </button>

    </form>

    @endif

    @section('scripts')
        <script src="{{asset('js/search-bar.js')}}"></script>
    @endsection
@endsection

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


    <form action="">

        Informe seu interesse:
        <input list="interesse">

        Informe a categoria:
        <input list="categoria">

       <datalist id="categoria">

        @foreach ($categorias as $item)
             <option value="{{$item->nome}}">{{$item->nome}}</option>
        @endforeach


       </datalist>

    </form>

    @endif

    @section('scripts')
        <script src="{{asset('js/search-bar.js')}}"></script>
    @endsection
@endsection

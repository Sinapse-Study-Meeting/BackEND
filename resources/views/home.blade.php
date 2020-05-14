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
    @include("layouts.search-bar")
    <main class="container l-content-aside">
        <article class="l-content-aside__main">
        @if(!$teminteresses)
        <section class="interesses">
            <form class="home-adicionar-interesse" action="{{route('criarinteresse')}}" method="post">
                @csrf
                <div class="home-adicionar-interesse__fields">
                    <div class="form-group home-interesse-form-group">
                        <label for="interesse-field">No que você tem interesse em estudar?</label>
                        <input class="form-field" id="interesse-field" list="interesse" name="interesse">
                        @error('interesse')
                        <p class="">{{$message}}</p>
                        @enderror
                        <datalist id="interesse">
                            @foreach ($interesses as $item)
                                <option>{{$item->assunto}}</option>
                            @endforeach
                        </datalist>
                    </div>
                    <div class="form-group home-interesse-form-group">
                        <label for="categoria_field">Área de interesse</label>
                        <input class="form-field" id="categoria_field" list="categoria" name="categoria">
                        @error('categoria')
                            <span class="form-group__error">{{$message}}</span>
                        @enderror
                        <datalist id="categoria">
                            @foreach ($categorias as $item)
                                <option>{{$item->nome}}</option>
                            @endforeach
                        </datalist>
                    </div>
                    <div class="form-group home-interesse-form-group">
                        <label for="nivel">O que você sabe a respeito disso?</label>
                        <select class="form-field" name="nivel" id="nivel" class="">
                            <option disabled selected></option>
                            <option value="basico">Básico</option>
                            <option value="intermediario">Intermediário</option>
                            <option value="avancado">Avançado</option>
                        </select>
                        @error('nivel')
                            <span class="form-group__error">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn--primary"> Enviar </button>
            </form>
        </section>
        @endif
        </article>
        <aside class="l-content-aside__aside">
            aside
        </aside>
    </main>
    @section('scripts')
        <script src="{{asset('js/search-bar.js')}}"></script>
    @endsection
@endsection

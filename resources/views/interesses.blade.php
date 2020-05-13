@extends('layouts.base')


@section('title', 'Criar Grupos')


@section('css')

<link rel="stylesheet" href="{{asset('css/criar_grupo.min.css')}}">

@endsection

@section('content')
    @include('layouts.navbar')

    @include('layouts.card')

@endsection
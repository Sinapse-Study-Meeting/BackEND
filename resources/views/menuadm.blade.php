@extends('layouts.base')
@section('title',"Sinapse - Home")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/menuadm.min.css')}}">
@endsection
@section('content')
@include("layouts.navbar")
    <div id="menu">
        <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Usuarios e Grupos</a></li>
        <li><a href="#">Denuncias</a></li>
        <li><a href="#">link4</a></li>
        <li><a href="#">link5</a></li>
    </ul>
  </div>
@endsection
@section('scripts')
<script src="{{asset('js/navbar.js') }}"></script>
<script src="{{asset('js/mostrarsenha.js') }}"></script>
<script src="{{asset('js/trocarfoto.js') }}"></script>
@endsection
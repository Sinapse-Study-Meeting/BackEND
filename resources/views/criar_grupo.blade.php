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
        
    </div>
</main>
@endsection

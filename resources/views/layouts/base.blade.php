<!DOCTYPE html>
<html lang="pt-br">

<head>

   <title>@yield('title')</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="">

   <meta charset="utf-8">
   @yield('metas')
 
   <link rel="shortcut icon" href="f{{asset('img/favicon.svg')}}" type="image/x-icon">

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/base.min.css') }}">

</head>

<body>
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @yield('scripts')
</body>
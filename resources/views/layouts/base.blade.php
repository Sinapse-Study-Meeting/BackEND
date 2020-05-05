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
   <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

   @yield('bootstrap_css')

   @yield('css')
</head>

<body>
    @yield('content')

    @yield('bootstrap_js')

   <script src="{{asset('js/navbar.js') }}"></script>
    @yield('scripts')
</body>
</html>
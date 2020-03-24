<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>SINAPSE - Grupo de estudos</title>
    <link rel="stylesheet" href="{{asset('css/base.min.css')}}">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
    <meta name="keywords" content="Sinapse, estudar, grupos">
    <!-- FavIcon -->
    <link rel="icon" href="{{asset('img/favicon.svg')}}">

</head>

<body>
    @include('layouts.navbar')
    <main>
        <section class="register-section">
            <div class="register-section__item">
            <form method="POST" action="{{ route('password.update')}}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-field">
                        <input type="text" id="email" name="email" value="{{ $email ?? old('email') }}" required="required">
                        <label for="email">Email</label>
                        <br>
                        @error('email')
                            <span class="invalid-feedback" role="alert" style="display: block;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <input type="password" class="novasenha" id="novasenha" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <label for="novasenha">Nova Senha</label>
                        <div class="mostrarsenha" onclick="mostrarSenha1()"><img src="{{asset('img/bxs-show.svg')}}" alt="Mostrar senha"></div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="password" id="confirmarsenha" class="confirmarsenha" name="password_confirmation" required autocomplete="new-password">
                        <label for="confirmarsenha">Confirmar Senha</label>
                        <div class="mostrarsenha" onclick="mostrarSenha2()"><img src="{{asset('img/bxs-show.svg')}}" alt="Mostrar senha"></div>
                    </div>
                    <input class="submit-entrar " type="submit" value="CONFIRMAR">
                </form>
            </div>
            <div class="register-section__item">
                <img class="coruja" src="{{asset('img/coruja-prof.png')}}">
            </div>
        </section>
    </main>
      <script src="{{asset('js/navbar.js') }}"></script>
      <script src="{{asset('js/mostrarsenha.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>

   <title>SINAPSE - Grupo de estudos</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="">

   <meta charset="utf-8">
   <meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
   <meta name="keywords" content="Sinapse, estudar, grupos">
   <!-- FavIcon -->
   <link rel="icon" href="{{asset('img/favicon.svg')}}">

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

   <link rel="stylesheet" href="{{ asset('css/base.min.css') }}">

</head>

<body>
   @include('layouts.navbar')

   <main>
      <section class="register-section">
         <div class="register-section__item">
            <h1 class="welcome-info">Seja bem-vindo de volta ao SINAPSE!</h1>
            <h2 class="welcome-sub-info"> Entre com:</h2>
            <div class="social-login">
            <a href="" class="submit-f">Facebook</a><a href="" class="submit-g">Google</a>
         </div>
            <hr>
            <h3 class="welcome-sub-info">Ou faça seu login usando o endereço de email e senha abaixo:</h3>
      <form action="{{ route('login') }}" method="POST">
         @csrf

               <div class="input-field">
                  <input type="text" id="email" name="email" required="required" class="@error('email') is-invalid @enderror">
                  <label for="email">Email</label>
                  @error('email')
                     <span class="invalid-feedback" role="alert" style="display: block;">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                  <br>
               </div>

               {{-- <div class="input-field">
                  <input type="password" id="senha" name="password" class="@error('password') is-invalid @enderror" required="required">
                  <label for="senha">Senha</label>
                  @error('password')
                     <span class="invalid-feedback" role="alert" style="display: block;">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror

                    <a href="{{ route('password.request') }}" name="" id="">Esqueci a senha</a>

               </div>
               <br>
               <div class="form-group row">
                  <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              Lembre de mim
                          </label>
                      </div>
                  </div>
              </div>
             <input class="submit-entrar" type="submit" value="ENTRAR">

            </form>
         </div> --}}

         <div class="input-field">
            <input type="password" class="senha" id="senha" name="password" required="required">
            <label for="senha">Senha</label>
         <div class="mostrarsenha" onclick="mostrarSenha()"><img src="{{ asset('img/bxs-show.svg') }}" alt="Mostrar senha"></div>
            @error('password')
            <span class="invalid-feedback" role="alert" style="display: block;">
               <strong>{{ $message }}</strong>
            </span>
         @enderror

        </div>
        <input type="checkbox" id="lembredemim" name="remember">
        <label for="checkbox"> Lembre-se de mim </label>
        <input class="submit-entrar " type="submit" value="ENTRAR">

        <div class="top">
            <a href="{{ route('password.request') }}" class="negrito link right">Esqueceu senha?</a>
        <a href="{{ route('register') }}" class="negrito link position-left">Cadastre-se</a>
        </div>
    </form>
</div>

         <div class="register-section__item">
            <img class="coruja" src="{{  asset('img/coruja-prof.png') }}">
         </div>
      </section>

   </main>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/navbar.js') }}"></script>
      <script src="{{asset('js/mostrarsenha.js') }}"></script>
</body>

</html>

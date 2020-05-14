@extends('layouts.base')
@include('vendor.bootstrap')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/base.min.css') }}">
@endsection
@section('content')
   @include('layouts.navbar')

   <main>
      <section class="register-section">
         <div class="register-section__item">
            <h2 class="welcome-sub-info">Faça seu cadastro abaixo:</h2>
            <hr>
            <form method="POST" action="{{ route('register') }}">
               @csrf
                <div class="input-field">
                    <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="name">Nome</label>
                    <div class="icones">
                        <img src="{{asset('img/bxs-user.svg')}}">
                     </div>
                    
                </div>
                @error('name')
                  <span class="invalid-feedback" role="alert" style="display: block;">
                        <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <div class="form-group mt-4">
                  <label for="estado">Estados</label>
                    <select class="form-control" id="estado" name="state" class="@error('state') is-invalid @enderror" required>
                      <option disabled selected>Selecione</option>

                    </select>
                  </div>
                  @error('state')
                    <span class="invalid-feedback" role="alert" style="display: block;">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <div class="form-group mt-4">
                    <label for="cidade">Cidades</label>
                      <select class="form-control" id="cidade"  name="city" class="@error('city') is-invalid @enderror" required>
                        <option disabled selected>Selecione o estado primeiro</option>

                      </select>
                    
                    </div>
                    @error('city')
                     <span class="invalid-feedback" role="alert" style="display: block;">
                           <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                <div class="input-field">
                    <input type="text" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" >
                    <label for="email">E-mail</label>
                    <div class="icones">
                     <img src="{{asset('img/mail-send.svg')}}">
                  </div>
                </div>
                @error('email')
                  <span class="invalid-feedback" role="alert" style="display: block;">
                        <strong>{{ $message }}</strong>
                  </span>
                  @enderror
            
                <div class="input-field">
                    <input type="password" id="senha" name="password" class="@error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="new-password">
                    <label for="senha">Senha</label>
                    <div class="mostrarsenha" onclick="mostrarSenha()"><img src="{{asset('img/bxs-show.svg')}}" alt="Mostrar senha"></div>
                    <div class="icones">
                     <img src="{{asset('img/key.svg')}}">
                  </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert" style="display: block;">
                      <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-field">
                  <input type="password" id="confirmarsenha" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" required autocomplete="new-password">
                  <label for="confirmarsenha">Confirmar senha</label>
                  <div class="mostrarsenha" onclick="mostrarSenha2()"><img src="{{asset('img/bxs-show.svg')}}" alt="Mostrar senha"></div>
                  <div class="icones">
                     <img src="{{asset('img/key.svg')}}">
                  </div>
              </div>
              @error('password_confirmation')
                  <span class="invalid-feedback" role="alert" style="display: block;">
                     <strong>{{ $message }}</strong>
                  </span>
               @enderror
               <div class="bt">
                  <a href="interesses.blade.php"><input type="submit" class="button-proximo" value="PRÓXIMO"></a>
               </div>
            </form>

         </div>
         <div class="register-section__item">
            <img class="estudos" src="{{  asset('img/estudos.png') }}">
         </div>
      </section>

   </main>

@endsection
@section('scripts')
    <script src="{{ asset('js/cidade_estado.js') }}"></script>
    <script src="{{asset('js/mostrarsenha.js') }}"></script>
@endsection
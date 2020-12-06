 <header class="navbar">
     <!-- ínicio header -->
     <a href="{{route('home')}}" class="logo">
         <h1 class="logo__replacement">Sinapse</h1>
     </a>
     <img src="{{asset('img/menu.svg')}}" class="navbar__trigger" alt="Menu" title="Menu">

     <nav class="navbar__menu">
         @auth
         <div class="dropdown-nav">
             <a role="button" class="dropdown-nav__trigger navbar__menu__item" data-target="notifications">
                 <i class='bx bxs-bell notification-bell notification-bell--active' aria-label="Sino de notificação"></i>
                 <span class="only-sm">Notificações</span>
             </a>
             <nav class="dropdown-nav__menu notifications-menu" id="notifications">
                 <a href="#" class="dropdown-nav__menu__item">
                     <i class='bx bxs-message-alt-error notification-warning'></i>
                     Programação PP marcou um encontro
                 </a>
                 <a href="#" class="dropdown-nav__menu__item">
                     <i class='bx bxs-message-alt-error notification-warning'></i>
                     Programação PP marcou um encontro
                 </a>
             </nav>
         </div>
         <a href="#" class="navbar__menu__item btn-primary toggle" data-target="grupoModal">
             <i class='bx bx-plus-circle left-button-icon'></i>
             Grupo
         </a>
         <x-modal id="grupoModal">
            <form action="{{route('criargrupo')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome-field">Nome do grupo</label>
                    <input class="form-field" id="nome-field" type="text" name="nome">
                    @error('nome')
                    <p class="">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="interesse_field">Áreas de estudo do grupo </label>
                    <input class="form-field" id="interesse_field" name="areas_estudo">
                    <span class="field-helper">Separe as áreas por vírgula</span>
                    @error('interesse')
                        <span class="form-group__error">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="descricao">Crie uma descrição marcante para seu grupo</label>
                    <textarea name="descricao" class="form-field" id="descricao"></textarea>
                    @error('descricao')
                        <span class="form-group__error">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn--primary"> Enviar </button>
            </form>
         </x-modal>
         <a href="{{url('/chat')}}" class="navbar__menu__item ">
             <i class='bx bxs-chat left-button-icon'></i>
             Chat
         </a>
         <div class="dropdown-nav">
             <a role="button" class="dropdown-nav__trigger navbar__menu__item" data-target="user-options">
                 <img src="{{asset('img/coruja-perfil.svg')}}" alt="Sua foto de perfil" class="profile-image-header left-button-icon">
                 {{Auth::user()->name}}
                 <i class='bx bx-chevron-down dropdown-icon'></i>
             </a>
             <nav class="dropdown-nav__menu" id="user-options">
                 <a href="#" class="dropdown-nav__menu__item dropdown-nav__trigger" data-target="sub_meu_perfil">
                     <i class='bx bxs-user-rectangle left-button-icon user-options-icon'></i>
                     Meu Perfil
                     <i class='bx bx-chevron-down dropdown-icon'></i>
                 </a>
                 <nav class="dropdown-nav__sub" id="sub_meu_perfil">
                     <a href="{{route('interesses')}}" class="dropdown-nav__sub__item">Meus Interesses</a>
                     <a href="#" class="dropdown-nav__sub__item">PREMIUM GRÁTIS</a>
                 </nav>
                 <a href="#" class="dropdown-nav__menu__item">
                     <i class='bx bxs-message-alt-error left-button-icon user-options-icon'></i>
                     Amigos
                 </a>
                 <a href="{{route('logout')}}" class="dropdown-nav__menu__item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                     <i class='bx bxs-exit left-button-icon user-options-icon'></i>
                     Sair
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>

                 @else
                 @if(!Route::is('register'))
                 <a href="{{route('register')}}" class="navbar__menu__item">
                     Cadastrar
                 </a>
                 @endif
                 @if(!Route::is('login'))
                 <a href="{{route('login')}}" class="navbar__menu__item ">
                     Login
                 </a>
                 @endif
                 @endauth
             </nav>
         </div>
     </nav>
 </header>